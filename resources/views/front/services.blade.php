@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','about')->get() ?>
@foreach($Banner as $banner)
<div class="top-image">
	<img src="{{url('/')}}/uploads/banners/{{$banner->image}}" alt="" />
</div><!-- Page Top Image -->
@endforeach

<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>What <span>We Do</span></h1>
		</div><!--Page Title-->
		<div class="remove-ext">
			<div class="row">
        @foreach($Services as $ser)
				<div class="col-md-4">
					<div class="our-cause">
						<div class="our-cause-img">
							<img alt="" src="{{url('/')}}/uploads/services/{{$ser->image_one}}">
							<a title="" href="#"><i class="icon-link"></i></a>
						</div>
						<div class="our-cause-detail">
							<h3>{{$ser->title}}</h3>
							<p>{!!html_entity_decode($ser->content)!!}</p>
							<a title="" href="{{url('/donate')}}">DONATE NOW</a>
						</div>
					</div>
        </div>
        @endforeach
				
			</div>
		</div>
	
		
	</div>
</section>

@endsection