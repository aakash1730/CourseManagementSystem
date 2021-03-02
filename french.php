<?php
    include('config/setup.php');

// first thing is to start session 
session_start();
// now to check if variable is true
if(!$_SESSION['anything'])
{
    header('location:studentlogin.php');
}
$id = $_SESSION["id"];
 
?>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="english1" href="img/english1.png">
    <link rel="english1" sizes="72x72" href="img/english1.png">
    <link rel="english1" sizes="114x114" href="english1.png">

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
<style>
      li
      {
        text-align: left;
        font-size: medium;
      }
      a{
        color: black;
        font-size: medium;
        
      }
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
                          <a class="navbar-brand logo" href="index.php">Course Academy</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#tf-home">Home</a></li>
                            <li><a href="#tf-service">Courses</a></li>
                            <li><a href="#tf-portfolio">Topo</a></li>
                            <li><a href="#tf-about">About</a></li>
                            
                          </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="container">
                <div class="content">
                    <h1>Course Academy Welcomes You</h1><br>
                    <h3>Welcome<br> To <br>The World of English Language</h3>
                    <br>
          <br>
                    
                    <a href="#tf-about" class="btn btn-primary my-btn">About The Course</a>
          <br>
          <a href="#tf-contact" class="btn btn-primary my-btn">Course Contributor</a>
          <br>
          <a href="frenchcoursestart.php" class="btn btn-primary my-btn">Start The Course</a>
                </div>
            </div>
            </div>
        </div>


  <div class="container">
</br>
                


               
                
            </div>


 <div id="tf-about">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <h2><font color="green">About Language</font></h2>
                            <br>
                            <h3> Spoken by over 750 million people, English is the second most spoken language in the world (after Mandarin), and the most commonly learned. On Course Academy, you'll learn American English, but you'll be understood in any English-speaking country.</h3>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>





   
  
     
    
       
</div> 
  
  
<div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>Course Contributor</h3>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>



             <div class="row">
    <div class="col-md-4">
        <a href="#" target="_blank">
          <img src="img/charmi.png" height="300" width="300">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Charmi Tripathi</a></p>
          </div>
        </a>
      
    </div>
    <div class="col-md-4">
     
        <a href="#" target="_blank">
          <img src="img/male1.png" height="300" width="300">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Akash Patel</a></p>
          </div>
        </a>
      
    </div>
    
    <div class="col-md-4">
      
        <a href="#" target="_blank">
          <img src="img/male.png"  height="300" width="300">
          <div class="caption">
            <p><a href="#" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Anuj Anjirwala</a></p>
          </div>
        </a>
      
    </div>
  </div>


        </div>
</div>
        <nav id="tf-footer">
            <div class="container">
                 <div class="pull-left">
                    <p>2018 Course Academy Designed and Coded by Akash Patel & Charmi Tripathi</a></p>
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
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <!-- Javascripts
        ================================================== -->
        <script type="text/javascript" src="js/main.js"></script>
    
  
  </body>
 </html>
