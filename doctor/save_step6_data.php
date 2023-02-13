<?php

include 'dbConn.php';
global $connect;

$id = $_POST['id'];
$img = $_POST['img'];


$query = "SELECT * FROM doctors_certificates WHERE doctor_id = $id";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    // echo 'true condition';
    $stmt = $connect->prepare("UPDATE doctors_certificates SET identity_proof=? WHERE doctor_id=?");
    $stmt->bind_param('ss', $img, $id);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        // header("Location: step7_medical_registration_proof.php");
        echo 'updated';
    } else {
        echo 'Somthing Wrong Please Try again';
    }
    $stmt->close();
} else {
    // echo 'else conditon';
    $stmt1 = $connect->prepare("INSERT INTO doctors_certificates(doctor_id, identity_proof) VALUES (?, ?)");
    $stmt1->bind_param('ss', $id, $img);
    $stmt1->execute();
    if ($stmt1->affected_rows > 0) {
        // header("Location: step7_medical_registration_proof.php");
        echo 'inserted';
    } else {
        echo 'Somthing Wrong Please Try again';
    }
    $stmt1->close();
}

// $stmt = $connect->prepare('select * from doctors_certificates where doctor_id = ?');
// $stmt->bind_param('s', $id);
// $stmt->execute();
// echo var_dump($stmt);
// if ($stmt->affected_rows > 0) {
    // $stmt = $connect->prepare('update doctors_certificates set identity_proof=? where doctor_id=?');
    // $stmt->bind_param('si', $img, $id);
    // $stmt->execute();
    // if ($stmt->affected_rows > 0) {
    //     header("Location: step7_medical_registration_proof.php");
    // } else {
    //     echo 'Somthing Wrong Please Try again';
    // }
    // $stmt->close();
// } else {
    // $stmt1 = $connect->prepare("INSERT INTO doctors_certificates(`doctor_id`, `identity_proof`) VALUES (?, ?)");
    // $stmt1->bind_param('ss', 2,'dgjkddfgdfgfdgdffjdfgsdf');
    // $stmt1->execute();
    // if ($stmt1->affected_rows > 0) {
    //     header("Location: step7_medical_registration_proof.php");
    // } else {
    //     echo 'Somthing Wrong Please Try again';
    // }
    // $stmt1->close();

    // $query = 'SELECT * FROM doctors_data';
    // $result = mysqli_query($connect, $query);
    // echo var_dump($result);
// }

// $query = "SELECT * FROM doctors_certificates WHERE id = $id";
// $result = mysqli_query($connect, $query);


// mysqli_close($connect);
