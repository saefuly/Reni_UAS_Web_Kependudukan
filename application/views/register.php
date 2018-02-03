<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DATA PENDUDUK - Registrasi User</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title">
	<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen" title="no title">
	<link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style4.css" />
	
	<style>
		.butt-new{
			background-color: #fc3468;
			color: #fff;
		}
		
		.butt-new:hover{
			background-color: #ff084a;
			cursor:pointer;
		}
		
		a{
			color: #fc3468;
			text-decoration: none;
		}
		
		a:hover{
			color: #ff084a;
			text-decoration: none;
		}
	</style>
  </head>
  <body>
	<ul class="cb-slideshow">
		<li><span>Image 01</span></li>
		<li><span>Image 02</span></li>
		<li><span>Image 03</span></li>
		<li><span>Image 04</span></li>
		<li><span>Image 05</span></li>
		<li><span>Image 06</span></li>
	</ul>
<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
		<header style="text-align: center;">
			<h1>Registrasi User</h1>
		</header>
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
			<div class="col-md-4">
			</div>
			<div class="col-md-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="user_name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Age" name="user_age" type="number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Mobile No" name="user_mobile" type="number" value="">
                              </div>

                              <input class="btn btn-lg btn-block butt-new" type="submit" value="Register" name="register" >

                          </fieldset>
                      </form>
                      <center><font style="color: white;"><br>Already registered ?</font><b><a href="<?php echo base_url('user/login_view'); ?>"> Login here</a></b></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>
