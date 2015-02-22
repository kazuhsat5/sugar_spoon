<?php

/**
 * ベースコントローラークラス
 */

abstract class BaseController
{

    /** ページキー */
    protected $_key;

    /** フロント表示変数配列 */
    protected $_result = array(
            'title' => null
        );


    /** メイン処理 */
    abstract public function exec();


    /**
     * htmlの表示
     *
     * @param String $key ページキー
     */

    public function _setPage($key)
    {
        
        extract($this->_result);

        require_once VIEWS_DIR . $key . '.html';
    }


    /**
     * setter
     */

    public function setKey($key)
    {
        $this->_key = $key;
    }

    public function setTitle($title)
    {
        $this->_result['title'] = $title;
    }

    public function setResult($key, $value)
    {
        $this->_result[$key] = $value;
    }
}
?>
