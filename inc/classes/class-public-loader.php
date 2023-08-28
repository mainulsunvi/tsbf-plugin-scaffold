<?php

namespace TSBF\Classes;

class Public_Loader {
	private string $plugin_prefix;
	private string $plugin_version;
	
	function __construct() {
		$this->plugin_prefix = TSBF_DATA['TextDomain'];
		$this -> plugin_version = TSBF_DATA['Version'] . '.' . time();
	}
	
	function init(): void {
		add_action('wp_enqueue_scripts', array($this, 'public_assets'));
	}
	
	function public_assets(): void {
		wp_enqueue_style($this->plugin_prefix. '-public-main', TSBF_ROOT_URL . 'assets/public/css/public-main.css', null, $this->plugin_version);
		
		wp_enqueue_script($this->plugin_prefix. '-public-script', TSBF_ROOT_URL . 'assets/public/js/public-script.js', array('jquery'), $this->plugin_version, true);
	}
}