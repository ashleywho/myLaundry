<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up!</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/myLaundry/rsc/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/myLaundry/rsc/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar    navbar-light navbar-white-->
  <nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color: #1A659E;">
    <div class="container">
      <a href="<?= base_url('test')?>" class="navbar-brand">
        <!--<img src="/myLaundry/rsc/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light">myLaundry</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="collapse navbar-collapse order-3" id="navbarCollapse"> -->
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url('test')?>" class="nav-link">Home</a>
          </li>
          <li>
          	<a href="<?= base_url('user/login')?>" class="nav-link">Login</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li> -->

              <!-- Level two dropdown-->
              <!-- <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li> -->

                  <!-- Level three dropdown-->
                  <!-- <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li> -->
                  <!-- End Level three -->

                 <!--  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li> -->
              <!-- End Level two -->
            </ul>
          </li>
        </ul>
      </div>

     
  </nav>
  <!-- /.navbar -->
</div>
<?php echo form_open('user/register') ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	<br><br>
	 <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <!-- left column -->
	          <div class="col-md-3 col-md-offset-3 mx-auto" >
	            <!-- general form elements -->
	            <div class="card card-primary" >
	              <div class="card-header" style="background-color: #1A659E">
	                <h3 class="card-title">Register</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form>
	                <div class="card-body">
	                	<!--Box-->
	                  <div class="form-group">
	                    <label for="inputEmail">Email address</label>
	                    <input type="email" class="form-control" name="custEmail" placeholder="Email Address" value="<?php echo set_value('custEmail');?>" required >
	                  </div>
	                  <!--Box-->
	                  <div class="form-group">
	                    <label for="inputPassword">Password</label>
	                    <input type="password" class="form-control" name="custPassword" placeholder="Password" value="<?php echo set_value('custPassword');?>" required>
	                  </div>
	                  <!--Box-->
	                  <div class="form-group">
	                    <label for="inputFName">First Name</label>
	                    <input type="text" class="form-control" name="custFName" placeholder="First Name" value="<?php echo set_value('custFName');?>" required>
	                  </div>
	                  <!--Box-->
	                  <div class="form-group">
	                    <label for="inputLName">Last Name</label>
	                    <input type="text" class="form-control" name="custLName" placeholder="Last Name" value="<?php echo set_value('custLName');?>" required>
	                  </div>
	                  <!--Box-->
	                  <div class="form-group">
	                    <label for="inputPhoneNumber">Phone Number</label>
	                    <input type="tel" class="form-control" name="custPhone" placeholder="Phone Number" pattern="[0-9]{3}[0-9]{7}" value="<?php echo set_value('custPhone');?>" required>
	                  </div><br>
	                  <div class="form-group">
	                  	<center><button class="btn btn-block btn-dark" type="submit" name="register" style="width: 150px; " width="150" name="">JOIN US</button></center>
	                  </div>
	              </div>
	          </form>
	      </div>
	  </div>
	</div>
</div>
</section>
</body>
</html>
          </form>

          <?php
          	echo form_close();
          ?>




                 
   