<?php
global $github_api, $repo_info;

$api_fork_per_page = 100;
$forks             = gh_input( 'FORK', 'README.md' );

if ( false !== $forks ) {
	$forks             = ( true === $forks ) ? 'README.md' : $forks;
	$fork_output_type  = gh_input( 'FORK_OUTPUT_TYPE', 'table' );
	$fork_output_style = gh_input( 'FORK_OUTPUT_STYLE', '' );
	$fork_show_count   = gh_input( 'FORK_COUNTS', 7 );
	$fork_description  = gh_input( 'FORK_DESCRIPTION', '' );
	$total_forks_count = ( isset( $repo_info->forks_count ) && ! empty( $repo_info->forks_count ) ) ? $repo_info->forks_count : '';

	if ( empty( $total_forks_count ) ) {
		$return = '<i>Nobody has forked this repository <b>yet</b>.</i>';
	} else {
		$return = array();
		$status = true;
		$page   = 1;

		gh_log_group_start( 'Latest Forked Users Info' );
		while ( $status ) {
			$new = fetch_recent_forks( $repo, $fork_show_count, $page++ );
			if ( empty( $new ) ) {
				$status = false;
				break;
			}
			foreach ( $new as $owner_info ) {
				$return[] = $owner_info;

				if ( count( $return ) == $fork_show_count ) {
					$status = false;
					break;
				}
			}

			if ( count( $return ) == $fork_show_count ) {
				$status = false;
				break;
			}

			if ( $page > $total_forks_count || $page === $total_forks_count ) {
				$status = false;
				break;
			}
		}
		gh_log( print_r( $return, true ) );
		gh_log_group_end();

		if ( false !== $fork_description ) {
			if ( empty( $fork_description ) ) {
				if ( $total_forks_count == $fork_show_count ) {
					$fork_description = '<i><b>' . $total_forks_count . '</b> people have forked this repository</i>';
				} elseif ( $fork_show_count < $total_forks_count ) {
					$fork_description = '<i><b>' . ( $total_forks_count - $fork_show_count ) . '</b> Others have forked this repository</i>';
				} else {
					$fork_description = '<i><b>' . $total_forks_count . '</b> have forked this repository</i>';
				}
			}
			$fork_description = str_replace( '[count]', $total_forks_count, $fork_description );
		}
	}

	gh_log( '' );
	gh_log( 'Output Config' );
	gh_log( '	-- File : ' . $forks );
	gh_log( '	-- Type : ' . $fork_output_type );
	gh_log( '	-- Style : ' . $fork_output_style );
	gh_log( '	-- Description : ' . $fork_description );
	gh_log( '' );


	$html = generate_output( 'forks', $fork_output_type, $return, $fork_output_style, $fork_description );
	$file = save_output( $html, $forks, 'REPOSITORY_FORKS' );

	gh_log( 'Output' );
	gh_log( $html );

	gh_commit( $file, '[Repository Roster] Updated :cyclone: Latest Forked Users' );
}