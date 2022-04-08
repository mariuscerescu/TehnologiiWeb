<?php 
if(!isset($success)){
    $success = '';
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div class="banner-area banner_donations">
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="../html/flights.html">Flights</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
        </ul>
    </nav>
    
    <div class="content-area content-area-contacts">
<div class="contact_us"> 
    
    <h1>Donation Form</h1>


<div class="form_container">
<form action="donations-validation.php" id="form" method="post">
<input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
<p class="error_form" id="fname_error_message"></p>
<input type="text" id="sname" name="sname" placeholder="Second Name"><br><br>
<p class="error_form" id="sname_error_message"></p>
<input type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="email_error_message2"></p>
<input type="number" id="phone" name="phone" placeholder="Phone number"><br><br>
<p class="error_form" id="phone_error_message"></p>
<input type="text" id="address" name="address" placeholder="Address"><br><br>
<p class="error_form" id="address_error_message"></p>
<input type="number" id="donation_sum" name="donation_sum" placeholder="Donation Sum"><br><br>
<p class="error_form" id="donation_sum_error_message"></p>
<input type="submit" id="submit" value="Send" name="submit">
<?php if(isset($fname_error)){ ?>
    <p class="php_error"> <?php echo $fname_error ?> </p>
<?php } ?>
<?php if(isset($sname_error)){ ?>
    <p class="php_error"> <?php echo $sname_error ?> </p>
<?php } ?>
<?php if(isset($email_error)){ ?>
    <p class="php_error"> <?php echo $email_error ?> </p>
<?php } ?>
<?php if(isset($phone_error)){ ?>
    <p class="php_error"> <?php echo $phone_error ?> </p>
<?php } ?>
<?php if(isset($address_error)){ ?>
    <p class="php_error"> <?php echo $address_error ?> </p>
<?php } ?>
<?php if(isset($donation_sum_error)){ ?>
    <p class="php_error"> <?php echo $donation_sum_error ?> </p>
<?php } ?>
<?php if(!isset($fname_error) && !isset($sname_error) && !isset($email_error) && !isset($phone_error) && !isset($donation_sum_error) && !isset($address_error)){ ?>
    <p class="php_error"> <?php echo $success ?> </p>
<?php } ?>
</form>
</div>
</div>
</div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/donations-validation.js"></script>
</body>
</html>