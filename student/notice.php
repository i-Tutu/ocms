<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../config.php";

$id = $_SESSION["id"];

$sql = " SELECT title, message, created_at FROM adminnotice WHERE id = ?";

if($stmt = $mysqli->prepare($sql)){
    //Bind variables
    $stmt->bind_param("s", $param_id);

    //Set parameters
    $param_id = $id;

    //Execute statement
    if($stmt->execute()){
        //Store result
        $stmt->store_result();

        
        if($stmt->num_rows == 1){
            //Bind variables
            $stmt->bind_result($title, $message, $created_at );

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
    <title>Notice - Online Card Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/pages/dashboard.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php
include "head.php";
?>

    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="widget widget-nopad">
                        <div class="widget-header"> <i class="icon-list-alt"></i>
                            <h3> Recent Notice</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <ul class="news-items">


                               <li>

                                    <div class="news-item-date"> <span class="news-item-day">22</span> <span class="news-item-month">July, 22</span> </div>
                                    <div class="news-item-detail"> 
                                        <a class="news-item-title" target="_blank">Library hour</a>
                                        <!-- Library hour -->
                                        <p class="news-item-preview"> This semester library hours will be 8:30am to 3:30pm. Students should take notice of these hours and comply accordingly.  No student should come when it is not library hours. </p>

                                        <!--  This semester library hours will be 8:30am to 3:30pm. Students should take notice of these hours and comply accordingly.  No student should come when it is not library hours. -->
                                    </div>

                                </li>
                                <li>

                                    <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun, 21</span> </div>
                                    <div class="news-item-detail"> <a href="#" class="news-item-title" target="_blank">New Books available for Business Students</a>
                                        <p class="news-item-preview"> There are new books available in the library for business students. The arrival of these books will help business students in their academics. Business students should take advantage of this opportunity and come to the library and learn.</p>
                                    </div>

                                </li>
                                <li>

                                    <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct, 20</span> </div>
                                    <div class="news-item-detail"> <a href="#" class="news-item-title" target="_blank">Library talk coming soon</a>
                                        <p class="news-item-preview"> There will be a library talk session for all students. The purpose of this talk is to address the need for library in students life. It is compulsory for all students to attend this library talk session. Date will be communicated to you soon.</p>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <!-- /widget-content -->
                    </div>
                </div>
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
    <script src="../js/base.js"></script>

</body>
</html>
