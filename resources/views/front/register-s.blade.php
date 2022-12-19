@extends('front.master')
@section('content')
<!-- start Banner Area -->
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
								<a href="{{url('/blog')}}">{{$page_title}}</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
<div class="clear-fix"></div>

<!-- Start Donation Form Area -->
<section class="donation-form-area section-gap-bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10 col-sm-12">
				<div class="donation-box">
				<center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
					<form action="{{url('/regisrations')}}" method="post">
					{{ csrf_field() }}
						<div class="donation-input">
							<div class="form-group">
								<input type="text" placeholder="Your Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'"
								 class="form-control" required>
								<span class="fs-14"></span>
							</div>
						</div>

						<div class="donation-input">
							<div class="form-group">
								<input type="email" placeholder="Your Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email'"
								 class="form-control" required>
								<span class="fs-14"></span>
							</div>
						</div>

						<div class="donation-input">
							<div class="form-group">
								<input type="text" placeholder="Your Mobile Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Mobile Number'"
								 class="form-control" required>
								<span class="fs-14"></span>
							</div>
						</div>

						
							<div class="form-group">
							<textarea class="form-control mb-10" rows="5" name="message" placeholder="Your Reasons For Joining Us"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Reasons For Joining Us'" required=""></textarea>
								
							</div>
						

						<input type="submit" class="primary-btn w-100" value="Join" name="submit">
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end Donation Form Area -->
@endsection