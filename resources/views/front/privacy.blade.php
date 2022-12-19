@extends('front.master')
@section('content')



  <div class="about">
      <div class="container" style="padding-left:50px; padding-right:50px">
        <div class="row">
          <div class="col">
          <h3></h3>
            <div class="section_title_container text-center">
            @foreach($Privacy as $terms)
              <h2 class="section_title">{{$terms->title}}</h2>
              <div class="section_subtitle"><p>{!!html_entity_decode($terms->content)!!}</p></div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
  </div>




@endsection

     
