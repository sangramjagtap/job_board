<script>
	document.title = '<?=$title?> - Job Board';
	$('body').removeClass('body-bg');
	$('body').addClass('body-bc');
	$('header').removeClass('shadow');
	$(document).ready(function(){
		/*Edit job*/
		$('.edit-job').click(function(){ window.location=base_url+'jobs/edit/'+<?=$job_id?>; });
		/*Delete job on confirm*/
		$('.delete-job').click(function(){
			var r = confirm("Are you sure you want delete this job?");
			if (r == true) 
			{
				$.ajax({
					url: base_url+'jobs/delete',
					type:'post',
					dataType:'json',
					data:{id:'<?=$job_id?>'},
					success:function(res)
					{			alert('This job hase been deleted successfully.');
								window.location=base_url;
					},			
				});
			}
		});
	});
</script>
            
<style>
	.actions{cursor:pointer;padding: 5px;}
	.actions:hover{color: #5182ba;}
	.container{width: 100%;line-height: 1.5;}
	.fa1{font-size: 80%;margin: 0 7px 0 0;color:#86898c;}
	.new-point{font-size: 115%;color: #5182ba;margin: 10px 0;text-decoration: underline;}
	.pre-wrap{white-space: pre-wrap;margin-left:18px;}
	.single-job{padding-top: 70px;}
	.job-section{    background: #fff;margin-right: auto;margin-left: auto;padding: 7vh;}
	.bullets{list-style-type: disc;}
	.divider1{width: 100%;border-bottom: 1px solid #ccc;margin: 14px 0px;}
	.p0 {padding:0}
	.job-icon{margin: 8px 0;width: 50px;height: 50px;background: #5182ba;color: #fff;font-size: 200%;text-align: center;padding: 2px 3px;text-shadow: 1px 1px 1px #22446b;}
	.job-title{font-size: 130%;}
	.job-company{color: #8c8a8a;font-size: 93%;line-height: 1.5;}
	.job-location{color: #8c8a8a;font-size: 93%;line-height: 1.5;padding:0;display: inline-block;}
	.job-salary{color: #8c8a8a;font-size: 93%;line-height: 1.5;display: inline-block;}
	.job-duration{color: #8c8a8a;font-size: 93%;line-height: 1.5;display: inline-block;}
	.job-expires{color: #8c8a8a;font-size: 93%;padding:0;line-height: 1.5;display: inline-block;}
	.job-created_by{color: #5182a7;font-size: 93%;padding:0;line-height: 1.5;}
</style>

<section class='single-job'>	
<div class='container'>
	<div class='row col-sm-12 col-md-12 col-lg-12'>

		<div class='  col-sm-1 col-md-1 col-lg-1'></div>
		<div class='job-section  col-sm-10 col-md-10 col-lg-10'>
			<?php 	if(isset($title)) {
					if(isset($created_by) && isset($this->session->userdata('user')->user_id)) {
					if($created_by==$this->session->userdata('user')->user_id) { ?>		
					<div style='margin: -5vh;float: right;position: relative;'>
						<i class='fa1 fa fa-pencil actions edit-job' title='Edit this job'></i>
						<i class='fa1 fa fa-trash actions delete-job'  title='Delete this job'></i>
					</div>
			<?php } } ?>
			<div class='row'>
				<div class='p0 col-sm-12 col-md-12'>
					<div class='p0 col-sm-2 col-lg-1'>
						<div class='job-icon'><?php echo ucfirst($title[0]);?></div></div>
					<div class='col-sm-10 col-lg-11'>
						<div>
							<div class='job-title '><?=$title?></div>
							<div class='job-company'><i class='fa1 fa fa-briefcase'></i><?=$company?></div>
							<div class='p0 col-sm-12 col-md-12'>
								<div class='p0 job-location col-sm-5 col-md-2 col-lg-2'><i class='fa1 fa fa-map-marker fa-2'></i>&nbsp;<?=$location?></div>
								<div class='p0 job-salary col-sm-5 col-md-9 col-lg-10'><i class='fa1 fa fa-inr'></i><?=$salary_min?> - <?=$salary_max?></div>
							
							</div>
							<div class='p0 col-sm-12 col-md-12'>
								<div class='p0 job-expires col-sm-5 col-md-2 col-lg-2'><i class='fa1 fa fa-clock-o'></i><?=$duration?></div>
								<div class='p0 job-duration col-sm-5 col-md-9 col-lg-10'><i class='fa1 fa fa-hourglass-half '></i><?=$expires?></div>
							</div>
							<div class='p0 job-created_by col-sm-12 col-md-12'><i class='fa1 fa fa-user'></i><?=$name?></div>		
						</div>
					</div>
					</div>
			</div>
			<div class='divider1'></div>		
			
			<div class='row'>
				<div class='p0 col-sm-1 col-lg-1'></div>
				<div class='col-sm-11 col-lg-11'>
					<div class='new-point'>Job Description:</div>
					<div class='job-description'><?=$description?></div>
					<div class='new-point'>Job Responsibilities:</div>
					<div class='pre-wrap job-responsibilities'><?=$responsibilities?></div>
					<div class='new-point'>Skills & Expertise :</div>
					<div class='pre-wrap job-skills'><?=$skills?></div>
					<div class='new-point'>Perks & Benefits:</div>
					<div class='pre-wrap job-perks'><?=$perks?></div>
				</div>
			</div>
			<?php } else { 	echo "<div style='text-align: center;font-size: 120%;color: #585755;'>No data found</div>"; } ?>
		</div>
		<div class=' col-sm-1 col-md-1 col-lg-1'></div>
	</div>
</div>
</section>