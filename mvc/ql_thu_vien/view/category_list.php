<?php include ('./until/header.php');?>
<div id="main">
    <div id="sidebar">
        <h2>Categories</h2>
    </div>

    <div id="content">
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th>Code</th>
                <th>CategoryName</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($categories as $category):?>
        <tr>
            <td><?php echo $category->getCateID();?></td>
            <td><?php echo $category->getCateName();?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="formupdatecategory.php">
                    <input type="hidden" name="categoryID" value="<?php echo $category->getCateID();?>">
                    <input type="submit" value="Update">
                </form>
            </td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="categoryID" value="<?php echo $category->getCateID();?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
            <?php endforeach;?>
        </table>
        <a href="#"> Add category</a>
    </div>
</div>
<?php include ('./until/footer.php');?>


