<?php

/**
 * Test Model
 */

class TestModel extends BaseModel
{

    public function getData()
    {

        echo 'Call a model !' . PHP_EOL;

        return 'Test';
    }
}
