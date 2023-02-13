<?php

include 'dbConn.php';
global $connect;

$specialization = strtoupper($_POST['specialization']);
$gender = strtoupper($_POST['gender']);
$city = strtoupper($_POST['city']);
$state = strtoupper($_POST['state']);
$pincode = $_POST['pincode'];
$self_date_of_birth = $_POST['self_date_of_birth'];
$spouse_date_of_birth = $_POST['spouse_date_of_birth'];
$anniversary_date = $_POST['anniversary_date'];
$id = $_POST['id'];
$img = $_POST['img'];



$stmt = $connect->prepare('update doctors_data set specialization=?,gender=?,city=?,state=?,pincode=?, self_date_of_birth=?,spouse_date_of_birth=?,anniversary_date=? where id=?');
$stmt->bind_param('sssssssss', $specialization, $gender, $city, $state, $pincode, $self_date_of_birth, $spouse_date_of_birth, $anniversary_date, $id);
$stmt->execute();
if ($stmt->affected_rows > 0) {

    if ($img !== '') {
        $query = "SELECT * FROM doctors_certificates WHERE doctor_id = $id";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $updateSTMT = $connect->prepare("UPDATE doctors_certificates SET doctor_photo=? WHERE doctor_id=?");
            $updateSTMT->bind_param('ss', $img, $id);
            $updateSTMT->execute();
            if ($updateSTMT->affected_rows > 0) {
                header("Location: step2_update_state_medical_registration.php");
                // echo 'updated';
            } else {
                echo 'Somthing Wrong Please Try again';
            }
            $updateSTMT->close();
        } else {
            $insertSTMT = $connect->prepare("INSERT INTO doctors_certificates(doctor_id, doctor_photo) VALUES (?, ?)");
            $insertSTMT->bind_param('ss', $id, $img);
            $insertSTMT->execute();
            if ($insertSTMT->affected_rows > 0) {
                header("Location: step2_update_state_medical_registration.php");
                // echo 'inserted';
            } else {
                echo 'Somthing Wrong Please Try again';
            }
            $insertSTMT->close();
        }
    } else {
        header("Location: step2_update_state_medical_registration.php");
    }
} else {
    echo "something wrong!";
}


// $stmt->close();
// mysqli_close($connect);
