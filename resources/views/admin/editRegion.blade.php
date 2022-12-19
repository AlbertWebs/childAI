@extends('admin.master')

@section('content')
<div id="wrap" >
        

        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <center><h2> Edit Region Infomation:{{$Region->title}} </h2></center>
                        
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Region')}}/{{$Region->id}}" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Portfolio Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="{{$Region->title}}" placeholder="e.g Travel Website " class="form-control" required/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Location</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="location" value="{{$Region->location}}" placeholder="e.g Location" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Address</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="address" value="{{$Region->address}}" placeholder="e.g Address" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Email</label>

                        <div class="col-lg-8">
                            <input type="email" id="text1" name="email" value="{{$Region->email}}" placeholder="e.g Address" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Email Two</label>

                        <div class="col-lg-8">
                            <input type="email" id="text1" name="email_one" value="{{$Region->email_one}}" placeholder="e.g Address" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">mobile</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="mobile" value="{{$Region->mobile}}" placeholder="e.g Address" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Mobile One</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="mobile_one" value="{{$Region->mobile_one}}" placeholder="e.g Address" class="form-control" required/>
                        </div>
                    </div>
                   
                        <div class="form-group">
                            <label for="limiter" class="control-label col-lg-4">Meta</label>

                            <div class="col-lg-8">
                                <textarea id="limiter" name="meta" class="form-control" required>{{$Region->meta}}</textarea>
                                <p class="help-block">Add Limited Words To Describe The Project</p>
                            </div>
                        </div>

                   
                     <!-- Description -->
                     <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Description</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    
                                        <textarea required name="content" id="wysihtml5" class="form-control" rows="10">{{$Region->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>
                    
                     <!-- Description -->
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>

                 
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection