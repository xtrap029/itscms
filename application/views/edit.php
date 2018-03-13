<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="index.php?/user/edit/<?php echo $gospel->id;?>" method="post">
		<input type="text" name="title" id="" value="<?php echo $gospel->title;?>"><br>
		<textarea name="content"><?php echo $gospel->content;?></textarea><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>