<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

include "validation-functions.php";

$result = $name_error . " <br> " . $email_error;

if($name_error == NULL && $email_error == NULL){
    echo "Succes!";
}else{
    echo $result;
}
?>
