
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
			<h1>Join Us <span>Now</span></h1>
		</div><!--Page Title-->
	</div>
<!-- Story -->
<section class="inner-page">
	<div class="container">
		<div class="row">
			<div class="left-content col-md-9">
			
            <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
                 </center>
                <!-- Join Form -->
                <div class="form">
					
					<div id="message"></div>
                    <form method="post"  action="{{url('/subscribe')}}" name="contactform" id="contactform">
                    {{csrf_field()}}
						<label for="name" accesskey="U">Full name <span>*</span></label>
                        <input name="name" class="form-control input-field" type="text" id="name" size="30" value="" required/>
                        <label for="name" accesskey="U">Phone Number <span>*</span></label>
						<input name="phone" class="form-control input-field" type="text" id="name" size="30" value="" required/>
						<label for="email" accesskey="E">Email Address <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" required/>
						
						<input type="submit" class="form-button submit" id="submit" value="SUBMIT REQUEST" />
					</form>
				</div>
                <!-- Joi Form -->
				
				
			</div>
			
			<!--  -->
			<div class="sidebar col-md-3 pull-right">
		
			
					<div class="sidebar-widget">
						<div class="sidebar-title">
							<h4>Past <span>Events</span></h4>
						</div>
						<?php $PastEvents = DB::table('events')->limit(5)->OrderBy('id','DESC')->get(); ?>
						@foreach($PastEvents as $pastevents)
						<div class="popular-post">
							<img src="{{url('/')}}/uploads/events/{{$pastevents->image_one}}" alt="" />
							<div class="popular-post-title">
								<h6><a href="{{url('/')}}/blog/events/{{$pastevents->title}}" title="">{{$pastevents->title}}</a></h6>
								<span>Date: {{$pastevents->date}}</span>
							</div>
						</div>
						@endforeach
					</div><!-- Popular Posts -->
					
					
					<div class="sidebar-widget">
						<div class="sidebar-title">
							<h4>Our <span>Gallery</span></h4>
						</div>
						<div class="gallery row">
							<?php $Gallery = DB::table('gallery')->limit(12)->get(); ?>
							@foreach($Gallery as $gallery)
								<div class="col-md-4">
									<a target="new" href="{{url('/')}}/uploads/gallery/{{$gallery->image}}" title=""><img src="{{url('/')}}/uploads/gallery/{{$gallery->image}}" alt="" /></a>
								</div>
							@endforeach
											
						</div>
					</div><!-- Sidebar Gallery -->
					
				</div>
				</div>
			</div>
			<!--  -->
		</div>
	</div>
</section>

@endsection