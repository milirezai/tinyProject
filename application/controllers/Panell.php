<?php
namespace Application\Controllers;

use Application\Controllers\Controller;

class Panell extends Controller
{
    public function index()
    {
         return $this->view("panel.index");
    }
}