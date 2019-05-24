<?php
	include("includes/header.php");
	include("includes/config.php");
	include("includes/functions.php");

	//printout the messeges 
	$msg = ''; $msg2 = ''; $msg3 = ''; $msg4 = ''; $msg5 = ''; $msg6 = ''; $msg7 = ''; $msg8 = ''; $msg9 = '';

	//to showing previously entered values.
	$firstname = ''; $lastname =''; $studentId =''; $nic=''; $password = ''; $cpassword = '';

	//when submit get the values and store in a variable
	if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$studentId = $_POST['sID'];
		$nic = $_POST['nic'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
    	$size_image = $_FILES['image']['size'];
		$check = isset($_POST['check']);
//echo $firstname."</br>".$lastname;

//Validations of all the fields 
			if (strlen($firstname)<3) {
				$msg = "<div class = 'error'>First name must contain atleast 3 charachters </div>";
			}else if (strlen($lastname)<3) {
				$msg2 = "<div class = 'error'>Last name must contain atleast 3 charachters </div>";
			}else if (strlen($studentId)<8) {
				$msg3 = "<div class = 'error'>Student ID must contain 8 charachters </div>";
			}else if (studentId_exists($studentId, $con)) {
				$msg3 = "<div class = 'error'>Student ID Exists </div>";
			}else if (strlen($nic)<10) {
				$msg9 = "<div class = 'error'>NIC must contain 10 charachters </div>";
			}else if (empty($password)) {
				$msg4 = "<div class = 'error'>Please Enter Your password </div>";
			}else if (strlen($password)<5) {
				$msg4 = "<div class = 'error'>Password must contain atleast 5 charachters </div>";
			}else if ($password != $cpassword) {
				$msg5 = "<div class = 'error'>Password is not match </div>";
			}else if ($image=='') {
				$msg6 = "<div class = 'error'>Please upload a profile image </div>";
			}else if ($size_image >= 1000000) {
				$msg6 = "<div class = 'error'>Please upload a image less than 1MB </div>";
			}else if ($check!='on') {
				$msg7 = "<div class = 'error'>Please agree out terms and conditions </div>";
			}else{

				//converting to jpg or png file

				$image_ext = explode(".", $image);
				$img_ext = $image_ext['1'];

				//generate random names when saving images
				$image = rand(1, 1000).rand(1, 1000).time().".".$img_ext;

				if($img_ext == 'jpg' || $img_ext == 'png' || $img_ext == 'JPG' || $img_ext == 'PNG' ){

					//save upload files
					move_uploaded_file($tmp_image, "save_images/$image");
					//Inserting values to database tables
					mysqli_query($con, "INSERT INTO students (studentID, firstName, lastName, password, image, nic) 
						VALUES ('$studentId', '$firstname', '$lastname', '$password', '$image', '$nic')" );
					$msg8 = "<div class = 'success'> <center> You are Successfully Registered </center> </div>";
					$firstname = ''; $lastname =''; $studentId =''; $password = ''; $cpassword = ''; $nic = '';  
				}else{
					$msg6 = "<div class = 'error'>Please upload a correct image format(jpg or png) </div>";
				}
			}
	}
?>

<!DOCTYPE html>

	<title>ABC Institute | Welcome</title>

</head>

<style type="text/css">
	#body-bg{
		background: url("images/st4.jpg")center no-repeat fixed;
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
				<div class="jumbotron" style="margin-top: 20px; padding-top: 20px">
					<h3 align="center"> SignUp </h3>
					<?php echo $msg8; ?>
					</br>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>First Name </label>
					<input type="text" placeholder="" name="firstname" class="form-control" 
						   value="<?php echo $firstname ?>">
					<?php echo $msg; ?>
				</div>

				<div class="form-group">
					<label>Last Name </label>
					<input type="text" placeholder="" name="lastname" class="form-control"
					       value="<?php echo $lastname ?>">
					<?php echo $msg2; ?>
				</div>

				<div class="form-group">
					<label>Student ID</label>
					<input type="text" placeholder="" name="sID" class="form-control"
						   value="<?php echo $studentId ?>">
					<?php echo $msg3; ?>
				</div>

				<div class="form-group">
					<label>NIC</label>
					<input type="text" placeholder="" name="nic" class="form-control"
						   value="<?php echo $nic ?>">
					<?php echo $msg9; ?>
				</div>

				<div class="form-group">
				<label>Password</label>
					<input type="Password" name="password" class="form-control"
						   value="<?php echo $password ?>">
					<?php echo $msg4; ?>
				</div>

				<div class="form-group">
				<label>Re-Enter Password</label>
					<input type="Password" name="cpassword" class="form-control"
						   value="<?php echo $cpassword ?>">
					<?php echo $msg5; ?>
				</div>

				<div class="form-group">
					<label>Profile Image</label>
					<input type="file" name="image"/>
					<?php echo $msg6; ?>
				</div>

				<div class="form-group">
					<input type="checkbox" name="check"/>
					I Agree the terms and conditions
					<?php echo $msg7; ?>
				</div>

				<center><input type="submit" value="Submit" name ="submit" class="btn btn-success"/></center></br>
				<center><a href="login.php"> Already Registered ?</a></center>
				</div>
			</div>
		</div>
				
			</form>
	<footer>
		<p>ABC Insititute, copyright &copy; 2019</p>
	</footer>

</body>
</html>