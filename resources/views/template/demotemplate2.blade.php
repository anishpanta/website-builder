
<script type="text/javascript" src="templatesecond/js/headerbar.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>Template 2</title>
	<!--
		<link href='//fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	-->
			<link href="templatesecond/css/bootstrap.css" rel="stylesheet">
			<link href="templatesecond/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--for-mobile-apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Peak Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//for-mobile-apps-->	
	<!--js-->
		<script type="text/javascript" src="templatesecond/js/jquery.min.js"></script>
		<script src="templatesecond/js/modernizr.custom.97074.js"></script>
	<!--js-->
	<!--start-smoth-scrolling-->
		<script type="text/javascript" src="templatesecond/js/move-top.js"></script>
		<script type="text/javascript" src="templatesecond/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!--start-smoth-scrolling-->
</head>
<body>
<!--banner-->
<div id="home" class="banner">
	<div class="container">
		<div class="banner-grids">
			<div class="col-md-4 navigation">
				<div class="nav-left">
					<div class="grid__item color-4">
						<a class="link link--kumya" href="#home"><span data-letters="Nash">Nash</span></a>
					</div>
				</div>
				<div class="nav-right">
						<span class="menu"><img src="templatesecond/images/menu.png" alt="" /></span>
							<nav class="cl-effect-1">
								<ul class="nav1">
									<li><a class="scroll" href="#home">Home</a></li>
									<li><a class="scroll" href="#about">About</a></li>
									<li><a class="scroll" href="#portfolio">Portfolio</a></li>
									<li><a class="scroll" href="#services">Services</a></li>
									<li><a class="scroll" href="#contact">Contact</a></li>
								</ul>
							</nav>
							<!-- script for menu -->
							<script> 
								$( "span.menu" ).click(function() {
								$( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								});
								});
							</script>
							<!-- //script for menu -->

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8 banner-image text-center">
				<img src="templatefirst/images/sign.jpg" alt=""/>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- about -->
<div id="about" class="about">
	<div class="container">
		<div class="about-info">
				<h3>ABOUT ME</h3>
				<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
		</div>
		   
	</div>
</div>
<!-- //about -->
<!-- my skills -->
	<div class="our-skills">
		<div class="container">
			<div class="skill-info">
				<h2>MY SKILLS</h2>
			</div>
			<div class="skill-grids">
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>Skill 1</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>Skill 2</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>Skill 3</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>Skill 4</p>
					</div>
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="templatesecond/js/circles.js"></script>
					         <script>
								var colors = [
										['#ced7df', '#76b852'], ['#ced7df', '#76b852'], ['#ced7df', '#76b852'], ['#ced7df', '#76b852']
									];
								for (var i = 1; i <= 5; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 40 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
			</div>
		</div>	
	</div>
<!-- //my skills -->
<div id="portfolio" class="gallery">
		<div class="container">
				<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="templatesecond/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>
			<h3>PORTFOLIO</h3>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="templatefirst/images/img1.png" alt="" />
							<div>
								<h5>VIEW</h5>
							</div>
						</a>
					</li>
					<li>
						<a href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="templatefirst/images/img1.png" alt="" />
							<div>
								<h5>VIEW</h5>
							</div>
						</a>
					</li>
					<li>
						<a href="#" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="templatefirst/images/img1.png" alt="" />
							<div>
								<h5>VIEW</h5>
								
							</div>
						</a>
					</li>
					
					
					<div class="clearfix"> </div>
				</ul>
			</section>
				<script type="text/javascript" src="templatesecond/js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
					});
				</script>
        </div>	
</div>
<!--//gallery-->
<!--services-->
<div id="services" class="services">
	<div class="container">
		<div class="ser-head">
			<h3>SERVICES</h3>
		</div>
		<div class="wel-grids">
			<div class="col-md-4 wel-grid text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</figure>
					<h3>Service 1</h3>
					<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
				</div>
			</div>
			<div class="col-md-4 wel-grid btm-gre text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</figure>
					<h3>Service 2</h3>
					<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
				</div>
			</div>
			<div class="col-md-4 wel-grid text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</figure>
					<h3>Service 3</h3>
					<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
				</div>
			</div>
		
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//services-->

<!-- contact-us -->
<div class="contact-us">
	<div class="container">
	<div class="get-info text-center">
			<h3 style="color: #fff;">GET IN TOUCH</h3><br/>
		</div>
	
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
				<p>Kathmandu</p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
				<p><a href="mailto:info@example.com">dummy@gmail.com</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
				<p>9803993939</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="contact-info">
			<form>
				<input type="text" placeholder="Your Name" required>
				<input type="text" placeholder="Your E-Mail" required>
				<input type="text" placeholder="Subject" required>
				<textarea placeholder="Your Message" required></textarea>
				<input type="submit" value="SEND MESSAGE">
			</form>
		</div>
	</div>
</div>
<!-- //contact-us -->

<!-- footer -->
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
