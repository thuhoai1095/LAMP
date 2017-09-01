<?php
require_once "database.php";
$productID = $_POST['productID'];
$categoryID=$_POST['categoryID'];
$productCode=$_POST['productCode'];
$productName=$_POST['productName'];
$listPrice=$_POST['listPrice'];

// Validate inputs
if (empty($categoryID) || empty($productCode) ||empty($productName)||empty($listPrice) ) {
    $error = "Invalid product data. Check all fields and try again.";
} else {
    $query = "UPDATE products SET categoryID =$categoryID,
    productCode='$productCode',productName ='$productName',listPrice=$listPrice WHERE productID=$productID";
    $db->exec($query);
}
include ('index.php');
?>

