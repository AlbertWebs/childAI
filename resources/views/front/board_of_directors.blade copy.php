@extends('front.master')
@section('content')
	<!-- start Banner Area -->
	<section class="home-banner-area relative banner-area">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<div class="header-left col-lg-5 col-md-6 ">
					<h6 class="text-white ">the Royal Essence of Journey</h6>
					<h2>About Us</h2>
					<p class="pt-10 pb-20">
						If you are looking at blank cassettes on the web, you may be very confused at the.
					</p>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="">
						<img class="img-fluid w-100" src="{{url('/')}}/theme/img/banner-img.jpg" alt="">
					</div>
					<div class="form-wrap about-content">
						<p class="text-white m-0">
							<span class="box">
								<a href="index.html">Home </a>
								<span class="lnr lnr-arrow-right"></span>
								<a href="about.html">About</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Condition Area -->
	<section class="condition-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				
				<div class="offset-lg-1 col-lg-10">
					<div class="condition-right">
						<h2>
							New way <br>
							to give back
						</h2>
						<p>
							If you are looking at blank cassettes on the web, you may be very confused at the difference in price You may
							see some for as low as each. If you are looking at blank cassettes on the web, you may be very confused at the
							difference in price You may see.
						</p>
						<ul>
							<li>If you are looking at blank cassettes on the web.</li>
							<li>Difference in price You may see some as low as each.</li>
							<li>May be very confused at the difference in price.</li>
							<li>If you are looking at blank cassettes on the web.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Condition Area -->


	<!-- Start Collection Area -->
	<section class="collection-area section-gap">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-4 col-md-8">
					<div class="text">
						<h2>Experience
							How your Donation
							Reach Over Years</h2>
						<p>
							The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence,
							and upturning of the natural.
						</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<p><small>USD</small></p>
						<h3 class="color1"><span class="counter">21</span> M</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2015</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<p><small>USD</small></p>
						<h3><span class="counter">15</span> M</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2016</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<p><small>USD</small></p>
						<h3 class="color3"><span class="counter">23</span> M</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2017</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<p><small>USD</small></p>
						<h3 class="color4"><span class="counter">25</span> M</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2018</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Collection Area -->



	<!-- Start Donation Form Area -->
	@include('front.donate')
	<!-- end Donation Form Area -->

	<!-- Start Client Logo Area -->
	@include('front.sponsors')
	<!-- End Client Logo Area -->
@endsection