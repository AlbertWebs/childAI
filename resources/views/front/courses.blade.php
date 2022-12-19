@extends('front.master')
@section('content')

      @include('front.breadcrumb')

	    <div class="colorlib-search">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
						<div class="search-wrap-2">
						 <form method="post" action="{{url('/searchsite')}}" class="colorlib-form">
						 {{ csrf_field() }}
			              	<div class="row">
			                <div class="col-md-4">
			                  <div class="form-group">
			                    <!-- <label for="search">Search Course</label> -->
			                    <div class="form-field">
			                      <input type="text" name="search" id="search" class="form-control" placeholder="Keyword search">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-4">
			                  <div class="form-group">
			                    <!-- <label for="course">Category Course</label> -->
			                    <div class="form-field">
			                      <i class="icon icon-arrow-down3"></i>
			                      <select name="cat" id="people" class="form-control">
								   <option selected="selected" value="all">Select Category</option>
								   <?php $Category = DB::table('category')->get(); ?>
									@foreach($Category as $Catt)
										<option value="{{$Catt->id}}">{{$Catt->cat}}</option>
									@endforeach
			                        
			                      </select>
			                    </div>
			                  </div>
			                </div>
			                
			                <div class="col-md-3">
			                  <input type="submit" name="submit" id="submit" value="Search course" class="btn btn-primary btn-block">
			                </div>
			              </div>
			             </form>
		            </div>
					</div>
				</div>
			</div>
		</div>
	

		<div class="colorlib-classes"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12 colorlib-heading center-heading text-center animate-box">
						<h1 class="heading-big">Our Trainings</h1>
						<h2>Our Trainings</h2>
					</div>
				</div>
				<div class="row">
					@if($Courses->isEmpty())
                    <center><h2>No Trainings Available For That Category</h2></center>
					@else
					@foreach($Courses as $Course)
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url('{{url('/')}}/uploads/courses/{{$Course->image}}');">
							</div>
							<div class="wrap">
								<div class="desc">
									<span class="teacher"><?php $TheCatEgOry = DB::table('category')->where('id',$Course->cat)->get(); ?>@foreach($TheCatEgOry as $theeCat) {{$theeCat->cat}} @endforeach</span>
									<h3 style="min-height:100px" class="course-name"><a href="{{url('/')}}/training/{{$Course->title}}">{{$Course->title}}</a></h3>
								</div>
								<div class="pricing" style="min-height:50px">
								@if($Course->price == '' or $Course->price == null)
								<p><span class="price">USD {{$Course->usd}}</span>  <span class="more"><a href="{{url('/')}}/training/{{$Course->title}}"><i class="icon-link"></i>Explore</a></span></p>
								@else
								<p><span class="price">KSH {{$Course->price}}</span>  <span class="more"><a href="{{url('/')}}/training/{{$Course->title}}"><i class="icon-link"></i>Explore</a></span></p>
								@endif
									
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif
					
				</div>
			</div>	
		</div>
	
		@include('front.newsletter')
@endsection