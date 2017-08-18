<?php
/**
// * Created by PhpStorm.
// * User: Hoaicot
// * Date: 8/14/2017
// * Time: 5:09 PM
// */
//$x = 5;
//function myTest(){
//    echo "<p>Variable x inside function is: $x </p>";
//}
//myTest();
//    echo "<p> bien x o ngoai function la: $x </p>";
//?>
<?php
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

for($rows = 0; $rows < 4; $rows++){
    echo "<p><b>Row $rows </b></p>";
    echo "<ul>";
        for($cols = 0; $cols < 3; $cols++){
            echo "<li>".$cars[$rows][$cols]."</li>";
        }
        echo"</ul>";
}

echo "to day is".date("l")."<br>";

?>
&copy; 2010-<?php echo date("Y/m/d h:i:sa");?>
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
