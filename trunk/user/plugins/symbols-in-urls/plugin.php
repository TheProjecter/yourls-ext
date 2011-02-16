<?php
/*
Plugin Name: Allow _$! in Short URLs
Plugin URI: http://yourls.org/
Description: Allow _#! in short URLs (like <tt>http://sho.rt/#!hello_world</tt>)
Version: 1.0
Author: Jesse
Author URI: http://blog.caiwangqin.com/
*/

yourls_add_filter( 'get_shorturl_charset', 'underscore_in_charset' );
function underscore_in_charset( $in ) {
	return $in.'_';
}


yourls_add_filter( 'get_shorturl_charset', 'symbol1_in_charset' );
function symbol1_in_charset( $in ) {
	return $in.'$';
}

yourls_add_filter( 'get_shorturl_charset', 'symbol2_in_charset' );
function symbol2_in_charset( $in ) {
	return $in.'!';
}

?>
