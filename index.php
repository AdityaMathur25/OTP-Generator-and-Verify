<?php
include 'mail.php';

if (isset($_POST["send-otp"])) {
    $min = 10000; // Minimum value for a 5-digit number
    $max = 99999; // Maximum value for a 5-digit number
    $otp = mt_rand($min, $max);
    $email = $_POST['email'];
    // echo $otp;
    // echo $email;
    $subject = "Your Otp for the site ";
    $message = 'Your OTP is ' . $otp;
    session_start();
    $_SESSION['otp'] = $otp;
    sendm($email, $subject, $message);
    header('location: verify.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Generator and verify</title>
</head>

<body>
    <form method="post" >
        <input type="email" name="email" placeholder="Enter Your Email Here">
        <button type="submit" name="send-otp">Send Message</button>
    </form>
</body>

</html>