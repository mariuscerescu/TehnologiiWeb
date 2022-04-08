<?php
$success = "Success!";
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

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

if(empty($password)){
    $password_error = 'Your password is not inserted';
}elseif(strlen($password) < 8){
    $password_error = 'The password needs to be at least 8 characters';
}

if($password !== $password2){
    $password_error2 = 'Passwords Did not Matched';
}

include('sign_up.php');
?>