<?php $BannerSub = DB::table('banners')->where('name','letter')->get();  ?>
@foreach($BannerSub as $banner)
<div id="colorlib-subscribe" class="subs-img" style="background-image: url('{{url('/')}}/uploads/banners/{{$banner->image}}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form id="submitsbc" class="form-inline qbstp-header-subscribe">
							{{ csrf_field() }}
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third"> 
									<div class="form-group">
										<button id="subscribebtn" type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endforeach