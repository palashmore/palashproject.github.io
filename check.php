<?php 
$user=$_POST['user'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","imagegallery");
$query="SELECT * FROM register WHERE user='$user' AND password='$password'";
$result=mysqli_query($con,$query);
$data=mysqli_num_rows($result);
		if($data==1)
		{
			header("location:dashboard.php");
		}
		else
		{
			header("location:Register.php");

		}

 ?>