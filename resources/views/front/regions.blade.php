@extends('front.master')
@section('content')

@foreach($Regions as $region)
<div class="main-content">
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
    @foreach($SiteSettings as $Settings)
    <section id="home" class="inner-header divider parallax layer-overlay overlay-white-9" data-bg-img="images/bg/bg4.jpg">
      <div class="container-fluid pt-100 pb-50"> 
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-10 col-md-push-1"> 
              <img alt="logo" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}">
              <h3 class="tagline mt-30 pb-20">
                  <span class="typed-teaxt-carousel" data-speed="50" data-back_delay="600" data-loop="true">
                    <span>Region - {{$region->title}}</span>
                    <?php $Portfolio = DB::table('portfolio')->where('region_id',$region->id)->get(); ?>
                    @foreach($Portfolio as $Portfolio)
                    <span>{{$Portfolio->title}} - {{$Portfolio->meta}}</span>
                    @endforeach
                  
                  </span>
                </h3>
             
              

              <div class="go-down text-center mt-30"><a class="font-24 mt-30 smooth-scroll-to-target btn-orange" href="#multipage-layouts"><i class="fa fa-chevron-down font-20 infinite animated fadeInDown"></i></a></div>
            </div>
          </div>
        </div> 
       </div>
    </section>
    @endforeach

    <!--  -->
    <?php $Portfolio = DB::table('portfolio')->where('region_id',$region->id)->get(); ?>
    @if($Portfolio->isEmpty())

    <section class="inner-page">
        <div class="container">
            <div class="page-title text-center">
                <h3>Projects From {{$region->title}} have not been uploaded</h3>
                
            </div><!--Page Title-->
          
            
        </div>
    </section>
    @else
    <section class="inner-page">
        <div class="container">
            <div class="page-title">
                <h1>{{$region->title}} <span>Projects</span></h1>
            </div><!--Page Title-->
            <div class="remove-ext">
                <div class="row">
                    @foreach($Portfolio as $work)
                    
                    <!--  -->
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="causes bg-white maxwidth500 mb-sm-30">
                        <div class="thumb">
                            <img style="height:300px" src="{{url('/')}}/uploads/portfolio/{{$work->image_one}}" alt="" class="img-fullwidth">
                            <div class="overlay-donate-now">
                            <a href="{{url('/')}}/donate-now" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                            </div>
                        </div>
        
                        <div class="causes-details clearfix border-bottom-theme-color-1px p-15 pt-10 pb-10">
                            <h5 class="font-weight-600 font-16"><a href="{{url('/')}}/our-projects/{{$work->slung}}">Foor for Poor child</a></h5>
                            <p>{{$work->meta}}.</p>
                            
                        </div>
                        </div>
                    </div>
                    <!--  -->
                    @endforeach
                </div>
            </div>
            
        </div>
    </section>
    @endif
    <!--  -->
 

    
    <section id="key-features" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mb-30 text-uppercase text-black">Our  <span class="text-theme-colored">Contacts:</span></h2>
          </div>
        </div>
        <div class="row multi-row-clearfix text-center">
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
            <div class="feature-box">
              <div class="feature-box-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="feature-box-info">
                <h5>Location</h5>
                <p><strong>{{$region->location}}</strong></p>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
            <div class="feature-box">
              <div class="feature-box-icon">
                <i class="fa fa-book"></i>
              </div>
              <div class="feature-box-info">
                <h5>Address</h5>
                <p><strong>{{$region->address}}</strong></p>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
            <div class="feature-box">
              <div class="feature-box-icon">
                <i class="fa fa-phone"></i>
                <i class="fa fa-envelope"></i>
              </div>
              <div class="feature-box-info">
                <h5>Contacts</h5>
                <p><strong>{{$region->mobile}}</strong></p>
                <p><strong>{{$region->mobile_one}}</strong></p>
                <p><strong>{{$region->email}}</strong></p>
                <p><strong>{{$region->email_one}}</strong></p>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>

    </section>
  </div>
    
@endforeach



@endsection