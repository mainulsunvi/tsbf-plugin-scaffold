<?php

namespace TSBF\Classes;
class Admin_Loader {
	private string $plugin_prefix;
	private string $plugin_version;
	
	function __construct() {
		$this -> plugin_prefix = TSBF_DATA['TextDomain'];
		$this -> plugin_version = TSBF_DATA['Version'] . '.' . time();
	}
	
	function init(): void {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );
	}
	
	function admin_assets(): void {
		wp_enqueue_style( $this -> plugin_prefix . '-admin', TSBF_ROOT_URL . 'assets/admin/css/admin-main.css', null, $this -> plugin_version );
		
		wp_enqueue_script( $this -> plugin_prefix . '-admin-script', TSBF_ROOT_URL . 'assets/admin/js/admin-script.js', array( 'jquery' ), $this -> plugin_version, true );
	}
}