
@extends('front.master')
@section('content')
<?php $Banner = DB::table('banners')->where('name','about')->get() ?>
@foreach($Banner as $banner)
<div class="top-image">
	<img src="{{url('/')}}/uploads/banners/{{$banner->image}}" alt="" />
</div><!-- Page Top Image --> 
@endforeach
	
<section class="inner-page">
	<div class="container">
		<div class="page-title">
			<h1>Donate <span>Now</span></h1>
		</div><!--Page Title-->
	</div>
<!-- Story -->
<section class="inner-page">
	<div class="container">
		<div class="row">
			<div class="left-content col-md-9">
				<div class="post">
					<div class="causes-single">
						<div class="tab-content" id="myTabContent">
						
                            @foreach($CartItems as $cartitems)
                            <?php $ProductsForCart = DB::table('product')->where('id', $cartitems->id)->get(); ?>
                                @foreach($ProductsForCart as $Product)
                                <div id="cause{{$Product->id}}" class="tab-pane fade in active">
                                    <img src="{{url('/')}}/uploads/product/{{$Product->image_one}}" alt="" />
                                </div>
                                <div id="cause{{$Product->id}}" class="tab-pane fade in">
                                    <img src="{{url('/')}}/uploads/product/{{$Product->image_two}}" alt="" />
                                </div>
                                <div id="cause{{$Product->id}}" class="tab-pane fade in">
                                    <img src="{{url('/')}}/uploads/product/{{$Product->image_three}}" alt="" />
                                </div>
                                @endforeach
							@endforeach
							
						</div>
						
						<ul class="nav nav-tabs" id="myTab">
		                @foreach($CartItems as $cartitems)
                            <?php $ProductsForCart = DB::table('product')->where('id', $cartitems->id)->get(); ?>
                                @foreach($ProductsForCart as $Product)
                                <li class="active"><a data-toggle="tab" href="#cause{{$Product->id}}"><img src="{{url('/')}}/uploads/product/{{$Product->image_one}}" alt="" /></a></li>
                                <li class="<?php if($Product->id == '1') echo "active"; ?>"><a data-toggle="tab" href="#cause{{$Product->id}}"><img src="{{url('/')}}/uploads/product/{{$Product->image_two}}" alt="" /></a></li>
                                <li class="<?php if($Product->id == '1') echo "active"; ?>"><a data-toggle="tab" href="#cause{{$Product->id}}"><img src="{{url('/')}}/uploads/product/{{$Product->image_three}}" alt="" /></a></li>
                                @endforeach
                        @endforeach
							
						</ul>				
					</div>
					
					<div class="cause-bar">
						<div class="cause-box"></div>
						<div class="cause-box">
								
						</div>
						<div class="cause-box"></div>
						<div class="cause-box donate-drop-btn"><h4>BUY NOW</h4></div>
					</div>
					<div class="donate-drop-down">
					
						<!-- paypal here -->
						<form id="ShowPaypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="upload" value="1">
							<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
							@foreach($SiteSettings as $Sett)
							<input type="hidden" name="business" value="{{$Sett->paypal}}">
							@endforeach
							<!-- Collect Data -->
							<input type="hidden" name="item_name_1" value="SASAL DONATE BUY BUYING">
							
							<input type="hidden" name="quantity_1" value="1">
							<input type="hidden" name="shipping_1" value="0">
							
							
							<input type="hidden" name="cancel_return" id="cancel_return" value="{{url('/')}}/donate" />
							
						
						
						<div class="other-amount">
                            @foreach($CartItems as $cartitems)
                                <?php $ProductsForCart = DB::table('product')->where('id', $cartitems->id)->get(); ?>
                                @foreach($ProductsForCart as $Product)
                                <input type="text" id="textfield" name="amount_1" value="{{$Product->price}}">
                                @endforeach
                            @endforeach
							<button type="submit"  title="Donate">DONATE NOW</button>
						</div>
						</form>
						<!-- paypal -->
					</div>
					
					
					
						
				</div>
				
				
				
			</div>
			
			<!--  -->
			<div class="sidebar col-md-3 pull-right">
		
			
					<div class="sidebar-widget">
						<div class="sidebar-title">
							<h4>Past <span>Events</span></h4>
						</div>
						<?php $PastEvents = DB::table('events')->limit(5)->OrderBy('id','DESC')->get(); ?>
						@foreach($PastEvents as $pastevents)
						<div class="popular-post">
							<img src="{{url('/')}}/uploads/events/{{$pastevents->image_one}}" alt="" />
							<div class="popular-post-title">
								<h6><a href="{{url('/')}}/blog/events/{{$pastevents->title}}" title="">{{$pastevents->title}}</a></h6>
								<span>Date: {{$pastevents->date}}</span>
							</div>
						</div>
						@endforeach
					</div><!-- Popular Posts -->
					
					
					<div class="sidebar-widget">
						<div class="sidebar-title">
							<h4>Our <span>Gallery</span></h4>
						</div>
						<div class="gallery row">
							<?php $Gallery = DB::table('gallery')->limit(12)->get(); ?>
							@foreach($Gallery as $gallery)
								<div class="col-md-4">
									<a target="new" href="{{url('/')}}/uploads/gallery/{{$gallery->image}}" title=""><img src="{{url('/')}}/uploads/gallery/{{$gallery->image}}" alt="" /></a>
								</div>
							@endforeach
											
						</div>
					</div><!-- Sidebar Gallery -->
					
				</div>
				</div>
			</div>
			<!--  -->
		</div>
	</div>
</section>

@endsection