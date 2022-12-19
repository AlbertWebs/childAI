<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

{!! SEOMeta::generate() !!}

<!-- Favicon and Touch Icons -->
<link href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}" rel="shortcut icon" type="image/png">
<link href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}" rel="apple-touch-icon">
<link href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('theme/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('theme/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('theme/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('theme/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('theme/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('theme/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('theme/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('theme/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('theme/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('theme/css/colors/theme-skin-orange.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('theme/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('theme/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('theme/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('theme/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('theme/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f4cf2def0e7167d000c3224/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0 mt-10">
              <ul class="list-inline sm-text-center">
                <li>
                  <a href="#" class="text-white"><span class="fa fa-envelope"></span>  {{$Settings->email}}</a>
                </li>
                <li class="text-white">|</li>
                <li>
                 <a href="#" class="text-white"><span class="fa fa-book"></span>  {{$Settings->address}}</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm pull-right sm-pull-none sm-text-center mt-5 mt-sm-15">
                <li><a href="{{$Settings->facebook}}"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="{{$Settings->twitter}}"><i class="fa fa-twitter text-white"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li> -->
                <li><a href="{{$Settings->instagram}}"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="{{$Settings->linkedin}}"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt=""></a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
              <center>
              @if(Session::has('message'))
                      <div class="alert alert-success">{{ Session::get('message') }}</div>
              @endif

              @if(Session::has('messageError'))
                      <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
              @endif
              </center>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-18"></i> {{$Settings->mobile}}</div>
                <a class="font-12 text-gray" href="#">Call us for more details!</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-map-marker text-theme-colored font-18"></i> Location</div>
                <a class="font-12 text-gray" href="#"> {{$Settings->location}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
      <ul class="menuzord-menu">
        <li class="<?php if($page_name == 'home') echo "active" ?>"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>

			  </li>
			  <li class="<?php if($page_name == 'About Us') echo "active" ?>"><a href="{{url('/about-us')}}">About Us</a>

        </li>

        <li class="<?php if($page_name == 'regions') echo "active" ?>" ><a href="#"> Team</a>
				  <ul class="dropdown  text-center">

            <li><a href="{{url('/')}}/board-of-directors">Board Of Directors</a> </li>
            <li><a href="{{url('/')}}/management">Management</a> </li>
            <li><a href="{{url('/')}}/volunteer-coordinators">Volunteer Coordinators</a> </li>

          </ul>
				</li>

				<li class="<?php if($page_name == 'Our Work') echo "active" ?>" ><a href="{{url('/our-projects')}}">Projects</a>

				</li>

        <li class="<?php if($page_name == 'Events') echo "active" ?>"><a href="{{url('/blog/events')}}">Events</a>

			  </li>



        <li><a href="#"><i class="fa fa-map-marker"></i> Regions</a>
          <div class="megamenu">
            <div class="megamenu-row">
              <?php $Regions = DB::table('regions')->where('batch','1')->get(); ?>
              <div class="col3">
                <ul class="list-unstyled list-dashed">
                  @foreach($Regions as $Regions)
                    @if($Regions->slung == null | $Regions->slung == '')
                    <li><a href="#">{{$Regions->title}}</a>
                    @else
                    <li><a href="{{url('/')}}/region/{{$Regions->slung}}">{{$Regions->title}}</a>
                    @endif
                  </li>
                  @endforeach

                </ul>
              </div>
              {{--  --}}
              <?php $Regions = DB::table('regions')->where('batch','2')->get(); ?>
              <div class="col3">
                <ul class="list-unstyled list-dashed">
                  @foreach($Regions as $Regions)
                    @if($Regions->slung == null | $Regions->slung == '')
                    <li><a href="#">{{$Regions->title}}</a>
                    @else
                    <li><a href="{{url('/')}}/region/{{$Regions->slung}}">{{$Regions->title}}</a>
                    @endif
                  </li>
                  @endforeach

                </ul>
              </div>
              {{--  --}}
              <?php $Regions = DB::table('regions')->where('batch','3')->get(); ?>
              <div class="col3">
                <ul class="list-unstyled list-dashed">
                  @foreach($Regions as $Regions)
                    @if($Regions->slung == null | $Regions->slung == '')
                    <li><a href="#">{{$Regions->title}}</a>
                    @else
                    <li><a href="{{url('/')}}/region/{{$Regions->slung}}">{{$Regions->title}}</a>
                    @endif
                  </li>
                  @endforeach

                </ul>
              </div>
              {{--  --}}
              <?php $Regions = DB::table('regions')->where('batch','4')->get(); ?>
              <div class="col3">
                <ul class="list-unstyled list-dashed">
                  @foreach($Regions as $Regions)
                    @if($Regions->slung == null | $Regions->slung == '')
                    <li><a href="#">{{$Regions->title}}</a>
                    @else
                    <li><a href="{{url('/')}}/region/{{$Regions->slung}}">{{$Regions->title}}</a>
                    @endif
                  </li>
                  @endforeach

                </ul>
              </div>
              {{--  --}}
            </div>
          </div>
        </li>

			  <li class="<?php if($page_name == 'Gallery') echo "active" ?>"><a href="{{url('/our-gallery')}}">Gallery</a>

              </li>

        <li class="<?php if($page_name == 'contact') echo "active" ?>"><a href="{{url('/contact-us')}}"><i class="fa fa-phone"></i> Contact Us</a>

              </li>

            </ul>
            <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
			 <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popupa" href="{{url('/get-involved')}}"><i class="fa fa-check"></i> Get Involved</a>
			 <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popupa" href="{{url('/donate-now')}}"><i class="fa fa-heart"></i> Donate Now</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
  @yield('content')
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="#" data-bg-color="#000000">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <img class="mt-10 mb-20" style="max-height:80px" alt="" src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}">
			<p><i class="fa fa-map-marker text-theme-colored"></i> {{$Settings->location}}</p>
			<p><i class="fa fa-book text-theme-colored"></i> {{$Settings->address}}</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="tel:{{$Settings->mobile}}">{{$Settings->mobile}}</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">{{$Settings->email}}</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">{{$Settings->url}}</a> </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Home</a></li>
              <li><a href="#">About US</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact US</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Friday :  </span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sat - Sun :</span>
                  <div class="value pull-right"> 9.00 am - 4.00 pm </div>
                </li>
                <li class="clearfix"> <span> Public Holidays </span>
                  <div class="value pull-right"> Closed </div>
                </li>
                <!-- <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Colosed </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-10" >
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <center>
            @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            @if(Session::has('messageError'))
                    <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
            @endif
            </center>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footear" action="{{url('/')}}/subscribe" class="newsletter-form" method="post">
            {{csrf_field()}}
              <div class="input-group">
                <input type="email" value="" name="email" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: ''
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              {{$Settings->mobile}} <br>
              {{$Settings->mobile_one}}
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
              <li><a href="{{$Settings->facebook}}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{$Settings->twitter}}"><i class="fa fa-twitter"></i></a></li>

              <li><a href="{{$Settings->youtube}}"><i class="fa fa-youtube"></i></a></li>
              <li><a href="{{$Settings->instagram}}"><i class="fa fa-instagram"></i></a></li>
              <li><a href="{{$Settings->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="font-11 text-black-777 m-0 text-center">Copyright &copy;<?php echo date('Y') ?> {{$Settings->sitename}}. All Rights Reserved | Powered By <a href="https://designekta.com">Designekta Studios</a></p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="{{url('/privacy-policy')}}">Privacy Policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="{{url('/copyright')}}">Copyright</a>
                </li>
                <li>|</li>
                <li>
                  <a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('theme/js/custom.js')}}"></script>



</body>
@endforeach
</html>
