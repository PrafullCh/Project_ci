<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<?= link_tag('assets/style2.css');?>
		<style type="text/css">
			.msg{
				display: absolute;

			}
			.msg *{
				color: red;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>

		

		<div class="loginBox">
			
			<img src="<?= base_url('images/user.png');?>" class="user">
			<h2>Log In Here</h2>
			<form method="post" action="<?= base_url('sign_up/login');?>">
				<p>User Id</p>
				<input type="text" name="uid" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="pw" placeholder="••••••">
				<?php if($this->session->flashdata('fail_msg')):?>
				<div class="msg"><h4><?= $this->session->flashdata('fail_msg');?></h4><div>
				<?php endif;?>
				<input type="submit" name="" value="Sign In">
				<a href="<?= base_url('loadbooks/fg_pw');?>">Forget Password</a>
			</form>
		</div>
	</body>
</html>
