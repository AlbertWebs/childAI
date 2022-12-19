<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="{{Auth::user()->name}}" src="{{url('/')}}/uploads/admins/{{Auth::user()->image}}" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> {{Auth::user()->name}}</b></small> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="{{url('/admin')}}" >
                        <i class="icon-home"></i> Dashboard
	   
                       
                    </a>                   
                </li>


                
              
                
                <li><a href="{{url('admin/addAdmin')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Admin </a></li>
                <li><a href="{{url('admin/addTeam')}}"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Team Members </a></li>
                <li><a href="{{url('admin/addRegion')}}"><i class="icon-map-marker"></i>  <i class="icon-check"></i> Add Region</a></li>
                

                
              
                <li><a href="{{url('admin/addCategory')}}"><i class="icon-plus"></i>  <i class="icon-list"></i> Add Category </a></li>

                <li><a href="{{url('admin/addService')}}"><i class="icon-plus"></i>  <i class="icon-list"></i> Add What We do </a></li>

                <!-- <li><a href="{{url('admin/addService')}}"><i class="icon-plus"></i>  <i class="icon-list"></i> Add What We Do </a></li> -->
                
                               
                <li><a href="{{url('admin/addReason')}}"><i class="icon-plus"></i>  <i class="icon-pencil"> </i>  Add Reason To Volonteer </a></li>

                <li><a href="{{url('admin/addEvent')}}"><i class="icon-plus"></i>  <i class="icon-smile"> </i>  Add Event </a></li>

                <li><a href="{{url('admin/addGallery')}}"><i class="icon-plus"></i>  <i class="icon-smile"> </i>  Add Gallery </a></li>

                <li><a href="{{url('admin/addPortfolio')}}"><i class="icon-plus"></i>  <i class="icon-smile"> </i>  Add Project </a></li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-folder-open"></i>  Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="{{url('/admin/about')}}"><i class="icon-angle-right"></i> About  </a></li>
                        <li><a href="{{url('/admin/board')}}"><i class="icon-angle-right"></i> Board Message  </a></li>
                        <li><a href="{{url('/admin/privacy')}}"><i class="icon-angle-right"></i> Privacy  </a></li>
                        <li><a href="{{url('/admin/terms')}}"><i class="icon-angle-right"></i> Terms  </a></li>
                        <li><a href="{{url('/admin/copyright')}}"><i class="icon-angle-right"></i> Copyright  </a></li>
                        
                    </ul>
                </li>
                
                
                <li><a href="{{url('admin/sitesettings')}}"><i class="icon-cog"></i> Site Settings </a></li>
                <!-- <li><a href="{{url('admin/seosettings')}}"><i class="icon-cog"></i> SEO Settings </a></li> -->
                <li><a href="{{url('admin/logout')}}"><i class="icon-signin"></i> Log Out </a></li>
              

           

              

            </ul>

        </div>