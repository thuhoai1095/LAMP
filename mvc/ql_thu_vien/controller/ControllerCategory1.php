<?php
require('./database/Database1.php');
require ('./model/CategoryDB1.php');

class ControllerCategory1
{
    public function listCategory(){
        $cate = new CategoryDB1();
        $categories = $cate->getCategories();
        include ('./view/category_list.php');
    }

    public function deleteCategory(){
        $cate = new CategoryDB1();
        $categoryID = $_POST['categoryID'];
        $cate->deleleCategory($categoryID);
        include ('./index.php');
    }

    public function handleRequest(){
        if(isset($_POST['action'])){
            $action = $_POST['action'];
        }else if (isset($_GET['action'])){
            $action =$_GET['action'];
        }else{
            $action = 'category_list';
        }

        if ($action = 'category_list'){
            $this->listCategory();
        }
    }
}