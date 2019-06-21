<?php  

$username = 'root';
$pass = '1234';
$db = 'schooldb';
$host = 'localhost';

try {
    $connection = new PDO("mysql:host=$host; dbname=$db; charset=utf8", $username, $pass);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo $e->getMessage();
}
 ?>

