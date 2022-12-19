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
                        
                        <center><h2> Edit Training  </h2></center>
                        
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
                 

                 <form class="form-horizontal" method="post"  action="{{url('/admin/edit_Training')}}/{{$Course->id}}" enctype="multipart/form-data">
                    
                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="{{$Course->title}}"  placeholder="e.g Sales and Marketing" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Product Price</label>

                        <div class="col-lg-8">
                            <input type="number" id="text1" name="price" value="{{$Course->price}}" placeholder="e.g 12500" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Product USD</label>

                        <div class="col-lg-8">
                            <input type="number" id="text1" name="usd" value="{{$Course->usd}}" placeholder="e.g 125" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Duration</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="duration" value="{{$Course->duration}}"  placeholder="2 Weeks" class="form-control" />
                        </div>
                    </div>

               

                    <div class="form-group">
                        <label class="control-label col-lg-4">Mode</label>

                        <div class="col-lg-8">
                            <select name="mode" class="form-control">
                                <option selected="selected" value="{{$Course->mode}}"> {{$Course->mode}}</option>
                                <option value="Online">Online</option>
                                <option value="Facilitator Led">Facilitator Led</option>
                                
                            </select>
                        </div>
                    </div>

                   


                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Venue</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="venue" value="{{$Course->venue}}"  placeholder="e.g Mombasa" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Start</label>

                        <div class="col-lg-8">
                            <div class="input-group bootstrap-timepicker">
                                <input  name="start" value="{{$Course->start}}" class="form-control timepicker-default" type="text" />
                                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Stop</label>

                        <div class="col-lg-8">
                            <div class="input-group bootstrap-timepicker">
                                <input name="stop" value="{{$Course->stop}}" class="form-control timepicker-default" type="text" />
                                <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" >Date</label>

                        <div class="col-lg-8">
                            <div class="input-group input-append  date" id="dpYears" data-date="12-02-2012"
                                 data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input name="date" value="{{$Course->date}}"  class="form-control" type="text" value="12-02-2012" readonly="" />
                                <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Author</label>

                        <div class="col-lg-8">
                            <input type="text" readonly id="text1" name="author" value="{{Auth::user()->name}}" class="form-control" />
                        </div>
                    </div>

                     <!-- Category -->
                     <div class="form-group">
                    <label class="control-label col-lg-4">Category</label>

                    
                        

                    <div class="col-lg-8">
                        <select name="cat" data-placeholder="Choose Category" class="form-control chzn-select" tabindex="2">
                           <option value="{{$Course->cat}}">
                             <?php $TheCategory = DB::table('category')->where('id',$Course->cat)->get(); ?>
                             @foreach($TheCategory as $Cate){{$Cate->cat}} @endforeach
                           </option>
                           <?php $TheCategoryList = DB::table('category')->get(); ?>
                           @foreach($TheCategoryList as $value)
                              <option value="{{$value->id}}">{{$value->cat}}</option>
                           @endforeach

                        </select>
                    </div>
                    </div>
                    <!-- Category -->


                     <!-- Category -->
                     <div class="form-group">
                    <label class="control-label col-lg-4">File</label>

                    <!-- <embed src="{{url('/')}}/uploads/structure/{{$Course->file}}" width="500" height="400" type="application/pdf"/> -->
                    <object width="400" height="500" type="application/pdf" data="{{url('/')}}/uploads/structure/{{$Course->file}}">
                        <p>Your File Could Not Be Loaded</p>
                    </object>

                    <div class="col-lg-8">
                        
                    </div>
                    </div>
                    <!-- Category -->

                    
                     
          
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Training Description</h5>
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
                                    
                                        <textarea name="content" id="wysihtml5" class="form-control" rows="10">{{$Course->content}}</textarea>

                                    
                                </div>
                            </div>
                        </div>


                        
                   
                    <center>
                    <div class="form-group col-lg-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label">Image One(Main)</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{url('/')}}/uploads/courses/{{$Course->image}}" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input name="image_one" type="file" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  

                   
                    </div>
                    

                      <!-- Add File Here -->
                      <div class="form-group">
                    <label class="control-label col-lg-4">Change Document</label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">



                                <div class="input-group">
                                    

                                    <span class="btn btn-file btn-info">
                                        <span class="fileupload-new">Select file</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input name="file" type="file" />
                                    </span> 
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    
                                    <br /> <br />
                                    <div class="col-lg-3">
                                        <i class="icon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    <!-- Add file here -->
                    </center>
                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-check icon-white"></i> Save </button>
                    </div>
                    <input type="hidden" name="image_one_cheat" value="{{$Course->image}}">
                   
                    
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