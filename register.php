<?php
session_start();
error_reporting(0);

include('db.php');
if(isset($_SESSION["username"]))  
 {  
      header("location:home.php");  
 }  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Glide - The E-Commerce Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="myform" action="registercheck.php" autocomplete="off">
					<span class="login100-form-title p-b-26">
					Registration Portal
					</span>
					<span class="login100-form-title p-b-48">
					<p style="font-size:20px;font-weight:'thinner'">FitLite Oil Booking System</p>

					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" style="text-align:left;margin:0;padding:0"  required name="name">
						<span class="focus-input100" data-placeholder="Full Name"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" style="text-align:left;margin:0;padding:0"  required name="email">
						<span class="focus-input100" data-placeholder="Email ID"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" style="text-align:left;margin:0;padding:0"  required name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
			
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" style="text-align:left;margin:0;padding:0"  required name="contact">
						<span class="focus-input100" data-placeholder="Contact Number"></span>
					</div>
	
				
					<div class="wrap-input100 validate-input" >
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="text" style="text-align:left;margin:0;padding:0" required name="password">
						<span class="focus-input100"  data-placeholder="Password"></span>
					</div>
         <div style="text-align:center"> <p id="incorrect" ></p></div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" id="submit" class="login100-form-btn">
								Submit
							</button>
						</div>
					</div>

				</form>
				
			
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
  <script>
   $("#myform").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var url = $(this).attr("action"); // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#myform").serialize(), // serializes the form's elements.
             success: function(data)
             {
               if(data==="wrong")
{ alert("Some error occurred!");
}
else if (data==="done")
{
  alert("Success!");
  window.setTimeout(function(){ window.location = "home.php"; },0);
}

             }
      });
  });
  </script>
</body>

</html>
