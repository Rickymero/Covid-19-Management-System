
<?php

session_start();

	require_once("connection.php");


	if(isset($_POST['username']) && isset($_POST['password']) ){


		function validate($data){

			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$usern = validate($_POST['username']);
		$pass = validate($_POST['password']);

		if (empty($usern)){

		   header("location:index.php?error=User Name is required");
			exit();


		}else if(empty($pass)){

			header("location:index.php?error=Password is required");
			exit();


		}else{

			$sql = "SELECT * FROM logininfo WHERE User_name='$usern' AND User_password = '$pass'";

			$result = mysqli_query($con,$sql);

			if (mysqli_num_rows($result) ===1) {
						# code...

				$row = mysqli_fetch_assoc($result);

				print_r($row);

				if ($row['User_name'] === $usern && $row['User_password'] === $pass  ) {

					$_SESSION['User_name'] = $row['User_name'];
					$_SESSION['User_nam'] = $row['User_nam'];
					$_SESSION['User_id'] = $row['User_id'];
					

					header("location:registration.php");
					exit();

				}else{

					header("location:index.php?error=Incorrect User name or password");
					exit();
							
				}

						


			}else{

				header("location:index.php?error=Incorrect User name or password");
					echo "string";

				exit();

			}
					
		}


	}else{

		header("location:index.php");
		exit();
			# code...
	}




?>