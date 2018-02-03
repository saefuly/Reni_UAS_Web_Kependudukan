<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DATA PENDUDUK - Registrasi User</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen" title="no title">
	<link rel="stylesheet" href="../assets/css/bootstrap.css" media="screen" title="no title">
	<link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style4.css" />
	
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
	<center>
    <div class="container">
		<header style="text-align: center;margin-bottom: 75px;">
			<h1>Selamat Datang di Halaman Data Penduduk</h1>
			<h2>Website ini digunakan untuk memanage data penduduk</h2>
		</header>
		
		<?php
			$success_msg= $this->session->flashdata('success_msg');
			$error_msg= $this->session->flashdata('error_msg');

			if($success_msg){
		?>
			<center>
			<div class="alert alert-success" style="width: 350px;">
				<?php echo $success_msg; ?>
			</div>
			</center>
			<?php
			}
		  if($error_msg){
			?>
			<center>
			<div class="alert alert-danger" style="width: 350px;">
			  <?php echo $error_msg; ?>
			</div>
			</center>
			<?php
		  }
		?>
		<center>
			<div style="align: center; width: 350px;">
				<form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
					<fieldset>
						<div class="form-group"  >
							<input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="user_password" type="password" value="">
						</div>
						<input class="btn btn-lg btn-block butt-new" type="submit" value="Login" name="login">

					</fieldset>
				</form>
				<center><br><font style="color: white;">Not registered ? </font><b><a href="<?php echo base_url('user'); ?>">Register here</a></b></center><!--for centered text-->

			</div>
		</center>
		</div>
	</center>

  </body>
</html>
