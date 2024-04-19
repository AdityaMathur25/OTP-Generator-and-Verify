<?php
//code by aditya.m
session_start();
$otp = $_SESSION['otp'];

if (isset($_POST["verify-otp"])) {
    $check = $_POST['check-otp'];
    if ($check == $otp) {
        echo "verification success otp is correct";
    }
    else {
        echo "can not verify your otp";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Otp here</title>
</head>

<body>
    <form method="post">
        <input type="text" name="check-otp" placeholder="Enter otp here to verify">
        <button type="submit" name="verify-otp">Verify Otp</button>
    </form>
</body>

</html>