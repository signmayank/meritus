<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__));
define('APPROOT',ROOT.DS.'app');
define('LIBROOT',ROOT.DS.'lib');

spl_autoload_register(function($class_name) {

        // Define an array of directories in the order of their priority to iterate through.
        $dirs = array(
            LIBROOT
        );

        foreach( $dirs as $dir ) {
			if (file_exists($dir. DS . strtolower($class_name) .'.php')) {
				require_once($dir. DS . strtolower($class_name) .'.php');
                return;
            }
        }
    });