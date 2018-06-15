<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>prachatech billing</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/style.css">

       

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>">Prachatech</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							
							<span class="li-social">
								<a href="https://business.facebook.com/prachatechadmin/" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="https://twitter.com/Prachatech" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="https://plus.google.com/103803990699303943827/" target="_blank"><i class="fa fa-google-plus"></i></a> 
								<a href="https://www.linkedin.com/company/prachatech-software-solutions/" target="_blank"><i class="fa fa-linkedin"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Welcome to <strong>Prachatech</strong> Billing</h1>
                        <div class="description">
                       	    <p>
                                This is not an expenditure, but an investment on your business! 
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 form-box">
                    	<form role="form" action="" method="post" class="f1">

                    		<h3>Billing</h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-info"></i></div>
                    				<p>Details</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                    				<p>Payment</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
                    				<p>Success</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Tell us who you are:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">First name</label>
                                    <input type="text" name="f1-first-name" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Gender</label>
                                    <select class="form-control">
										<option>Select Gender</option>
										<option>Male</option>
										<option>Female</option>
									</select>
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Last name</label>
                                    <input type="text" name="f1-last-name" placeholder="Last name..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                    <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                    	                 class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                              
								<div class=" col-md-6  col-md-offset-3 table-responsive">
								  <h4>Check your Details</h4>
									<table class="table table-bordered">
										
										<tbody>
										  <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										   <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										   <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										   <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										   <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										   <tr>
											<th>Name</th>
											<td>Doe</td>
										  </tr>
										  
										</tbody>
									  </table>
									 </div>
									 <div class="clearfix">&nbsp;</div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Social media profiles:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>