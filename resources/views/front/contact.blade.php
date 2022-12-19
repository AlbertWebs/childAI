@extends('front.master')
@section('content')
@include('front.slider')
 
@foreach($SiteSettings as $Settings)
  <!-- Divider: Contact -->
  <section class="divider">
      <div class="container">
        <div class="row pt-10">
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
            <!-- Contact Form -->
            <form id="contact_forma" name="contact_form" class="" action="{{url('/submitMessage')}}" name="contactform" id="contactform" method="post">
			{{csrf_field()}}
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="comments" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                  </div>
                </div>
              </div>

            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-4 col-md-offset-1">
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone: {{$Settings->mobile}}</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>Email</h4>
              <h6 class="text-gray">{{$Settings->email}}</h6>
            </div>
            <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>Address</h4>
              <h6 class="text-gray">{{$Settings->location}}</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      {{-- <!-- Google Map HTML Codes -->           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1596885227007!5m2!1sen!2ske" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:450px;" allowfullscreen></iframe> --}}
    </section>
@endforeach


@endsection