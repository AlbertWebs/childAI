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
                        
                        <center><h2> Edit Team </h2></center>
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
                   <!-- CHART & CHAT  SECTION -->
              
                 <!--END CHAT & CHAT SECTION -->
               
                  <!-- Inner Content Here -->
                 
            <div class="inner">
                

              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
                 </center>

                 <form class="form-horizontal" method="post"  action="{{url('/admin/add_Team')}}" enctype="multipart/form-data">
                   
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Name</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="name" value="" placeholder="e.g Juliet Wangui Waraga " class="form-control" />
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Position</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="position" value="" placeholder="e.g Graphics Designer" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">email</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1"  name="email" value="" placeholder="e.g juliekoi2@gmail.com " class="form-control" />
                            <!-- <p class="help-block">Changing Your Email Signs Out The Current Session</p> -->

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Facebook Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="facebook" value=""  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Twitter Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="twitter" value=""  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Linkedin Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="linkedin" value=""  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Instagram</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="instagram" value="" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Youtube Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="youtube" value=""  class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Google Plus Link</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="google" value=""  class="form-control" />
                        </div>
                    </div>

                    {{-- type --}}

                    <div class="form-group">
                        <label class="control-label col-lg-4">Member Type</label>
    
                        
                            
    
                        <div class="col-lg-8">
                            <select name="type" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                              
                               
                             
                                  <option value="1">BOD</option>
                                  <option value="2">management</option>
                                  <option value="3">Volunteer Coordinator</option>
                               
    
                            </select>
                        </div>
                        </div>
                    {{-- type --}}

                    <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Something About Me</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10"></textarea>

                                    
                                </div>
                            </div>
                        </div>
                       
                    <center>
                    <div class="form-group col-lg-12">
                        <label class="control-label">Team Image(270 by 270)</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    </div>

                    
                   
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save</button>
                    </div>
                    
                    <input type="hidden" name="image_cheat" value="0">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                <form>


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