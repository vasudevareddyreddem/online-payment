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
	<style>
	.razorpay-payment-button{
		float:right;
		margin-left:5px;
		background:orange;
		color:#fff;
		border-radius:5px;
		padding:5px 10px;
	}
	</style>

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
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 50.66%;"></div>
                    			</div>
                    			<div class="f1-step activated">
                    				<div class="f1-step-icon"><i class="fa fa-info"></i></div>
                    				<p>Details</p>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                    				<p>Payment</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
                    				<p>Success</p>
                    			</div>
                    		</div>
                    		<?php //echo '<pre>';print_r($user_details);exit; ?>

                            <fieldset>
                              
								<div class=" col-md-8  col-md-offset-2 table-responsive">
								  <h4>Check your Details</h4>

									<table class="table table-bordered">
										
										<tbody>
										  <tr>
											<th>Name</th>
											<td><?php echo isset($user_details['name'])?$user_details['name']:''; ?></td>
										  </tr>
										   <tr>
											<th>Email Address</th>
											<td><?php echo isset($user_details['email'])?$user_details['email']:''; ?></td>
										  </tr>
										   <tr>
											<th>Mobile</th>
											<td><?php echo isset($user_details['mobile'])?$user_details['mobile']:''; ?></td>
										  </tr>
										   <tr>
											<th>Alternate Mobile number</th>
											<td><?php echo isset($user_details['alt_mobile'])?$user_details['alt_mobile']:''; ?></td>
										  </tr>
										   <tr>
											<th>Project</th>
											<td><?php echo isset($user_details['project'])?$user_details['project']:''; ?></td>
										  </tr>
										   <tr>
											<th>Amount</th>
											<td><?php echo isset($user_details['amount'])?$user_details['amount']:''; ?></td>
										  </tr>
										  <tr>
											<th>Pay</th>
											<td><?php echo isset($user_details['pay'])?$user_details['pay']:''; ?></td>
										  </tr> 
										  <tr>
											<th>Due</th>
											<td><?php echo isset($user_details['due'])?$user_details['due']:''; ?></td>
										  </tr> 
										  <tr>
											<th>Others</th>
											<td><?php echo isset($user_details['other'])?$user_details['other']:''; ?></td>
										  </tr>
										    <tr>
											<th>payment</th>
											<td>Online</td>
										  </tr>
										  <tr>
											<th>Address</th>
											<td><?php echo isset($user_details['address'])?$user_details['address']:''; ?></td>
										  </tr>
										  
										</tbody>
									  </table>
									 </div>
									 <div class="clearfix">&nbsp;</div>
									 		 <form  id="paymentform" name="paymentform" action="<?php echo base_url('payment/success'); ?>" method="POST">
											 <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
									); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

      
												<input type="hidden" name="u_id" id="u_id" value="<?php echo isset($user_details['id'])?$user_details['id']:''; ?>">
											  <script
												src="https://checkout.razorpay.com/v1/checkout.js"
												data-key="<?php echo $details['key']?>"
												data-amount="<?php echo $details['amount']?>"
												data-currency="INR"
												data-name="<?php echo $details['name']?>"
												data-image="<?php echo $details['image']?>"
												data-description="<?php echo $details['description']?>"
												data-prefill.name="<?php echo $details['prefill']['name']?>"
												data-prefill.email="<?php echo $details['prefill']['email']?>"
												data-prefill.contact="<?php echo $details['prefill']['contact']?>"
												data-notes.shopping_order_id="3456"
												data-order_id="<?php echo $details['order_id']?>"
												<?php if ($details['display_currency'] !== 'INR') { ?> data-display_amount="<?php echo $details['amount']?>" <?php } ?>
												<?php if ($details['display_currency'] !== 'INR') { ?> data-display_currency="<?php echo $details['display_currency']?>" <?php } ?>
											  >
											  </script>
															<!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
														<!--<input type="hidden" name="shopping_order_id" value="3456">-->
													</form>
                                <div class="f1-buttons">
                                    <a href="<?php echo base_url('home/index/'.base64_encode($user_details['id'])); ?>" type="button" class="btn btn-default  btn-lg">Previous</a>
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