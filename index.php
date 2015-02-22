<?php

require_once __DIR__ . '/define.php';
require_once __DIR__ . '/bootstrap/autoload.php';
require_once __DIR__ . '/bootstrap/page.php';

$autoload = new Autoload();

$key = $_GET['key'];

$page = new Page($key);
$page->display();
?>
