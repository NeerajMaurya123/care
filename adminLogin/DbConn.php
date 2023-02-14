<?php

$hostname = "localhost";
$user = "root";
$password="root";
$databaseName="bonanza";
$port="3306";

$connect = mysqli_connect($hostname,$user,$password,$databaseName);
mysqli_set_charset($connect, "utf8");

?>