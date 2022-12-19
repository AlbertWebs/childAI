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
			<h1>Our <span>Reports</span></h1>
		</div><!--Page Title-->
		<div class="remove-ext">
			<div class="row">
                @foreach($Reports as $reports)
				<div class="col-md-4">
					<div class="our-cause">
						<div class="our-cause-img">
							<img alt="" src="{{url('/')}}/uploads/reports/{{$reports->image}}">
							<a title="{{$reports->title}}" target="blank" href="{{url('/')}}/uploads/reports/{{$reports->file}}"><i class="icon-link"></i></a>
						</div>
						<div class="our-cause-detail">
							<h3>{{$reports->title}}</h3>
						
							<p>{{$reports->meta}}</p>
			
							<a title="" download href="{{url('/')}}/uploads/reports/{{$reports->file}}">Download <span class="fa fa-download"></span></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
			
		
	</div>
</section>
@endsection