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
                        
                        <center><h2> Reasons For Volunteering </h2></center>
                        
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
                 
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                  
                                                    <th>Edit</th>
                                                    <th>Del</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Reason as $value)
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->title}}</td>
                                                   
                                                    <td class="center"><a href="{{url('/admin')}}/editReason/{{$value->id}}"   class="btn btn-info"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                                    <td class="center"><a onclick="return confirm('Are you sure you want to continue')" href="{{url('/admin')}}/deleteReason/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Del</a></td>
                                               </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                



                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection