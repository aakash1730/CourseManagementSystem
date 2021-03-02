<?php
    include('config/setup.php');

// first thing is to start session 
session_start();
// now to check if variable is true
if(!$_SESSION['anything'])
{
    header('location:instructorlogin.php');
}
$id = $_SESSION["id"];

if(isset($_REQUEST['submit']))
{
    
    $target_dir = "upload_video/";
    $target_file = $target_dir . basename(($_FILES["img"]["name"]));
    $image = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     
   if (($_FILES["img"]["size"]) > 500000000) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Sorry, your file is too large.')
                </SCRIPT>");
        
        $u = 0;
    }
    if ($image != "mp4" && $image != "mkv" && $image != "mpeg") {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Only mp4, mkv, and mpeg files are allowed.')
                    </SCRIPT>");
        $u = 0;
    }
    else {
        if (isset($u) == 0) {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('The file ". basename( $_FILES["img"]["name"]). " has been uploaded.')
                </SCRIPT>");
      mysql_query("INSERT INTO lessonvideo VALUES(0,'French','$target_file')");
        } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                       window.alert('Sorry, there was an error uploading your file.')
                       </SCRIPT>");
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Sorry, File was not uploaded')
                    </SCRIPT>");
        }   
        }
        
    }
}
 

?>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload videos</title>
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
	<script>
		
		function add()
		{
		//	alert();
			var element = document.createElement("input");
		//Create Labels
			var label = document.createElement("h4");
			label.innerHTML = "Lesson Videos";     
			
			//Assign different attributes to the element.
			label.setAttribute("align","left");
			element.setAttribute("type", "file");
			
			element.setAttribute("value", "");
			element.setAttribute("name", "videos");
			
			var foo = document.getElementById("dynamic");
			foo.appendChild(label);
			foo.appendChild(element);			
			}
	</script>
  </head>
  <body>
  
  <div id="tf-home">
	 <div class="overlay">
            
            <nav id="tf-menu" class="navbar navbar-default">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    
                     <h1>   
                    
                     <a class="navbar-brand logo" >Lesson Videos</a> 
					 </h1>			
             </div>  
            </nav>
        </div>
  </div>
  
  
   <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>Upload Videos</h3>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 ">
                    <form id="contact" name="myform" class="dynamic" method="post" enctype="multipart/form-data">
    			<br>
					 <h4 align="left"> Lesson Video
					 <br>
					 <br>
					<input type="file" name="img">
					<br>
					
					 <div>
					   <button type="button" class="btn btn-primary my-btn dark" onclick="add()";>Upload More...</button>
					   <button type="submit" class="btn btn-primary my-btn dark" name="submit">Upload</button>
                      <button type="reset" class="btn btn-primary my-btn dark">Reset</button>		 
					  
					  </div>
					 
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
 </html>