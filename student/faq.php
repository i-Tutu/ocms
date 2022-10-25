<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>FAQ - Online Card Management System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
    
    
    <link href="../css/pages/faq.css" rel="stylesheet">

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
						
				<div class="widget widget-plain">
					
					<div class="widget-content">
						
						<a href="javascript:;" class="btn btn-large btn-success btn-support-ask">Frequently Asked Questions</a>

					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->

			</div> <!-- /span12 -->
         </div>	
    
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-pushpin"></i>
						<h3>Frequently Asked Questions</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<h3>Search</h3>
						
						<br />
						
						<ol class="faq-list">
							
							<li>
								<h4>When I request resource why does it take so long?</h4>
								<p>If you request a resource from the librarian, he check whether he is having the item there. If the item is not there he contact other authorities to check whether he will get it. This process take some time which delay the student.
								</p>
									
							</li>
							
							<li>
									<h4>Why will the librarian need a student in the library if we have access to the portal.</h4>
									<p>Sometimes the librarian will need a student in the library because the need to sign on a document which the present of the student is necessary in the library. Apart from this, it is not necessary for the student to go to the library.
									</p>
							</li>
							
							<li>
								<h4>Student ID card is not necessary again in the library.
								</h4>
								<p> Student ID card is necessary when coming to the library physically. The purpose of the portal is to enable students to access resources remotely and their convenience to better their academics.
								</p>
							</li>
							
							<li>
								<h4> Will the books be downloadable?
								</h4>
								<p> Some of the books will be downloadable while others will not be downloadable. The downloadable ones are free books for students while the non-downloadable ones are not.
								</p>
							</li>
							
							<li>
								<h4>Will we pay for the books?
								</h4>
								<p> No, unless a student borrow a book and refuse to return it. That student will pay for the book.
								</p>
							</li>
							
							<li>
								<h4> Will a student still get access to the library when the student complete school.
								</h4>
								<p> Yes, only up to one year after a year the account of the student will be disable.
								</p>
									
							</li>
							
							<li>
								<h4> Where can we report to when a librarian ask for money
								</h4>
								<p> Report to the headmaster whenever a librarian ask for money from a student.
								</p>
							</li>
						</ol>
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /spa12 -->

	      </div> <!-- /row -->
	
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
<script src="../js/faq.js"></script>

<script>

$(function () {
	
	$('.faq-list').goFaq ();

});

</script>
  </body>

</html>
