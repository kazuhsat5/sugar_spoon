<?php

/**
 * Autoloadクラス
 */

class Autoload
{

    public function __construct() {

        spl_autoload_register(array($this, 'load'));
    }


    /**
     * autolod
     *
     * @param String $class クラス名
     * @return bool
     * @throws
     */
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

        throw new Exception('[__autoload] this file does\'nt exists. class:' . $class);
    }
}
