<?php

namespace TSBF\Classes;

class Plugin_Deactivator {
	function init(): void {
		register_deactivation_hook( TSBF_ROOT . 'tsbf.php', array( $this, 'plugin_deactivation' ) );
	}
	
	static function plugin_deactivation(): void {
		wp_delete_post( 2, true );
	}
	
}