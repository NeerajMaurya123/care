<?php

include 'dbConn.php';
global $connect;

$name = $_POST['name'];
$city = $_POST['city'];
$locality = $_POST['locality'];
$address = $_POST['address'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$establishment_type = $_POST['establishment_type'];
$id = $_POST['id'];
$img = $_POST['img'];


$stmt = $connect->prepare('update doctors_data set establishment_name=?,establishment_address=?,establishment_city=?,establishment_locality=?,establishment_state=?,establishment_pincode=?,establishment_type=? where id=?');
$stmt->bind_param('sssssssi', strtoupper($name), strtoupper($address), strtoupper($city), strtoupper($locality), strtoupper($state), $pincode, $establishment_type, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {

    $stmt1 = $connect->prepare('update doctors_certificates set establishment_proof=? where doctor_id=?');
    $stmt1->bind_param('si', $img, $id);
    $stmt1->execute();

    header("Location: step6_identity_proof.php");
} else {
    header("Location: step5_establishment_details.php");
}



$stmt->close();
mysqli_close($connect);
