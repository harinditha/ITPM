<?php
	include("includes/header.php");
	include("includes/config.php");
	include("includes/functions.php");

	$msg = ''; $msg1 = ''; $msg2 = ''; $msg3 = ''; $msg4 = '';

	$studentId =''; $nic=''; $password = ''; $cpassword = '';

	if(isset($_POST['submit'])){

		$studentId = $_POST['sID'];
		$nic = $_POST['nic'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if (empty($studentId)) {
				$msg = "<div class = 'error'>Please Enter Your Studnent ID </div>";
		}else if(strlen($studentId)<8) {
				$msg = "<div class = 'error'>Student ID must contain 8 charachters </div>";
		}else if(empty($nic)) {
				$msg1 = "<div class = 'error'>Please Enter Your NIC </div>";
		}else if(strlen($nic)<10){
				$msg1 = "<div class = 'error'>NIC must contain 10 charachters </div>";
		}else if (empty($password)) {
				$msg2 = "<div class = 'error'>Please Enter Your password </div>";
		}else if (strlen($password)<5) {
				$msg2 = "<div class = 'error'>Password must contain atleast 5 charachters </div>";
		}else if ($password != $cpassword) {
				$msg3 = "<div class = 'error'>Password is not match </div>";
		}else if (studentId_exists($studentId, $con)) {
				
				$result  = mysqli_query($con, "SELECT nic FROM students WHERE studentID = '$studentId'");
				$retrive = mysqli_fetch_array($result);
				$NIC = $retrive['nic'];
				if($nic==$NIC){
					
					mysqli_query($con, "UPDATE students SET password='$password' WHERE nic='$nic'");
						$msg4 = "<div class = 'success'> Password Changed Successfully </div>";
				}else{
					$msg1 = "<div class = 'error'>Your NIC is wrong </div>";
				}
		}else{
				$msg = "<div class = 'error'>Student ID does not exist </div>";
		}
	}
?>

<!DOCTYPE html>

	<title>ABC Institute | Forgot Password</title>

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
					<h3 align="center"> Forgot Password </h3></br>
						<?php echo $msg4; ?></br>
			<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					<label>Student ID </label>
					<input type="text" placeholder="" name="sID" class="form-control" 
						value="<?php echo $studentId ?>">
					<?php echo $msg; ?>
				</div>

				<div class="form-group">
					<label>NIC </label>
					<input type="text" placeholder="" name="nic" class="form-control" 
						value="<?php echo $nic ?>">
					<?php echo $msg1; ?>
				</div>

				<div class="form-group">
					<label>New Password</label>
					<input type="password" placeholder="" name="password" class="form-control">
					<?php echo $msg2; ?>
				</div>

				<div class="form-group">
				<label>Re-enter Password</label>
					<input type="password" name="cpassword" class="form-control">
					<?php echo $msg3; ?>
				</div>

				<center><input type="submit" value="Submit" name ="submit" class="btn btn-success"/></center></br>
				<center><a href="login.php">Back</a></center></br>
			</form>
				</div>
			</div>
		</div>
				
			
	<footer>
		<p>ABC Insititute, copyright &copy; 2019</p>
	</footer>

</body>
</html>