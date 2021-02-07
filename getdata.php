<?php 
	
	$user=$_POST['user'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$con=new mysqli("localhost","root","","imagegallery");
					//server name ,username,password,databasesname 
	$query="INSERT INTO register VALUES(NULL,'$user','$first','$last','$password','$email')";
	if ($con->query($query))
	 {
		# code...
		header('location:loginsection.php');
	}
	else
	{
		echo mysqli_error($con);
	}

	?>
