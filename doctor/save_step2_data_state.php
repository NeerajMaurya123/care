<?php

include 'dbConn.php';
global $connect;

// state details 
$registration_no = $_POST['registration_no'];
$registration_council = $_POST['registration_council'];
$registration_year = $_POST['registration_year'];



$stmt = $connect->prepare("UPDATE doctors_data SET registration_no=?,registration_council=?,registration_year=? WHERE id=?");
$stmt->bind_param('ssss', $registration_no, $registration_council, $registration_year, $id);
$stmt->execute();
if ($stmt->affected_rows > 0) {

    header("Location: step3_update_educational_qualification.php");
} else {
    echo 'something wrong try again';
}


$stmt->close();
mysqli_close($connect);
