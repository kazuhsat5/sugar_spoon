<?php

/**
 * ページクラス
 */

class Page
{

    const PAGE_NAME_DELIMITER = '_';


    private $_key; # ページキー


    /**
     * コンストラクタ
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

        $obj = new $class;
        $obj->exec();
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

        $result = implode('_', $words) . 'Controller';

        return $result;
    }
}
