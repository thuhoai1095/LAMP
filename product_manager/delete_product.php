<?php
require_once "database.php";
//Lay id
$productID = $_POST['productID'];
$categoryID = $_POST['categoryID'];

//Xoa product tu csdl
$query = "DELETE FROM products WHERE productID = $productID";
$db->exec($query);
include ('index.php');
?>