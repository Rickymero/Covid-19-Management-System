
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
	<link rel="stylesheet" href="css/stylesheet.css"/>
</head>
<body>

	

	<nav>
		
		<div class="nav-items">
		<h1><img src="pictures\tutLogo.png" widht="80" height="80">Covid 19 Management System
			
		</h1>
		<a class="manage" href="view.php" style="font-size: 1em;
  													color:white;
 													 text-decoration: none;
  													margin-left:80%;
													border: 0.2px solid white;
													border-radius: 12px;
													padding: 8px;">Management View</a>
												
		<a href="logout.php" style="font-size: 1em;
  									color:white;
 									text-decoration: none;
									 border: 0.2px solid white;
									border-radius: 12px;
									padding: 8px;">Logout</a>
		</div>
	</nav> 

	<br>

	<p style="font-family: impact; color: white; margin-left:20px; ">
	Hello &nbsp;<?php echo $_SESSION['User_nam']; ?>, Welcome!</p>
	

	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
						<h3 class="bg-success text-white text-center py-3"> Record Form </h3>
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

