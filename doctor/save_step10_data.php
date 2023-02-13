<?php

include 'dbConn.php';
global $connect;

$fees = $_POST['fees'];
$id = $_POST['id'];


$stmt = $connect->prepare('update doctors_data set consultation_fees=? where id=?');
$stmt->bind_param('di',$fees,$id);
$stmt->execute();
header("Location: step11_terms_and_conditions.php");


$stmt->close();
mysqli_close($connect);

?>