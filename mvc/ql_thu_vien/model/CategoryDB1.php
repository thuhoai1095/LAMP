<?php
require ('Category1.php');
class CategoryDB1
{
    public function getCategories(){
        $db=Database1::connect();
        $query = "SELECT * FROM loaisach";
        $result= $db->query($query);
        $categories = array();
        foreach ($result as $row){
            $category = new Category1($row['maloaisach'],$row['tenloaisach']);
            $categories[]= $category;
        }
        return $categories;
    }

    public function deleleCategory($categoryID){
        $db=Database1::connect();
        $query = "DELETE FROM loaisach WHERE maloaisach = '$categoryID'";
        $row = $db->exec($query);
        return $row;
    }
}