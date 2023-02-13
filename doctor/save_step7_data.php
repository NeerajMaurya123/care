<?php

include 'dbConn.php';
global $connect;

$id = $_POST['id'];
$img = $_POST['img'];


$stmt1 = $connect->prepare('update doctors_certificates set medical_registration=? where doctor_id=?');
$stmt1->bind_param('si',$img,$id);
$stmt1->execute();

header("Location: step10_consultation_fees.php");


$stmt->close();
mysqli_close($connect);

?>