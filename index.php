<?php
$user='root';
$password='';

$database= 'mglsi_news';
$servername ='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {
die('Connect Error ('
    $mysqli->connect_errno . ') '.
    $mysqli->connect_errno);
}   
$sql = "SELECT * FROM   article ";
$result = $mysqli->query($sql);
$mysqli->close();

?>