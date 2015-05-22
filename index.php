<!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Check IPs</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Check Ips</h1>
		
		<form id="upload_csv" class="form-inline" action="upload.php" method="post" enctype="multipart/form-data">
		    <input type="text" name="text_val" value="text_value_fjdslakfjdkl">
		    <textarea name="text_area">text_area_fjdsalkfjdkfl</textarea>
		    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" multiple>
		    <input id="btn" class="btn" type="submit" value="Upload Image" name="submit">
		</form>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<!-- Scripts -->
		<script src="scripts.js"></script>
	</body>
</html>
<?php
