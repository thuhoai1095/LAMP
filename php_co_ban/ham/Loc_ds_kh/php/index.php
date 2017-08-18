<?php
/**
 * Created by PhpStorm.
 * User: Hoaicot
 * Date: 8/18/2017
 * Time: 10:52 AM
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
    From:<input id="from" type="text" name="from" placeholder="yyyy-mm-dd">
    To: <input id="to" type="text" name="to" placeholder="yyyy-mm-dd">
        <input type="submit" id="submit" value="search">
</form>
<?php
function searchByDate($fromdate, $todate, $customerlist){
    $flag = 0;
    foreach ($customerlist as $key => $values){
        $datevalues = $values['ngaysinh'];
        if ($datevalues >= $fromdate && $datevalues <= $todate){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values['ten']."</td>";
            echo "<td>".$values['ngaysinh']."</td>";
            echo "<td>".$values['diachi']."</td>";
            echo "<td><img src='".$values['anh']."' width = '60px' height = '60px'/></td>";
            echo "</tr>";
            $flag = 1;
        }else if(empty($fromdate) && empty($todate)){
            $flag = 0;
        }
    }
    if($flag == 0) {
        echo "<b style='color:red'>Khong tim thay!.</b>";
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
        $fromdate = $_POST["from"];
        $todate = $_POST["to"];
        searchByDate($fromdate, $todate, $customerlist);
    }
    ?>
</table>
</body>
</html>


