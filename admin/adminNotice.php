<?php
 
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

            // Attempt to execute the prepared statement
            if($stmt->execute()){

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
    <title>Notice - Admin | Online Card Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    
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
                <div class="row">

                    <div class="span12">

                        <div class="widget-content">

                            <h1>Notice</h1>

                            <p>The notice area help the admin to send notice to students.</p>

                        </div> <!-- /widget-content -->

                    </div> <!-- /span12 -->

                </div> <!-- /row -->
                <br>
                <div class="widget-header">
                    <i class="icon-pushpin"></i>
                    <h3>Notice</h3>
                </div> <!-- /widget-header -->

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="widget-content">
                        <p>Send notice</p>
                        <div>
                            <div class="field">
                                <input type="title" id="title" name="title" value="" placeholder="Title" class="login title-field <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $title_err; ?></span>
                            </div> <!-- /password -->
                            <p>
                                <textarea type="message" id="message" name="message" value="" placeholder="Type your notice" class="login title-field <?php echo (!empty($message_err)) ? 'is-invalid' : ''; ?>">
                                </textarea>
                                <span class="invalid-feedback"><?php echo $message_err; ?></span>
                            </p>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success" value="Send">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->

    <!-- footer -->
    <?php
    include "footer.php";
    ?>

    <!-- /footer -->
    <!-- javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/excanvas.min.js"></script>
    <script src="../js/chart.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/base.js"></script>
 
</body>
</html>
