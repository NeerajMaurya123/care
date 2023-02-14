<?php
session_start();

include 'dbConn.php';
include 'send_sms.php';
global $connect;

$mobile = $_POST['mobile'];

$stmt = $connect->prepare('select * from doctors_data where mobile=?');
$stmt->bind_param('s', $mobile);
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $email = $row['email'];
    $date2 = date('Y-m-d');

    $otp1 = rand(100000, 999999);
    $sms_content = "Welcome to Online Aavedan: Your verification code is " . $otp1;

    $strSQL2 = "update doctors_data set otp='" . $otp1 . "',otp_date='" . $date2 . "' where mobile='" . $mobile . "'";
    $connect->query($strSQL2);

    $_SESSION["mobile"] = $mobile;
    $_SESSION["otp"] = $otp1;
    sendSMS("91" . $mobile, $sms_content, $email, $name);
    header("Location: otp.html");
} else {
    header("Location: register.html");
}



$stmt->close();
mysqli_close($connect);
