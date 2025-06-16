<?php

$baseURL= "http://localhost/tinyProject/";

$baseDir= "/tinyProject/";

$tmp= explode( '?',$_SERVER['REQUEST_URI']);

$currentRoute=str_replace($baseDir,'',$tmp[0]);

unset($tmp);


//  config database
$dbName='tinyProject';
$dbUserName='root';
$dbPassword=''; 