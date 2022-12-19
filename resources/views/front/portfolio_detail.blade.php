@extends('front.master')
@section('content')
<?php $Banners = DB::table('banners')->where('name','about')->get(); ?>
@foreach($Banners as $banner)
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{url('/')}}/uploads/banners/{{$banner->image}}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">{{$page_title}}</h3>
            </div>
          </div>
        </div>
      </div>
	</section>
@endforeach
@foreach($Portfolio as $project)
<section>
	<div class="container">
	<div class="row mtli-row-clearfix">
		<div class="col-sm-6 col-md-8 col-lg-8">
		<div class="causes bg-white maxwidth500 mb-30">
			<div class="thumb">
			<img src="{{url('/')}}/uploads/portfolio/{{$project->image_one}}" alt="" class="img-fullwidth">
			<div class="overlay-donate-now">

				
				<!--  -->
				@if($project->status == 1)
                <a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Completed <i class="fa fa-check font-16 ml-5"></i></a>
                @else
				<a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Ongoing <i class="fa fa-clock-o font-16 ml-5"></i></a>
				<br><br>
				<a href="{{url('/donate-now')}}" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
				@endif
				<!--  -->
			</div>
			</div>
		
			<div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
			<h5 class="font-weight-600 font-16"><a href="#">{{$project->title}}</a></h5>
			<p>{{$project->meta}}</p>
			@if($project->status == 1)
			<ul class="list-inline project-conditions mt-20 text-center bg-theme-colored-transparent-1 m-0 p-10">
			<hr><br>
			</ul>
			@else
			<ul class="list-inline project-conditions mt-20 text-center bg-theme-colored-transparent-1 m-0 p-10">
				<li class="target-fund text-theme-colored"><strong>Donate</strong></li>
				<li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
				<li class="raised text-theme-colored"><strong>Today</strong></li>
			</ul>
			@endif
			</div>
		</div>
		<div class="event-details">
			<p class="mb-20 mt-20">{!!html_entity_decode($project->content)!!}</p>
			<div class="pull-left flip mr-15">
			<img alt="" src="{{url('/')}}/uploads/portfolio/{{$project->image_two}}">
			<img alt="" src="{{url('/')}}/uploads/portfolio/{{$project->image_three}}">
			
			</div>
		</div>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-4">
		<div class="sidebar sidebar-right mt-sm-30">
			<div class="widget">
			<h4 class="widget-title line-bottom">Other Projects</h4>
			<?php $OtherProjects = DB::table('portfolio')->get(); ?>
			<ul class="list-divider list-border list check">
				@foreach($OtherProjects as $other)
				<li><a href="{{url('/')}}/our-projects/{{$other->slung}}">{{$other->title}}</a></li>
				@endforeach
			</ul>
			</div>
			<div class="widget">
			
			<div class="widget">
			<h5 class="widget-title line-bottom">Gallery</h5>
			<div class="owl-carousel-1col">
			<?php $Gallery = DB::table('gallery')->limit(6)->get(); ?>
			    @foreach($Gallery as $Gallery)
				<div class="item">
				<img src="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" alt="">
				<h4 class="title">{{$Gallery->title}}</h4>
				<p>{!!html_entity_decode($Gallery->content)!!}</p>
				</div>
				@endforeach
			</div>
			</div>
			<div class="widget">
			<h4 class="widget-title line-bottom">What We Do</h4>
			<?php $OtherProjects = DB::table('services')->get(); ?>
			<ul class="list-divider list-border list check">
				@foreach($OtherProjects as $other)
				<li><a href="#">{{$other->title}}</a></li>
				@endforeach
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
@endforeach
    




   <!-- Divider: Partners -->
   <section class="clients bg-theme-coloreda" style="padding-top:100px">
      <div class="container pt-0 pb-0">
        <!--  -->
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Partners</span></h2>
              <div class="title-icon">
                <i class="fa fa-briefcase"></i>
              </div>
             
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Partners -->
            <div class="owl-carousel-6col clients-logo transparent text-center" style="margin:0px auto;">
              <?php $Clients = DB::table('partners')->get(); ?>
              @foreach($Clients as $client)
              <div class="item"> <a href="#"><img src="{{url('/uploads/')}}/partners/{{$client->image}}" alt=""></a></div>
              @endforeach
              @foreach($Clients as $client)
              <div class="item"> <a href="#"><img src="{{url('/uploads/')}}/partners/{{$client->image}}" alt=""></a></div>
              @endforeach
              
              
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

@endsection