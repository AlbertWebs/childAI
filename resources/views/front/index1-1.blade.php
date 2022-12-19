@extends('front.master')
@section('content')
	<!-- start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<?php $SiteSettingsHome = DB::table('sitesettings')->get(); ?>
				@foreach($SiteSettingsHome as $HomeSettings)
				<div class="header-left col-lg-5 col-md-6 ">
					<br><br>
					<h3 style="padding-top:100px">
						{{$HomeSettings->sitename}}
					</h3>
					<p class="pt-20 pb-20">
					{!!html_entity_decode($HomeSettings->welcome)!!}
					</p>
					<?php $Video = DB::table('videos')->where('title','home')->get(); ?>
					@foreach($Video as $vid)
					<div class="vdo-section">
						<a href="https://www.youtube.com/watch?v={{$vid->link}}" class="single-charity">
							<img src="{{url('/')}}/theme/img/video-icon.png" alt="">
						</a>
						<span>
							<a href="https://www.youtube.com/watch?v={{$vid->link}}" class="single-charity">
								Watch our intro video
							</a>
						</span>
					</div>
					@endforeach
				</div>
				@endforeach
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="owl-carousel owl-banner">
						@foreach($Slider as $Slide)
						<img class="img-fluid w-100" src="{{url('/')}}/uploads/slider/{{$Slide->image}}" alt="">
						@endforeach
					</div>
					<div class="form-wrap">
						<p class="mb-20 text-white">Enter Donation Amount</p>
						<form class="form" action="https://www.paypal.com/cgi-bin/webscr" role="form" autocomplete="off">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="upload" value="1">
							<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
							@foreach($SiteSettings as $Paypal)
							<input type="hidden" name="business" value="{{$Paypal->paypal}}">
							@endforeach
							<input type="hidden" name="item_name_1" value="Hooyo Macaan Community Developement Organization Donation">
							<div class="row">
								<div class="col-md-7 wrap-left donation-input">
									<div class="form-group">
										<input name="amount_1" type="text" placeholder="225.00" onfocus="this.placeholder = ''" onblur="this.placeholder = '225.00'"
										 class="form-control">
										<span class="fs-14">USD</span>
									</div>
								</div>
								<div class="col-md-5 wrap-right">
									<div class="input-group dates-wrap">
										<button type="submit" class="primary-btn white">Donate Now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Intro Area -->
	<section class="causes-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 section-title">
					<h2>Welcome to HMCDO</h2>
					@foreach($SiteSettingsHome as $HomeSettings)
					<p>
					{!!html_entity_decode($HomeSettings->intro)!!}
					</p>
					@endforeach
				</div>
			</div>
		
		</div>
	</section>
	<!-- end Intro Area -->

	<!-- Start Work Area -->
	<section class="causes-area section-gapp">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 section-title">
					<h2>Our Work</h2>
					
				</div>
			</div>
			<div class="row">
				<?php $Portolio = DB::table('portfolio')->paginate(6); ?>
				@foreach($Portolio as  $Portfolio)
				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img width="400" height="400" class="c-img img-fluid image-resize" src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" alt="">
							</div>
							<a href="{{url('/our-work')}}/{{$Portfolio->title}}">
								<h3>{{$Portfolio->title}}</h3>
							</a>
							<p class="text">
							
							</p>
						</div>
					
						<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							<a href="{{url('/our-work')}}/{{$Portfolio->title}}" class="primary-btn offwhite">View Details</a>
							<a href="{{url('/make-donation')}}" class="primary-btn primary-btn1">Donate Here</a>
						</div>
					</div>
				</div>
				@endforeach

				
			</div>
		</div>
	</section>
	<!-- end Work Area -->

	<div class="clear-fix"></div>
 

	<!-- Start Event Area -->
	<section class="event-area section-gap-bottom">
		<div class="container">
			<div class="row justify-content-center align-items-center ">
				<div class="col-lg-5 event-left">
					<h1>Upcoming Events</h1>
					<?php $Event = DB::table('events')->where('status','1')->paginate(3); ?>
					@foreach($Event as $event)
					<div class="single-event">
					<?php 
						$date = $event->date;
						$month = date('M',strtotime($date));
						$day = date('d',strtotime($date));
						$year = date('Y',strtotime($date)); 

					?>
						<p>{{$day}} {{$month}}, {{$year}}</p>
						<h4>
							<a href="{{url('/blog/events')}}/{{$event->title}}">{{$event->title}}</a>
						</h4>
					</div>
					@endforeach

				</div>
				<div class="offset-lg-1 col-lg-6 col-md-8 col-sm-10 event-right justify-content-center align-items-center d-flex">
					<div class="owl-carousel owl-event">
					@foreach($Event as $event)
						<img class="img-fluid" src="{{url('/')}}/uploads/events/{{$event->image}}" alt="">
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Event Area -->

	<div class="clear-fix"></div>

	<!-- News & Media Here -->
    
	<!-- News Here -->

	<!-- Start Client Logo Area -->
	
	<!-- End Client Logo Area -->


@endsection