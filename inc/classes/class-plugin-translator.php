<?php
namespace TSBF\Classes;

class Plugin_Translator {
	function init(): void {
		add_action( 'plugins_loaded', array( $this, 'plugin_translator' ) );
	}
	function plugin_translator(): void {
		load_plugin_textdomain( 'tsbf', false, TSBF_ROOT . 'languages');
	}
	
}

