<?php
	include("includes/header.php");
	include("includes/config.php");
	include("includes/functions.php");
												
						if(isset($_POST['submit'])){
							if(mail("rhglakmal@gmail.com", $_POST['subject1'], $_POST['msg1'])){
								echo "Mail send";
							}else{
								echo "Failed";
							}
						}
?>



<!DOCTYPE html>

	<title>ABC Institute | Send Mail</title>

</head>

<style type="text/css">
	#body-bg{
		background: url("images/q.JPG")center no-repeat fixed;
	}

	.error{
		color: red;
	}

	.success{
		color: green;
		font-weight: bold;
	}
</style>

<body id="body-bg">
		<div class="container">
			<div class="login-form col-md-4 offset-md-4">
				<div class="jumbotron" style="margin-top: 20px; padding-top: 20px; padding-bottom: 1px">
					<h3 align="center"> Send Mail </h3>
					
			<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label>Subject</label>
					<input type="text" placeholder="" name="subject1" class="form-control">
				</div>

				<div class="form-group">
					<label>Message</label>
					<input type="text" placeholder="" name="msg1" class="form-control">
				</div>

				<center><input type="submit" value="Submit" name ="submit" class="btn btn-success"/></center></br>
				<center><a href="home1.php">Back</a></center></br>
			</form>
				</div>
			</div>
		</div>
				
			
	<footer>
		<p>ABC Insititute, copyright &copy; 2019</p>
	</footer>

</body>
</html>