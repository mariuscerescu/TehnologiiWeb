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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<p id="validationText"></p>
</form>
</div>
</div>
</div>
</div>
</header>
<script>
$(document).ready(function(){
$("form").submit(function(event){
event.preventDefault();
var fname = $("#fname").val();
var sname = $("#sname").val();
var email = $("#email").val();
var phone = $("#phone").val();
var address = $("#address").val();
var donation_sum = $("#donation_sum").val();
$("#validationText").load("donations-validation.php", {
    fname: fname,
    sname: sname,
    email: email,
    phone: phone,
    address: address,
    donation_sum: donation_sum
});
});
});
</script>
<script src="../javascript/donations-validation.js"></script>
</body>
</html>