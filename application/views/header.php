 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/googlefonts.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/reset.min.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/logo-nav.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/header.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/datepicker.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" media="screen" href="<?php echo base_url();?>css/jquery-ui.min.css" rel="stylesheet">

	<noscript> <meta http-equiv="refresh" content="0;url=http://www.enable-javascript.com"> </noscript>
	<script>var base_url = '<?=base_url()?>';</script>
	<script src="<?php echo base_url();?>js/modernizr.js"></script>
	<script src="<?php echo base_url();?>js/respond.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>js/additional-methods.js"></script>
	<script src="<?php echo base_url();?>js/datepicker.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
	
<style>
	.shadow:hover ~ body{opacity:0.5;}
</style>	
	</head>
<body class='body-bg'>

    <header class='shadow'>
	<!-- Navigation -->
    <nav class="header-nav navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <div class="icon-bar"></div>
                    <div class="icon-bar"></div>
                    <div class="icon-bar"></div>
                </button>
				<!--LOGO--->
                <a class="navbar-brand" href="<?php echo base_url();?>">JOB BOARD</a>
            </div>
            <div class="collapse navbar-collapse header_menu container_head_menu" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav ">
					<li class="header_list <?php if($tab=='HOME')  { ?>active <?php } ?>"><a href="<?php echo base_url();?>" class="menu_item" id="home">HOME</a></li>
					<li class="header_list <?php if($tab=='FIND JOBS')  { ?>active <?php } ?>"><a href="<?php echo base_url();?>jobs" class="menu_item" id="about">FIND JOBS</a></li>
					<li class="header_list <?php if($tab=='POST JOB')  { ?>active <?php } ?>"><a href="<?php echo base_url();?>post_job" class="menu_item" id="about">POST JOB</a></li>
					<?php if(!$this->session->userdata('user')){ ?>
					<li class="header_list <?php if($tab=='LOGIN')  { ?>active <?php } ?>"><a href="<?php echo base_url();?>login" class="menu_item" id="about">LOGIN</a></li>
					<?php } else { ?>
					<li class="header_list <?php if($tab=='LOGOUT')  { ?>active <?php } ?>"><a href="<?php echo base_url();?>login/logout" class="menu_item" id="about">LOGOUT</a></li>
					<?php } ?>
		         </ul>
            </div>
    </nav>
    </header>
	