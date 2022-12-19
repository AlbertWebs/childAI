<!DOCTYPE HTML>
<html>
	
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
	@foreach($SiteSettings as $Settings)
	<link rel="shortcut icon" type="image/png" href="{{url('/')}}/uploads/logo/africa-red.png"/>
	  <!-- SEO --> 
	  {!! SEOMeta::generate() !!}
	  {!! OpenGraph::generate() !!}
	  {!! Twitter::generate() !!}
	
	<!-- SEO -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('theme/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('theme/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('theme/fonts/flaticon/font/flaticon.css')}}">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('theme/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('theme/js/modernizr-2.6.2.min.js')}}"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<!-- <nav class="colorlib-nav" role="navigation">
			
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="Logo Goes Here"></a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{url('/')}}">Home</a></li>
								
								
								<li><a href="{{url('/about')}}">About</a></li>
								<li><a href="{{url('/trainings')}}">Trainings</a></li>
								<li><a href="{{url('/blog/events')}}">Events</a></li>
								<li><a href="{{url('/blog')}}">News</a></li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
								<li class="btn-cta"><a href="{{url('/trainings')}}"><span>Get started</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav> -->
		<!-- Sticky Menu -->

		<!-- Sticky Menu -->
		@yield('content')
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
				<?php $BlogFooter = DB::table('blog')->get(); $BlogPosts = count($BlogFooter) ?>
				@if($BlogPosts == 0)
					<!-- With No Posts -->
					<div class="col-md-5 colorlib-widget">
						<h4>About Info</h4>
						{!!html_entity_decode($Settings->welcome)!!}
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
							    <li><a href="{{url('/')}}"><i class="icon-check"></i> Home </a></li>
								<li><a href="{{url('/about')}}"><i class="icon-check"></i> About Us</a></li>
								<li><a href="{{url('/courses')}}"><i class="icon-check"></i> Trainings</a></li>
								<li><a href="{{url('/contact')}}"><i class="icon-check"></i> Contact</a></li>
								
							</ul>
						</p>
					</div>

					<div class="col-md-4 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>{{$Settings->location}}</li>
							<li><a href="tel://{{$Settings->mobile}}"><i class="icon-phone"></i>{{$Settings->mobile}}</a></li>
							<li><a href="mailto:{{$Settings->email}}"><i class="icon-envelope"></i> {{$Settings->email}}</a></li>
							<li><a href="{{$Settings->url}}"><i class="icon-location4"></i> {{$Settings->url}}</a></li>
						</ul>
					</div>
					<!-- </With No Posts -->
                @else
				    <!-- With Posts -->
					<div class="col-md-4 colorlib-widget">
						<h4>About Info</h4>
						{!!html_entity_decode($Settings->welcome)!!}
					</div>

					<div class="col-md-2 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About Us</a></li>
								<li><a href="#"><i class="icon-check"></i> Testimonials</a></li>
								<li><a href="#"><i class="icon-check"></i> Courses</a></li>
								<li><a href="#"><i class="icon-check"></i> Event</a></li>
								
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Post</h4>
						<?php $Blog = DB::table('blog')->paginate(2); ?>
						@foreach($Blog as $blog)
						<div class="f-blog">
							<a href="{{url('/')}}/blog/{{$blog->title}}" class="blog-img" style="background-image: url('{{url('/')}}/uploads/blog/{{$blog->image_one}}');">
							</a>
							<div class="desc">
								<h2><a href="blog.html">{{$blog->title}}</a></h2>
								<?php 
										$date = $blog->created_at;
										$month = date('M',strtotime($date));
										$day = date('d',strtotime($date));
										$year = date('Y',strtotime($date));

									?>
								<p class="admin"><span>{{$day}} {{$month}} {{$year}}</span></p>
							</div>
						</div>
						@endforeach
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>{{$Settings->location}}</li>
							<li><a href="tel://{{$Settings->mobile}}"><i class="icon-phone"></i>{{$Settings->mobile}}</a></li>
							<li><a href="mailto:{{$Settings->email}}"><i class="icon-envelope"></i> {{$Settings->email}}</a></li>
							<li><a href="{{$Settings->url}}"><i class="icon-location4"></i> {{$Settings->url}}</a></li>
						</ul>
					</div>
					<!-- With Posts -->
				@endif
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
							<small class="block"> <a href="{{url('/terms')}}">Terms and Conditions</a> | <a href="{{url('/privacy')}}">Privacy Policy</a> | <a href="{{url('/copyright')}}">Copyright Statement</a></small><br>
								<small class="block">&copy; <!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. -->
Copyright {{$Settings->sitename}} <script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="https://designekta.com" target="_blank">Designekta Studios</a>
<!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('theme/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('theme/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('theme/js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('theme/js/jquery.countTo.js')}}"></script>
	<!-- Float -->
	<script src="{{asset('theme/float-panel/float-panel.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('theme/js/main.js')}}"></script>

	</body>
	@endforeach

	
    <script>
      $(function () {

        $('#submitsbc').on('submit', function (e) {
          $('#subscribebtn').html('Submiting....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '{{url('/')}}/subscribe',
            data: $('#submitsbc').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('#subscribebtn').html('Subscribe')
              alert(rsl);
            
            }
          });

        });

		$('#contact-form').on('submit', function (e) {
          $('#contact-btn').html('Working.....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '{{url('/submitMessage')}}',
            data: $('#contact-form').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('#contact-btn').html('Your Message Has Been Received.')
              
            
            }
          });




        });
	});
    </script>
</html>

