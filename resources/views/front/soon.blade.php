
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Child Ambassadors Development" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="Dn" />

<!-- Page Title -->
<title>Child Ambassadors Development</title>


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
<link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->
<link href="{{asset('theme/colors/theme-skin-orange.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('theme/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('theme/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('theme/js/jquery-plugin-collection.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<![endif]-->
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

  <!-- start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="bg-lightest fullscreen">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0"><div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h1 class="text-theme-colored font-weight-300 font-64">We Are Coming Soon</h1>


                <div id="countdown17" class="ClassyCountdownDemo"></div>

                <!-- jQuery Classy Countdown Scripts and CSS -->
                <link href="{{asset('theme/js/classycountdown/css/jquery.classycountdown.css')}}" rel="stylesheet" type="text/css">
                <script src="{{asset('theme/js/classycountdown/js/jquery.knob.js')}}"></script>
                <script src="{{asset('theme/js/classycountdown/js/jquery.throttle.js')}}"></script>
                <script src="{{asset('theme/js/classycountdown/js/jquery.classycountdown.js')}}"></script>

                <!-- Classy Countdown Script -->
                <script type="text/javascript">
                  $(document).ready(function() {
                    $('#countdown17').ClassyCountdown({
                        theme: "flat-colors-very-wide",
                        end: $.now() + 1000000
                    });
                  });
                </script>


                <form id="mailchimp-subscription-form" class="newsletter-form mt-0 mb-30 maxwidth500">
              		<label for="mce-EMAIL"></label>
                  <div class="input-group">
                    <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-colored btn-theme-colored btn-xs m-0" data-height="45px" style="height: 45px;">Subscribe</button>
                    </span>
                  </div>
                </form>

                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                  $('#mailchimp-subscription-form').ajaxChimp({
                      callback: mailChimpCallBack,
                      url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                      // Hide any previous response text
                      var $mailchimpform = $('#mailchimp-subscription-form'),
                          $response = '';
                      $mailchimpform.children(".alert").remove();
                      if (resp.result === 'success') {
                          $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      } else if (resp.result === 'error') {
                          $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      }
                      $mailchimpform.prepend($response);
                  }
                </script>

                <p class="font-14">Sorry.... We are improving and fixing problems of our website.<br>We will be back very soon....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer text-center bg-black-222">
    <div class="container pt-10 pb-10">
      <div class="row">
        <div class="col-md-12">
          <p class="text-white mb-0">Copyright &copy;{{date('Y')}} Child Ambassadors Development. All Rights Reserved</p>
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

</html>
