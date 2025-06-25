<?php
session_start();

require_once ('system/config.php');
require_once('system/bootstrap/autoload.php');

$autoload=new System\Bootstrap\Autoload();
$autoload->autoloader();

 $test= new \System\Router\Routing();
 $test->run();
 