<?php

include 'dbConn.php';
global $connect;

$connect_a_practice = $_POST['connect_a_practice'];
$id = $_POST['id'];


$stmt = $connect->prepare('update doctors_data set connect_a_practice=? where id=?');
$stmt->bind_param('si',$connect_a_practice,$id);
$stmt->execute();
header("Location: step5_establishment_details.php");


$stmt->close();
mysqli_close($connect);

?>