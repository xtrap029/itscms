<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo "Welcome ".$this->session->userdata('user');?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	Home -- Gospels -- <a href="index.php?/user/add">Add</a> -- <a href="index.php?/user/logout">Logout</a><br><br>
	<?php
	foreach ($gospels as $gospel) {
		echo "<div style='border:solid 1px black;width:300px;margin-bottom:10px'>";
		echo "Title:".$gospel->title."<br>";
		echo "Content:".$gospel->content;
		echo "<a href='index.php?/user/edit/".$gospel->id."'>Edit</a>";
		echo "<a href='index.php?/user/delete/".$gospel->id."'>Delete</a>";
		echo "</div>";
	}
	?>
</body>
</html>