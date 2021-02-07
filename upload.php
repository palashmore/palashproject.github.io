<!DOCTYPE html>
<html>
<head>
	<title> Dashboard | FLASH GALLERY </title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	
	<!-- header -->
	<header>
        <!-- main container -->
    <div class="container">
		<!-- header logo-->
		<img src="img/logo.png">
                <p><img src="img/ava.png"></p>

		<ul>

			<li>
				<h4>Flashgallery@gmail.com</h4>
			</li>
			<li>
				<input type="Submit" name="button" value="Log Out">
			</li>

		</ul>
		<div class="clear"></div>
		</header>
    <!--main body-->

        <div class="mainbody">
            <div class="sidebar">
                <div class="container">
                    

                 <div class="box1"><h3><a href="dashboard.php">Dashboard</a></h3></div>
                 <div class="box2"><h3><a href="upload.php">Image</a></h3></div>
                 <div class="box3"><h3><a href="#">Feedback</a></h3></div>
                 <div class="box4"><h3><a href="#">Contact</a></h3></div>
             </div>
                <div class="clear"></div>
            </div>
            <div class="data1">
                <div class="upload">
                    <form method="post" action="" enctype="multipart/form-data">

                    <p>
                         <input type="file" name="img1" autocomplete="off">
                       
                    </p>
                    <h3>
                             <input type="submit" name="submit" value="Upload">
                        
                    </h3>
                </div>
                <div class="viewimage">
                    <p>
                        <a href="viewimage.php"><input type="Submit" name="view" value="View Upload Image"></a>
                    </p>
                </div>

            
            <footer>
                
                <p>Copyright &copy; 2019-2029 cssoutor.com</p>
            </footer>
            <div class="clear"></div>
            </div>
        </div>
    </div>


</body>
</html>
<?php  
if(isset($_POST['submit']))
{
    $imagename = $_FILES['img1']['name'];
    $tmpimgname = $_FILES['img1']['tmp_name'];
    $con=new mysqli("localhost","root","","imagegallery");
    move_uploaded_file($tmpimgname,"img/$imagename");
    $query="INSERT INTO upload VALUES(NULL,'$imagename')";
    if($con->query($query))
    {
        header('location:upload.php');
    }
    else
    {
        echo mysqli_error($con);
    }
}
