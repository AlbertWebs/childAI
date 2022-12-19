@extends('front.master')
@section('content')
<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="courses.html">Courses</a></li>
								<li>Course Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">{{$title}}</div>
						<center>
							@if(Session::has('message'))
										<div class="alert alert-success">{{ Session::get('message') }}</div>
							@endif
						</center>
						
                        @foreach($Courses as $courses)
						<!-- Course Image -->
						<div class="course_image"><img src="{{url('/')}}/uploads/courses/{{$courses->image}}" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							
							<div class="tab_panels">

								<!-- Description -->
								<div class="active">
								
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>{!!html_entity_decode($courses->content)!!}</p>
										</div>
																			
									</div>
								</div>

								<div class=" active">
								
									<div class="tab_panel_content">
										
									      <center>
										  <div class="row">
										  @if($courses->cat == 1)

										  @else
										  <div class="col">
													<div class="courses_button" style="text-transform:none"><a  id="pop" href="#" > Download Structure  <span class="fa fa-download	"></span></a></div>
												</div>
										  @endif
												
												<div class="col">
													<div class="courses_button" style="text-transform:none"><a href="{{url('/register')}}/{{$courses->id}}"> Take Course <span class="fa fa-check"></span></a></div>
												</div>
											</div>
                                          </center>
																			
									</div>
								</div>

								<!-- Pop Up Form -->

								<div id="list-builder"></div>
									<div id="popup-box">
										<!-- <img src="{{url('/')}}/uploads/icons/close.png" alt="#" id="popup-close" /> -->
										
										<div id="popup-box-content">
										<span id="popup-close" class="fa fa-times"></span>
											<h5 style="padding-bottom:50px; text-align:center">Request Download Link For {{$courses->title}} structure</h5>
											
											<form id="popup-form" action="{{url('/request_link_send_structure')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="file" value="{{$courses->file}}">
								                <input type="hidden" name="title" value="{{$courses->title}}">
												<input type="hidden" name="list" value="key_list_etc" />
												
												<input type="text" name="email" placeholder="Email Address" />
												<br><br>
												<button type="button" id="subscribe" name="subscribe"><span class="fa fa-link"></span> Request Link</button>
											</form>
										</div>
									</div>

								<!-- Pop Up Form -->



							

							</div>
						</div>
						@endforeach
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Course -->
						<div class="sidebar_section">
							<!-- Course faeatues -->
							<div class="sidebar_section_title">Course Feature</div>
							<div class="sidebar_feature">
								

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
										<div class="feature_text ml-auto">{{$courses->duration}}</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">{{$courses->lectures}}</div>
									</div>

									

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-calendar" aria-hidden="true"></i><span>Date:</span></div>
										<div class="feature_text ml-auto">
										<?php 
										$date = $courses->date;
										$month = date('M',strtotime($date));
										$day = date('d',strtotime($date));
										$year = date('Y',strtotime($date));

										?>
											{{$month}}, {{$day}} ,{{$year}}
										</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Venue:</span></div>
										<div class="feature_text ml-auto">{{$courses->venue}}</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
										<div class="feature_text ml-auto">35</div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-dollar" aria-hidden="true"></i><span>Investment:</span></div>
										<div class="feature_text ml-auto">{{$courses->price}}</div>
									</div>

								</div>
							</div>
						</div>
						
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Newsletter -->
	<!-- Newsletter -->
@include('front.newsletter')
@endsection