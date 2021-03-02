<?php
if($_POST)
{
    include('config/setup.php');
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result = mysql_query("SELECT * from instructor where User_ID = '$username' and Password = '$password'") or die("Failed to query Database." .mysql_error());
    $row = mysql_fetch_array($result);
    if($row['User_ID'] == $username && $row['Password']== $password) 
    {
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['User_ID'];
        $_SESSION['anything']='something';
        header('Location: instructorarea.php'); /* Redirect browser */
        exit();
    }
    else
    {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username or Password is wrong! Please Try again.')
            window.location.href='instructorlogin.php';
            </SCRIPT>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Academy</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


     <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                     <a href="index.php" class="navbar-brand logo" >Course Academy</a> 
                    <br>
                    <a class="navbar-brand logo">
                    Learn the Language & Enjoy it with fun !!! 
                    </a>
                    </div>


                    
               
            </nav>

            
        </div>
    </div>

<div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>Login</h3>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" method="post">
                      <div class="form-group">
                        <input type="text" name="username" required autocomplete="off" class="form-control" id="username" placeholder="Enter User Name">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" required autocomplete="off" class="form-control" id="password" placeholder="Enter Password">
                      </div>
                     
                     
                      <div>
                      <button type="submit" class="btn btn-primary my-btn dark">Submit</button>
					  </div>
                    </form>
                </div>
            </div>
        </div>
    </div>