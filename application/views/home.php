<script>document.title = 'Home - Job Board';</script>
<style>
	.job-btn{margin: 10px 40px;padding: 15px;display: inline-block;position: relative;border-radius: 4px;color: #FFF;text-decoration: none;border: none;background-color: #e39558;border-bottom: 3px solid #b16e39;text-shadow: 2px 1px #b97541;font-size: 15px;}
	.job-btn:hover {box-shadow: 0px 2px 2px #a0704b inset;}
	.main_div{height: 100%;width: 70%;padding: 0;position: relative;top: 100px;margin-left: auto;margin-right: auto;}
	.heading_p{text-align: justify;font-size: 2em;color: #FFF;text-shadow: 1px 1px 11px #463f3f;}
	.author_p{text-align: right;font-size: 3vh;margin-top: 10px;color: #e2dbdb;}
	.nav_btn1{height: 100%;width: 100%;padding: 0;position: relative;top: 21vh;margin-left: auto;text-align: center;margin-right: auto;}
</style>

<section class="home">
	<div class="main_div">
		<p class='heading_p'>	Choose a job you love, and you will never have to work a day in your life.</p>
		<p class="author_p">-Confucius </p>

		<div class="container nav_btn1">
			<a href="<?=base_url()?>jobs"><button class="job-btn">FIND A RIGHT JOB</button></a>
			<a href="<?=base_url()?>post_job"><button class="job-btn">POST NEW JOB</button></a>
		</div>	
	</div>	
</section>