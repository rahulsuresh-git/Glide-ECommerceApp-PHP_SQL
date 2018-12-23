
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
body{
    background-color: ghostwhite
}
#parent{
  position: absolute;
  width: 100vw;
  height: 60px;
  top: 50%;
  margin-top: -30px;
  text-align: center;
}
.btn-large { border-radius: 40px !important;
width:200px;
margin:10px;
}

</style>
 </head>
  <body>
    <div class="row" id="parent">
        <div id="child">
     <div class="col s12">
            <a class="red waves-effect waves-light btn-large" href="home.php">Guest</a>
    </div>
    <div class="col s12">
        <a class="blue waves-effect waves-light btn-large" href="login.php">Login</a>
    </div>
</div>
      </div>
  </body>
</html>