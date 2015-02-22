<?php

class DefaultController extends BaseController
{

    const PAGE_TITLE = 'Default Page';


    public function exec()
    {

        // タイトルセット
        $this->setTitle(self::PAGE_TITLE);

        // 変数をhtmlに渡す
        $this->setResult('message', 'This is Default Page.');

        // htmlの表示
        $this->_setPage($this->_key);
    }
}
