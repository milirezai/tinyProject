<?php
namespace Application\Controllers;

use Application\Controllers\Controller;
use Application\Model\Category;

class Categoory extends Controller
{
    public function index()
    {
        $category= new Category();
        $categories= $category->all();
        return $this->view('panel.template.category.index',compact('categories'));
    }
    public function create()
    {
        return $this->view('panel.template.category.create');
    }
    public function store()
    {
        $category=new Category();
        $category->insert($_POST);
        return $this->redirect('Categoory');  
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $ob_category=new Category();
         $category=$ob_category->find($id);
        return $this->view('panel.template.category.edit',compact('category'));  
    }
    public function update($id)
    {
        $category=new Category();
        $category->update($id,$_POST);
        return $this->redirect('Categoory');  
    }
    public function destroy($id)
    {
        $category=new Category();
        $category->delete($id);
        return $this->back();  
    }
}