<?php include('templates/header.php'); ?>
<body class="layout-boxed skin-black">
<?php include('templates/sidebar.php'); ?>
<div class="content-wrapper" style="min-height: 976px;">
	<section class="content-header">
		<h1>
			<span class="glyphicon glyphicon-map-marker"></span> Destination
			<small>Hotel Destination</small>
		</h1>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Update</h3>
			</div>
			<div class="box-body">
				<form method="post">
					<?php if(isset($error)) echo "<p class='text-red'>" .$error."</p>";?>
					<div class="form-group <?php echo (form_error('code') == '') ? '' : 'has-error'; ?>">
						<label class="text-muted">Code</label>
						<input type="text" class="form-control" name="code" placeholder="Code" value="<?php echo $data->code; ?>">
				  	</div>
				  	<?php echo form_error('code'); ?>
				  	<div class="form-group <?php echo (form_error('description') == '') ? '' : 'has-error'; ?>">
						<label class="text-muted">Description</label>
						<textarea name="description" class="form-control"><?php echo $data->description; ?></textarea>
					</div>
					<?php echo form_error('description'); ?>
					<div class="pull-right">
						<input type="submit" value="Save" class="btn btn-primary">
						<a href="<?php echo base_url(); ?>destination" class="btn btn-default">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<?php include('templates/footer.php'); ?>