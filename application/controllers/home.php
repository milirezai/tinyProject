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
        $this->redirect('home');
    }
}