<?php
/**
 * Possible Options
 * noimage,noname,square,rounded,italic,imglarge,imgsmall
 *
 * @param $type
 *
 * @return false|string
 */
function image_style( $type ) {
	$css = file_get_contents( APP_PATH . 'output/image-default.css' );
	foreach ( $type as $style ) {
		switch ( $style ) {
			case 'no-image':
				$css .= '.user-info img {display:none !important;}';
				break;
			case 'no-name':
				$css .= '.user-info span {display:none !important;}';
				break;
			case 'img-smooth':
				$css .= '.user-info img {border-radius:10px;}';
				break;
			case 'img-rounded':
				$css .= '.user-info img {border-radius:50%;}';
				break;
			case 'italic':
				$css .= '.user-info span {font-style:italic;}';
				break;
			case 'bold':
				$css .= '.user-info span {font-weight:bold;}';
				break;
			case 'img-large':
				$css .= '.user-info img {max-width: 100px}';
				break;
			case 'img-small':
				$css .= '.user-info img {max-width: 50px}';
				break;
		}
	}

	return $css;
}

function generate_image( $data, $style, $desc ) {
	$style      = explode( ',', trim( $style ) );
	$css        = image_style( $style );
	$svg_width  = '800';
	$svg_height = 'auto';
	$svg        = '<svg fill="none" viewBox="0 0 ' . $svg_width . ' ' . $svg_height . '" width="' . $svg_width . '" height="' . $svg_height . '" xmlns="http://www.w3.org/2000/svg">';
	$svg        .= '<foreignObject width="100%" height="100%"> <div xmlns="http://www.w3.org/1999/xhtml">';
	$svg        .= <<<HTML
<style>$css</style>
<div class="container">
HTML;
	if ( is_array( $data ) ) {
		foreach ( $data as $info ) {
			$image      = convert_image_to_base64( $info['avatar_url'] );
			$owner_name = ( in_array( 'small', $style ) ) ? "<sub>@{$info['owner']}</sub>" : "@{$info['owner']}";
			$svg        .= <<<HTML
<div class="user-info">
	<img src="{$image}" alt="@{$info['owner']}"/>
	<span>{$owner_name}</span>
</div>
HTML;
		}
	} else {
		$svg .= '<p>' . $data . '</p>';
	}
	$svg .= '</div>';

	$svg .= '<div class="description">' . $desc . '</div>';
	$svg .= '</div ></foreignObject ></svg > ';
	return $svg;
}