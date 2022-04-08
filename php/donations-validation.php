<?php
$success = "Success!";
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$donation_sum = $_POST['donation_sum'];

if(empty($fname)){
    $fname_error = 'Your first name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Your first name should contain only characters';
}

if(empty($sname)){
    $sname_error = 'Your second name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = 'Your second name should contain only characters';
}

if(empty($email)){
    $email_error = 'Your Email is not inserted';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'Your Email is not valid';
}

if(empty($phone)){
    $phone_error = 'Your phone is not inserted';
}elseif(!preg_match("/^((003737|003736)([0-9]){7})$/", $phone)){
    $phone_error = 'Your Phone Number is no valid';
}

if(empty($address)){
    $address_error = 'Your Address is not inserted';
}

if(empty($donation_sum)){
    $donation_sum_error = 'Your Donation Sum is not inserted';
}elseif(!preg_match("/^[1-9]+[0-9]*$/", $donation_sum)){
    $donation_sum_error = 'The Donation sum is not valid';
}

include('donations.php');
?>