<div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    <li>Users &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                    <li>Subscribers &nbsp; : <span><?php $Subscribers = DB::table('subscribers')->get(); $Count = count($Subscribers); echo $Count ?></span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
                <button type="button" onclick="window.open('{{url('/admin/version')}}','_self')" class="btn btn-block"> Version Control </button>
                <button type="button" onclick="window.open('{{url('/admin/slider')}}','_self')" class="btn btn-primary btn-block">Manage Sliders</button>
                <button type="button" onclick="window.open('{{url('/admin/services')}}','_self')" class="btn btn-primary btn-block">Manage What We Do</button>
                <button type="button" onclick="window.open('{{url('/admin/reasons')}}','_self')" class="btn btn-primary btn-block">Reasons for Volunteering</button>
                <button type="button" onclick="window.open('{{url('/admin/banner')}}','_self')" class="btn btn-primary btn-block">Manage Banners</button>
                <!-- <button type="button" onclick="window.open('{{url('/admin/intro')}}','_self')" class="btn btn-success btn-block"> Site Intro</button> -->
                <button type="button" onclick="window.open('{{url('/admin/galleryList')}}','_self')" class="btn btn-primary btn-block">Manage Gallery </button>
                <button type="button" onclick="window.open('{{url('/admin/report')}}','_self')" class="btn btn-warning btn-block">Manage Reports </button>
                <button type="button" onclick="window.open('{{url('/admin/portfolio')}}','_self')" class="btn btn-warning btn-block">Manage Our Projects</button>
                <button type="button" onclick="window.open('{{url('/admin/stats')}}','_self')" class="btn btn-inverse btn-block">Manage Statistics </button>
                
                <!-- <button type="button" onclick="window.open('{{url('/admin/products')}}','_self')" class="btn btn-info btn-block"> Edit Sales </button> -->
                <button type="button" onclick="window.open('{{url('/admin/partners')}}','_self')" class="btn btn-success btn-block">Manage Partners</button>
                <!-- <button type="button" onclick="window.open('{{url('/admin/comments')}}','_self')" class="btn btn-info btn-block"> Comments </button> -->
                
                <button type="button" onclick="window.open('{{url('/admin/notifications')}}','_self')" class="btn btn-danger btn-block">Manage Notifications </button>
                <!-- <button type="button" onclick="window.open('{{url('/admin/subscribers')}}','_self')" class="btn btn-danger btn-block"> subscribers </button> -->
                <button type="button" onclick="window.open('{{url('/admin/updates')}}','_self')" class="btn btn-inverse btn-block">Manage Updates </button>
               
            </div>
            
          
            
         

        </div>