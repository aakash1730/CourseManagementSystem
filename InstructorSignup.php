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
    if($_POST['password'] != $_POST['confirmpassword']){ 
    $error_message = 'Passwords should be same<br>'; 
    }

    /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_POST["EmailId"], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid Email Address";
        }
    }

    /* Validation to check if gender is selected */
    if(!isset($error_message)) {
    if(!isset($_POST["gender"])) {
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
        $result = mysql_query("INSERT INTO instructor VALUES
        (0,'$_POST[FirstName]','$_POST[LastName]','$_POST[EmailId]','$_POST[Choose_user_ID]', ' $_POST[Qualification] ', ' $_POST[Language] ',' $_POST[gender] ', '$_POST[Birthday] ', ' $_POST[Mobile] ','$_POST[password]')");
        if(!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully!";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('You have registered successfully!')
            window.location.href='instructorlogin.php';
            </SCRIPT>");
        } else {
            $error_message = "Problem in registration. Try Again!"; 
        }
    }
}
}
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
            
            <nav id="tf-menu" class="navbar navbar-default">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    
                     <h1>   
                    
                     <a class="navbar-brand logo" >Instructor</a> 
					 </h1>			
             </div>  
               
            </nav>
        </div>
    </div>					
        <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h1>Register</h1>
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
                     
					 <h4 align="left">First Name <input type="text" class="form-control" name="FirstName" id="FirstName" required value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>">
                     
					<h4 align="left">Last Name <input type="text" class="form-control" name="LastName" id="LastName" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName']; ?>" >
					
					<h4 align="left">Email Id <input type="email" class="form-control" name="EmailId" id="EmailId" required value="<?php if(isset($_POST['EmailId'])) echo $_POST['EmailId']; ?>" >

                    <h4 align="left">User_Id <input type="text" class="form-control" name="Choose_user_ID" id="Choose_user_ID" value="<?php if(isset($_POST['Choose_user_ID'])) echo $_POST['Choose_user_ID']; ?>" >	
					
					<h4 align="left"> Qualification <input type="text" class="form-control" name="Qualification" id="Qualification" value="<?php if(isset($_POST['Qualification'])) echo $_POST['Qualification']; ?>" >
					
					<h4 align="left"> Language You Want to Teach <input type="text" class="form-control" name="Language" placeholder="Which You Want To Teach...." value="<?php if(isset($_POST['Language'])) echo $_POST['Language']; ?>" required>
						
					<h4 align="left"> Gender: 
					<br>
					<input type="radio" name="gender" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male <br>
					<input type="radio" name="gender" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female <br>
					
					<h4 align="left"> BirthDate <input type="date" class="form-control" name="Birthday" value="<?php if(isset($_POST['Birthday'])) echo $_POST['Birthday']; ?>">
					
					<h4 align="left"> Mobile Number <input type="tel" maxlength="10" pattern="^\d{10}$" class="form-control" name="Mobile" id="Mobile" value="<?php if(isset($_POST['Mobile'])) echo $_POST['Mobile'] ?>" > 
					
                     <h4 align="left"> Password <input type="password" class="form-control" name="password" id="password" required>
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
	