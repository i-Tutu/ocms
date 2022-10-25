<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>General Resource - Admin | Online Card Management System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    
    <link href="../css/pages/reports.css" rel="stylesheet">

  </head>

<body>

<!-- Head -->
<?php
include "head.php";
?>

<!-- /subnavbar -->
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	
	     <div class="row">

			 <div class="span12">

				 <div class="widget-content">

					 <h1>General Resource</h1>

					 <p>This area help admin to send general resource to students.</p>

				 </div> <!-- /widget-content -->
				 <br>
				 <div class="widget-header">
					 <i class="icon-pushpin"></i>
					 <h3>Send General Resource</h3>
				 </div> <!-- /widget-header -->

				 <div class="widget-content">
					 <p>Send resource</p>
					 <div>
						 <p>
							 <input type="file">
						 </p>
						 <div class="form-actions">
							 <button class="btn btn-success">Send</button>
						 </div>
					 </div>
				 </div> <!-- /widget-content -->

			 </div> <!-- /container -->

			 </div> <!-- /span12 -->
         </div>      
	      	
	  	  <!-- /row -->
	      
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    

<!-- footer -->
<?php
include "footer.php";
?>
    

<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/excanvas.min.js"></script>
<script src="../js/chart.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/base.js"></script>
<script>

    var pieData = [
				{
				    value: 30,
				    color: "#F38630"
				},
				{
				    value: 50,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
	
	</script>


  </body>

</html>
