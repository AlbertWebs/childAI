@extends('front.master')
@section('content')

	<!-- Start Causes Area -->
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
								<img class="c-img img-fluid" src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" alt="">
							</div>
							<a href="#">
								<h3>{{$Portfolio->title}}</h3>
							</a>
							<p class="text">
							{!!html_entity_decode($Portfolio->content)!!}
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
	<!-- end Causes Area -->
@endsection

