<?php
    include('config/setup.php');
session_start();
if(!$_SESSION['anything'])
{
    header('location:studentlogin.php');
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sorry Something went wrong')
            </SCRIPT>");
}
$id = $_SESSION["id"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
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

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}

#grad1 {
    height: 200px;
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,200,0,1));
</style>

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
                   
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<br>
						
					 <ul class="nav navbar-nav navbar-right">
					  <img src="img/user.png" height="40" onclick="login.php" >
                        <li><a href="Student.php">Home</a></li>
                        <li><a href="#tf-portfolio">Languages</a></li>
                        <li><a href="#">Completed</a></li>
						 <li><a href="#">Recommendation</a></li>
						 <li><a href="logoutstudent.php">Log Out</a></li>
						
						 
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

           
        </div>
    </div>

   
    <div id="tf-portfolio">
        <div class="container">
            <div class="section-title">
                <h3>Language Courses</h3>
                <hr>
            </div>
            <div class="space"></div>
            <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/english1.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p><a href="english.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">English</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/french1.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">French</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/hindi1.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Hindi</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>


<div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/italian.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Italian</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/japanese.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Japanese</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/romanian.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Romania</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/spanish.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Spanish</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/turkish.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Turkish</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/arbic.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Arbic</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/greek.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Greek</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>
    


 </div>

         </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
<nav id="tf-footer">
            <div class="container">
                 <div class="pull-left">
                    <p>2018 Course Academy Designed and Coded by <a href="#">Akash Patel  </a> & <a href="#"> Charmi Tripathi</a></p>
                </div>
                <div class="pull-right"> 
                    <ul class="social-media list-inline">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        <li><a href="#"><span class="fa fa-behance"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
  </body>
</html>