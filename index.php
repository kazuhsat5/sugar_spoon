<?php

require_once __DIR__ . '/directory.php';
require_once __DIR__ . '/bootstrap/autoload.php';
require_once __DIR__ . '/bootstrap/page.php';

new Autoload();

$key = $_GET['key'];

$page = new Page($key);
$page->exec();
?>
