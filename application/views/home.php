<?php include('templates/header.php'); ?>
<body class="layout-boxed skin-black">
<?php include('templates/sidebar.php'); ?>
<div class="content-wrapper" style="min-height: 976px;">
	<section class="content-header">
		<h1>
			Boxed Layout
			<small>Blank example to the boxed layout</small>
		</h1>
	</section>

	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Title</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				Start creating your amazing application!
			</div>
		</div>
	</section>
</div>
	<?php
	// foreach($gospels as $gospel){
	// 	echo "<div style='border:solid 1px black;width:300px;margin-bottom:10px'>";
	// 	echo "Title:".$gospel->title."<br>";
	// 	echo "Content:".$gospel->content;
	// 	echo "</div>";
	// }
	?>
<?php include('templates/footer.php'); ?>