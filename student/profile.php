<?php
// Initialize the session
session_start();
 
// Include config file
require_once "../config.php";

$id = $_SESSION["id"];

$sql = " SELECT firstname, lastname, email, stud_id, programme, form FROM users WHERE id = ?";

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
			$stmt->bind_result($firstname, $lastname, $email, $stud_id, $programme, $form);

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
    <title>Profile - Online Card Management System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
   

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
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Profile Account</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Profile</a>
						  </li>
						  <li><a href="#jscontrols" data-toggle="tab">Edit Profile</a></li>
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>

										<div class="control-group">										
											<label class="control-label" for="firstname">First Name</label>
											<div class="controls">
												<input type="text" class="span6" id="firstname" value="<?= $firstname ?>"disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Last Name</label>
											<div class="controls">
												<input type="text" class="span6" id="lastname" value="<?= $lastname ?>" disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="studentID">Student ID</label>
											<div class="controls">
												<input type="text" class="span6 disabled" id="studentID" value="<?= $stud_id ?>" disabled>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="programme">Programme</label>
											<div class="controls">
												<input type="text" class="span6 disabled" id="programme" value="<?= $programme ?>" disabled>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">
											<label class="control-label" for="form">Form</label>
											<div class="controls">
												<input type="text" class="span6 disabled" id="form" value="<?= $form ?>" disabled>
											</div> <!-- /controls -->
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Email Address</label>
											<div class="controls">
												<input type="text" class="span6" id="email" value="<?= $email ?>" disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                                    </fieldset>
                                </form>
                                </div>
								
								<div class="tab-pane" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>

											<div class="control-group">
												<label class="control-label" for="firstname">First Name</label>
												<div class="controls">
													<input type="text" class="span6" id="firstname" value="<?= $firstname ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->


											<div class="control-group">
												<label class="control-label" for="lastname">Last Name</label>
												<div class="controls">
													<input type="text" class="span6" id="lastname" value="<?= $lastname ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->

											<div class="control-group">
												<label class="control-label" for="studentID">Student ID</label>
												<div class="controls">
													<input type="text" class="span6 disabled" id="studentID" value="<?= $stud_id ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->

											<div class="control-group">
												<label class="control-label" for="programme">Programme</label>
												<div class="controls">
													<input type="text" class="span6 disabled" id="programme" value="<?= $programme ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->

											<div class="control-group">
												<label class="control-label" for="form">Form</label>
												<div class="controls">
													<input type="text" class="span6 disabled" id="form" value="<?= $form ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->


											<div class="control-group">
												<label class="control-label" for="email">Email Address</label>
												<div class="controls">
													<input type="text" class="span6" id="email" value="<?= $email ?>">
												</div> <!-- /controls -->
											</div> <!-- /control-group -->

											<br />

											<div class="form-actions">
                                                <button class="btn btn-success">Save</button>
											</div>
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

<!-- footer --> 
<?php
include "footer.php";
?>

<script src="../js/jquery-1.7.2.min.js"></script>
	
<script src="../js/bootstrap.js"></script>
<script src="../js/base.js"></script>


  </body>

</html>
