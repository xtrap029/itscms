<?php include('templates/header.php'); ?>
<body>
<div class="login-box">
	<div class="login-logo">
		<b>Admin</b>ITS
	</div>
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p><br>
		<form method="post">
			<?php if(isset($error)) echo "<p class='text-red'>" .$error."</p>";?>
			<div class="form-group has-feedback <?php echo (form_error('username') == '') ? '' : 'has-error'; ?>">
				<input type="text" class="form-control form-danger" name="username" placeholder="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username'];?>">
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
		  	</div>
		  	<?php echo form_error('username'); ?>
		  	<div class="form-group has-feedback <?php echo (form_error('password') == '') ? '' : 'has-error'; ?>">
				<input type="password" class="form-control" name="password" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		  	</div>
		  	<?php echo form_error('password'); ?>
			<div class="row">
				<div class="col-xs-4 col-xs-offset-8">
			  		<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
		  	</div>
		</form>

	</div>
</div>
<?php include('templates/footer.php'); ?>