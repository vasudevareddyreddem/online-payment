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
                    	<div role="form" class="f1">

                    		<h3>Billing</h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 100%;"></div>
                    			</div>
                    			<div class="f1-step activated ">
                    				<div class="f1-step-icon"><i class="fa fa-info"></i></div>
                    				<p>Details</p>
                    			</div>
                    			<div class="f1-step activated">
                    				<div class="f1-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                    				<p>Payment</p>
                    			</div>
                    		    <div class="f1-step activated">
                    				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
                    				<p>Success</p>
                    			</div>
                    		</div>
                    		<?php //echo '<pre>';print_r($user_details);exit; ?>


                            <fieldset>
								<div class=" col-md-8  col-md-offset-2">
									
									<div class="text-center">
										<i style="font-size:50px;color:#4caf50;" class="fa fa-check-circle" aria-hidden="true"></i>
										<h3>Payment Successful </h3>
										<p>we will email you receipt confirming your payment Shortly.</p>
									</div>
								</div>
                              
                            </fieldset>
                    	
                    	
                    </div>
                    </div>
                </div>
                    
            </div>
        </div>
		<script>
		  function preventBack(){window.history.forward();}
		  setTimeout("preventBack()", 0);
		  window.onunload=function(){null};
		</script>

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