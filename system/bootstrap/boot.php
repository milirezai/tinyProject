<?php
session_start();

require_once ('system/config.php');
require_once('system/bootstrap/autoload.php');

$autoload=new System\Bootstrap\autoload();
$autoload->autoloader();

 $test= new \System\Router\routing();
 $test->run();
 