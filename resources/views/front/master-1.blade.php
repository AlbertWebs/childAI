<!DOCTYPE html>
<html lang="zxx" class="no-js"> 

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
	@foreach($SiteSettings as $Settings)
	<link rel="shortcut icon" type="image/png" href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}"/>
	<!-- Author Meta -->
	<meta name="author" content="Designekta Studios">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<!-- SEO --> 
	{!! SEOMeta::generate() !!}
	{!! OpenGraph::generate() !!}
	{!! Twitter::generate() !!}
	
	<!-- SEO -->

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:300,400,500,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('theme/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/animate.min.css')}}"> 
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/main.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				@if($page_name == 'home')
				<div id="logo">
					<a href="{{url('/')}}"><img width="150" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="" title="" /></a>
				</div>
				@else
				<div id="logo">
					<a href="{{url('/')}}"><img width="120" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="" title="" /></a>
				</div>
				@endif
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{url('/')}}">Home</a></li>
						<li class="menu-active"><a href="{{url('/about-us')}}">About Us</a></li>
						
						
						<li><a href="{{url('/our-work')}}">Our Work</a></li>
						<li class="menu-has-children"><a href="#">Media & News</a>
							<ul>
							    <li><a href="{{url('/blog/')}}">Media & News</a></li>
								<li><a href="{{url('/blog/events')}}">Events</a></li>
								
							</ul>
						</li>
						<li><a href="{{url('/get-involved')}}">Get Involved</a></li>
						
						<li><a href="{{url('/make-donation')}}">Donate</a></li>
						<li><a href="{{url('/contact-us')}}">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- Start Header Area -->

    @yield('content')

	<!-- start footer Area -->
	<footer id="hmcdo-footer" class="text-center">
			<div class="container">
				<div class="row row-pb-md">
				<?php $BlogFooter = DB::table('blog')->get(); $BlogPosts = count($BlogFooter) ?>
				@if($BlogPosts == 0)
					<!-- With No Posts -->
					<div class="col-md-5 hmcdo-widget">
						<h4>About Info</h4>
						{!!html_entity_decode($Settings->welcome)!!}
					</div>

					<div class="col-md-3 hmcdo-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="hmcdo-footer-links">
							    <li><a href="{{url('/about-us')}}"><i class="icon-check"></i> Our Work</a></li>
								<li><a href="{{url('/blog')}}"><i class="icon-check"></i> News & Media</a></li>
								<li><a href="{{url('/blog/events')}}"><i class="icon-check"></i> Events</a></li>
								<li><a href="{{url('/contact-us')}}"><i class="icon-check"></i> Contact</a></li>
								
							</ul>
						</p>
					</div>

					<div class="col-md-4 hmcdo-widget">
						<h4>Contact Info</h4>
						<ul class="hmcdo-footer-links">
							<li>{{$Settings->location}}</li>
							<li><a href="tel://{{$Settings->mobile}}"><i class="icon-phone"></i>{{$Settings->mobile}}</a></li>
							<li><a href="mailto:{{$Settings->email}}"><i class="icon-envelope"></i> {{$Settings->email}}</a></li>
							<li><a href="{{$Settings->url}}"><i class="icon-location4"></i> {{$Settings->url}}</a></li>
						</ul>
					</div>
					<!-- </With No Posts -->
                @else
				    <!-- With Posts -->
					<div class="col-md-4 hmcdo-widget">
						<h4>About Info</h4>
						{!!html_entity_decode($Settings->welcome)!!}
					</div>

					<div class="col-md-2 hmcdo-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="hmcdo-footer-links">
							    <li><a href="{{url('/about-us')}}"><i class="icon-check"></i> Our Work</a></li>
								<li><a href="{{url('/blog')}}"><i class="icon-check"></i> News & Media</a></li>
								<li><a href="{{url('/blog/events')}}"><i class="icon-check"></i> Events</a></li>
								<li><a href="{{url('/contact-us')}}"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 hmcdo-widget">
						<h4>Recent Post</h4>
						<?php $Blog = DB::table('blog')->paginate(2); ?>
						@foreach($Blog as $blog)
						<div class="f-blog">
							<a href="{{url('/')}}/blog/{{$blog->title}}" class="blog-img" style="background-image: url('{{url('/')}}/uploads/blog/{{$blog->image_one}}');">
							</a>
							<div class="desc">
								<h2><a href="{{url('/blog')}}/{{$blog->title}}">{{$blog->title}}</a></h2>
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

					<div class="col-md-3 hmcdo-widget">
						<h4>Contact Info</h4>
						<ul class="hmcdo-footer-links">
							<li>{{$Settings->location}}</li>
							<li><a href="tel://{{$Settings->mobile}}"><i class="icon-phone"></i>{{$Settings->mobile}}</a></li>
							<li><a href="mailto:{{$Settings->email}}"><i class="icon-envelope"></i> {{$Settings->email}}</a></li>
							<li><a href="{{$Settings->url}}"><i class="icon-location4"></i> {{$Settings->url}}</a></li>
						</ul>
						<a href="{{$Settings->facebook}}" class="fa fa-facebook"></a>
						<a href="{{$Settings->twitter}}" class="fa fa-twitter"></a>
						<a href="{{$Settings->instagram}}" class="fa fa-instagram"></a>
						<a href="{{$Settings->linkedin}}" class="fa fa-linkedin"></a>
						<a href="{{$Settings->youtube}}" class="fa fa-youtube"></a>
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
					Copyright <a href="{{url('/copyright')}}">{{$Settings->sitename}}</a> <script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="https://designekta.com" target="_blank">Designekta Studios</a>
					<!-- Link back to Designekta Studios can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{asset('theme/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{asset('theme/js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="{{asset('theme/js/easing.min.js')}}"></script>
	<script src="{{asset('theme/js/hoverIntent.js')}}"></script>
	<script src="{{asset('theme/js/superfish.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('theme/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('theme/js/waypoints.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('theme/js/parallax.min.js')}}"></script>
	<script src="{{asset('theme/js/mail-script.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>

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
		
		// // Submit form
		// var form = $('#myForm'); // contact form
        // var submit = $('.submit-btn'); // submit button
        // var alert = $('.alert-msg'); // alert div for show alert message

        // // form submit event
        // form.on('submit', function(e) {
		// 	alert('')
        //     e.preventDefault(); // prevent default form submit

        //     $.ajax({
        //         url: '{{url('/submitMessage')}}',
        //         type: 'POST', // form submit method get/post
        //         dataType: 'html', // request type html/json/xml
        //         data: form.serialize(), // serialize form data
        //         beforeSend: function() {
        //             alert.fadeOut();
        //             submit.html('Sending....'); // change submit button text
        //         },
        //         success: function(data) {
        //             alert.html(data).fadeIn(); // fade in response data
        //             form.trigger('reset'); // reset form
        //             submit.attr("style", "display: none !important");; // reset submit button text
        //         },
        //         error: function(e) {
        //             console.log(e)
        //         }
        //     });
        // });
		// Submit form

		$('#myForm').on('submit', function (e) {
			
          $('.submit-btn').html('Working.....')
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '{{url('/submitMessage')}}',
            data: $('#myForm').serialize(),
            success: function (rsl) {
              //clear the form
              $('form :input').val('');
              $('.submit-btn').html('Your Message Has Been Received.')
              
            
            }
		  });
		  
		  




        });
	});


	$(document).ready(function() {
        
    });
    </script>
</body>
@endforeach

</html>