<?php

if(isset($name)){
if(empty($name)){
    $name_error = 'Your name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Your name should contain only characters';
}
}

if(isset($fname)){
if(empty($fname)){
    $fname_error = 'Your first name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Your first name should contain only characters';
}
}

if(isset($sname)){
if(empty($sname)){
    $sname_error = 'Your second name is not inserted';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = 'Your second name should contain only characters';
}
}

if(isset($email)){
if(empty($email)){
    $email_error = 'Your Email is not inserted';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'Your Email is not valid';
}
}

if(isset($phone)){
if(empty($phone)){
    $phone_error = 'Your phone is not inserted';
}elseif(!preg_match("/^((003737|003736)([0-9]){7})$/", $phone)){
    $phone_error = 'Your Phone Number is no valid';
}
}

if(isset($address)){
if(empty($address)){
    $address_error = 'Your Address is not inserted';
}
}

if(isset($donation_sum)){
if(empty($donation_sum)){
    $donation_sum_error = 'Your Donation Sum is not inserted';
}elseif(!preg_match("/^[1-9]+[0-9]*$/", $donation_sum)){
    $donation_sum_error = 'The Donation sum is not valid';
}
}

if(isset($password)){
if(empty($password)){
    $password_error = 'Your password is not inserted';
}elseif(strlen($password) < 8){
    $password_error = 'The password needs to be at least 8 characters';
}
}

if(isset($password)){
if($password !== $password2){
    $password_error2 = 'Passwords Did not Matched';
} 
}
?>