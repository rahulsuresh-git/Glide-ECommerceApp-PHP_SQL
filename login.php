
<?php
session_start();
error_reporting(0);
include 'db.php';
if (isset($_SESSION["username"])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Glide - The E-Commerce Portal</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="css/materialize.min.css" type="text/css">
  <script src="scripts/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
	input[type="email"] {
    text-transform: lowercase;
}
</style>
 </head>
  <body>
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
#incorrect{
  display:none;
  visibility:hidden;
  text-align:center;
}
</style>
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="myform" action="check.php" >
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
					<p style="font-size:20px;font-weight:'thinner'">FitLite Oil Booking System</p>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" style="text-align:left;margin:0;padding:0"  id="uname" required name="username">
						<span class="focus-input100" data-placeholder="Email ID"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" style="text-align:left;margin:0;padding:0" id="pass" required name="password">
						<span class="focus-input100"  data-placeholder="Password"></span>
					</div>
         <div style="text-align:center"> <p id="incorrect" ></p></div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" id="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

				</form>

				<!-- <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
						<center>	<a href="register.php"><button  id="register" class="login100-form-btn">
								Register
							</button></a></center>
						</div>
					</div>
			</div> -->
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
{  document.getElementById("incorrect").style.color="red";
  document.getElementById("incorrect").innerHTML="Incorrect username or password!";
  document.getElementById("incorrect").style.display="inline";
  document.getElementById("incorrect").style.visibility="visible";
  console.log(data);}
else if (data==="done")
{
  document.getElementById("incorrect").style.display="inline";
  document.getElementById("incorrect").style.visibility="visible";
  document.getElementById("incorrect").style.color="green";
  document.getElementById("incorrect").innerHTML="Success!";
  window.setTimeout(function(){ window.location = "home.php"; },100);
}
             }
      });
	});
	$("input#uname").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
  </script>
</body>

</html>