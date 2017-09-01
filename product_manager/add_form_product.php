<?php
require "database.php";
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$categories = $db->query($query);
?>
<form action="add_product.php" method="post">
    Category
    <select name="categoryID">
        <?php foreach ($categories as $category):?>
            <option value="<?php echo $category['categoryID'];?>">
                 <?php echo $category['categoryName'];?>
            </option>
        <?php endforeach;?>
    </select> <br>
    productCode <input type="text" name="productCode"><br>
    productName <input type="text" name="productName"><br>
    listPrice <input type="number" name="listPrice"><br>
    <input type="submit" value="Add product">
</form>
