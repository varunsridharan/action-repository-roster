<?php
require_once APP_PATH . 'output/table.php';
require_once APP_PATH . 'output/image.php';
require_once APP_PATH . 'output/list.php';

function fetch_recent_forks( $repo, $limit = 10, $page = '1' ) {
	global $github_api, $api_fork_per_page;
	$data     = $github_api->decode( $github_api->get( sprintf( 'repos/%s/forks?sort=newest&per_page=' . $api_fork_per_page . '&page=' . $page, $repo ) ) );
	$response = array();
	foreach ( $data as $fork ) {
		if ( ! isset( $fork->owner ) ) {
			continue;
		}

		$response[] = array(
			'owner'      => $fork->owner->login,
			'avatar_url' => $fork->owner->avatar_url,
			'html_url'   => $fork->owner->html_url,
		);

		if ( 0 !== $response && count( $response ) == $limit ) {
			break;
		}
	}
	return $response;
}

function fetch_recent_stars( $repo, $limit = 10, $page = '1' ) {
	global $github_api, $api_stars_per_page;
	$data     = $github_api->decode( $github_api->get( sprintf( 'repos/%s/stargazers?per_page=' . $api_stars_per_page . '&page=' . $page, $repo ) ) );
	$response = array();
	foreach ( $data as $_star ) {
		if ( ! isset( $_star->login ) ) {
			continue;
		}

		$response[] = array(
			'owner'      => $_star->login,
			'avatar_url' => $_star->avatar_url,
			'html_url'   => $_star->html_url,
		);
	}
	return $response;
}

/**
 * @param string $data_type -- forks/stars
 * @param string $output_type -- list/table/image
 * @param array  $data -- array
 * @param string $style --- string of styles
 * @param string $description -- custom description
 *
 * @return string
 */
function generate_output( $data_type, $output_type, $data, $style, $description ) {
	global $repo;

	if ( 'table' === $output_type ) {
		return is_string( $data ) ? $data : generate_markdown_table( $data, $description, $style );
	}

	if ( 'list' == $output_type ) {
		return is_string( $data ) ? $data : generate_markdown_list( $data, $description, $style );
	}

	if ( 'image' === $output_type ) {
		$content = generate_image( $data, $style, $description );
		$saveto  = validate_save_path( str_replace( '[type]', $data_type, IMAGE_SAVE_DIR ), $data_type . '.svg' );
		save_file( $saveto, $content );
		$image_url = github_url( true, $repo, '', $saveto );
		$repo_url  = github_url( false, $repo, false, false );
		$image_url .= '?' . time();
		gh_commit( $saveto, '[Repository Roster] Latest Forked Users' );
		if ( 'stars' === $data_type ) {
			return "[![Stargazers repo roster for @${repo}](${image_url})](${repo_url}stargazers)";
		} else {
			return "[![Forkers repo roster for @${repo}](${image_url})](${repo_url}stargazers)";
		}
	}
	return '';
}

function save_output( $output, $save_to, $key ) {
	$ex            = get_file( $save_to );
	$find_regex    = '/^(?P<start><!--\s(?:' . $key . ')\:(?:START|start)\s-->)(?:\n|)(?:[\s\S]*?)(?:\n|)(?P<end><!--\s(?:' . $key . ')\:(?:END|end)\s-->)$/m';
	$replace_regex = '/^(<!--\s(?:' . $key . ')\:(?:START|start)\s-->)(?:\n|)([\s\S]*?)(?:\n|)(<!--\s(?:' . $key . ')\:(?:END|end)\s-->)$/m';
	$str_find      = 'PLACEHOLDER_REPLACE:' . rand( 1, 1000 );

	preg_match_all( $find_regex, $ex, $matches, PREG_SET_ORDER, 0 );
	$matches = ( isset( $matches[0] ) ) ? $matches[0] : array( '', '', '', '' );

	$content = preg_replace( $replace_regex, $str_find, $ex );
	$output  = <<<HTML
{$matches['start']}
{$output}
{$matches['end']}
HTML;
	$content = str_replace( $str_find, $output, $content );
	return save_file( $save_to, $content );
}

function convert_image_to_base64( $url ) {
	$headers = get_headers( $url );
	$type    = 'def';
	for ( $j = 0; $j < count( $headers ); $j++ ) {
		if ( strpos( $headers[ $j ], 'Content-Type' ) !== false ) {
			$type = trim( str_replace( 'Content-Type:', '', $headers[ $j ] ) );
			break;
		}
	}
	return 'data: ' . $type . ';base64,' . base64_encode( file_get_contents( $url ) );
}