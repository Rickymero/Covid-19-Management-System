<?php


	require_once("connection.php");

	if(isset($_POST['submit'])){

		if(empty($_POST['name']) || empty($_POST['studentnumber']) || empty($_POST['email']) || empty($_POST['temperature'])){

			echo " Please Fill in the Blanks ";
		}else{


			$UserName = $_POST['name'];
			$UserStudentNumber = $_POST['studentnumber'];
			$UserEmail = $_POST['email'];
			$UserTemperature = $_POST['temperature'];

			if(!filter_var($UserEmail,FILTER_VALIDATE_EMAIL)){

				echo "wrong email!!";
				header("location:registration.php");
				exit();

			}

			if($UserTemperature >='38'){

				echo "Your recommented to Test !!";
				header("location:warning.php");
			}else{


				$query = " insert into studentinfo (User_name, User_studentnumber, User_email, User_temperature) values('$UserName','$UserStudentNumber','$UserEmail','$UserTemperature')";
				$result = mysqli_query($con,$query);

				if($result){

					header("location:view.php");

				}else{

					echo " Please Check Your Query ";


				}

			}
		}


	}else{

		header("location:index.php");
	}






	
	

?>