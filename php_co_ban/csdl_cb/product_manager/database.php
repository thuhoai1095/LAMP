<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
    $db = new PDO("mysql:host=$servername;dbname=my_guitar_shop1", $username, $password);
    // set the PDO error mode to exception
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
