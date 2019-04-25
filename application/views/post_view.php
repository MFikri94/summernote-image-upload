<!DOCTYPE html>
<html>
<head>
	<title>Post Article</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/summernote/summernote-bs4.css';?>">
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
				<form action="<?php echo site_url('post/save');?>" method="post">
				  <div class="form-group">
				    <label>Title</label>
				    <input type="text" name="title" class="form-control" placeholder="Title" required>
				  </div>
				  <div class="form-group">
				    <label>Contents</label>
				    <textarea id="summernote" name="contents"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.0.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.bundle.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/summernote/summernote-bs4.js';?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
			        onImageUpload: function(image) {
			            uploadImage(image[0]);
			        },
			        onMediaDelete : function(target) {
			            deleteImage(target[0].src);
			        }
				}
			});

			function uploadImage(image) {
			    var data = new FormData();
			    data.append("image", image);
			    $.ajax({
			        url: "<?php echo site_url('post/upload_image')?>",
			        cache: false,
			        contentType: false,
			        processData: false,
			        data: data,
			        type: "POST",
			        success: function(url) {
						$('#summernote').summernote("insertImage", url);
			        },
			        error: function(data) {
			            console.log(data);
			        }
			    });
			}

			function deleteImage(src) {
			    $.ajax({
			        data: {src : src},
			        type: "POST",
			        url: "<?php echo site_url('post/delete_image')?>",
			        cache: false,
			        success: function(response) {
			            console.log(response);
			        }
			    });
			}

		});
		
	</script>
</body>
</html>