<?php

	function studentId_exists($studentId, $con){

		$row = mysqli_query($con, "SELECT studentID FROM students WHERE studentID = '$studentId'");{
			if(mysqli_num_rows($row)==1){
				return true;
			}else{
				return false;
			}
		}
	}

	function loged_In(){

			if(isset($_SESSION['StudentId']) || isset($_COOKIE['name'])){
				return false;
			}else{
				return true;
			}
		}
	
	?>