<?php

	include("includes/header.php");
	include("includes/config.php");

	session_start();

	include("includes/functions.php");

	$studentId = $_SESSION['StudentId'];

	$result  = mysqli_query($con, "SELECT studentID, firstName, lastName, image FROM students 
								   WHERE studentID = '$studentId'");
				$retrive = mysqli_fetch_array($result);
				$StudentId = $retrive['studentID'];
				$firstName = $retrive['firstName'];
				$lastName = $retrive['lastName'];
				$Image = $retrive['image'];

	if(loged_In()){
		header("location:login.php");
	}else if(isset($_COOKIE['name'])){
		echo "you logged in using cookies";
	}
?>

<!DOCTYPE html>

	<title>ABC Institute | Student Welcome</title>

</head>

<style type="text/css">
	#body-bg{
		background-color: #ADD8E6;
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
		<div class="container" style="background-color:#fff; margin-top: 20px; margin-bottom: 20px; width: 1200px; height: 640px" >
			<?php echo $studentId; ?></br>
			<img src="save_images/<?php echo $Image ?>" style='float: left;width: 100px; height: 100px' >
				<a href="logout.php"><button class="btn btn-outline-success" style="float: right; margin-top: 20px" >LogOut</button></a></br>
					</br><h3 align="center"> Welcome <?php echo $firstName." ".$lastName; ?></h3>

		</div>
				
			</form>
	<footer>
		<p>ABC Insititute, copyright &copy; 2019</p>
	</footer>

</body>
</html>