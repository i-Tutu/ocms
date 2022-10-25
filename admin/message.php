<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$title = $message = "";
$title_err = $message_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if title is empty
    if(empty(trim($_POST["title"]))){
        $title_err = "Please enter title.";
    } else{
        $title = trim($_POST["title"]);
    }
    
    // Check if message is empty
    if(empty(trim($_POST["message"]))){
        $message_err = "Please enter your message.";
    } else{
        $message = trim($_POST["message"]);
    }
    
     // Check input errors before inserting in database
    if(empty($message_err) && empty($title_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO adminnotice (message, title) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_message, $param_title);
            
            // Set parameters
            $param_message = $message;
            $param_title = $title;

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
    <title>Send - Admin | Online Card Management System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    
    
    <link href="../js/guidely/guidely.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

<body>

<!-- Head -->
<?php
include "head.php";
?>
        
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

				<div class="row">

					<div class="span12">

						<div class="widget-content">

							<h1>Messages</h1>

							<p>This area help the admin to receive messages from students.</p>

						</div> <!-- /widget-content -->

					</div> <!-- /span12 -->

				</div> <!-- /row -->
				<br>
				<div class="widget-header">
					<i class="icon-pushpin"></i>
					<h3>Received Messages</h3>
				</div> <!-- /widget-header -->

				<div class="widget-content">
					<p>Messages</p>
					<div>
						<p>
							
						</p>
					</div>
				</div> <!-- /widget-content -->

			</form>
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->


<!-- footer -->
<?php
include "footer.php";
?>
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.7.2.min.js"></script>

<script src="../js/bootstrap.js"></script>
<script src="../js/base.js"></script>

<script src="../js/guidely/guidely.min.js"></script>

  </body>

</html>
