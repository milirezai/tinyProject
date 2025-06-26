<?php
namespace Application\Controllers;

use Application\Controllers\Controller;
use Application\Model\Article;
use Application\Model\Category;

class Home extends Controller
{
    public function index()
    {
        $category=new Category();
        $categories= $category->all();
        $article=new Article();
        $articles= $article->all();  
        return $this->view('app.index',compact('categories','articles'));
    }

    public function category($id)
    {
        $ob_category=new Category();
        $categories= $ob_category->all();
        $ob_category=new Category();
        $category=$ob_category->find($id);
        $ob_category=new Category();
        $articles=$ob_category->articles($id);
        return $this->view('app.template.category.category',compact('categories','category','articles'));
    }
    
    public function show($id)
    {
        $category=new Category();
        $categories= $category->all();
        $articles=new Article();
        $article= $articles->find($id);  
        return $this->view('app.template.show.show',compact('categories','article'));
    }            
}