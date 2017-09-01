<?php
    require 'database.php';

    // Get category ID
    $category_id = 1;
    if (isset($_GET['id'])) {
        $category_id = $_GET['id'];
    }
    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    // Get products for selected category
    $query = "SELECT * FROM products
              WHERE categoryID = $category_id
              ORDER BY productID";
    $products = $db->query($query);
?>
<!DOCTYPE>
<html>
    <!-- the head section -->
    <head>
        <title>My Guitar Shop</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>

    <!-- the body section -->
    <body>
    <div id="page">
        <div id="main">

        <h1>Product List</h1>

        <div id="sidebar">
            <!-- display a list of categories -->
            <h2>Categories</h2>
            <ul class="nav">
            <?php foreach ($categories as $category) : ?>
                <li>
                <a href="?id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <div id="content">
            <!-- display a table of products -->
            <h2><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th class="right">Price</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['productCode']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td class="right"><?php echo $product['listPrice']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        </div><!-- end main -->
        <div id="footer"></div>
    </div><!-- end page -->
    </body>
</html>