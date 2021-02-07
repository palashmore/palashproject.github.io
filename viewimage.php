<?php 
$con=new mysqli("localhost","root","","imagegallery");
$query="SELECT * FROM upload";
$result=($con->query($query));
 ?>


<!DOCTYPE html>
<html>
<head>
    <title> VIEW UPLOAD | FLASH GALLERY </title>
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
                    

                 <div class="box5"><h3><a href="dashboard.php">Dashboard</a></h3></div>
                 <div class="box6"><h3><a href="upload.php">Image</a></h3></div>
                 <div class="box3"><h3><a href="#">Feedback</a></h3></div>
                 <div class="box4"><h3><a href="#">Contact</a></h3></div>
                </div>
                
            </div>
            <div class="section">
                    <div class="view">

                    <img src="img/img1.jpg">
                    <!-- product name  -->
                           <p>
                            <ul>
                                <li>
                                    <input type="Submit" name="button" value="Delete">
                                </li>
                            </ul>
                        </p>
                            <!-- product icon  -->
                    </div>
                    <div class="view1">

                            <img src="img/img2.jpg">
                            <!-- product name  -->

                            <p>
                            <ul>
                                <li>
                                    <input type="Submit" name="button" value="Delete">
                                </li>
                            </ul>
                        </p>
                    </div>
                            <!-- product icon -->
                    <div class="view2">

                            <img src="img/img3.jpg">
                            <!-- product name  -->
                            <p>
                            <ul>
                                <li>
                                    <input type="Submit" name="button" value="Delete">
                                </li>
                            </ul>
                        </p>

                    </div>
                        <?php 
                        while ($data=$result->fetch_assoc()) 
                        {
                            echo "<div class='view2'>";
                            echo "<img src='image/".$data['imagename']."' height='200px' width='400px'>";
                            echo "<input type='Submit' name='button' value='Delete'>";

                            echo "<div>";

                        }
                        ?>
                        <div class="clear"></div>
                        <div class="foot">
                         <footer>
                
                <p>Copyright &copy; 2019-2029 cssoutor.com</p>
            </footer>
            <div class="clear"></div>
            </div>
        </div>
        </div>
</body>
</html>