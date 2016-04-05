<!DOCTYPE html>
<html>
	<head>

		<title> <?php 

			echo (!empty($metaTitle)) ? $metaTitle : $title_for_layout; ?> </title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="<?php echo $metaDescriptions; ?>" />
		<meta name="keywords" content="<?php echo $metakeywords; ?>" /> <?php
		echo $this->Html->meta('icon', $this->Html->url($siteUrl.'/siteicons/fav.ico')); ?>

		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/font-awesome.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/bootstrap-select.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/jquery.mCustomScrollbar.css" type="text/css" media="all">

		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/common.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/jquery.dataTables.min.css" type="text/css" media="all">

		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/owl.carousel.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/owl.theme.css" type="text/css" media="all">

		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/products.css" type="text/css" media="all">
		
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/common_new.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/hover.css" type="text/css" media="all">

		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/mobile.css" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>frontend/css/mobile_1.css" type="text/css" media="all">

		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic" rel="stylesheet" type="text/css">


		 <?php
	
	if($this->request->params['controller'] == "searches" &&
			$this->request->params['action'] == 'index') { ?>

		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>frontend/css/style.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>frontend/css/responsive.css" /><?php
	} ?>

	</head>
	<body onload="$('#thanksmsg').modal('show');">

	<?php echo $this->element('frontend/topheader'); ?>
	<?php echo $this->Session->flash(); ?>
	<div class="middle_height search_cont">
	<?php echo $this->fetch('content'); ?>
	</div>
	
	


	<!-- Page refresh loading image -->
    <div class="ui-loader">
        <div class="spinner">
        	<div class="spinner-icon"></div>
        </div>
    </div>

    <!-- login popup -->
      <div class="modal fade login_parent" id="demo-1" tabindex="-1">
        <div class="modal-dialog">
         <div class="modal-content">
          <div id="loginform" class="loginform">
           <div class="login_logo">
           <img src="<?php echo $siteUrl.'/siteicons/login_logo.png'; ?>" class="img-responsive" >
           <h3>Welcome back!</h3>
           </div>
           <div class="modal_form">
               <!--form-->
               
               <?php
                    echo $this->Form->create('User', array('class' => 'login-form','url'=>'/customerlogin','id'=>'UserLoginForm'));
               ?>
               
                   <div class="input-group">
                       <!--input type="email" class="form-control email_icon" name="login" value="" placeholder="Email Address"-->
                       
                       <?php
                             echo $this->Form->input('username',array('label' => false,  'placeholder' => __('Email Address'),  'class'=>'form-control email_icon',  'autocomplete' => 'off',  'div' => false)); 
                       ?>
                       
                       <div class="clearfix"></div>
                   </div>
                   <div class="input-group">
                       <!--input type="password" class="form-control email_icon" name="login" value="" placeholder="Password"-->
                       
                        <?php
                             echo $this->Form->input('password',	array('label' => false,  'placeholder' => __('Password'),  'class'=>'form-control email_icon',  'autocomplete' => 'off',  'div' => false)); 
                       ?>
                       
                       <div class="clearfix"></div>
                   </div>
                   <!--button type="button" class="btn registre_btn hvr-rectangle-out" name="log-me-in" id="login_btn">Log In</button-->
                   
                   
                   <?php echo $this->Form->submit(__('Log In'), array('class' => 'btn registre_btn hvr-rectangle-out','id'=>'loginform'));?>
                   
                  
                   
               <!--/form-->
           </div>
           <div class="remenber_sp">
             <div class="checkbox">
                <!--input id="checkbox1" name="remember_me" class="styled" type="checkbox"-->
                
                <input id="remember_me" name="data[User][rememberMe]" class="styled" type="checkbox" />
                <?php
              //  echo $this->Form->input("rememberMe",array('id'=>'remember_me','type'=>'checkbox','label'=>false,'div' =>false));
                ?>
                
                <label for="checkbox1">Remember me</label>
             </div>
             <div class="clearfix"></div>
           </div>
             
               <?php echo $this->Form->end(); ?>
              
             </div>
             
             
         <div id="forgotform" class="forgotform" style="display:none;">
           <div class="login_logo">
           <img src="<?php echo $siteUrl.'/siteicons/login_logo.png'; ?>" class="img-responsive" >
           <h3>Forgot Password</h3>
           </div>
           <div class="modal_form">
               <!--form-->
               
               <?php
                    echo $this->Form->create('User', array('class' => 'login-form','url'=>'/customerlogin', 'id'=>'forgetmail'));
               ?>
               
                   <div class="input-group">
                       <!--input type="email" class="form-control email_icon" name="login" value="" placeholder="Email Address"-->
                       
                       <?php
                             echo $this->Form->input('username',array('label' => false,  'placeholder' => __('Email Address'),  'class'=>'form-control email_icon','name'=>'data[Users][email]',  'autocomplete' => 'off',  'div' => false)); 
                       ?>
                       
                       <div class="clearfix"></div>
                   </div>
                  
                   <!--button type="button" class="btn registre_btn hvr-rectangle-out" name="log-me-in" id="login_btn">Log In</button-->
                   
                   
                   <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn registre_btn hvr-rectangle-out','id'=>'submit_forgetmail'));?>
                   
                   <?php echo $this->Form->end(); ?>
                   
               <!--/form-->
           </div>
           
             
       </div>
             
             
             
           <div class="or-separator text-center">
              <h6>OR</h6>
              <hr>
           </div>
           <div class="social_space">
            <a class="facebook" href="<?php echo $siteUrl.'/users/social_login/Facebook'; ?>"><button type="button" class="btn facebook_btn hvr-push">Connect with Facebook</button></a>
              <a class="googleplus" href="<?php echo $siteUrl.'/users/social_login/Google'; ?>"><button type="button" class="btn google_btn hvr-push gplogin">Connect with Google</button></a>
           </div>

           <div class="modal-footer text-center">
              <p>Don't have an account? <a href="#" data-toggle="modal" data-target="#demo-2" data-dismiss="modal">Sign up</a></p>
              <p>Forgot your password? <a id="forgot_password" href="#">Reset it</a></p>
            </div>
            <div class="clearfix"></div>
         </div>
        </div>
      </div>
    <!-- end login popup -->
    <!-- signup popup -->
      <div class="modal fade login_parent" id="demo-2" tabindex="-1">
          <div class="modal-dialog">
           <div class="modal-content">
             <div class="login_logo">
             <img src="<?php echo $siteUrl.'/siteicons/login_logo.png'; ?>" class="img-responsive" >
             <h3>Create Account</h3>
             </div>
             <div class="modal_form">
                 <!--form-->
                <?php echo $this->Form->create('User', array('class' => 'login-form','url'=>'/signup','id'=>'UserSignupForm')); ?>
                     <div class="input-group">
                         <!--input type="text" class="form-control email_icon" name="first_name" value="" placeholder="First Name"-->
                         
                        <?php
                            echo $this->Form->input('Customer.first_name',array('class'=>'form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"First Name")); 
                        ?> 
                         
                         <div class="clearfix"></div>
                     </div>
                     <div class="input-group">
                         <!--input type="text" class="form-control email_icon" name="last_name" value="" placeholder="Last Name"-->
                         
                         <?php
                            echo $this->Form->input('Customer.last_name',array('class'=>'form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"Last Name")); 
                        ?> 
                         
                         
                         <div class="clearfix"></div>
                     </div>
                     <div class="input-group">
                         <!--input type="email" class="form-control email_icon" name="email" value="" placeholder="Email"-->
                         
                         <?php
                            echo $this->Form->input('Customer.customer_email',array('class'=>'form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"Email")); 
                        ?> 
                         
                         <div class="clearfix"></div>
                     </div>
                     <div class="input-group">
                         <!--input type="password" class="form-control email_icon" name="password" value="" placeholder="Password"-->
                         
                         <?php
                            echo $this->Form->input('User.password',array('id'=>'UserPassword_2', 'class'=>'validate form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"Password",'name'=>'data[User][UserPassword_2]')); 
                        ?> 
                         
                         <div class="clearfix"></div>
                     </div>
                     <div class="input-group">
                         <!--input type="password" class="form-control email_icon" name="conf_password" value="" placeholder="Confirm Password"-->
                          <?php
                            echo $this->Form->input('password',array( "equalto"=>"#UserPassword_2", 'class'=>'validate form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"Confirm Password","name"=>"data[User][confir_password]","id"=>'UserConfirPassword')); 
                        ?> 
                         
                         <div class="clearfix"></div>
                     </div>
                     <div class="input-group">
                         <!--input type="text" class="form-control email_icon" name="phone" value="" placeholder="Phone Number"-->
                         
                          <?php
                            echo $this->Form->input('Customer.customer_phone',array('class'=>'form-control email_icon', 'autocomplete' => 'off','label' => false,'div' => false,'placeholder'=>"Phone Number")); 
                        ?> 
                         
                         <div class="clearfix"></div>
                     </div>
                     <!--button type="button" class="btn registre_btn hvr-rectangle-out" name="log-me-in" id="login_btn">Sign up</button-->
                     <a  style="display:'none';" id="submitdata" class="close" data-dismiss="modal" aria-label="Close"></a>
                     <?php 
                        echo $this->Form->submit(__('Sign Up'), array('class' => 'btn registre_btn hvr-rectangle-out','id'=>'signupform')); 
                     ?>
                
                    <?php
                       echo $this->Form->end(); 
                    ?>
                 <!--/form-->
             </div>
             <div class="modal-footer text-center">
                <p>Already have an account? <a id="login" class="login" href="#" data-toggle="modal" data-target="#demo-1" data-dismiss="modal">Log in</a></p>
              </div>
              <div class="clearfix"></div>
           </div>
          </div>
        </div>
    <!-- end signup popup -->

	<script type="text/javascript" src="https://js.stripe.com/v2/"> </script>
	
	<!--<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery-1.11.3.js"></script>-->

	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery-1.11.0.min.js"></script>	

	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery-migrate-1.2.1.min.js"></script>


	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/bootstrap-select.js"></script>

	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery.bootstrap-touchspin.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/common.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/customer.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery.mCustomScrollbar.js"></script>

    <script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>frontend/js/jquery.flexisel.js"></script>


    <script type="text/javascript">    	

		var rp = "<?php echo $siteUrl.'/'; ?>";
		var publishKey = "<?php echo $publishKey; ?>";
		

		$(window).load(function() {
			$('.ui-loader').hide();
		});

		$(document).ready(function(){			
			
           $(window).trigger('resize');
		   doResize();
		   $(window).on('resize', doResize);		   
		   	
            
        });
        
		function doResize()
		{
			var navbar_height = $(".navbar").height();
				
			//middle minimum height
			var footer_height = $("footer").height();			
			var win_height = $(window).height();
						
			var middle_height = win_height - ( navbar_height + footer_height ) + 30 ;/* -25 for footer paddings*/
			$(".middle_height").css({"min-height":middle_height});

			$("#cart-sidebar").css("top", $(".header").height());

			if( $(window).width() > 767 ) 
				{
					$(".leftsideBar").css({ "padding-top": navbar_height + 0 });

					var leftsideBarHei = $(window).height() - ( $(".header").outerHeight() );
					$(".leftsideBar_scroller").css("height",leftsideBarHei);
				}
			else 
				{ 
					$(".leftsideBar").css({ "padding-top": 0 });
					
					var leftsideBarHei = $(window).height() - ( 65 );
					$(".leftsideBar_scroller").css("height",leftsideBarHei);
				}

			$(".rightSideBar").css({ "margin-top": navbar_height });



		}


		jQuery().ready(function() {
                 

			var changepasswordvalidator = jQuery("#CustomerChangePasswordForm").validate({
				rules: {
					"data[User][oldpassword]": {
						required: true,
					},
					"data[User][newpassword]": {
						required: true,
					},
					"data[User][confirmpassword]":{
						required: true,
						equalTo: '#UserNewpassword'
					},

				},
				messages: {
					"data[User][oldpassword]": {
						required: "<?php echo __('Please enter old password'); ?>",
					},
					"data[User][newpassword]": {
						required: "<?php echo __('Please enter new password'); ?>",
					},
					"data[User][confirmpassword]":{
						required: "<?php echo __('Please enter confirm password'); ?>",
						equalTo: "<?php echo __('Please enter the same value again'); ?>",
					}

				}
			});


		/*	var loginForgetmailvalidator = jQuery("#forgetmail").validate({
				rules: {
					"data[Users][email]": {
						required: true,
						email :true,
					}
				},
				messages: {
					"data[Users][email]": {
						required: "<?php echo __('Please enter email'); ?>",
						email : "<?php echo __('Please enter a valid email address'); ?>",
					}

				}
			});
                        
                        */

			var Profilevalidator = jQuery("#CustomerCustomerMyaccountForm").validate({
				rules: {
					"data[Customer][first_name]": {
						required: true,
					},
		            "data[Customer][customer_phone]": {
						required: true,
		                number:true,
					}
				},
				messages: { 
					"data[Customer][first_name]": {
						required: "<?php echo __('Please enter firstname'); ?>",
					},
		            "data[Customer][customer_phone]": {
						required: "<?php echo __('Please enter phone number'); ?>",
						number : "<?php echo __('Please enter valid phone number'); ?>",
					}

				}
			});

			var AddAdressBookvalidator = jQuery("#AddCustomerAddressBook").validate({
				rules: {
					"data[CustomerAddressBook][address_title]": {
						required: true,
					},
		            "data[CustomerAddressBook][address]": {
						required: true,
					},
		            "data[CustomerAddressBook][address_phone]": {
						required: true,
		                number:true,
					},
		            "data[CustomerAddressBook][landmark]": {
						required: true,
					},
		             "data[CustomerAddressBook][state_id]": {
						required: true,
					},
		             "data[CustomerAddressBook][city_id]": {
						required: true,
					},
		             "data[CustomerAddressBook][location_id]": {
						required: true,
					}
				},
				messages: { 
					"data[CustomerAddressBook][address_title]": {
						required: "<?php echo __('Please enter tittle'); ?>",
					},
		            "data[CustomerAddressBook][address]": {
						required: "<?php echo __('Please enter street address'); ?>",
					},
		            "data[CustomerAddressBook][address_phone]": {
						required: "<?php echo __('Please enter phone number'); ?>",
					},
		            "data[CustomerAddressBook][landmark]": {
						required: "<?php echo __('Please enter landmark'); ?>",
					},
		             "data[CustomerAddressBook][state_id]": {
						required: "<?php echo __('Please select state'); ?>",
					},
		             "data[CustomerAddressBook][city_id]": {
						required: "<?php echo __('Please select city'); ?>",
					},
		             "data[CustomerAddressBook][location_id]": {
						required: "<?php echo __('Please select location'); ?>",
					}

				}
			});
		    
		    	
		    
		    var EditAdressBookvalidator = jQuery("#EditCustomerAddressBook").validate({
				rules: {
					"data[CustomerAddressBook][address_title]": {
						required: true,
					},
		            "data[CustomerAddressBook][address]": {
						required: true,
					},
		            "data[CustomerAddressBook][address_phone]": {
						required: true,
		                number:true,
					},
		            "data[CustomerAddressBook][landmark]": {
						required: true,
					},
		             "data[CustomerAddressBook][state_id]": {
						required: true,
					},
		             "data[CustomerAddressBook][city_id]": {
						required: true,
					},
		             "data[CustomerAddressBook][location_id]": {
						required: true,
					}
				},
				messages: { 
					"data[CustomerAddressBook][address_title]": {
						required: "<?php echo __('Please enter tittle'); ?>",
					},
		            "data[CustomerAddressBook][address]": {
						required: "<?php echo __('Please enter street address'); ?>",
					},
		            "data[CustomerAddressBook][address_phone]": {
						required: "<?php echo __('Please enter phone number'); ?>",
						number : "<?php echo __('Please enter valid phone number'); ?>",
					},
		            "data[CustomerAddressBook][landmark]": {
						required: "<?php echo __('Please enter landmark'); ?>",
					},
		             "data[CustomerAddressBook][state_id]": {
							required: "<?php echo __('Please select state'); ?>",
					},
		             "data[CustomerAddressBook][city_id]": {
						required: "<?php echo __('Please select city'); ?>",
					},
		             "data[CustomerAddressBook][location_id]": {
						required: "<?php echo __('Please select location'); ?>",
					}

				}
			});
		});

		
		function validateAddress () {

			var title     = $('#CustomerAddressBookAddressTitles').val();
			var id        = $('#CustomerAddressBookId').val();
			var street    = $('#street').val();
			var ph        = $('#phone').val();
			var bulinding = $('#build').val();
			var state     = $('#CustomerAddressBookStateIds').val();
			var city      = $('#CustomerAddressBookCityIds').val();
			var area      = $('#CustomerAddressBookLocationIds').val();

			if(title == '') {
				$('.titleerorr').html("<?php echo __('Please enter tittle'); ?>");
				$('#CustomerAddressBookAddressTitles').focus();
				return false;
			}else if(street == ''){
				$('.streeterorr').html("<?php echo __('Please enter street address'); ?>");
				$('#street').focus();
				return false;
			}else if(ph == ''){
				$('.phoneerorr').html("<?php echo __('Please enter phone number'); ?>");
				$('#phone').focus();
				return false;
			}else if(isNaN(ph)){
				$('.phoneerorr').html("<?php echo __('Please enter valid phone number'); ?>");
				$('#phone').focus();
				return false;
			}else if(bulinding == ''){
				$('.builderorr').html("<?php echo __('Please enter landmark'); ?>");
				$('#build').focus();
				return false;
			}else if(state == ''){
				$('.stateerorr').html("<?php echo __('Please select state'); ?>");
				$('#CustomerAddressBookStateIds').focus();
				return false;
			}else if(city == ''){
				$('.cityerorr').html("<?php echo __('Please select city'); ?>");
				$('#CustomerAddressBookCityIds').focus();
				return false;
			}else if(area == ''){
				$('.areaerorr').html("<?php echo __('Please select location'); ?>");
				$('#CustomerAddressBookLocationIds').focus();
				return false;
			}else {
				$.post(rp+'customer/customers/editaddresschecking',{'title':title,'id':id}, function(response) {

					if($.trim(response) == 'success'){
						$("#EditCustomerAddressBook").submit();
					} else {
						$('.checkerorr').html("<?php echo __('Addressbook title already exists'); ?>");
						return false;
					}
				});
			}
			return false;
		}


		function addAddressCheck () {

			var title     = $('#CustomerAddressBookAddressTitle').val();

			$('.checkAdderorr').show();
			$('.checkAdderorr').html('');

			if (title != '') {
				$.post(rp+'customer/customers/editaddresschecking',{'title':title}, function(response) {

					if($.trim(response) == 'success'){
						$("#AddCustomerAddressBook").submit();
					} else {
						$('.checkAdderorr').html("<?php echo __('Addressbook title already exists'); ?>");
						return false;
					}
				});
				return false;
			}
		}

		function checking(){
			$('.passerror').html('');
			var pass    = $('#UserOldpassword').val();
			var newpass     = $('#UserNewpassword').val();
			var confirm  = $('#UserConfirmpassword').val();
			if(pass != '' && newpass == '' && confirm == '' ) {
				$.post(rp + 'customer/Customers/passchecking', {'pass': pass}, function (response) {
					if ($.trim(response) == 'sucess') {
						$('#CustomerChangePasswordForm').submit();
					} else {
						$('#UserOldpassword').focus();
						$('.passerror').html("<?php echo __('Please enter old password'); ?>");
					}
				});
			} else {
				$('#UserOldpassword').focus();
				$('.passerror').html("<?php echo __('Please enter old password'); ?>");
				return false;
			}
		}


		function saveCard () {

			//Stripe.setPublishableKey('pk_test_o2yvGW5u0AxIAazkU7b0JKwr');

			Stripe.setPublishableKey(publishKey);

			var CardName	= $('#CardName').val();
		 	var CardNumber	= $('#CardNumber').val();
		  	var CardCvv		= $('#CardCvv').val();
		    var noRecord    = $('#noRecord').text();

		    var savedCard = $.trim($('[name="data[Card][Saved]"]:checked').val());
		    
		    if ($('#cardCheck').is(":checked")) {
		        if (noRecord == '') {
		            if (savedCard != '') {
		                $('#UserPaymentForm').submit();
		                return false;
		            } else {
		                $('#error').html("<?php echo __('Please select any card'); ?>");
		                $('#error').addClass('error');
		                return false;
		            }
		        } else {
		            $('#error').html("<?php echo __('Card is not available'); ?>");
		            $('#error').addClass('error');
		            return false;
		        }
		    }
		    

		  	$('#error').html('');
		  	$('#error').removeClass('error');

		  	if (CardName == '') {

		        $('#error').html("<?php echo __('Please enter the name'); ?>");
		        $('#error').addClass('error');
		        $('#CardName').focus();
		        return false;
		    
		  	} else if (CardNumber == '') {

		        $('#error').html("<?php echo __('Please enter the card number'); ?>");
		        $('#error').addClass('error');
		        $('#CardNumber').focus();
		        return false;

		  	} else if (CardCvv == '') {

		        $('#error').html("<?php echo __('Please enter the cvv'); ?>");
		        $('#error').addClass('error');
		        $('#CardCvv').focus();
		        return false;

		  	} else {

				Stripe.card.createToken($('[name=StripeForm]'), 
			    function(status, response){
			       
			        if (status == 200 && response.id != '') {

						$('#CardName').append($('<input type="text" name="data[StripeCustomer][stripe_token_id]" value="'+response.id+'" />'+
												'<input type="text" name="data[StripeCustomer][card_id]" value="'+response.card.id+'" />'+
												'<input type="text" name="data[StripeCustomer][card_number]" value="'+response.card.last4+'" />'+
												'<input type="text" name="data[StripeCustomer][card_brand]" value="'+response.card.brand+'" />'+
												'<input type="text" name="data[StripeCustomer][card_type]" value="'+response.card.funding+'" />'+
												'<input type="text" name="data[StripeCustomer][exp_month]" value="'+response.card.exp_month+'" />'+
												'<input type="text" name="data[StripeCustomer][exp_year]" value="'+response.card.exp_year+'" />'+
												'<input type="text" name="data[StripeCustomer][country]" value="'+response.card.country+'" />'+
												'<input type="text" name="data[StripeCustomer][customer_name]" value="'+response.card.name+'" />'+
												'<input type="text" name="data[StripeCustomer][client_ip]" value="'+response.client_ip+'" />'));

						
		        		$("#stripebtn").attr('disabled','disabled');

		        		var checkMe = $('#checkout').val();

		        		if (checkMe == 'checkout') {

		        			var formData = ($("#UserIndexForm").serialize());
			        		$.post(rp+'/checkouts/customerCardAdd/',{'formData':formData}, function(res) {

					            $('#addpayment').modal('hide');

					            $.post(rp+'/checkouts/paymentCard/', function(respon) {
					            	$('#payment').html(respon);
						        });

						        $.post(rp+'/checkouts/cardAdd/', function(response) {
					            	$('#addpayment').html(response);

						        });
					        });
			        	} else {
			        		$('#UserIndexForm').submit();
			        	}
			        } else {
			        	alert("<?php echo __('Check ur card details'); ?>");
			        }
				});
		    	return false;
			}
		}

		$(document).ready(function(){
			
			var speed = 'slow';
			var slides = $('#txtAni ul li');
		  	function slider() 
		  	{
		   	var now = $("#txtAni ul").children(':visible'),
		     	first = $("#txtAni ul").children(':first'),
		     	next = now.next();
		     	next = next.index() == -1 ? first : next;
		   	now.fadeOut(speed, function() {next.fadeIn(speed);});
		   	setTimeout(slider, 4500);
		  	} 
			slider();
			
			$("#howWork").on("click", function(){
				$("#howItWork").addClass("active");
				return false;
			});
			
			$("#close").on("click", function(){
				$("#howItWork").removeClass("active");
				return false;
			});
			
			$(document).on("click", function() {
				  $("#howItWork").removeClass("active");
				});
			
			$("#howItWork").on("click", function(e){
				  e.stopPropagation();
				});


			$("#menubutton").click(function() {
				$("header ul").slideToggle(400, function()  {
				jQuery(this).toggleClass("expanded").css('display',' ');
				
				});
				
			});

		});
	</script>
	<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo4").flexisel({
            clone:false
        });

    });
    </script>

   <script>
     $(document).ready(function(){
        $(".product__inner").on("mouseover",function(){
            $(this).find(".shopping_bott h6").css("color", "white");
            $(this).find(".shopping_bott p").css("color", "white");
        });
        $(".product__inner").on("mouseout",function(){
                    $(this).find(".shopping_bott h6").css("color", "#04a7cb");
                    $(this).find(".shopping_bott p").css("color", "#848484");
                });
     });
   </script>

	<?php
		if ($this->request->params['controller'] == 'searches' &&
			$this->request->params['action'] == 'storeitems') {
	?>
			<script type="text/javascript">
				$(document).ready(function(){								
					$(".viewCart_mobile").click(function() {
						$('#cart-sidebar').show();
					});
					$(".mobile_cart_close").click(function() {
						$('#cart-sidebar').hide();
					});
				});
			</script>
	<?php
		}
	?>


	</body>
</html>