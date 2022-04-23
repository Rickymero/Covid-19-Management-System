<?php

	$con = mysqli_connect("localhost","root","","tut_studentinfo");

	if(!$con)
	{
		die(" Connection Error !.".mysqli_connect_error());
	}else{

		#echo "connection successful!!";
	}


?>