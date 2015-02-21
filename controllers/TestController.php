<?php

/**
 * TestController
 */

class TestController extends BaseController
{

    public function exec()
    {

        echo 'Call a controller !' . PHP_EOL;

        $obj = new TestModel();
        $test = $obj->getData();
    }
}
