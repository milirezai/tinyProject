<?php

$baseURL= "http://localhost/tinyProject/";

$baseDir= "/tinyProject/system/in";

$tmp= explode( '?',$_SERVER['REQUEST_URI']);

$currentRoute=str_replace($baseDir,'',$tmp[0]);

unset($tmp);