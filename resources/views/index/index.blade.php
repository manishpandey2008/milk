<!DOCTYPE html>
<html>
<head>
<title>KUBER MILKEY</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('css/index/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/index/css/iconeffects.css') }}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{ asset('css/index/css/normalize.css') }}">
<link href="{{ asset('css/index/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('js/index/js/jquery-2.1.4.min.js') }} "></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- //fonts -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{ asset('js/index/js/move-top.js') }} "></script>
		<script type="text/javascript" src="{{ asset('js/index/js/easing.js') }} "></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

	<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>
<!-- banner -->
<div class="banner">

		<div class="container">
			<div class="header-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header logo">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<h1>
										<a class="navbar-brand" href="index.html"><span>KUBER</span><i>MILKEY</i></a>
									</h1>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav class="cl-effect-1">
										<ul class="nav navbar-nav ">
											<li><a href="/kubermilky/index" style="color: black">Home</a></li>
											<li><a class="hvr-overline-from-left button2" href='/kubermilky/about' style="color: black">About</a></li>
											<li><a class="hvr-overline-from-left button2" href="#" style="color: black">Product</a></li>
											<li><a class="hvr-overline-from-left button2" href="/kubermilky/contact" style="color: black">Contact Us</a></li>
											<li><a class="hvr-overline-from-left button2" href="/kubermilky/login" style="color: black">Login </a></li>
										</ul>
									</nav>
								</div><!-- /navbar-collapse -->
							</nav>
			</div>
			<div class="banner-info text-center">
				<script src="js/responsiveslides.min.js"></script>
					<script>
											// You can also use "$(window).load(function() {"
											$(function () {
											 // Slideshow 4
											$("#slider3").responsiveSlides({
												auto: true,
												pager: false,
												nav: false,
												speed: 500,
												namespace: "callbacks",
												before: function () {
											$('.events').append("<li>before event fired.</li>");
											},
											after: function () {
												$('.events').append("<li>after event fired.</li>");
												}
												});
												});
					</script>
				<div id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-text">
									<h4>We cultivate Crops to make farmers increase profits</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
								</div>
							</li>
							<li>
								<div class="banner-text">
									<h4>Make Your business flourish by planting new crops</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
								</div>
							</li>
							<li>
								<div class="banner-text">
									<h4>We celebrates the joy of agriculture science</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
								</div>
							</li>
						</ul>
				</div>
				<a class="scroll" href="#banner-bottom"><img src="{{ asset('storage/index/images/down.png') }} "></a>
			</div>
		</div>

</div>
<!-- //banner -->
<!-- welcome -->
<div id="banner-bottom" class="welcome">
	<div class="container">
		<h3>Welcome To Kuber Milkey</h3>
		<p>Temporibus autem quibusdam et aut officiis 
		debitis aut rerum necessitatibus saepe eveniet ut 
		et voluptates repudiandae sint et molestiae non recusandae.</p>
		<div class="seed-grid">
				<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
					<div class="abt-icon">
						<a href="#" class="hi-icon icon1"></a>
						<h4>Milk</h4>
					</div>
					<div class="abt-icon">
						<a href="#" class="hi-icon icon2"></a>
						<h4>Butter</h4>
					</div>
					<div class="abt-icon">
						<a href="#" class="hi-icon icon3"></a>
						<h4>Curd</h4>
					</div>
					<div class="abt-icon">
						<a href="#" class="hi-icon icon4"></a>
						<h4>Ghee</h4>
					</div>
					<div class="abt-icon">
						<a href="#" class="hi-icon icon5"></a>
						<h4>Paneer</h4>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
		
	</div>
</div>
<!-- //welcome -->
<!-- where -->
<div class="where">
	<div class="container">
		<div class="col-md-4 where-left"></div>
		<div class="col-md-8 where-right">
			<div class="wel-left">
				<div class="welcome-info wel-grid">
					<figure class="icon">
						<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
					</figure>
					<ul>
						<li><a href="#"><span class="glyphicon glyphicon-leaf"></span>Vestibulum auctor dapibus </a></li>
						<li><a href="#"><span class="glyphicon glyphicon-tint"></span>Temporibus autem </a></li>
						<li><a href="#"><span class="glyphicon glyphicon-tree-deciduous"></span>voluptates repudiandae</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-scissors"></span>Molestiae recusandae</a></li>
					</ul>
				</div>
			</div>
			<div class="wel-right">
				<div class="content-item">
					<div class="overlay"></div>
					  <div class="corner-overlay-content">Info</div>
					  <div class="overlay-content">
						<h4>About Kuber Milkey</h4>
						<p>Logo for a screen printing company. They wanted a detachable recognizable brand that didn't need the name of the company.</p>
					  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //where -->

<!-- foo-top -->
<div class="foo-top">
	<h3 class="tittle">Our Subscription Plans </h3>
	<div class="container">
		
		
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card" style="max-width:319px;">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE4IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOCAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRmZTA1OGRkZmIgdGV4dCB7IGZpbGw6cmdiYSgyNTUsMjU1LDI1NSwuNzUpO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LWZhbWlseTpIZWx2ZXRpY2EsIG1vbm9zcGFjZTtmb250LXNpemU6MTZwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTRmZTA1OGRkZmIiPjxyZWN0IHdpZHRoPSIzMTgiIGhlaWdodD0iMTgwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMTE4LjA4NTkzNzUiIHk9Ijk3LjIiPjMxOHgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="card-img-top" alt="Card image" />

            <div class="card-block">
              <h4 class="card-title"></h4>
              <p class="card-text">Subscription Pack 1</p>
              <a href="http://sonarsystems.co.uk" class="btn btn-success">Buy</a>
            </div>
          </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card" style="max-width:319px;">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE4IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOCAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRmZTA1OGRkZmIgdGV4dCB7IGZpbGw6cmdiYSgyNTUsMjU1LDI1NSwuNzUpO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LWZhbWlseTpIZWx2ZXRpY2EsIG1vbm9zcGFjZTtmb250LXNpemU6MTZwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTRmZTA1OGRkZmIiPjxyZWN0IHdpZHRoPSIzMTgiIGhlaWdodD0iMTgwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMTE4LjA4NTkzNzUiIHk9Ijk3LjIiPjMxOHgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="card-img-top" alt="Card image" />

            <div class="card-block">
              <h4 class="card-title"></h4>
              <p class="card-text">Subscription Pack 2</p>
              <a href="http://sonarsystems.co.uk" class="btn btn-success">Buy</a>
            </div>
          </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card" style="max-width:319px;">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE4IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOCAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRmZTA1OGRkZmIgdGV4dCB7IGZpbGw6cmdiYSgyNTUsMjU1LDI1NSwuNzUpO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LWZhbWlseTpIZWx2ZXRpY2EsIG1vbm9zcGFjZTtmb250LXNpemU6MTZwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTRmZTA1OGRkZmIiPjxyZWN0IHdpZHRoPSIzMTgiIGhlaWdodD0iMTgwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMTE4LjA4NTkzNzUiIHk9Ijk3LjIiPjMxOHgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="card-img-top" alt="Card image" />

            <div class="card-block">
              <h4 class="card-title"></h4>
              <p class="card-text">Subscription Pack 3</p>
              <a href="http://sonarsystems.co.uk" class="btn btn-success">Buy</a>
            </div>
          </div>
        </div>
    </div>
    <br>
    <div class="row" >
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="card" style="max-width:319px;">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzE4IiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDMxOCAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRmZTA1OGRkZmIgdGV4dCB7IGZpbGw6cmdiYSgyNTUsMjU1LDI1NSwuNzUpO2ZvbnQtd2VpZ2h0Om5vcm1hbDtmb250LWZhbWlseTpIZWx2ZXRpY2EsIG1vbm9zcGFjZTtmb250LXNpemU6MTZwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTRmZTA1OGRkZmIiPjxyZWN0IHdpZHRoPSIzMTgiIGhlaWdodD0iMTgwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMTE4LjA4NTkzNzUiIHk9Ijk3LjIiPjMxOHgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="card-img-top" alt="Card image" />

            <div class="card-block">
              <h4 class="card-title"></h4>
              <p class="card-text">Subscription Pack 4</p>
              <a href="http://sonarsystems.co.uk" class="btn btn-success">Buy</a>
            </div
          </div>
        </div>
      </div>
    </div>
	
</div>
<!-- //foo-top -->
<!-- specials -->
<div class="specials">
	<div class="slideshow-container">
		<br><br>
		<h3>Testimonial </h3>

<div class="mySlides">
  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
  <p class="author">- John Keats</p>
</div>

<div class="mySlides">
  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	
</div>
<!-- specials -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<h3>Contact</h3>
		<div class="col-md-3 footer-left">
			<h2>Information</h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium unde omnis iste natus error sit voluptatem accusantium.</p>
		</div>
		<div class="col-md-6 footer-middle">
			<form action="#" method="post">
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Send" >
			</form>
		</div>
		<div class="col-md-3 footer-right">
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>+91-7023995999</li>
							
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>RaiSingh Nagar </li>
							<li>Rajasthan,India </li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
		<div class="clearfix"></div>
		<div class="footer-bot">
			<ul>
				<li class="fb1"><a href="#"></a></li>
				<li class="fb2" ><a href="#"></a></li>
				<li class="fb3" ><a href="#"></a></li>
				<li class="fb4" ><a href="#"></a></li>
			</ul>
		</div>
		<p class="copy-right">&copy; 2020 Kuber Milkey. All Rights Reserved | Design by <a href="http://bbr.org.in"> BBR</a></p>
	</div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>