<?php

	require_once("connection.php");

	if(isset($_GET['Del'])){


		$UserID = $_GET['Del'];
		$query = " delete from studentinfo where User_id = '".$UserID."'";

		$result = mysqli_query($con, $query);

		if($result){


			header("location:view.php");
		}else{


			echo " Please Check Your Query ";
		}

	}else{


		header("location:view.php");
	}







?>