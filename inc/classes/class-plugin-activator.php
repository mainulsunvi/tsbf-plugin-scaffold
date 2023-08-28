<?php

namespace TSBF\Classes;

class Plugin_Activator {
    function init(): void {
        register_activation_hook( TSBF_ROOT . 'tsbf.php', array( $this, 'plugin_activation' ) );
    }

    static function plugin_activation(): void {
	   
    }

}