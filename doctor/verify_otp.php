<?php
session_start();
include 'dbConn.php';
include 'send_sms.php';
global $connect;

$mobile = $_SESSION['mobile'];
$otp = $_POST['otp'];

$stmt = $connect->prepare('select * from doctors_data where mobile=? and otp=?');
$stmt->bind_param('ss', $mobile, $otp);
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $email = $row['email'];
    $id = $row['id'];

    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["otp"] = $otp;


    header("Location: doctor_home.php");
    //echo "success";
} else {
    echo "invalid OTP";
}


$stmt->close();
mysqli_close($connect);
