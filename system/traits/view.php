<?php
namespace System\Traits;

trait View
{
    protected function view($dir , $vars = null){

        $dir = str_replace('.' , '/',$dir);
        if($vars)
        extract($vars);
        $path = realpath(dirname(__FILE__) . "/../../application/view/".$dir.".php");
        if(file_exists($path)){
            return require_once($path);
        }
        else
        echo "this view [".$dir."] not exist";
    }
    protected function asset($dir){
        global $baseURL;
        $path=$baseURL."public/".$dir;
        echo $path;
    }

    protected function include($dir , $vars = null){

        $dir = str_replace('.' , '/',$dir);
        if($vars)
        extract($vars);
        $path = realpath(dirname(__FILE__) . "/../../application/view/".$dir.".php");
        if(file_exists($path)){
            return require_once($path);
        }
        else
        echo "this view [".$dir."] not exist";
    }
    protected function url($url){
        if ($url[0]== "/") {
            $url=substr($url,1,strlen($url)-1);
        }
        global $baseURL;
        echo $baseURL.$url;
    }

}
 