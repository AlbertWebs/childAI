@extends('front.master')
@section('content')
   <!-- Section: inner-header -->
   <?php $Banner = DB::table('banners')->where('name','about')->get() ?>
	@foreach($Banner as $banner)
   <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="{{url('/')}}/uploads/banners/{{$banner->image}}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Join Us Today</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="{{url('/')}}">Home</a></li>
                
                <li class="active text-theme-colored">Join Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
	</section>
	@endforeach
	<div class="clear-fix"></div>
    <section>
	<center>
		@if(Session::has('message'))
					<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif

	@if(Session::has('messageError'))
					<div class="alert alert-danger">{{ Session::get('messageError') }}</div> 
	@endif
	</center>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
			<form name="reg-form" action="{{url('/regisrations')}}" method="post">
			{{ csrf_field() }}
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
              </div>
              <hr>
              <p class="text-gray">Register as a volanteer today and start working with us with our amaizing agendas</p>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input name="name" class="form-control" type="text" required>
                </div>
                <!--  -->
                <div class="form-group col-md-6">
                  <label for="form_choose_username">Mobile</label>
                  <input id="form_choose_username" name="phone" class="form-control" type="text" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="form_choose_username">Email</label>
                  <input id="form_choose_username" name="email" class="form-control" type="email" required>
                </div>
                <div class="form-group col-md-6">
                  <label>County</label>
                  <input name="county" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row">
                
                <!--  -->
                <div class="form-group col-md-6">
                  <label for="form_choose_username">Sub County</label>
                  <input id="form_choose_username" name="sub_county" class="form-control" type="text" required>
                </div>
                <input id="form_choose_username" name="sex" class="form-control" type="hidden">
                <!--  -->
                <div class="form-group col-md-6">
                  <label for="form_choose_username">Sub Location</label>
                  <input id="form_choose_username" name="location" class="form-control" type="text" required>
                </div>
              </div>
              {{--  --}}
              
              <div class="row">
			        <textarea class="form-control mb-10" rows="5" name="message" placeholder="Your Reasons For Joining Us"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Reasons For Joining Us'" required=""></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection