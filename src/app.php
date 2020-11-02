<?php
require_once '/gh-toolkit/php.php';
require_once '/gh-toolkit/gh-api.php';

global $repo_info, $repo;

define( 'APP_PATH', __DIR__ . '/' );
define( 'IMAGE_SAVE_DIR', gh_input( 'IMAGE_SAVE_PATH', '.github/roster/' ) );

require_once APP_PATH . 'functions.php';

try {
	$repo      = gh_env( 'GITHUB_REPOSITORY' );
	$repo_info = $github_api->decode( $github_api->get( 'repos/' . $repo ) );
	gh_log( 'Repository Forks' );
	gh_log( str_repeat( '-', 30 ) );
	require_once APP_PATH . 'forks.php';
	gh_log( str_repeat( '-', 30 ) );

	gh_log();

	gh_log( 'Repository Stargazers' );
	gh_log( str_repeat( '-', 30 ) );
	require_once APP_PATH . 'stars.php';
	gh_log( str_repeat( '-', 30 ) );
	gh_log();
} catch ( \Milo\Github\RateLimitExceedException $exception ) {
	print_r( $exception );
}
