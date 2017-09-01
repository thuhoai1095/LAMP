<?php
require "database.php";
$query = "SELECT * FROM products";
$products = $db->query($query);
?>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>categoryID</th>
        <th>listPrice</th>
        <th>productCode</th>
        <th>productID</th>
        <th>productName</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($products as $product):?>
    <tr>
        <td><?php echo $product['categoryID'];?></td>
        <td><?php echo $product['listPrice'];?></td>
        <td><?php echo $product['productCode'];?></td>
        <td><?php echo $product['productID'];?></td>
        <td><?php echo $product['productName'];?></td>
        <td><form action="update_form_product.php" method="post">
                <input type="submit" value="Sửa">
                <input type="hidden" name="productID" value="<?php echo $product['productID'];?>">
                <input type="hidden" name="categoryID" value="<?php echo $product['categoryID'];?>">
            </form></td>
        <td><form action="delete_product.php" method="post">
                <input type="hidden" name="productID" value="<?php echo $product['productID'];?>">
                <input type="hidden" name="categoryID" value="<?php echo $product['categoryID'];?>">
            <input type="submit" value="Xóa">
            </form></td>
    </tr>
    <?php endforeach;?>
</table>
<a href="add_form_product.php">Thêm sảm phẩm</a>
