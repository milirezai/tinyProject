<?php
namespace System\Router;

 include ('../config.php');

use ReflectionMethod;

class Routing
{
    private $currentRoute;
    public function __construct()
    {
         global $currentRoute;
        $this->currentRoute = explode('/', $currentRoute);
      }

    public function run()
    {
          $path = realpath(dirname(__FILE__) . "/../../application/controllers/".$this->currentRoute[0]  . ".php");
         if (!file_exists($path)) {
            echo "404 file not exists";
             exit;
        }
        require_once($path);
        sizeof($this->currentRoute) == 1 ? $method = "index" : $method = $this->currentRoute[1];
        $class = "Application\Controllers\\" . $this->currentRoute[0];
        $object = new $class();
        if (method_exists($object, $method)) {
            $reflection = new ReflectionMethod($class, $method);
            $parameterCount = $reflection->getNumberOfParameters();
            if ($parameterCount <= count(array_slice($this->currentRoute, 2))) {
                call_user_func_array(array($object, $method), array_slice($this->currentRoute, 2));
            } else {
                echo "404 parameter error";
            }
        }else {
            echo "404 method not exists";
        }
    }
    
}