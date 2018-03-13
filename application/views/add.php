<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="index.php?/user/add" method="post">
		<?php echo form_error('title'); ?>
		<input type="text" name="title" id="" placeholder="title"><br><br>
		<?php echo form_error('content'); ?>
		<textarea name="content" id="" cols="30" rows="10"></textarea><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>