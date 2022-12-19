@extends('front.master')
@section('content')
<main class="page-content">
@include('front.breadcrumb')
    <center>
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    </center>

    <section class="section-35 section-sm-75 section-lg-100 bg-whisper">
      <div class="shell">
        <div class="range">
          <div class="cell-md-9 cell-lg-12">
            <h3>Request Av Quote</h3>
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="{{url('/quote_request')}}" class="offset-top-40" enctype="multipart/form-data">
              <div class="range">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <input id="feedbaeck-2-first-name" type="text" name="fname" data-constraints="@Required" class="form-control">
                    <label for="feedbaeck-2-first-name" class="form-label">First Name</label>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                  <div class="form-group">
                    <input id="feedback-2-last-name" type="text" name="lname" data-constraints="@Required" class="form-control">
                    <label for="feedback-2-last-name" class="form-label">Last Name</label>
                  </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="cell-sm-6 offset-top-30">
                  <div class="form-group">
                    <input id="feedback-2-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                    <label for="feedback-2-email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-30">
                  <div class="form-group">
                    <input id="feedback-2-phone" type="text" name="phone" data-constraints="@Numeric @Required" class="form-control">
                    <label for="feedback-2-phone" class="form-label">Phone</label>
                  </div>
                </div>
             
                <div class="cell-xs-12 offset-top-30">
                  <div class="form-group">
                    <textarea id="feedback-2-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                    <label for="feedback-2-message" class="form-label">Tell Us More About The Event</label>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-30 offset-sm-top-50">
                  <button type="submit" class="btn btn-primary-outline btn-block">Get Quote</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>
  </main>
@endsection