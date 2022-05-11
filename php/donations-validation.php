<?php

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$donation_sum = $_POST['donation_sum'];

include('validation-functions.php');

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $phone_error == NULL
 && $address_error == NULL && $donation_sum_error == NULL){
    echo "Succes!";
}else{
    echo $fname_error . " <br> " . $sname_error . " <br> " . $email_error . " <br> " . $phone_error
     . " <br> " . $address_error . " <br> " . $donation_sum_error;
}

?>