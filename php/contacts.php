<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="banner-area banner_contacts">
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
            <li><a href="../html/flights.html">Flights</a></li>
            <li><a href="donations.php">Donations</a></li>
        </ul>
    </nav>
    
    <div class="content-area content-area-contacts">
<div class="contact_us"> 
    
    <h1>Contact us</h1>

<div class="form_container">
<form action="contact-form.php" id="form" method="post">
<input type="text" id="name" name="name" placeholder="Name"><br><br>
<p class="error_form" id="name_error_message"></p>
<input type="text" id="email" name="email" placeholder="Email"><br><br>
<p class="error_form" id="email_error_message"></p>
<input type="text" id="message" name="message" placeholder="Message"><br><br>
<input type="submit" id="submit" value="Send" name="submit">
<br>
<p id="validationText"></p>
</form>
</div>
</div>
</div>
</div>
</header>
<script src="../javascript/contacts-validation.js"></script>
<script src="../javascript/validation-functions.js"></script>
</body>
</html>