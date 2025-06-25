<?php
namespace System\Traits;

trait Redirect
{
    protected function redirect($url)
    {
        $protocol=stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' ;
        header("location:".$protocol.$_SERVER['HTTP_HOST']."/tinyProject/".$url);
    }
    
    protected function back()
    {
        $httpReferer= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :null;
        if ($httpReferer != null) {
            header("location:".$_SERVER['HTTP_REFERER']);
         }
         else 
         {
            echo "404 route not found";
         }
    }
}

 