<?php
include 'db.php';

?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Glide - The E-Commerce Portal</title>
    <meta name="author" content="name" />
    <meta name="description" content="description here" />
    <meta name="keywords" content="keywords,here" />
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <link
      rel="shortcut icon"
      href="favicon.ico"
      type="image/vnd.microsoft.icon"
    />
    <link rel="stylesheet" href="css/materialize.min.css" type="text/css" />
    <script src="js/materialize.min.js"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <style>
      body {
        background-color: ghostwhite;
      }
      .card-image {
        height: 150px; /* Your height here */
        overflow: hidden;
      }
      .btn-large {
        border-radius: 40px !important;
        width: 200px;
        margin: 10px;
      }
      .card-content {
        height: 100px;
      }
      span {
        color: #000;
      }
    </style>
  </head>
  <body>
    <div class="row">
    <div class="navbar-fixed">

      <nav>
        <div class="blue nav-wrapper">
          <a href="#" data-target="slide-out" class="sidenav-trigger"
            ><i class="material-icons">menu</i></a
          >

          <a class="brand-logo center" style="font-size:20px">Admin Panel</a>
        </div>
      </nav>
      </div>
      <ul id="slide-out" class="sidenav">
        <li>
          <div class="user-view">
            <div class="background">
              <img
                src="images/bg.jpg"
              />
            </div>
            <a href="#user"
              ><img
                class="circle"
                src="data:image/png;base64,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"
            /></a>
           <a > <span class="white-text name"><?php echo "ADMIN" ?></span></a>
            <span class="white-text email" style="margin-bottom:20px;padding:0">
              <?php echo "ACCOUNT" ?></span></a>

          </div>
        </li>
        <li>
            <a href="home.php"><i class="material-icons">restaurant_menu </i>Home</a>
          </li>
          <li><div class="divider"></div></li>
          <li id="placed">
            <a   href="viewData.php"><i class="material-icons">shopping_cart
</i>View Customer Data</a>
          </li>
          <li id="placed">
            <a   href="placed.php"><i class="material-icons">shop</i>Placed Orders</a>
          </li>
          <li id="completed">
            <a  href="completed.php"><i class="material-icons">done</i>Completed Orders</a>
          </li>
 <li id="edit">
            <a  href="ref.php"><i class="material-icons">card_giftcard</i>Referral Code</a>
          </li>
          <li id="edit">
            <a  href="edit.php"><i class="material-icons">edit</i>Edit Profile</a>
          </li>

        <li>
          <a class="red waves-effect white-text" id="logLink" href="logout.php"
            ><i style="color:white" class="material-icons"
              >power_settings_new </i
            ><p style="display:inline" id="logText">Logout</p></a
          >
        </li>
      </ul>
    </div>

    <div class="row">
    <div class="container">

<?php
if (isset($_POST['editName'])) {
    echo '<form id="myform1" action="editAdmin2.php" method="post">
    <div class="input-field col s12">
          <input id="last_name" type="text" name="name" class="validate" required >
          <label for="last_name" >Enter new Name</label>

          <button type="submit" class="sub waves-effect green btn btn-success" style="" name="newName">SUBMIT</button>

        </div></form>';
}
?>

</div>
   </div>
   </body>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>

<script>
    $(document).ready(function() {
      $(".sidenav").sidenav();
    });
    var value = $.jStorage.get('fitid');
    console.log(value);

    </script>

</html>
