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
				<h3 class="box-title">List</h3>
			</div>
			<div class="box-body">
				<table class="table table-hover small">
					<thead>
						<tr>
							<th>Code</th>
							<th>Description</th>
							<th>Tile Image</th>
							<th>Banner Image</th>
							<th style="width: 57px;">
								<a href="destination/add" class="text-success">
									<span class="glyphicon glyphicon-plus-sign"></span>
								</a>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $key => $value) {
							?>
							<tr>
								<td><?php echo $value->code; ?></td>
								<td><?php echo strtoupper($value->description); ?></td>
								<td></td>
								<td></td>
								<td>
									<a href="destination/update/<?php echo $value->id; ?>">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="destination/delete/<?php echo $value->id; ?>" class="text-danger" onclick="confirm('Are you sure?')">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
<?php include('templates/footer.php'); ?>