<?php
function generate_markdown_table( $data, $show_description = true, $style = '', $per_row = 7 ) {
	$html  = '<table><tbody><tr>';
	$i     = 0;
	$style = explode( ',', $style );
	foreach ( $data as $info ) {
		if ( 0 !== $i && 0 === $i % $per_row ) {
			$html .= '</tr><tr>';
		}

		$html .= '<td align="center">';

		if ( ! in_array( 'no-link', $style ) ) {
			$html .= "<a href=\"{$info['html_url']}\" rel=\"nofollow\">";
		}

		if ( ! in_array( 'no-image', $style ) ) {
			$width = '75px';
			$width = ( in_array( 'img-small', $style ) ) ? '50px' : $width;
			$width = ( in_array( 'img-large', $style ) ) ? '100px' : $width;
			$html  .= "<img src=\"{$info['avatar_url']}\" alt=\"@{$info['owner']}\" style=\"max-width:100%;\" width=\"$width;\">";
			$html  .= ( ! in_array( 'no-name', $style ) ) ? '<br/>' : '';
		}

		if ( ! in_array( 'no-name', $style ) ) {
			$html .= ( in_array( 'small', $style ) ) ? '<sub>' : '';
			$html .= ( in_array( 'bold', $style ) ) ? '<b>' : '';
			$html .= ( in_array( 'italic', $style ) ) ? '<i>' : '';
			$html .= "@{$info['owner']}";
			$html .= ( in_array( 'italic', $style ) ) ? '</i>' : '';
			$html .= ( in_array( 'bold', $style ) ) ? '</b>' : '';
			$html .= ( in_array( 'small', $style ) ) ? '</sub>' : '';
		}

		if ( ! in_array( 'no-link', $style ) ) {
			$html .= '</a> ';
		}

		$html .= '</td>';
		$i++;
	}

	$html .= '</tr></tbody></table>';

	if ( false !== $show_description ) {
		$html .= "<p align=\"center\">{$show_description}</p>";
	}

	return $html;
}