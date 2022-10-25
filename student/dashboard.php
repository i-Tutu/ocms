<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../config.php";

$id = $_SESSION["id"];

$sql = " SELECT firstname, lastname, email, stud_id FROM users WHERE id = ?";

if($stmt = $mysqli->prepare($sql)){
  //Bind variables
  $stmt->bind_param("s", $param_id);

  //Set parameters
  $param_id = $id;

  //Execute statement
  if($stmt->execute()){
    //Store result
    $stmt->store_result();

    //Check if username exits, if yes then verify password
    if($stmt->num_rows == 1){
      //Bind variables
      $stmt->bind_result($firstname, $lastname, $email, $stud_id);

      if($stmt->fetch()){
        //store data
      }
    }

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Online Card Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/pages/dashboard.css" rel="stylesheet">

</head>
<body>

<?php
include "head.php";
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
        <div class="row">

            <div class="span12">

                <div class="widget-content">

                    <h1>Dashboard</h1>

                    <p class="my-5"><b><?= $firstname ?><b>. Welcome to Online Card Management System.</p>

                    <p>This portal helps you to management library resources</p>

                    <br>

                    <h2>Quote</h2>

                    <p>Library is one of the greatest asset in student's life.</p>

                </div> <!-- /widget-content -->

            </div> <!-- /span12 -->

        </div> <!-- /row -->
      <!-- /row -->
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

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/excanvas.min.js"></script>
<script src="../js/chart.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>
 
<script src="../js/base.js"></script>
</body>
</html>
