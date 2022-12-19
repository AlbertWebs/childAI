@extends('front.master')
@section('content') 

	<section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
				@foreach($Gallery as $gallery)
					<!-- Portfolio Item Start -->
					<div class="gallery-item photography">
					<div class="thumb">
						<img class="img-fullwidth" src="{{url('/')}}/uploads/gallery/{{$gallery->image}}" alt="project">
						<div class="overlay-shade"></div>
						<div class="icons-holder">
						<div class="icons-holder-inner">
							<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
							<a data-lightbox="image" href="{{url('/')}}/uploads/gallery/{{$gallery->image}}"><i class="fa fa-plus"></i></a>
							</div>
						</div>
						</div>
						<a class="hover-link" data-lightbox="image" href="{{url('/')}}/uploads/gallery/{{$gallery->image}}">View more</a>
					</div>
					</div>
					<!-- Portfolio Item End -->
				@endforeach
              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
      </div>
    </section>

@endsection