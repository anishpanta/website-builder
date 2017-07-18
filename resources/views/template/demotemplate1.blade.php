<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<script type="text/javascript" src="/templatefirst/js/headerbar.js"></script>
<!DOCTYPE HTML>
<html>
<head>
<title>Template 1</title>
<link href="templatefirst/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="templatefirst/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
<link rel="stylesheet" href="templatefirst/css/flexslider.css" type="text/css" media="screen" />
<script src="templatefirst/js/jquery.min.js"></script>
<script type='text/javascript' src="templatefirst/js/jquery-1.11.1.min.js"></script>
<script src="templatefirst/js/menu_jquery.js"></script>
 <link rel="stylesheet" href="templatefirst/css/swipebox.css">
 <!------ Light Box ------>
    <script src="templatefirst/js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>
	<script type="text/javascript" src="templatefirst/js/move-top.js"></script>
       <script type="text/javascript" src="templatefirst/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
</head>
<body>
<!-- header -->
	<div class="banner">
		<div class="container">
			<div class="header">
				<div class="menu">												
						<a href="#" class="right_bt" id="activator"><img src="templatefirst/images/menu.png" alt=""/></a>
							<div class="box" id="box">
								<div class="box_content">
								   <div class="menu_box_list">
									   <ul>
										   <li class="active"><a href="#home" class="scroll">home</a></li>
											<li><a href="#about" class="scroll">About us</a></li>
											<li><a href="#services" class="scroll">Services</a></li>
											<li><a href="#portfolio" class="scroll">portfolio</a></li>
											<li><a href="#contact-us" class="scroll">contact </a></li>
												<div class="clearfix"></div>
										</ul>
									</div>
									<a class="boxclose" id="boxclose"><img src="templatefirst/images/close.png" alt=""/></a>
								</div>                
							</div>
							<script type="text/javascript" src="templatefirst/js/easing.js"></script>
								 <script type="text/javascript">
										var $ = jQuery.noConflict();
											$(function() {
												$('#activator').click(function(){
														$('#box').animate({'top':'0px'},500);
												});
												$('#boxclose').click(function(){
														$('#box').animate({'top':'-700px'},500);
												});
											});
											$(document).ready(function(){
											
											//Hide (Collapse) the toggle containers on load
											$(".toggle_container").hide(); 
											
											//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
											$(".trigger").click(function(){
												$(this).toggleClass("active").next().slideToggle("slow");
												return false; //Prevent the browser jump to the link anchor
											});
											
											});
										</script>
				</div> 
				<div class="messg">
					<a href="mailto:info@company.com"><i class="msg"></i></a>	    
				</div>
						<div class="clearfix"></div>
			</div>
				<div class="banner-info">
					<h1>John <span> Nash</span></h1>
					<p style="font-color:#000">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a class="learn" href="#">Learn More</a>
				</div>
		</div>
	</div>
	<!-- header -->
	<!-- branding -->
	<div class="branding" id="home">
		<div class="container">
			<div class="col-md-3 mobi">
				<i class="mobile"> </i>
				<label> </label>
				<h4>Skill 1</h4>
			</div>
			<div class="col-md-3 devic">
				<i class="device"> </i>
				<label> </label>
				<h4>Skill 2</h4>
			</div>
			<div class="col-md-3 rock-1">
				<i class="rocket"> </i>
				<label> </label>
				<h4>Skill 3</h4>
			</div>
			<div class="col-md-3 appl">
				<i class="apple"> </i>
				<h4>skill 4</h4>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<div class="b-design">
		<div class="container">
				<div class="col-md-6 dsg-1">
					<h3>Services</h3>
					<li>First service -> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li><br/>
					<li>Second service -> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li><br/>
					<li>Third service -> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
					
				</div>
				<div class="col-md-6 dsg-2">
					<img src="templatefirst/images/food.jpg" class="img-responsive" alt="" />
				</div>
					<div class="clearfix"></div>
		</div>
	</div>
	<!-- branding -->
	<!-- about-me -->
	<div class="about-me" id="about">
		<div class="container">
			<h2>About<span>Me</span></h2>
			<i class="acent"></i>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</p>
				<div class="col-md-6 medi">
					<h5>Social Media Accounts</h5>
				</div>
				<div class="col-md-6 soci">
					<a href="#"><i class="social"></i></a>
				</div>
					<div class="clearfix"></div>
		</div>			
				<div class="location">
					<div class="container">
						<div class="col-md-5 igb">
							<h6>LOCATION:<span>Kathmandu</span></h6>
						</div>
						<div class="col-md-4 pon">
							<h6>PHONE:<span>9800393939<span></h6>
						</div>
						<div class="col-md-3">
							<h6>EMAIL:<a href="#">demo@gmail.com</a></h6>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
	</div>
	<!-- about-me -->
	<!-- portfolio-section -->
	 <div class="portfolio"  id="portfolio">
		<div class="container">
			<h2>Recent <span>Works</span></h2>
			<i class="accent"></i>
		</div>
			
			<div id="portfoliolist">
								
					<div class="col-sm-4">		
						 <a href="#" class="swipebox"  title="Image Title"> <img src="/templatefirst/images/brand.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
	                </div>
	                <div class="col-sm-4">		
						 <a href="#" class="swipebox"  title="Image Title"> <img src="/templatefirst/images/brand.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
	                </div>
	                <div class="col-sm-4">		
						 <a href="#" class="swipebox"  title="Image Title"> <img src="/templatefirst/images/brand.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
	                </div>

				
									
			</div>
			<div class="clearfix"></div>
     </div>
	  <!-- Script for gallery Here -->
				<script type="text/javascript" src="templatefirst/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
<!-- portfolio-section  -->
<!-- slider -->
<div class="dan contact" id="contact-us">
<section class="slider">
	
		<div class="container">
		<h3><span>Contact</span> Me</h3>
		
			<div class="col-md-6">
					<form>
						<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					</form>
			</div>
			<div class="col-md-6">
					<form>
						<textarea value="Message:" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">Message</textarea>
					</form>
			</div>
				<div class="clearfix"></div>
			<div class="button-1">
						<a class="view" href="#">SUBMIT<i class="rock"></i></a>
		</div>					
</section>

	</div>
	
	<div class="footer">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fb"></i></a></li>
				<li><a href="#"><i class="goog"></i></a></li>
				<li><a href="#"><i class="twt"></i></a></li>
				
			</ul>
		</div>
	</div>
	<!-- footer -->	
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
</div>
