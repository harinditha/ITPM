<?php

	//Create Connection
	$con = mysqli_connect('localhost','root','','abc');

	//Check Connection
	if(mysqli_connect_errno()){
		//Connection Failed
		echo 'Failed to connect MYSQL'. mysqli_connect_errno();
	}
?>