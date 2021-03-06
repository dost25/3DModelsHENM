<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Collaborative Viewing of 3D Models </title>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom styles-->

	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/da-slider.css" />
	<link rel="stylesheet" href="../css/style.css">
  <!-- Styles form validation -->
  <link rel='stylesheet' type='text/css' href='../css/upload.css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
  <?php
    include("menu.php");
  ?>

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Create lecturer account</h1>
				</div>
			</div>
		</div>
	</header>
  </br></br>

	<section class="container">
    <!-- User input elements -->
		<div class="row flat">
			<div class="login-card">
				<h3 class="text-center">Register</h3>
        <div id="login">
          <form id="form_login">
            <input type="text" id="email" placeholder="Email" data-parsley-required="true" data-parsley-type="email"/>
            <input type="password" id="password" placeholder="Password" data-parsley-required="true" data-parsley-minlength="7"/>
            <input type="password" id="password_conf" placeholder="Confirm password" data-parsley-required="true" data-parsley-minlength="7" data-parsley-equalto="#password"/>
            <input type="button" id="btn_register" name="login" class="login login-submit" value="Create account">
            <img src="../images/ajax-loader.gif" style="display:none" id="register_loader">
          </form>
        </div>
        <div id="error">
        </div>
      </div>
    </div>
    <!-- Some user information text -->
    <div class="login-card">
      <b>What is the purpose of a 3DModels account?</b> <br>
      The account is required only for creating your own courses, uploading models and presenting models in <i>lecturer mode</i>.
      <b>As a student, you do not need to register.</b>
    </div>
	</section>

	<?php include("footer.php"); ?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <!-- Registration functionality -->
	<script src="../js/ajax.js" type="text/javascript"></script>
	<script src="../js/register.js" type="text/javascript"></script>
  <!-- Styling and JQuery -->
	<script src="../js/modernizr-latest.js"></script>
	<script src="../js/custom.js"></script>
  <!-- Form validation with Parsley -->
  <script src="../js/parsley.min.js"></script>
</body>
</html>
