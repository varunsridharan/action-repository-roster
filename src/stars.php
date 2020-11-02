<?php
global $github_api, $repo_info;

$api_stars_per_page = 100;
$stars              = gh_input( 'STARS', 'README.md' );

if ( false !== $stars ) {
	$stars              = ( true === $stars ) ? 'README.md' : $stars;
	$stars_output_type  = gh_input( 'STARS_OUTPUT_TYPE', 'table' );
	$stars_output_style = gh_input( 'STARS_OUTPUT_STYLE', '' );
	$stars_show_count   = gh_input( 'STARS_COUNTS', 7 );
	$stars_description  = gh_input( 'STARS_DESCRIPTION', '' );
	$total_stars_count  = ( isset( $repo_info->stargazers_count ) && ! empty( $repo_info->stargazers_count ) ) ? $repo_info->stargazers_count : '';

	if ( empty( $total_stars_count ) ) {
		$retun = '<i>Nobody has starred this repository <b>yet</b>.</i>';
	} else {
		$total_stars_page = ceil( $total_stars_count / $api_stars_per_page );

		gh_log_group_start( 'Latest Stargazers Users Info' );
		$status = true;
		$retun  = array();
		$page   = $total_stars_page;
		while ( $status ) {
			if ( 0 == $page ) {
				$status = false;
				break;
			}
			$new = fetch_recent_stars( $repo, $stars_show_count, $page-- );
			if ( empty( $new ) ) {
				$status = false;
				break;
			}

			krsort( $new );
			foreach ( $new as $owner_info ) {
				$retun[] = $owner_info;

				if ( count( $retun ) == $stars_show_count ) {
					$status = false;
					break;
				}
			}

			if ( $page <= 0 ) {
				$status = false;
				break;
			}

			if ( count( $retun ) == $stars_show_count ) {
				$status = false;
				break;
			}
		}
		gh_log( print_r( $retun, true ) );
		gh_log_group_end();

		if ( false !== $stars_description ) {
			if ( empty( $stars_description ) ) {
				if ( $total_stars_count == $stars_show_count ) {
					$stars_description = '<i><b>' . $total_stars_count . '</b> people have starred this repository</i>';
				} elseif ( $stars_show_count < $total_stars_count ) {
					$stars_description = '<i><b>' . ( $total_stars_count - $stars_show_count ) . '</b> Others have starred this repository</i>';
				} else {
					$stars_description = '<i><b>' . $total_stars_count . '</b> have starred this repository</i>';
				}
			}
			$stars_description = str_replace( '[count]', $total_stars_count, $stars_description );
		}
	}

	gh_log( '' );
	gh_log( 'Output Config' );
	gh_log( '	-- File : ' . $stars );
	gh_log( '	-- Type : ' . $stars_output_type );
	gh_log( '	-- Style : ' . $stars_output_style );
	gh_log( '	-- Description : ' . $stars_description );
	gh_log( '' );

	$html = generate_output( 'stars', $stars_output_type, $retun, $stars_output_style, $stars_description );
	$file = save_output( $html, $stars, 'REPOSITORY_STARS' );

	gh_log( 'Output' );
	gh_log( $html );

	gh_commit( $file, '[Repository Roster] Updated :star2: Latest Stargazers Users' );
}