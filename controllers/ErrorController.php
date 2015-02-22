<?php

/**
 * エラー画面コントローラー
 */

class ErrorController extends BaseController
{

    private $_msg; # 表示メッセージ


    public function exec()
    {
    }


    /**
     * setter
     */

    public function setMsg($msg)
    {
        $this->_msg = $msg;
    }
}
