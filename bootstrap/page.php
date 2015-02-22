<?php

/**
 * ページクラス
 */

class Page
{

    const PAGE_NAME_DELIMITER = '_';
    const CONTROLLER_SUFFIX   = 'Controller';


    private $_key; # ページキー


    /**
     * コンストラクタ
     *
     * @page String $key ページキー
     */

    public function __construct($key)
    {

        $this->_key = $key;
    }


    /**
     * ページコントローラーの実行
     */

    public function display()
    {

        // ページコントローラークラス名を取得
        $class = $this->_getControllerName($this->_key);

        try {

            $obj = new $class;
            $obj->exec();

        } catch (Exception $e) {

            // 404ページの表示
            header("HTTP/1.0 404 Not Found");
            exit;
        }
    }


    /**
     * ページコントローラークラス名を取得
     *
     * @param String $key ページキー
     * @return String ページコントローラークラス名
     */

    private function _getControllerName($key)
    {

        $result = '';

        foreach (explode(self::PAGE_NAME_DELIMITER, $key) as $word) {

            $words[] = ucfirst($word);
        }

        $result = implode('_', $words) . self::CONTROLLER_SUFFIX;

        return $result;
    }
}
