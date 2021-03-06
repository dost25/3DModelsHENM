<?php
  session_start();
?>
  <link rel='stylesheet' type='text/css' href='../css/style.css'>
  <!-- Ajax helper script for menu_logged_in.js / menu_logged_out.js -->
  <script src="../js/ajax.js" type="text/javascript"></script>
  <!-- Functionality for login button (depends whether user is logged in or not) -->
  <?php if (isset($_SESSION['user_id'])) { ?>
    <script src="../js/menu_logged_in.js" type="text/javascript"></script>
  <?php } else { ?>
    <script src="../js/tools.js" type="text/javascript"></script>
    <script src="../js/menu_logged_out.js" type="text/javascript"></script>
  <?php } ?>

  <!-- Allows opening dropdown menu if screen size is small -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  <div class='navbar navbar-inverse'>
    <div class='container'>
      <div class='navbar-header'>
        <!-- Button for smallest screens -->
<?php
  //Decide if this site is inside a separate widget
  if(isset($_GET["widget"]) && $_GET["widget"] == "true")
  {
    //we have to link to the widget versions:
    print("
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#henm-nav-bar'>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href='welcome.php?widget=true'>
          <img src='../images/logo.png' height='30' alt='HENM: 3D Models'>
        </a>
      </div>
      <div id='henm-nav-bar' class='collapse navbar-collapse'>
        <ul class='nav navbar-nav pull-right mainNav'>
	        <li><a href='welcome.php?widget=true'>Home</a></li>
          <li><a href='courses.php?widget=true'>Courses</a></li>
          <li><a href='overview.php?widget=true'>Models</a></li>
          <li><a href='upload.php?widget=true'>Upload</a></li>
          <li><a href='help.php?widget=true'>Help</a></li>");
  }
  else
  {
    //we have to link to the non-widget versions:
    print("
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#henm-nav-bar'>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href='welcome.php'>
          <img src='../images/logo.png' alt='HENM: 3D Models'>
        </a>
      </div>
      <div id='henm-nav-bar' class='collapse navbar-collapse'>
        <ul class='nav navbar-nav pull-right mainNav'>
	        <li><a href='welcome.php'>Home</a></li>
          <li><a href='courses.php'>Courses</a></li>
          <li><a href='overview.php'>Models</a></li>
          <li><a href='role.php'>ROLE</a></li>
          <li><a href='upload.php'>Upload</a></li>
          <li><a href='help.php'>Help</a></li>");
  }
?>
          <!-- Button will show "login" or "logout" based on current login status of user.
            If user_id is set, the user is currently logged in -->
          <li>
            <a href='#' id='menu_login'>
            <?php if (isset($_SESSION['user_id'])) { echo ("Logout"); } else { echo("Login"); } ?>
                  </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </br></br>
