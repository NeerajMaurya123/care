<?php
session_start();
include 'dbConn.php';
include 'send_sms.php';
global $connect;

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$stmt1 = $connect->prepare('select * from doctors_data where mobile=?');
$stmt1->bind_param('s', $mobile);
$stmt1->execute();
$result1 = $stmt1->get_result();
if ($row1 = $result1->fetch_assoc()) {
    echo "This mobile no. is already exists in our data!";
} else {
    $otp = rand(100000, 999999);
    $date2 = date('Y-m-d');
    $stmt = $connect->prepare('insert into doctors_data(name,mobile,email,otp,otp_date) VALUES (?,?,?,?,?)');
    $stmt->bind_param('sssss', strtoupper($name), $mobile, strtolower($email), $otp, $date2);
    $stmt->execute();



    if ($stmt->affected_rows > 0) {
        $stmt->close();
        $_SESSION["mobile"] = $mobile;
        $sms_content = "Welcome to Online Aavedan: Your verification code is " . $otp;
        sendSMS("91" . $mobile, $sms_content, $email, $name);
        header("Location: otp.html");
    } else {
        echo 'something went wrong!';
    }
}

$stmt1->close();
mysqli_close($connect);
