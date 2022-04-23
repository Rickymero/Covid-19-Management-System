<?php

	require_once("connection.php");

	if (isset($_POST['update'])) {

		$UserID =$_GET['ID'];
	
		$UserName = $_POST['name'];
		$UserStudentNumber = $_POST['studentnumber'];
		$UserEmail = $_POST['email'];
		$UserTemperature = $_POST['temperature'];

		if($UserTemperature >='38'){

				echo "Your recommented to Test !!";
				header("location:warning.php");
		}else{

			$query = " update studentinfo set User_name = '".$UserName."',User_studentnumber = '".$UserStudentNumber."',User_email = '".$UserEmail."',User_temperature = '".$UserTemperature."' where User_id ='".$UserID."' ";
			$result = mysqli_query($con,$query);


			if($result){

				header("location:view.php");

			}else{

				echo " Please Check Your Query";
			}

			# code...
		}

	}else{


		header("location:view.php");
	}




?>