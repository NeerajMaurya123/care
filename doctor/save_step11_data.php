<?php

include 'dbConn.php';
global $connect;

$id = $_POST['id'];
$fees = $_POST['checkbox'];


// $stmt = $connect->prepare('update doctors_data set consultation_fees=? where id=?');
// $stmt->bind_param('di',$fees,$id);
// $stmt->execute();
header("Location: doctor_home.php");


$stmt->close();
mysqli_close($connect);

?>