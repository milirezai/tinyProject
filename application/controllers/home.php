<?php
namespace Application\Controllers;

use Application\Controllers\controller;

class home extends controller
{
    public function index(){
        $product= "لیست تمام محصولات";
        $this->view('app.index',compact('product'));
    }
    public function create(){
        echo "this is a create method";
    }
}