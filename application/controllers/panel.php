<?php
namespace Application\Controllers;

use Application\Controllers\controller;

class panel extends controller
{
    public function index()
    {
        return $this->view("panel.index");
    }
}