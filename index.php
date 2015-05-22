<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload File Ajax jQuery</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css" media="screen">
			div#wrap {
				width: 600px;
				margin: 0 auto;
			}
			.btn-file {
			    position: relative;
			    overflow: hidden;
			}
			.btn-file input[type=file] {
			    position: absolute;
			    top: 0;
			    right: 0;
			    min-width: 100%;
			    min-height: 100%;
			    font-size: 100px;
			    text-align: right;
			    filter: alpha(opacity=0);
			    opacity: 0;
			    outline: none;
			    background: white;
			    cursor: inherit;
			    display: block;
			}
			#image-list{
				list-style: none;
			}
			#image-list img{
				width: 100%;
				height: auto;
			}
		</style>
	</head>
	<body>
		<div id="wrap">
			<h1 class="text-center">Upload File Ajax jQuery</h1>
			
			<form id="upload_file" class="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data">
			    <div class="form-group">
			    	<label for="exampleInputEmail1">Text</label>
			    	<input class="form-control" type="text" name="text_val" value="text_content">
			    </div>
			    <div class="form-group">
			    	<label for="exampleInputEmail1">Text Area</label>
			    	<textarea class="form-control" rows="3" name="text_area">text_area_content</textarea>
			    </div>
			    <div class="form-group">
		            <div class="input-group">
		                <span class="input-group-btn">
		                    <span class="btn btn-primary btn-file">
		                        Browse&hellip; <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" multiple>
		                    </span>
		                </span>
		            </div>
		            <ul id="image-list">

					</ul>
				</div>
				<div class="form-group">
			    	<input id="btn" class="btn" type="submit" value="Upload File" name="submit">
			    </div>
			</form>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<!-- Scripts -->
		<script src="scripts.js"></script>

	</body>
</html>
<?php
