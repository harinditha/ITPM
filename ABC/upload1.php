<?php

	include("includes/header.php");
	include("includes/config.php");
	include("includes/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload files</title>
</head>
<body>
	<form action="upload2.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit"/>UPLOAD</button>
	</form>
</body>
</html>