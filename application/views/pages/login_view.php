<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>maNga</title>

		<link href="<?php echo base_url(); ?>styles/login-box.css"
		rel="stylesheet" type="text/css" />
		<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico"
		type="image/x-icon" />
	</head>
	<body class="back_color">
		<div id="parent-login-box">
			<div id="login-box">
				<div id="login-box-top">
					<H2>LOGIN</H2>
					<a href="<?php echo base_url() ?>"><img
					src="<?php echo base_url() ?>images/logo.png" class="logo"
					title="Mail"> </a>
				</div>
				<?php echo form_open('login/validate'); ?>

				<div id="login-box-name" style="margin-top: 20px;">
					<?php echo form_label("Your email or username ",'username')?>
				</div>
				<div id="login-box-field">
					<?php
					$userId = array('name' => 'username', 'id' => 'username', 'class' => 'form-login', 'maxlength' => '32', 'placeholder' => 'example@xyz.com', 'title' => 'Valid email id', 'value' => '');
					echo form_input($userId);
					echo form_error('username', '<div class="error">', '</div>');
					?>
				</div>

				<div id="login-box-name">
					<?php echo form_label("Your password ",'password')?>
				</div>
				<div id="login-box-field">
					<?php
					$password = array('name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-login', 'value' => '', 'maxlength' => '32', 'title' => 'Password must be alpha number & six characters long');
					echo form_input($password);
					echo form_error('password', '<div class="error">', '</div>');
					?>
				</div>

				<div>
					<?php
					$button = array('class' => 'login-box-button', 'name' => 'login');
					echo form_submit($button);
					?>
				</div>

				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- login form end -->
		<div id="footer_content">
			<p>
				<!-- <label>&#169; <a href="<?php echo base_url()?>">Simple Blog</a>, PJ, 2012</label> -->
			</p>
		</div>
		</div>
	</body>
</html>
