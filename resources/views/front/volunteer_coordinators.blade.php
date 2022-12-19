@extends('front.master')
@section('content')
<?php $Team = DB::table('team')->where('type','3')->get(); ?>
   <!-- Section: Team -->
   <section class="bg-lighter">
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="text-uppercase line-bottom-center mt-0">Volunteer Coordinators</h2>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          @foreach ($Team as $item)
          <div class="col-sm-6 col-md-3">
            <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
            <div class="thumb"><img class="img-fullwidth" src="{{url('/')}}/uploads/team/{{$item->image}}" alt=""></div>
              <div class="content bg-white p-20 text-center">
                <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">{{$item->name}}</a></h4>
                {{-- <p>Position Here</p> --}}
                <p class="mb-20" style="font-style: italic">{{$item->position}}</p>
                <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                  <li><a href="{{$item->facebook}}"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{{$item->twitter}}"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="{{$item->instagram}}"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="{{$item->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>  
          @endforeach         
        </div>
      </div>
    </div>   
   </section>
    @include('front.call-to-action')
	<!-- Start Client Logo Area -->
	@include('front.sponsors')
	<!-- End Client Logo Area -->
@endsection