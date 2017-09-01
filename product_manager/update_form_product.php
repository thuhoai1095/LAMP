<?php
require "database.php";
$productID = $_POST['productID'];
$categoryID = $_POST['categoryID'];
$query = "SELECT *
          FROM categories
          ORDER BY categoryID";
$categories = $db->query($query);

$query = "SELECT *
          FROM products
          WHERE productID = $productID";
$products = $db->query($query);
$product = $products->fetch();
?>
<form action="update_product.php" method="post">
    Category
    <select name="categoryID">
        <?php foreach ($categories as $category):?>
            <option value="<?php echo $category['categoryID'];?>">
                <?php echo $category['categoryName'];?>
            </option>
        <?php endforeach;?>
    </select> <br>
    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
    productCode <input type="text" name="productCode" value="<?php echo $product['productCode']; ?>"><br>
    productName <input type="text" name="productName" value="<?php echo $product['productName']; ?>"><br>
    listPrice <input type="number" name="listPrice" value="<?php echo $product['listPrice']; ?>"><br>
    <input type="submit" value="Sửa sp">
</form>

