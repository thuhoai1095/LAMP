<?php
/**
 * Created by PhpStorm.
 * User: Hoaicot
 * Date: 8/18/2017
 * Time: 2:43 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>hàm lọc</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Địa chỉ:<input id="address" type="text" name="address" placeholder="Nhập vào địa chỉ">
    <input type="submit" id="submit" value="search">
</form>
<?php
function searchByAddress($diachi, $customerlist){
    $flag = 0;
    foreach ($customerlist as $key => $values){
        if ($values['diachi'] == "Hà Nội"){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values['ten']."</td>";
            echo "<td>".$values['ngaysinh']."</td>";
            echo "<td>".$values['diachi']."</td>";
            echo "<td><img src='".$values['anh']."' width = '60px' height = '60px'/></td>";
            echo "</tr>";
            $flag = 1;
        }else if(empty($diachi)){
            $flag = 0;
        }
    }
    if($flag == 0) {
        echo "<b style='color:red'>Khong tim thay địa chỉ này!.</b>";
    }

}
?>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customerlist = array(
            "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "../image/avata.jpg"),
            "2" =>array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "../image/avata.jpg"),
            "3" =>array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "../image/avata.jpg"),
            "4" =>array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "../image/avata.jpg"),
            "5" =>array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "../image/avata.jpg")
        );
        $diachi = $_POST["address"];
        searchByAddress($diachi, $customerlist);
    }
    ?>
</table>
</body>
</html>



