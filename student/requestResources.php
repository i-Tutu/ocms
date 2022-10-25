<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Request Resource - Online Card Management System</title>
    
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

<?php
include "head.php";
?> 
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">

	      			<div class="widget-content">
	      				
			      		<h1>Request Resource</h1>
			      		
			      		<p>This portal area is for you students to request library item from the librarian. If what you requested is available, it will be sent here for you. Don't hesitate to send your request here.</p>
			      		
		      		</div> <!-- /widget-content -->
	      		
      		</div> <!-- /span12 -->
	      	
	      </div> <!-- /row -->
			<br>
			<div class="widget-header">
				<i class="icon-pushpin"></i>
				<h3>Requested Resources</h3>
			</div> <!-- /widget-header -->

			<div class="widget-content">
				<div>
					<p>
						<textarea type="text" value="" placeholder="Type your request">
						</textarea>
					</p>
					<div class="form-actions">
						<button class="btn btn-success">Send</button>
					</div>
				</div>
			</div> <!-- /widget-content -->

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

<script>

$(function () {
	
	guidely.add ({
		attachTo: '#target-1'
		, anchor: 'top-left'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-2'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-3'
		, anchor: 'middle-middle'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-4'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.init ({ welcome: true, startTrigger: false });


});

</script>
  </body>

</html>
