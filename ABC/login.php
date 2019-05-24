<?php
	include("includes/header.php");
	include("includes/config.php");
	include("includes/functions.php");
	
	//
	session_start();

	$msg = ''; $msg2 = '';

	$studentId='';

	if(isset($_POST['submit'])){

		$studentId = $_POST['StudentId'];
		$password = $_POST['password'];

		$checkbox = isset($_POST['check']);

		if (empty($studentId)) {
			$msg = "<div class = 'error'>Please Enter Your Student ID </div>";
		}elseif (empty($password)) {
			$msg2 = "<div class = 'error'>Please Enter Your Passowrd </div>";
		}else if (studentId_exists($studentId, $con)) {
			$pass = mysqli_query($con, "SELECT password FROM students WHERE studentID = '$studentId'");
			$pass_w = mysqli_fetch_array($pass);
			$dpass = $pass_w['password'];
				if($password!=$dpass){
					$msg2 = "<div class = 'error'>Your Password is Wrong</div>";	
				}else{

					$_SESSION['StudentId']=$studentId;

					//to keep me logged in
					if($checkbox =='on'){
						setcookie('name', $studentId,time()+300);
					}
					header("location:student_profile.php");
				}
		}else{
			$msg = "<div class = 'error'>Your Student ID doesn't Exist. Please register before you LogIn </div>";
		}
	}
?>

<!DOCTYPE html>

	<title>ABC Institute | Login</title>

</head>

<style type="text/css">
	#body-bg{
		background: url("images/st3.jpg")center no-repeat fixed;
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
				<div class="jumbotron" style="margin-top: 50px; padding-top: 20px; padding-bottom: 10px">
					<h2 align="center"> LogIn </h2></br>

					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Student ID </label>
							<input type="text" placeholder="" name="StudentId" class="form-control"
								value="<?php echo $studentId ?>">
							<?php echo $msg; ?>
						</div>

						<div class="form-group">
							<label>Password </label>
							<input type="password" placeholder="" name="password" class="form-control">
							<?php echo $msg2; ?>
						</div>

						<div class="form-group">
							<input type="checkbox" name="check"/>
							&nbsp; Keep Me Logged In
						</div>

						<center><input type="submit" value="Login" name ="submit" class="btn btn-success"/></center>
						</br>	
						<center><a href="forgot.php">Forgot Password ?</a></center></br>
						<center><a href="signup.php">Click Here to Register</a></center></br>
					</form>
				</div>
			</div>
	</div>

					
<footer>
	<p>ABC Insititute, copyright &copy; 2019</p>
</footer>

</body>
</html>