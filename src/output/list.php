<?php
function generate_markdown_list( $data, $show_description = true, $style = '', $per_row = 7 ) {
	$style = explode( ',', $style );
	$html  = in_array( 'list-ordered', $style ) ? '<ol>' : '<ul>';

	foreach ( $data as $info ) {
		$html .= '<li>';

		if ( ! in_array( 'no-link', $style ) ) {
			$html .= "<a href=\"{$info['html_url']}\" rel=\"nofollow\">";
		}

		$html .= ( in_array( 'small', $style ) ) ? '<sub>' : '';
		$html .= ( in_array( 'bold', $style ) ) ? '<b>' : '';
		$html .= ( in_array( 'italic', $style ) ) ? '<i>' : '';
		$html .= "@{$info['owner']}";
		$html .= ( in_array( 'italic', $style ) ) ? '</i>' : '';
		$html .= ( in_array( 'bold', $style ) ) ? '</b>' : '';
		$html .= ( in_array( 'small', $style ) ) ? '</sub>' : '';
		$html .= ' <br/> ';

		if ( ! in_array( 'no-link', $style ) ) {
			$html .= '</a> ';
		}

		$html .= '</li>';
	}

	$html .= in_array( 'list-ordered', $style ) ? '</ol>' : '</ul>';

	if ( false !== $show_description ) {
		$html .= "<p align=\"center\">{$show_description}</p>";
	}

	return $html;
}