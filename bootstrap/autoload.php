<?php

/**
 * Autoloadクラス
 */

class Autoload
{

    public function __construct() {

        spl_autoload_register(array($this, 'load'));
    }


    static public function load($class)
    {

        $dirList = require __DIR__ . '/paths.php';

        foreach ($dirList as $name => $path) {

            $filePath = $path . $class . '.php';

            if (file_exists($filePath)) {

                require_once $filePath;

                return true;
            }
        }

        return false;
    }
}
