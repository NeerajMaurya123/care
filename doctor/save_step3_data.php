<?php

include 'dbConn.php';
global $connect;

$degree = $_POST['degree'];
$college = $_POST['college'];
$year_of_completion = $_POST['year_of_completion'];
$total_experience = $_POST['total_experience'];
$id = $_POST['id'];


$stmt = $connect->prepare('update doctors_data set degree=?,college=?,year_of_completion=?,total_experience=? where id=?');
$stmt->bind_param('ssssi',strtoupper($degree),strtoupper($college),$year_of_completion,$total_experience,$id);
$stmt->execute();
header("Location: step4_connect_a_practice.php");


$stmt->close();
mysqli_close($connect);

?>