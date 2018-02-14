<?php 

// Allow the config
	define('_CONFIG_', true);
// Require the config
	require_once "inc/config.php";
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="follow">
<title>Page Title</title>

<head>
    
    <base href="/" />
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css" />    

 </head>

<body>
       
	 <div class="uk-section uk-container">
    
    <?php
    echo "Hello World Today is: ";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
?>
<p>
	<a href="/login-system/login.php">Login</a>
	<a href="/login-system/register.php">Register</a>
</p>
   </div>

   <?php require_once "inc/footer.php"; ?>                                                                                      
</body>
</html>    