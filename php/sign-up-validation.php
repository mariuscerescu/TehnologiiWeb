<?php

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

include('validation-functions.php');

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $password_error == NULL
 && $password_error2 == NULL){
    echo "Succes!";
}else{
    echo $fname_error . " <br> " . $sname_error . " <br> " . $email_error . " <br> " . $password_error
     . " <br> " . $password_error2;
}
?>