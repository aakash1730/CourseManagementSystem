<?php
if($_POST){
include('config/setup.php');
if(!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
        $error_message = "All Fields are required";
        break;
        }
    }
    /* Password Matching Validation */
    if($_POST['Password'] != $_POST['confirmpassword']){ 
    $error_message = 'Passwords should be same<br>'; 
    }

    /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid Email Address";
        }
    }

    /* Validation to check if gender is selected */
    if(!isset($error_message)) {
    if(!isset($_POST["Gender"])) {
    $error_message = " All Fields are required";
    }
    }

    /* Validation to check if Terms and Conditions are accepted */
    if(!isset($error_message)) {
        if(!isset($_POST["terms"])) {
        $error_message = "Accept Terms and Conditions to Register";
        }
    }

    if(!isset($error_message)) {
        $result = mysql_query("INSERT INTO student VALUES
        (0,'$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]',' $_POST[Gender] ', '$_POST[Birthdate] ','$_POST[Password]')");
        if(!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully!";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('You have registered successfully!')
            window.location.href='studentlogin.php';
            </SCRIPT>");
        } else {
            $error_message = "Problem in registration. Try Again!"; 
        }
    }
}
}
?>
<html>
	<title>
			Student Sign up
		</title>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
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
  <body>
	
	<div id="tf-home">
        <div class="overlay">
            
            <nav id="tf-menu" class="navbar navbar-default">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    
                     <h1>   
                    
                     <a class="navbar-brand logo" >Student</a> 
					 </h1>			
             </div>  
               
            </nav>
        </div>
    </div>

  
		
       
            
						
                <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h1>SIGN UP</h1>
                <p></p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                     <form id="contact" method="POST" action="">
                    <?php if(!empty($success_message)) { ?> 
                    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
                    <?php } ?>
                    <?php if(!empty($error_message)) { ?>   
                    <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                    <?php } ?>
                     
					 <h4 align="left">First Name <input type="text" class="form-control" name="Firstname" id="Firstname" required value="<?php if(isset($_POST['Firstname'])) echo $_POST['Firstname']; ?>">
                     
                    <h4 align="left">Last Name <input type="text" class="form-control" name="Lastname" id="Lastname" value="<?php if(isset($_POST['Lastname'])) echo $_POST['Lastname']; ?>" >
                    
                    <h4 align="left">Email Id <input type="email" class="form-control" name="Email" id="Email" required value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>" >
                        
                    <h4 align="left"> Gender: 
                    <br>
                    <input type="radio" name="Gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male <br>
                    <input type="radio" name="Gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female <br>
                    
                    <h4 align="left"> Birthdate <input type="date" class="form-control" name="Birthdate" value="<?php if(isset($_POST['Birthdate'])) echo $_POST['Birthdate']; ?>">
                    
                     <h4 align="left"> Password <input type="password" class="form-control" name="Password" id="Password" required>
                     <h4 align="left"> Confirm Password <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                     <div>
                       <input type="checkbox" name="terms"> I accept Terms and Conditions <button type="submit" class="btn btn-primary my-btn dark" name="register-user" value="Register">Submit</button>		 
					  </div>
					 
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
       
    </div>
  
  
  
	
	
  </body>
</html>