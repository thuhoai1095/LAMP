<?php
require_once "database.php";
$categoryID=$_POST['categoryID'];
$productCode=$_POST['productCode'];
$productName=$_POST['productName'];
$listPrice=$_POST['listPrice'];

// Validate inputs
if (empty($categoryID) || empty($productCode) ||empty($productName)||empty($listPrice) ) {
    $error = "Invalid product data. Check all fields and try again.";
} else {
    $query ="INSERT INTO products (categoryID, productCode, productName, listPrice) 
      VALUES ($categoryID, '".$productCode."', '".$productName."', $listPrice);";
    $db->exec($query);
}
include ('index.php');
?>

