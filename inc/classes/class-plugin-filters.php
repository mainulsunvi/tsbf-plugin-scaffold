<?php

namespace TSBF\classes;

class Plugin_Filters {
	function init() {
		add_filter( 'auto_update_plugin', array($this, "add_autoupdate") );
	}
	
	function add_autoupdate(): bool {
		return true;
	}
}