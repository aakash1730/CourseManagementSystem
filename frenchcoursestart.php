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
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instructor</title>
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
                      <a class="navbar-brand logo" href="#"> French </a>
                    </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="Student.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                      </ul>
                    </div>
                    
                </div><!-- /.container-fluid -->
            </nav>

            
        </div>
    </div>
  
   <div id="tf-portfolio" >
         <div class="container">
            <div class="section-title">
                <h3>About Language</h3>
                <hr>
            </div>
      
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/english1.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p> <a href="StudentLanguageScheme.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Language Teaching Scheme</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/french1.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>
        <a href="StudentLanguageSyllabus.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Language Syllabus</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/hindi1.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>   <a href="StudentLessonPlanning.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Planning</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/english1.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p><a href="StudentLessonNotes.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Notes</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/french1.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>
         <a href="StudentLessonPpts.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson PPTs</a>
       </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/hindi1.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p> 
        <a href="frenchlessonvideo.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Videos</a>
    
 </p>
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="img/english1.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p>       <a href="StudentLessonAssignments.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Assignments</a>
    </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/french1.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>
        
        <a href="StudentLessonTutorials.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Tutorials</a></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/hindi1.png" alt="Fjords" style="width:100%">
          <div class="caption">
            <p> <a href="StudentLessonQuiz.php" class="btn btn-primary my-btn dark" role="button" aria-disabled="true">Lesson Quiz</a></p>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>
</div>
  
     
    
       
</div> 
  
  
<div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>About US</h3>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
                </div>
            </div>
        </div>

        <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="footer-logo">
                <img src="img/logo-white-text.png" alt="" />
                
                <div class="widget-icon">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-vimeo-square"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
    </div>
  
 

             
    
  </body>
 </html>
