@extends('front.master')
@section('content')

@include('front.breadcrumb')
@foreach($Courses as $courses)
        <div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row row-pb-lg">
							<div class="col-md-12 animate-box">
								<div class="classes class-single">
									<div class="classes-img" style="background-image: url('{{url('/')}}/uploads/courses/{{$courses->image}}');">
									</div>
									<div class="desc desc2">
										<h3><a href="#">{{$title}}</a></h3>
		                                   <p>{!!html_entity_decode($courses->content)!!}</p>
										<p><a href="{{url('/download')}}/{{$courses->id}}" class="btn btn-primary btn-outline btn-lg">Download Course Curriculum</a> or <a href="{{url('/register-now')}}/{{$courses->id}}" class="btn btn-primary btn-lg">Take Course</a></p>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<!-- SIDEBAR: start -->
					<div class="col-md-4 animate-box">
						<div class="sidebar">
							<div class="side">
								<h3 class="sidebar-heading">Categories</h3>
								<div class="block-24">
				               <ul>
									<li><a href="#"><i class="fa fa-clock-o"></i> Duration: <span>{{$courses->duration}}</span></a></li>
									<li><a href="#"><i class="fa fa-file-text-o"></i> Lectures: <span>{{$courses->lectures}}</span></a></li>
									<li><a href="#"><i class="fa fa-calendar"></i> Date: 
									<span>
									<?php 
										$date = $courses->date;
										$month = date('M',strtotime($date));
										$day = date('d',strtotime($date));
										$year = date('Y',strtotime($date));

										?>
											{{$month}}, {{$day}} ,{{$year}}
									</span>
								    </a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Venue: {{$courses->venue}}<br></a></li>
									@if($courses->price == '' or $courses->price == null)
									<li><a href="#"><i class="fa fa-dollar"></i> Investment: <span>USD {{$courses->usd}}</span></a></li>
									@else
									<li><a href="#"><i class="fa fa-money"></i> Investment: <span>KSH {{$courses->price}}</span></a></li>
									@endif
									
									
				                  
				               </ul>
				            </div>
							</div>
							<div class="side">
								<h3 class="sidebar-heading">Other Courses</h3>
								<?php $Related = DB::table('courses')->inRandomOrder()->where('cat',$courses->cat)->paginate(3); ?>
								@foreach($Related as $Rel)
								<!-- Single Course -->
								@if($Rel->id == $courses->id)

								@else
								<div class="f-blog">
									<a href="{{url('/')}}/training/{{$Rel->title}}" class="blog-img" style="background-image: url({{url('/')}}/uploads/courses/{{$Rel->image}});">
									</a>
									<div class="desc">
										
										<h2><a href="{{url('/')}}/training/{{$Rel->title}}">{{$Rel->title}}</a></h2>
										
									</div>
								</div>
								@endif
								<!-- </Single Course -->
								@endforeach
							</div>
							<div class="side">
								<h3 class="sidbar-heading">Categories</h3>
								<div class="block-26">
				               <ul>
								   <?php $Category = DB::table('category')->get(); ?>
								   @foreach($Category as $Cat)
									<li><a href="{{url('/training')}}/cat/{{$Cat->cat}}">{{$Cat->cat}}</a></li>
								   @endforeach
				                
				             	</ul>
				            </div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
@endforeach
@endsection