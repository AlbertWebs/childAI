<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="container">
		<center>
				@if(Session::has('message'))
							<div class="alert alert-success">{{ Session::get('message') }}</div>
			    @endif
		</center>
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Sign up for updates on new courses</div>
							
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="{{url('/subscribe/courses')}}" method="POST" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>