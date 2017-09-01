<?php
class CategoryDB
{
    public function getCategories()
    {
        $db = Database::connect();
        $query = "SELECT * FROM loaisach";
        $result = $db->query($query);
        $categories = array();
        foreach ($result as $row) {
            $category = new Category($row['maloaisach'], $row['tenloaisach']);
            $categories[] = $category;
        }
        return $categories;
    }
    

    public function getCategory($cateid)
    {
        $db = Database::connect();
        $query = "SELECT * FROM loaisach WHERE maloaisach = '$cateid'";
        $statement = $db->query($query);
        $row = $statement->fetch();
        $category = new Category($row['maloaisach'], $row['tenloaisach']);
        return $category;
    }

    public function deleteCategory($cateid)
    {
        $db = Database::connect();
        $query = "DELETE FROM loaisach WHERE maloaisach = '$cateid'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public function updateCategory($category)
    {
        $db = Database::connect();
        $cateid = $category->getCateID();
        $catename = $category->getCateName();
        $query = "UPDATE loaisach SET tenloaisach = '$catename' WHERE maloaisach = '$cateid'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public function addCategory($category)
    {
        $db = Database::connect();

        $cateid = $category->getCateID();
        $catename = $category->getCateName();

        $query = "INSERT INTO loaisach(maloaisach, tenloaisach)
                  VALUES('$cateid', '$catename')";

        $row_count = $db->exec($query);
        return $row_count;
    }
}

?>