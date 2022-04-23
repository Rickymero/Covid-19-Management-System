
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
	<title>Document</title>
	<link rel="stylesheet" a href="css/bootstrap.css">
	<link rel="stylesheet" href="css/Style.css"/>
</head>
<body>

	

	<nav>
		<div class="logo"><center>TUT</center></div>
		<div class="nav-items">
			<a href="view.php">Management View</a>
		</div>
	</nav> 

	<br>

	<h1><center>Covid 19 Management System</center></h1>

	<h5>Hello,<?php echo $_SESSION['User_nam']; ?></h5>
	<a href="logout.php">Logout</a>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						<h3 class="bg-success text-white text-center py-3"> Registration Form </h3>
					</div>
					<div class="card-body">
						<form action="insert.php" method="post">
							<input type="text" class="form-control mb-2" placeholder=" User Name " name="name">
							<input type="text" class="form-control mb-2" placeholder=" User StudentNumber " name="studentnumber">
							<input type="text" class="form-control mb-2" placeholder=" User Email " name="email">
							<input type="text" class="form-control mb-2" placeholder=" User Temperature " name="temperature">
							<button class="btn btn-primary" name="submit">Submit</button>
						</form>
					</div>
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

