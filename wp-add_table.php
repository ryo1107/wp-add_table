<?php
/*
Plugin Name: wp-add_table
Plugin URL: hogehoge.com
Description:
Author: r.kato
Version: 0.0.0
Author URL: https://github.com/ryo1107
*/

function themes_add_quicktags () {
	if ( wp_script_is( 'quicktags' ) ) {
		$html  = '<script>';
		$html .= 'QTags.addButton( "eg_paragraph", "table", "\n\n| Col 1 | Col 2 | Col 3 |\n| -------- | -------- | -------- |\n| Text | Text | Text |\n\n", "", "table", "Paragraph tag", 1 );';
		$html .= '</script>';

		echo $html;
	}
}
add_action( 'admin_print_footer_scripts', 'themes_add_quicktags' );

?>'}
