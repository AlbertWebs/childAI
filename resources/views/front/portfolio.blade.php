@extends('front.master')
@section('content')
@include('front.slider')
<?php $Banner = DB::table('banners')->where('name','about')->get() ?>
@foreach($Banner as $banner)
<div class="top-image">
	<img src="{{url('/')}}/uploads/banners/{{$banner->image}}" alt="" />
</div><!-- Page Top Image -->
@endforeach
	 
<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>Our <span>Projects</span></h1>
		</div><!--Page Title-->
		<div class="remove-ext">
			<div class="row">
				@foreach($Work as $work)
				
				<!--  -->
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="causes bg-white maxwidth500 mb-sm-30">
					<div class="thumb">
						<img style="height:300px" src="{{url('/')}}/uploads/portfolio/{{$work->image_one}}" alt="" class="img-fullwidth">
						<div class="overlay-donate-now">
						<a href="{{url('/')}}/donate-now" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
						</div>
					</div>
	
					<div class="causes-details clearfix border-bottom-theme-color-1px p-15 pt-10 pb-10">
						<h5 class="font-weight-600 font-16"><a href="{{url('/')}}/our-projects/{{$work->slung}}">{{$work->title}}</a></h5>
						<p>{{$work->meta}}...</p>
						
					</div>
					</div>
				</div>
				<!--  -->
				@endforeach
			</div>
		</div>
		
	</div>
</section>
@endsection

