<?php
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $email = $stud_id = $programme = $form = $password = $confirm_password = "";
$firstname_err = $lastname_err = $email_err = $stud_id_err = $programme_err = $form_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

	 // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter firstname.";  
    } else{
        $firstname = trim($_POST["firstname"]);
    }

     // Validate lastname
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter lastname.";  
    } else{
        $lastname = trim($_POST["lastname"]);
    }

     // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";  
    } else{
        $email = trim($_POST["email"]);
    }

      // Validate programme
    if(empty(trim($_POST["programme"]))){
        $programme_err = "Please enter programme.";  
    } else{
        $programme = trim($_POST["programme"]);
    }

      // Validate form
    if(empty(trim($_POST["form"]))){
        $form_err = "Please enter form.";  
    } else{
        $form = trim($_POST["form"]);
    }
 
    // Validate stud_id
    if(empty(trim($_POST["stud_id"]))){
        $stud_id_err = "Please enter a stud_id.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["stud_id"]))){
        $stud_id_err = "Student ID can contain only alphabet and number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE stud_id = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_stud_id);
            
            // Set parameters
            $param_stud_id = trim($_POST["stud_id"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $stud_id_err = "This Student ID is already taken.";
                } else{
                    $stud_id = trim($_POST["stud_id"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($stud_id_err) && empty($programme_err) && empty($form_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (firstname, lastname, email, stud_id, programme, form, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssss", $param_firstname, $param_lastname, $param_email, $param_stud_id, $param_programme, $param_form, $param_password);
            
            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_stud_id = $stud_id;
            $param_programme = $programme;
            $param_form = $form;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ../index.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup - Online Card Management System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="../css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				Online Card Management System
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="../index.php" class="">
							Already have an account? Login now
						</a>
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
			<h1>Signup for Account</h1>
			
			<div class="login-fields">
				
				<p>Create your free account:</p>
				
				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" placeholder="First Name" class="login <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>"/>
					<span class="invalid-feedback"><?php echo $firstname_err; ?></span>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input type="text" id="lastname" name="lastname"placeholder="Last Name" class="login <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>"/>
					<span class="invalid-feedback"><?php echo $lastname_err; ?></span>
				</div> <!-- /field -->

				<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email" placeholder="Email" class="login <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"/>
					<span class="invalid-feedback"><?php echo $email_err; ?></span>
				</div> <!-- /field -->

				<div class="field">
					<label for="stud_id">Student ID:</label>
					<input type="text" id="stud_id" name="stud_id" placeholder="Student ID" class="login <?php echo (!empty($stud_id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $stud_id; ?>">
                <span class="invalid-feedback"><?php echo $stud_id_err; ?></span>
				</div> <!-- /field -->

				<div class="field">
					<label for="programme">Programme:</label>
					<input type="text" id="programme" name="programme" placeholder="Programme" class="login <?php echo (!empty($programme_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $programme; ?>">
                <span class="invalid-feedback"><?php echo $programme_err; ?></span>
				</div> <!-- /field -->

				<div class="field">
					<label for="form">Form:</label>
					<input type="text" id="form" name="form" placeholder="Form" class="login <?php echo (!empty($form_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $form; ?>">
                <span class="invalid-feedback"><?php echo $form_err; ?></span>
				</div> <!-- /field -->
				
				
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password"placeholder="Password" class="login <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="login <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
									
				<input type="submit" class="btn btn-primary" value="Submit">
               <!--   -->
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="../index.php">Login to your account</a>
</div> <!-- /login-extra -->


<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/bootstrap.js"></script>

<script src="../js/signin.js"></script>

</body>

 </html>
