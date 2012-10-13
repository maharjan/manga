<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>maNga</title>
		<link href="<?php echo base_url(); ?>styles/nav.css"
		type="text/css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>styles/mainstyler.css"
		type="text/css" rel="stylesheet" />
		<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico"
		type="image/x-icon" />

		<script type="text/javascript" src="<?php echo base_url()?>scripts/nav.js"></script>
	</head>
	<body class="back_color" onload="not_login('nav_extra','login', <?php echo $login; ?>)">
		<div class="back_img">
			<div id="headerPanel">
				<div id="subHeaderPanel">
					<a href="<?php echo base_url() ?>"><img
					src="<?php echo base_url() ?>images/logo.png" class="logo"
					title="Project: maNga"></a>
				</div>
				<ul id="navigation">
					<li class="home">
						<a href="<?php echo base_url()?>main"><strong>Home</strong> </a>
					</li>
					<div id="nav_extra">
						<li>
							<a href="<?php echo base_url()?>main/add"><strong>Add Manga</strong></a>
							<!-- <ui>
								<li>
								    <a href="<?php echo base_url()?>main/add"><strong>Add Genre</strong></a>
								</li>
							</ui> -->
						</li>
						<li>
							<a href="<?php echo base_url()?>main/edit"><strong>Edit Manga</strong></a>
						</li>
						<li class="last">
							<a href="<?php echo base_url()?>setting/change"><strong>Change
							Password</strong></a>
						</li>
						<li class="logout">
							<a href="<?php echo base_url()?>main/logout"><strong>Logout</strong></a>
						</li>
					</div>
					<div id="login">
						<li class="logout">
							<a href="<?php echo base_url()?>main/login"><strong>Login</strong></a>
						</li>
					</div>
				</ul>
			</div>
