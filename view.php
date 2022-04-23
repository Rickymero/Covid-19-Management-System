
<?php

session_start();

if(isset($_SESSION['User_id']) && isset($_SESSION['User_name'])){



?>


<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>View Records</title>
	<link rel="stylesheet" a href="css/bootstrap.css">
	<link rel="stylesheet" href="css/Style.css"/>
</head>
<body>

	<nav>
		<div class="logo"><center>TUT</center></div>
		<div class="nav-items">
			<a href="/phpapp/registration.php"> Registration </a>
			
		</div>
	</nav>

	<br>

	<h1><center>Covid 19 Management System</center></h1>

	<h5>Hello,<?php echo $_SESSION['User_nam']; ?></h5>
	<a href="logout.php">Logout</a>

	<div class="container">
		<div class="row">

			<form class="form-horizontal" action="view.php" method="POST">
		
		<div class= "form-group">
			<label class="col-lg-2 control-label"> Search </label>
			<div class="col-lg-4">
				<input type="text" class ="form-control" name="studentnumber" placeholder="1234">
			</div>
		</div>

		<div class= "form-group">
			<label class="col-lg-2 control-label"></label>
			<div class="col-lg-4">

				<button class="btn btn-primary" name="search">Submit Search</button>

			</div>
		</div>

		<center>

		<div class= "form-group">
			<label class="col-lg-2 control-label"></label>
			<div class="col-lg-4">

				<button class="btn btn-primary" name="viewdata">View Data</button>

			</div>
		</div></center>

	</form>

			<div class="col m-auto">
				<div class="card mt-5">
					<table class="table table-bordered">
						<tr>
							<th> User ID </th>
							<th> User Name </th>
							<th> User Student Number </th>
							<th> User Email </th>
							<th> User Temperature </th>
							<th> Edit </th>
							<th> Delete </th>
						</tr>


						<?php

						include("connection.php");
							

								if(isset($_POST['viewdata'])){


									$query = "SELECT * FROM studentinfo ";
										$data = mysqli_query($con,$query) or die('error');

										if(mysqli_num_rows($data) > 0){

											while ($row = mysqli_fetch_assoc($data)) {

												$UserID = $row['User_id'];
												$UserName = $row['User_name'];
												$UserStudentNumber = $row['User_studentnumber'];
												$UserEmail = $row['User_email'];
												$UserTemp = $row['User_temperature'];


											?>	

											<tr>
												
												<td><?php echo $UserID ?></td>
												<td><?php echo $UserName ?></td>
												<td><?php echo $UserStudentNumber ?></td>
												<td><?php echo $UserEmail ?></td>
												<td><?php echo $UserTemp ?></td>

												<td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
												<td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>

											</tr>

											<?php

												
											}

										}else{

											?>
											<tr>
												
												<td> Records not found !! </td>
											</tr>

											<?php




										}

									

								}elseif (isset($_POST['search'])) {
									# code...

									$searchstdnumber = $_POST['studentnumber'];


									if($searchstdnumber != ""){

										$query = "SELECT * FROM studentinfo WHERE User_studentnumber = '$searchstdnumber'";
										$data = mysqli_query($con,$query) or die('error');

										if(mysqli_num_rows($data) > 0){

											while ($row = mysqli_fetch_assoc($data)) {

												$UserID = $row['User_id'];
												$UserName = $row['User_name'];
												$UserStudentNumber = $row['User_studentnumber'];
												$UserEmail = $row['User_email'];
												$UserTemp = $row['User_temperature'];


											?>	

											<tr>
												
												<td><?php echo $UserID ?></td>
												<td><?php echo $UserName ?></td>
												<td><?php echo $UserStudentNumber ?></td>
												<td><?php echo $UserEmail ?></td>
												<td><?php echo $UserTemp ?></td>

												<td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
												<td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>

											</tr>

											<?php

												
											}

										}else{

											?>
											<tr>
												
												<td> Records not found !! </td>
											</tr>

											<?php




										}

									}


								}

							?>


							

					</table>
					


				
				</div>
			</div>
		</div>
	</div>

</body>
</html>



<?php

}else{
	header("location:index.php");
	
	exit();

}


?>