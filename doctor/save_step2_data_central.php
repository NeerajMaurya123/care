<?php

include 'dbConn.php';
global $connect;



// MCI details 
$mci_registraton_no = $_POST['mci_registraton_no'];
$mci_registration_council = $_POST['mci_registration_council'];
$mci_registration_year = $_POST['mci_registration_year'];
$id = $_POST['id'];

$stmt = $connect->prepare("UPDATE doctors_data SET mci_registraton_no=?,mci_registration_council=?,mci_registration_year=? WHERE id=?");
$stmt->bind_param('ssss',  $mci_registraton_no, $mci_registration_council, $mci_registration_year, $id);
$stmt->execute();
if ($stmt->affected_rows > 0) {

    // header("Location: step3_update_educational_qualification.php");
} else {
    echo 'something wrong try again';
}


$stmt->close();
mysqli_close($connect);
