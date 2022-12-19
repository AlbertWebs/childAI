<aside id="colorlib-hero-page">
			<div class="flexslider">
				<ul class="slides">
				<?php $Banner = DB::table('banners')->where('name','about')->get();?>
				@foreach($Banner as $banner)
			   	<li style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>{{$page_name}}</h1>
				   					<h2 class="breadcrumbs"><span><a href="{{url('/')}}">Home</a></span> | <span>{{$page_name}}</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	@endforeach
			  	</ul>
		  	</div>
		</aside>