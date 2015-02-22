<?php

class DefaultController extends BaseController
{

    const PAGE_TITLE = 'Default Page';


    public function exec()
    {

        // タイトルセット
        $this->setTitle(self::PAGE_TITLE);

        // modelの呼び出し
        $model = new DefaultModel();
        $message = $model->getMessage();

        // 変数をhtmlに渡す
        $this->setResult('message', $message);

        // htmlの表示
        $this->_setPage($this->_key);
    }
}
