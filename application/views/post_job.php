<script>
	document.title = 'Post New Job';
	$('body').removeClass('body-bg');
	$('body').addClass('body-bc');
	$('header').removeClass('shadow');
            

	$(document).ready(function () {
		$("#expires").datepicker({
			dateFormat: 'yy-mm-dd',
			minDate: 0
		});
		$('#post_job').submit(function(){		
			$('#responsibilities').val("<ul class='bullets'><li>"+$.trim($('#responsibilities').val()).split('\n').join('</li><li>')+"</li></ul>");
			$('#skills').val("<ul class='bullets'><li>"+$.trim($('#skills').val()).split('\n').join('</li><li>')+"</li></ul>");
			$('#perks').val("<ul class='bullets'><li>"+$.trim($('#perks').val()).split('\n').join('</li><li>')+"</li></ul>");	
		});
	
	$('#post_job').validate({
		rules:{
				title:{
					required: true,
					minlength:4,
					maxlength:80,
				},
				company:{
					required: true,
					minlength:4,
					maxlength:80,
				},
				location:{
					required: true,
				},
				description:{
					required: true,
				},
				responsibilities:{
					required: true,
				},
				skills:{
					required: true,
				},
				perks:{
					required: true,
				},
				salary_min:{
					required: true,
					lessThanEqual: '#salary_max',
				},
				salary_max:{
					required: true,
				},
				duration:{
					required: true,
				},
				expires:{
					required: true,
				},
			},
			messages:{
				title:{
					required: "Enter job title.",
					minlength:"Title is too short.",
					maxlength:"Title is too long.",
				},
				company:{
					required: "Enter company name.",
					minlength:"Company name is too short.",
					maxlength:"Company name is too long.",
				},
				location:{
					required: "Select job location.",
				},
				description:{
					required: "Enter job description.",
				},
				responsibilities:{
					required: "Enter job responsibilities.",
				},
				skills:{
					required: "Enter skills required.",
				},
				perks:{
					required: "Enter perks & benefits.",
				},
				salary_min:{
					required: "Enter salary.",
					lessThanEqual: "Validate min-max range.",
				},
				salary_max:{
					required: "Enter salary.",					
				},
				duration:{
					required: "Select job duration type.",
				},
				expires:{
					required: "Select job expiry date.",
				},
			},
	});

	$('#post_job').submit(function(){
		if(!$('#post_job').valid())	return false;
	});
	$('#submit_job').click(function(){
		if(!$('#post_job').valid())	return false;
	});
	$('#salary_min,#salary_max').keyup(function(){
		$('#salary_min').valid();
	});
});
	
</script>
        
 <style>
	input, select, textarea {width: 100%;resize: none;}
	p {margin: 7px 0;}
	input[type=number]{-moz-appearance:textfield}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none}
	.message{color: #e06c17;font-size: 14px;background: aliceblue;padding: 11px 4px;}
	.error:not(input){color: #ea1d1d;font-size: 13px;float: left;}
	.error-p{color: #ea1d1d;font-size: 13px;margin: 7px;}
	.signin-a,.signup-a  {cursor:pointer;}
	.login-page {margin: auto;top: 70px;position: relative;}
	.form {position: relative;z-index: 1;background: #FFFFFF;padding: 7vh 5vw;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
	.form input textarea{outline: none;float:left;border: 1px solid #ccc;margin: 15px 0 0;padding: 15px;box-sizing: border-box;font-size: 14px;}
	.form button {font-family: "Roboto", sans-serif;text-transform: uppercase;outline: 0;background: #4CAF50;width: 100%;border: 0;margin: 15px 0 0;padding: 15px;color: #FFFFFF;font-size: 14px;-webkit-transition: all 0.3 ease;transition: all 0.3 ease;cursor: pointer;}
	.form button:hover,.form button:active,.form button:focus {background: #43A047;}
	.login_action {margin: 15px 0 0;color: #b3b3b3;font-size: 12px;}
	.login_action a {color: #4CAF50;text-decoration: none;}
 
</style>
<section class="login-page">
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 row'>
		<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3"></div>
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
		<div class="form">
			<p style=" text-align: center; color: #5182a7; font-size: 120%;" class="row"><?php if($this->uri->segment(2)=='edit'){ echo "Edit Job"; } else { echo "Post New Job";} ?></p>
			<form class="post_job" name="post_job" id="post_job" method='post' action='<?php echo base_url();?>post_job/submit'>
				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Job Title:</p>
					<input type="text" name='title' id='title' class='form-control' placeholder="Job Title"  value="<?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>"), array("","","",""), $edit->title));?><?php } ?>"/>
				</div>

				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Company Name:</p>
					<input type="text" name='company' id='company' class='form-control' placeholder="Company Name"  value="<?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>"), array("","","",""), $edit->company));?><?php } ?>"/>
				</div>

				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Location:</p>
					<select name='location' id='location' class='form-control'>
					<option value=''>Select Location</option>
					<?php foreach($location as $key=>$val) { ?>
					<option value='<?=$val?>' <?php if($this->uri->segment(2)=='edit' && $edit->location==$val){ ?> selected<?php } ?> ><?=$val?></option>
					<?php } ?>
					</select>
				</div>

				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Job Description:</p>
					<textarea rows='3' name='description' id='description' class='form-control' placeholder="add new description on new line" ><?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>","\n"), array("","","","","\n"), $edit->description));?><?php } ?></textarea>
				</div>
				
				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Responsibilities:</p>
					<textarea rows='3' name='responsibilities' id='responsibilities' class='form-control' placeholder="add new responsibilities on new line"><?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>","\n"), array("","","","","\n"), $edit->responsibilities));?><?php } ?></textarea>
				</div>
				
				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Skills Required:</p>
					<textarea rows='3' name='skills' id='skills' class='form-control'  placeholder="add new skill on new line"><?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>","\n"), array("","","","","\n"), $edit->skills));?><?php } ?></textarea>
				</div>
				
				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Perks & Benefits:</p>
					<textarea rows='3' name='perks' id='perks' class='form-control'  placeholder="add new benefit on new line"><?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>","\n"), array("","","","","\n"), $edit->perks));?><?php } ?></textarea>
				</div>

				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Compensation per annum(in rupees):</p>
					<div class='col-sm-6' style='padding: 0;padding-right: 10px'><input type="number" name='salary_min' id='salary_min' class='form-control' placeholder="min" value="<?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>"), array("","","",""), $edit->salary_min));?><?php } ?>"/></div>
					<div class='col-sm-6' style='padding: 0;padding-left: 10px'><input type="number" name='salary_max' id='salary_max' class='form-control' placeholder="max"  value="<?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>"), array("","","",""), $edit->salary_max));?><?php } ?>"/></div>
				</div>

				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Job Duration:</p>
					<select  name='duration' id='duration' class='form-control' >
					<option value='Full time' <?php if($this->uri->segment(2)=='edit' && $edit->duration=='Full time'){ ?> selected<?php } ?>>Full time</option>
					<option value='Part time'<?php if($this->uri->segment(2)=='edit' && $edit->duration=='Part time'){ ?> selected<?php } ?>>Part time</option>
					</select>
				</div>
				
				<div class="form-group row">
					<p style='text-align:left;color: #e78217;font-size: 16px;'>Expiry Date</p>
					<input type="text" name='expires' id='expires' class='datepicker form-control' placeholder="Expiry Date"  value="<?php if($this->uri->segment(2)=='edit'){ ?><?php  echo strip_tags(str_replace(array("<ul class='bullets'>","</ul>","<li>","</li>"), array("","","",""), $edit->expires));?><?php } ?>"/> 
				</div>
				
				<?php if($this->uri->segment(2)=='edit'){ ?> 
				<input type='hidden' name='form_type' value='edit'> 
				<input type="hidden" name="job_id" value="<?=$this->uri->segment(3)?>">
				<button id='register'>SAVE CHANGES</button>
				<?php } else { ?> 
				<input type='hidden' name='form_type' value='submit'> 
				<button type='submit' id='submit_job'>SUBMIT</button>
				<?php } ?>
				<input type='hidden' name='form' value='1'>
			</form>
		</div>
		 
		</div>
	<div class="col-xs-0 col-sm-2 col-md-3 col-lg-3"></div>
	</div>
 
 
</section>