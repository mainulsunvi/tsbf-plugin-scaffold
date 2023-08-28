<?php

function tsbf_autoloader( $class ): void {
	$prefix   = 'TSBF\\';
	$base_dir = TSBF_ROOT . 'inc' . DIRECTORY_SEPARATOR;
	
	$class = substr( $class, strlen( $prefix ) );
	
	if ( preg_match( '/[^\\\\]+$/', $class, $matches ) ) {
		$dirname = strtolower( rtrim( $class, $matches[0] ) );
	}
	
	$fileName = ( str_contains( $matches[0], '_' ) ) ? strtolower( str_replace( '_', '-', $matches[0] ) ) : strtolower( $matches[0] );
	
	$path = $base_dir . $dirname . 'class-' . $fileName . '.php';
	
	if ( file_exists( $path ) ) {
		require_once $path;
	}
}

spl_autoload_register( "tsbf_autoloader" );