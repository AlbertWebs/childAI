<!DOCTYPE html>
<html>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- SEO --> 
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}

<!-- SEO --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href="fonts.googleapis.com/cssdcb0.css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700" rel="stylesheet" type="text/css">
<!-- Styles -->
<link href="{{asset('theme/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('theme/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('theme/css/icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('theme/layerslider/css/layerslider.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/sea-green.css')}}" title="sea-green"/>

<link href="{{asset('theme/css/contact.css')}}" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="{{asset('theme/js/jquery-2.2.2.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/bootstrap.js')}}"></script>
<script src="{{asset('theme/js/html5lightbox.js')}}"></script>
<script src="{{asset('theme/js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('theme/js/jquery.jigowatt.js')}}"></script><!-- AJAX Form Submit -->
<script src="{{asset('theme/js/perfect-scrollbar.jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/js/script.js')}}"></script>		
<script src="{{asset('theme/js/styleswitcher.js')}}"></script>
<script defer src="{{asset('theme/js/jquery.flexslider.js')}}"></script>
<script defer src="{{asset('theme/js/jquery.mousewheel.js')}}"></script>

<!--  -->
<!-- Scripts For Layer Slider  -->
<script src="{{asset('theme/layerslider/js/greensock.js')}}" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="{{asset('theme/layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>
<!--  -->

<script>
$(window).load(function(){
  $(".our-causes").flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
	
  $(".slideshow").flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
	
  $(".footer_carousel").flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $("body").removeClass("loading");
	}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$(function() {
		$("#carousel").carouFredSel({
			responsive: true,
			circular: false,
			auto: false,
			items: {
				visible: 1,
				width: 20,
			},
			scroll: {
				fx: "directscroll"
			}
		});
		$("#thumbs").carouFredSel({
			responsive: true,
			circular: false,
			infinite: false,
			auto: false,
			prev: "#prev",
			next: "#next",
			items: {
				visible: {
					min: 1,
					max: 6
				},
				width: 200,
				height: "80%"
			}
		});
		$("#thumbs a").click(function() {
			$("#carousel").trigger("slideTo", "#" + this.href.split("#").pop() );
			$("#thumbs a").removeClass("selected");
			$(this).addClass("selected");
			return false;
		});			
	});
});		
</script>	
<!-- Scripts For Layer Slider  -->
<script src="{{asset('theme/layerslider/js/greensock.js')}}" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="{{asset('theme/layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
<script src="{{asset('theme/layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>
<script>
$(document).ready(function(){
jQuery("#layerslider").layerSlider({
	responsive: true,
	responsiveUnder: 1280,
	layersContainer: 1170,
	skin: "fullwidth",
	hoverPrevNext: true,
	skinsPath: "layerslider/skins/"
});
});
</script>
</head>
<body>
<div class="theme-layout">
<div id="top-bar" class="modern">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				{{$Settings->location}}
			</li>
			<li>
				<i class="icon-phone"></i>
				{{$Settings->mobile}}
			</li>
			<li>
				<i class="icon-envelope"></i>
				<a href="#" class="__cf_email__" data-cfemail="">{{$Settings->email}}</a>
			</li>
		</ul> 
		<div class="header-social">
			<ul>
				<li><a href="" title=""><i class="icon-google-plus"></i></a></li>
				<li><a href="{{$Settings->facebook}}" title=""><i class="icon-facebook"></i></a></li>
				<li><a href="{{$Settings->instagram}}" title=""><i class="icon-instagram"></i></a></li>
				<li><a href="{{$Settings->linkedin}}" title=""><i class="icon-linkedin"></i></a></li>
				<li><a href="{{$Settings->twitter}}" title=""><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div><!--top bar-->
<header class="header2 sticky">
	<div class="container">
		<div class="logo">
			<a href="{{url('/')}}" title=""><img width="" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="Logo" /><h1 style="vertical-align:middle"><i>S</i>ASAL</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="{{url('/')}}/donate" title="">DONATE NOW</a>
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a href="{{url('/')}}"><i class="icon-circle"></i> Home</a>
				
				</li>
		
				<li><a href="{{url('/')}}/about-us"><i class="icon-circle"></i>About Us</a>
					<ul>
						<li><a href="{{url('/')}}/about-us#story">SASAL Story</a>
							
						</li>
						<li><a href="{{url('/')}}/about-us#mission">Mission & Vision</a>
							
						</li>
						<li><a href="{{url('/')}}/about-us#team">Our Team</a>
							
						<!-- </li>
						<li><a href="{{url('/')}}/about-us#founder">Founder</a> -->
							
						</li>
						
					</ul>
				</li>

				<li><a><i class="icon-circle"></i>Our Work</a>
					<ul>
						<li><a href="{{url('/what-we-do')}}">What We Do</a>
							
						</li>
						<li><a href="{{url('/our-work')}}">Our Work</a>
							
						</li>
						
						
					</ul>
				</li>

				<li><a><i class="icon-circle"></i>Stories</a>
					<ul>
						<li><a href="{{url('/our-photo-gallery')}}">Gallery</a>
							
						</li>
						<li><a href="{{url('/')}}/reports">Reports</a>
							
						</li>
						<li><a href="{{url('/')}}/blog/events">Events</a>
							
						</li>
						
						
					</ul>
				</li>
				
				<li><a><i class="icon-circle"></i>Join SASAL</a>
					<ul>
						<li><a href="#">Volunteer</a>
							
						</li>
						<li><a href="{{url('/donate')}}">Donate to SASAL</a>
							
						</li>
						
						
					</ul>
				</li>

				<li><a href="{{url('/contact-us')}}"><span class="fa fa-phone"></span> Conatact Us</a>
					
				</li>
			
			</ul>   
		</nav><!-- Menu -->
	</div>		
</header><!--header-->
<div class="responsive-header">	
	<div class="responsive-topbar">		
		<div class="responsive-topbar-info">
			<ul>
				<li><i class="fa fa-home"></i> Go to Home</li>
				<li><i class="fa fa-phone"></i> {{$Settings->mobile}}</li>
				<li><i class="fa fa-envelope"></i> <a href="mailto:{{$Settings->email}}" class="__cf_email__" data-cfemail="">{{$Settings->email}}</a></li>
			</ul>
			<div class="container">
				<div class="responsive-socialbtns">
					<ul>
						<li><a href="" title=""><i class="icon-google-plus"></i></a></li>
						<li><a href="{{$Settings->facebook}}" title=""><i class="icon-facebook"></i></a></li>
						<li><a href="{{$Settings->instagram}}" title=""><i class="icon-instagram"></i></a></li>
						<li><a href="{{$Settings->linkedin}}" title=""><i class="icon-linkedin"></i></a></li>
						<li><a href="{{$Settings->twitter}}" title=""><i class="icon-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="responsive-logomenu">
		<div class="container">
			<a href="{{url('/')}}" title=""><img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="Logo" /></a>
			<span class="menu-btn"><i class="fa fa-th-list"></i></span>
		</div>
	</div>
	<div class="responsive-menu">
		<span class="close-btn"><i class="fa fa-close"></i></span>
		<ul>
			
			<li class="active"><a></i>Home</a>
				
				</li>
		
				<li class="has-dropdown"><a>About Us</a>
					<ul>
						
						<li><a href="{{url('/')}}/about-us#story">SASAL Story</a>
							
						</li>
						<li><a href="{{url('/')}}/about-us#mission">Mission & Vision</a>
							
						</li>
						<li><a href="{{url('/')}}/about-us#team">Our Team</a>
							
						<!-- </li>
						<li><a href="{{url('/')}}/about-us#founder">Founder</a> -->
							
						</li>
						
					</ul>
				</li>

				<li class="has-dropdown"><a>Our Work</a>
					<ul>
						<li><a href="{{url('/')}}/what-we-do">What We Do</a>
							
						</li>
						<li><a href="{{url('/our-work')}}">Our Work</a>
							
						</li>
						
						
					</ul>
				</li>

				<li class="has-dropdown"><a>Stories</a>
					<ul>
						<li><a href="{{url('/')}}/our-photo-gallery">Gallery</a>
							
						</li>
						<li><a href="#">Blogs & Reports</a>
							
						</li>
						
						
					</ul>
				</li>
				
				<li class="has-dropdown"><a>Join SASAL</a>
					<ul>
						<li><a href="#">Volunteer</a>
							
						</li>
						<li><a href="{{url('/donate')}}">Donate to SASAL</a>
							
						</li>
						
						
					</ul>
				</li>

				<li><a>Conatact Us</a>
					
				</li>
		
		</ul>  
	</div> 
	<button class="responsive-donate">Donate Now</button>
</div><!--Responsive header-->
@yield('content')			
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>M</span>essage from the </strong> Board</h4>
				</div>
				<?php $Message = DB::table('board')->get(); ?>
				<div class="footer_carousel">
					<ul class="slides">
					    @foreach($Message as $about)
						<li>
							<div class="review" style="color:#fff">
							{!!html_entity_decode($about->content)!!}
							</div>						
							<div class="from">
								<h6>{{$about->name}}</h6>
								<span>{{$about->position}}, {{$about->country}}</span>
							</div>
						</li>
						@endforeach
						
					</ul>
				</div>
			</div><!-- Reviews Widget -->
			<div class="col-md-5">
				<div class="footer-widget-title">
					<h4><strong><span>I</span>nstagram</strong> Feed</h4>
				</div>
				<div class="flickr-images">
				<?php $counter = 1; ?>
                  @foreach($images as $key => $image)
					<a target="_new" href="{{ $image }}" title=""><img src="{{ $image }}" alt="" /></a>
					@if($counter == 15)
                      @break
                    @endif
                    <?php $counter ++; ?>
				  @endforeach
				</div>
			</div><!-- Flickr Widget -->
			
			<div class="col-md-4">
				<div class="footer-widget-title">
					<h4><strong><span>C</span>ontact</strong> Us</h4>
				</div>
				<ul class="contact-details">
					<li>
						<span><i class="icon-home"></i>ADDRESS</span>
						<p>{{$Settings->address}}</p>
						<p>{{$Settings->location}}</p>
					</li>
					<li>
						<span><i class="icon-phone-sign"></i>PHONE NO</span>
						<p>{{$Settings->mobile}} / {{$Settings->mobile_one}}</p>
					</li>
					<li>
						<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
						<p>{{$Settings->email}}</p>
					</li>
					<li>
						<span><i class="icon-link"></i>WEB ADDRESS</span>
						<p>{{$Settings->url}}</p>
					</li>
				</ul>
			</div><!-- Contact Us Widget -->
			
		</div>
	</div>
</footer><!-- Footer -->
<div class="footer-bottom">
	<div class="container">
		<p>Copyright © <?php echo date('Y') ?> <a href="{{url('/copyright')}}">{{$Settings->sitename}}.</a> <span>All rights reserved.</span> </p>
		<ul>
			<li><a href="{{url('/terms-and-conditions')}}" title="">Terms and Conditions</a></li>
			<li><a href="{{url('/privacy-policy')}}" title="">Privacy Policy</a></li>
			<li><a href="{{url('/copyright')}}" title="">Copyright Statement</a></li>
			
		</ul>
	
	</div>
</div><!-- Bottom Footer Strip -->

<script data-cfasync="false" src="{{asset('theme/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script></body>
<!-- donate -->

<!-- donate -->
@endforeach
</html>
