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
                    	<div  class="f1">

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
							
							<form action="<?php echo base_url('home/post'); ?>" method="post">
										<?php $csrf = array(
										'name' => $this->security->get_csrf_token_name(),
										'hash' => $this->security->get_csrf_hash()
										); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

      									<input type="hidden" name="u_id" id="u_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">
                    		    <h4>Tell us who you are:</h4>
                    			<div class="form-group col-md-6">
                    			    <label class="" for="f1-first-name">Name</label>
                                    <input type="text" name="name" placeholder="First name..." class="f1-first-name form-control" value="<?php echo isset($details['name'])?$details['name']:''; ?>" id="name">
                                </div>
								<div class="form-group col-md-6">
                    			    <label class="" for="">Email Address</label>
                                    <input style="height:44px" type="text" name="email" placeholder="Email Address" class=" form-control" value="<?php echo isset($details['email'])?$details['email']:''; ?>" id="email">
                                </div>
                          
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Mobile</label>
                                    <input type="text" name="mobile" placeholder="Mobile" class="f1-last-name form-control" value="<?php echo isset($details['mobile'])?$details['mobile']:''; ?>" id="mobile">
                                </div>
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Alternate Mobile Number</label>
                                    <input type="text" name="alternate_mobile" placeholder="Alternate Mobile Number" class="f1-last-name form-control" value="<?php echo isset($details['alt_mobile'])?$details['alt_mobile']:''; ?>" id="alternate_mobile">
                                </div>
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Project</label>
                                    <input type="text" name="project" placeholder="Project" class="f1-last-name form-control" value="<?php echo isset($details['project'])?$details['project']:''; ?>" id="project">
                                </div>
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Amount</label>
                                    <input type="text" name="amount" placeholder="Amount" class="f1-last-name form-control" value="<?php echo isset($details['amount'])?$details['amount']:''; ?>" id="amount">
                                </div>	
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Pay</label>
                                    <input type="text" name="pay_amount" placeholder="Pay" class="f1-last-name form-control" value="<?php echo isset($details['pay'])?$details['pay']:''; ?>" id="pay_amount">
                                </div>
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Due</label>
                                    <input type="text" name="due_amount" placeholder="Due" class="f1-last-name form-control" value="<?php echo isset($details['due'])?$details['due']:''; ?>" id="due_amount">
                                </div>	
								<div class="form-group col-md-6">
                                    <label class="" for="f1-last-name">Others</label>
                                    <input type="text" name="others" placeholder="Others" class="f1-last-name form-control" value="<?php echo isset($details['other'])?$details['other']:''; ?>" id="others">
                                </div>
								
                                <div class="form-group col-md-6">
                                    <label class="" for="f1-about-yourself">Address</label>
                                    <textarea name="address" placeholder="Enter Address" 
                                    	                 class="f1-about-yourself form-control" id="address"><?php echo isset($details['address'])?$details['address']:''; ?></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="submit" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                    	
                    	</form>
						
                            <fieldset>
                              
								<div class=" col-md-8  col-md-offset-2 table-responsive">
								  <h4>Check your Details</h4>
									<table class="table table-bordered">
										
										<tbody>
										  <tr>
											<th>Name</th>
											<td>xxxxxx</td>
										  </tr>
										   <tr>
											<th>Email Address</th>
											<td>xxx@gmail.com</td>
										  </tr>
										   <tr>
											<th>Mobile</th>
											<td>85xxxxxxx</td>
										  </tr>
										   <tr>
											<th>Alternate Mobile number</th>
											<td>8500xxxxxx</td>
										  </tr>
										   <tr>
											<th>Project</th>
											<td>Test Project</td>
										  </tr>
										   <tr>
											<th>Amount</th>
											<td>RS 10000</td>
										  </tr>
										  <tr>
											<th>Pay</th>
											<td>Rs 5000</td>
										  </tr> 
										  <tr>
											<th>Due</th>
											<td>Rs 5000</td>
										  </tr> 
										  <tr>
											<th>Others</th>
											<td>Doe</td>
										  </tr>
										    <tr>
											<th>payment</th>
											<td>Cash</td>
										  </tr>
										  <tr>
											<th>Address</th>
											<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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