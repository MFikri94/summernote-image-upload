<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
				<h1><?php echo $title;?></h1>
				<p><?php echo $contents;?></p>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.0.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.bundle.js';?>"></script>
</body>
</html>