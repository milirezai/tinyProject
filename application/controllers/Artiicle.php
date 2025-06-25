<?php
namespace Application\Controllers;

use Application\Controllers\Controller;
use Application\Model\Article as articleModel;
use Application\Model\Category;

class Artiicle extends Controller
{
    public function index()
    {
      $article=new articleModel();
      $articles= $article->all();
      return $this->view('panel.template.article.index',compact('articles'));
    }
    public function create()
    {
      $category=new Category();
      $categories= $category->all();
      return $this->view('panel.template.article.create',compact('categories'));
    }
    public function store()
    {
        $article=new articleModel();
        $article->insert($_POST);
        return $this->redirect('article');  
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $category=new Category();
        $categories= $category->all();
        $ob_article=new articleModel();
        $article=$ob_article->find($id);
        return $this->view('panel.template.article.edit',compact('categories','article'));  
     }
    public function update($id)
    {
        $article=new articleModel();
        $article->update($id,$_POST);
        return $this->redirect('article');  
    }
    public function destroy($id)
    {
        $article=new articleModel();
        $article->delete($id);
        return $this->back();  
    }
}