<?php
    include('config/setup.php');

// first thing is to start session 
session_start();
// now to check if variable is true
if(!$_SESSION['anything'])
{
    header('location:index.php');
}
$id = $_SESSION["id"];
 
?>
<html>
	 <head>

     <style>
    .error-message {
        padding: 7px 10px;
        background: #fff1f2;
        border: #ffd5da 1px solid;
        color: #d6001c;
        border-radius: 4px;
    }
    .success-message {
        padding: 7px 10px;
        background: #cae0c4;
        border: #c3d0b5 1px solid;
        color: #027506;
        border-radius: 4px;
    }   
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Academy</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
</head>  
  <body>
 <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="#"> Instructor </a>
                    </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        
                        <li><a href="logout.php">Logout</a></li>
                        
                      </ul>
                    </div>
                    
                </div><!-- /.container-fluid -->
            </nav>

            
        </div>
    </div>			
        <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h1>Profile</h1>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
                   <table border="0" align="center" width="600">
                     <tr>
					 <td> <h4 align="left">First Name </h4></td>
                     <td><h4 <?php
                      $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[1]."</td>";
                                            }
                                        ?></td>
                                    </tr>
                     
                     <tr><td><h4 align="left">Last Name</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[2]."</td>";
                                            }
                                        ?></td></tr>
                    
                    <tr><td><h4 align="left">Email Id</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[3]."</td>";
                                            }
                                        ?></td></tr>

                    <tr><td><h4 align="left">User_Id</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[4]."</td>";
                                            }
                                        ?></td></tr>  
                    
                    <tr><td><h4 align="left"> Qualification</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[5]."</td>";
                                            }
                                        ?></td></tr>
                    
                    <tr><td><h4 align="left"> Language You Want to Teach</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[6]."</td>";
                                            }
                                        ?></td></tr>
                        
                    <tr><td><h4 align="left"> Gender: 
                    </h4></td><td>
                    <h4 <?php
                                           $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[7]."</td>";
                                            }
                                        ?></td></tr>
                    
                    <tr><td><h4 align="left"> BirthDate</h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[8]."</td>";
                                            }
                                        ?></td></tr>
                    
                    <tr><td><h4 align="left"> Mobile Number </h4></td><td><h4 <?php
                                            $result = mysql_query("SELECT * FROM instructor where id = '$id'") or die("Failed to query Database." .mysql_error());
                                            while($row = mysql_fetch_row($result)) {
                                                echo"<td>".$row[9]."</td>";
                                            }
                                        ?></td></tr>
            
			          		 </table>
					  </div>
			          
                </div>
            </div>
        </div>

        <center><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Update Profile</a></center>
    </div>
  </body>
</html>
	