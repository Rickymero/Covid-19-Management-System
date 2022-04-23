<?php

	require_once("connection.php");
	$UserID = $_GET['GetID'];
	$query = " select * from studentinfo where User_id='".$UserID."'";
	$result = mysqli_query($con,$query);


	while($row= mysqli_fetch_assoc($result)){


		$UserID = $row['User_id'];
		$UserName = $row['User_name'];
		$UserStudentNumber = $row['User_studentnumber'];
		$UserEmail = $row['User_email'];
		$UserTemp = $row['User_temperature'];

	

	}


?>



<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" a href="css/bootstrap.css">
	<link rel="stylesheet" href="css/Style.css"/>
</head>
<body>
	<br>

	<h1><center>Covid 19 Management System</center></h1>

	<br>

	

	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						<h3 class="bg-success text-white text-center py-3"> Update Form </h3>
					</div>
					<div class="card-body">
						<form action="update.php?ID=<?php echo $UserID ?>" method="post">
							<input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
							<input type="text" class="form-control mb-2" placeholder=" User StudentNumber " name="studentnumber"  value="<?php echo $UserStudentNumber ?>">
							<input type="text" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $UserEmail ?>">
							<input type="text" class="form-control mb-2" placeholder=" User Temperature " name="temperature" value="<?php echo $UserTemp ?>">
							<button class="btn btn-primary" name="update">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>