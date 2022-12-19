@extends('front.master')
@section('content')
@include('front.slider')
@foreach($About as $about)
<section>
      <div class="container pb-20">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <img src="{{url('/')}}/uploads/images/{{$about->image_two}}" alt="">
                  <h4 class="mt-15"> <span class="font-13"> </span></h4>
                </div>
                <div class="item">
                  <img src="{{url('/')}}/uploads/images/{{$about->image_one}}" alt="">
                  <h4 class="mt-15"> <span class="font-13"> </span></h4>
                </div>
                <div class="item">
                  <img src="{{url('/')}}/uploads/images/{{$about->image}}" alt="">
                  <h4 class="mt-15"> <span class="font-13"> </span></h4>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <h2 class="text-theme-colored mt-0 mb-20">About US</h2>
              <p>{!!html_entity_decode($about->content)!!}</p>
              <a class="btn btn-theme-colored mt-10" href="#">Download Annual Impact Report</a>
            </div>
          </div>
          <div class="row mt-10"  data-bg-img="images/pattern/p26.png" style="padding-top:100px">
            <div class="col-md-7">
              <h2 class="text-theme-colored">Our Structure</h2>
              <p>{!!html_entity_decode($about->structure)!!}</p>
            </div>
            <div class="col-md-5">
              <h2 class="text-theme-colored">Our Mission</h2>
              <div class="progressbar-container">
                <div class="progress-item">
                  <div class="progress-title">
                    <h6>{{$about->mission}}</h6>
                  </div>
				</div>
				<h2 class="text-theme-colored">Our Vision</h2>
                <div class="progressbar-container">
					<div class="progress-item">
					<div class="progress-title">
						<h6>{{$about->vision}}</h6>
					</div>
					</div>
                </div>
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