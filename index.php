<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LoginPage</title>
	<link rel="stylesheet" href="css/stylesheet.css"/>

</head>

<body class="body">
	<h1><img src="pictures\tutLogo.png" widht="80" height="80">Covid 19 Management System</h1>
						<br>
						<h2 align="center"> Login </h2>
					</div>
					<div class="card-body">
						<br>


					<center><table></center>

							<form action="login.php" method="post">
								<?php if (isset($_POST['error'])) { ?>
									<p class="error"><?php echo $_POST['error'];?></p>

								<?php } ?>
								<tr>
									<td><p>Username</p></td>
									<td><input id="textbox" type="text" placeholder=" User Name " name="username"></td>
								</tr>
								<tr>
									<td><p>Password</p></td>
									<td><input id="textbox" type="password" placeholder=" Password " name="password"></td>
								</tr>
								<tr>
									<td><input id="buttons" type="button" name="btn_submit" value="Login">&nbsp; &nbsp;<input id="buttons" type="reset" name="" value="Reset"></td>
								</tr>

							</form>

					</table>
					<br>
					<a id="register" href="registration.php">First Time Registering? register here</a>
</body>
</html>
