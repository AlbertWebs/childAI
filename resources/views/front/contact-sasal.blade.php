@extends('front.master')
@section('content')

 
@foreach($SiteSettings as $Settings)
<section class="inner-page"> 
	<div class="container">
		<div class="page-title">
			<h1>Contact <span>Us</span></h1>
		</div><!-- Page Title -->
		<div class="row">
		        <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
                 </center>
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">CONTACT INFORMATION</h3>
					<!--<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=australia&amp;aq=&amp;sll=-25.274398,133.775136&amp;sspn=41.490127,85.166016&amp;ie=UTF8&amp;hq=&amp;hnear=Australia&amp;t=m&amp;z=4&amp;ll=-25.274398,133.775136&amp;output=embed"></iframe>-->
					<p>{{$Settings->welcome}}</p>
					<ul class="contact-details">
						<li>
							<span><i class="icon-home"></i>ADDRESS</span>
							<p>{{$Settings->location}}</p>
							<p>{{$Settings->address}}</p>
						</li>
						<li>
							<span><i class="icon-phone-sign"></i>PHONE NO</span>
							<p>{{$Settings->mobile}} / {{$Settings->mobile_one}}</p>
						</li>
						<li>
							<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
							<p>{{$Settings->email}}</p>
						</li>
						
					
					</ul>
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6">
				<div class="form">
					<h3 class="sub-head">CONTACT US BY MESSAGE</h3>
					
					<div id="message"></div>
					<form method="post"  action="{{url('/submitMessage')}}" name="contactform" id="contactform">
					{{csrf_field()}}
						<label for="name" accesskey="U">Full name <span>*</span></label>
						<input name="name" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="name" accesskey="U">Subject <span>*</span></label>
						<input name="subject" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="email" accesskey="E">Email Address <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" />
						<label for="comments" accesskey="C">Message <span>*</span></label>
						<textarea name="comments" id="comments" rows="7" class="form-control input-field"></textarea>
						<div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
						<input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
					</form>
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>	
		
	<div class="social-connect">	
		<div class="container">
			<h3>FIND US ON SOCIAL MEDIA.</h3>
			<ul class="social-bar">
				<li><a title="" href="{{$Settings->facebook}}"><img alt="" src="{{asset('theme/images/facebook.jpg')}}"></a></li>
			    <li><a title="" href="{{$Settings->linkedin}}"><img alt="" src="{{asset('theme/images/linked-in.jpg')}}"></a></li>
				
			</ul>			
		</div>
	</div><!-- Social Media Bar -->
	

</section>
@endforeach


@endsection