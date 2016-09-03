<script>
document.title = 'Login - Job Board';
$(document).ready(function(){

$('#login-form').validate({
		rules:{
		l_email:{
			required:true,
		},
		l_password:{
			required:true,
		}
	},
	messages:
	{		
		l_email:{
			required:'*Username cannot be empty.',
		},
		l_password:{
			required:'*Password cannot be empty.',
		}
	},
});

$('#register-form').validate({
		rules:{
			r_name:{
				required: true,
				minlength:4,
				maxlength:30,
			},
			r_email:{
				required: true,
				minlength:6,
				maxlength:30,
				myemail: true,
				remote: {
					url: base_url+"login/check_email",
					type: "post",
					dataType:'json',
					        data: {
          email: function() {
            return $( "#r_email" ).val();
          }

				
				},
				},
				},
 
			r_pass:{
				required:true,				
				minlength:8,
				maxlength:16,
			},
			r_confpass:{
				required:true,				
				minlength:8,
				maxlength:16,
				equalTo: "#r_pass",
			},
		},
		messages:{
			r_name:{
				required: "Enter your full name.",
				minlength:"Name is too short.",
				maxlength:"Name is too long.",
			},
			r_email:{
				required: "Enter email address.",
				minlength:"Email address is too short.",
				maxlength:"Email address is too long.",
				myemail: "Enter valid email address.",				
				remote: "Email adrress already exists",
			},
			r_pass:{
				required: "Enter your password.",
				minlength:"Password should be at least 8 characters long.",
				maxlength:"Password is too long.",
			},
			r_confpass:{
				required: "Enter your password",
				minlength:"Password should be at least 8 characters long.",
				maxlength:"Password is too long.",
				equalTo: "Password does not match",
				
			},

		},
});

$('#login-form').submit(function(){
	if(!$('#login-form').valid())	return false;
});
$('#register-form').submit(function(){
	if(!$('#register-form').valid()){	return false;}
});
$('#register').click(function(){
	if(!$('#register-form').valid()){	return false;}
});

$('.signin-a').click(function(){	
   $('.register-form').hide();
   $('.login-form').show();
});
$('.signup-a').click(function(){	
   $('.register-form').show();
   $('.login-form').hide();
});

setTimeout(function() { $(".error-p").remove(); }, 3000);
setTimeout(function() { $(".message").remove(); }, 4000);
});

</script>

<style>
	.message{color: #e06c17;font-size: 14px;background: aliceblue;padding: 11px 4px;}
	.error:not(input){color: #ea1d1d;font-size: 13px;float: left;}
	.error-p{color: #ea1d1d;font-size: 13px;margin: 7px;}
	.signin-a,.signup-a  {cursor:pointer;}
	.login-page {margin: auto;top: 4vh;position: relative;}
	.form {position: relative;z-index: 1;background: #FFFFFF;margin: 0 auto 0 0;padding: 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
	.form input {outline: none;width: 100%;border: 1px solid #ccc;margin: 15px 0 0;padding: 15px;box-sizing: border-box;font-size: 14px;}
	.form button {font-family: "Roboto", sans-serif;text-transform: uppercase;outline: 0;background: #4CAF50;width: 100%;border: 0;margin: 15px 0 0;padding: 15px;color: #FFFFFF;font-size: 14px;-webkit-transition: all 0.3 ease;transition: all 0.3 ease;cursor: pointer;}
	.form button:hover,.form button:active,.form button:focus {background: #43A047;}
	.login_action {margin: 15px 0 0;color: #b3b3b3;font-size: 12px;}
	.login_action a {color: #4CAF50;text-decoration: none;}
	.form .register-form {display: none;} 
</style>

<section class="login-page">
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 row'>
		<div class="col-xs-0 col-sm-3 col-md-4 col-lg-4"></div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="login-page">
				<div class="form">
					<?php if($this->session->userdata('login_status')=='register_success'){ ?> <p class='message' >Registration successful! Login to continue.</p> <?php }
					else if($this->session->userdata('login_status')=='login_needed'){ ?> <p class='message' >Login first to continue.</p>
					<?php } $this->session->unset_userdata('login_status'); ?>

					<form class="login-form" name='login-form' id='login-form' method='post' action='<?php echo base_url();?>login/verify_login'>
					<input type="text" name='l_email' id='l_email' placeholder="Email address"/>
						<input type="password" name='l_password' id='l_password' placeholder="Password"/>
						<button id='login'>login</button>
						<?php if($this->session->userdata('login_status')=='failed'){ ?> 
						<p class='error-p'>*Incorrect username or password</p> 
						<?php $this->session->unset_userdata('login_status'); } ?>
						<p class="login_action">Not registered? <a class='signup-a'>Create an account</a></p>
					</form>

					<form class="register-form" name="register-form" id="register-form" method='post' action='<?php echo base_url();?>login/register'>
						<input type="text" name='r_name' id='r_name' placeholder="Name"/>
						<input type="text" name='r_email' id='r_email' placeholder="Email address"/>
						<input type="password" name='r_pass' id='r_pass' placeholder="Password"/>
						<input type="password" name='r_confpass' id='r_confpass' placeholder="Confirm password"/>
						<button id='register'>Register</button>
						<p class="login_action">Already registered? <a class='signin-a'>Sign In</a></p>
					</form>

				</div>
			</div>
		</div>
		<div class="col-xs-0 col-sm-2 col-md-4 col-lg-4"></div>
	</div>
</section>