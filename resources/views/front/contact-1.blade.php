@extends('front.master')
@section('content')

 
@foreach($SiteSettings as $Settings)
<section class="home-banner-area relative banner-area">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<div class="header-left col-lg-5 col-md-6 ">
					
					<h2 style="padding-top:100px">{{$page_title}}</h2>
					<?php $SiteSettingsHome = DB::table('sitesettings')->get(); ?>
				    @foreach($SiteSettingsHome as $HomeSettings)
					<p class="pt-10 pb-20">
					{!!html_entity_decode($HomeSettings->sitename)!!}
					</p>
					@endforeach
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="">
						<?php $Banner = DB::table('banners')->where('name','about')->get() ?>
						@foreach($Banner as $banner)
						<img class="img-fluid w-100" src="{{url('/')}}/uploads/banners/{{$banner->image}}" alt="">
						@endforeach
					</div>
					<div class="form-wrap about-content">
						<p class="text-white m-0">
							<span class="box">
								<a href="{{url('/')}}">Home </a>
								<span class="lnr lnr-arrow-right"></span>
								<a href="{{url('/contact-us')}}">{{$page_title}}</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div> 
	</section>
	<!-- End Banner Area -

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>{{$Settings->location}}</h5>
							<p>{{$Settings->address}}</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>{{$Settings->mobile}}</h5>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>{{$Settings->email}}</h5>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area " id="myForm"  method="post" class="contact-form text-right">
					    {{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
								 required="" type="email">

								<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'"
								 class="common-input mb-20 form-control" required="" type="text">
								<div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Messege'" required=""></textarea>
								<button class="primary-btn submit-btn mt-20 text-white" style="float: right;">Send Message</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->
@endforeach


@endsection