<?php

class Category1
{
    private $cateid;
    private $catename;

    public function __construct($categoryid,$categoryname)
    {
       $this->cateid = $categoryid;
       $this->catename = $categoryname;
    }

    function getCateID(){
        return $this->cateid;
    }

    function setCateID($value){
        return $this->cateid = $value;
    }

    function getCateName(){
        return $this->catename;
    }

    function setCateName($value){
        return $this->catename = $value;
    }

}
?>