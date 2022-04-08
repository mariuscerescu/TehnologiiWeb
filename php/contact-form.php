<?php
$name = $_POST['name'];
$email = $_POST['email'];
$success = "Success!";

if(empty($name)){
    $name_error = 'Your name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Your name should contain only characters';
}

if(empty($email)){
    $email_error = 'Your Email is not inserted';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'Your Email is not valid';
}

include('contacts.php');
?>
