 <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="{{route('adminDashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  <div class="profile clearfix">
                     <div class="profile_pic">
                        <img src="/assets/images/frontend/img.jpg" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }}</h2>
                     </div>
                  </div>
                  <!-- /menu profile quick info -->
                  <br />
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                           <li>
                              <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('adminDashboard')}}">Dashboard</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-home"></i> CATEGORY <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('allCategory')}}">All Category</a></li>
                                 <li><a href="{{route('addCategory')}}">Add Category</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-edit"></i> SUB CATEGORY <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('allsubCategory')}}">All Sub Category</a></li>
                                 <li><a href="{{route('addsubCategory')}}">Add Sub Category</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-desktop"></i> PRODUCT <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('allProduct')}}">All Product</a></li>
                                 <li><a href="{{route('addproduct')}}">Add Product</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-table"></i> ORDERS <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('orderPending')}}">Pending Orders</a></li>
                                 <li><a href="{{route('ordercomplete')}}">Completed Orders</a></li>
                                 <li><a href="{{route('orderCancel')}}">Cancel Orders</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-desktop"></i> USER <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{route('admin.user')}}">List</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                 <!--  <div class="sidebar-footer hidden-small">
                     <a data-toggle="tooltip" data-placement="top" title="Settings">
                     <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                     <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="Lock">
                     <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                     </a>
                  </div> -->
                  <!-- /menu footer buttons -->
               </div>
            </div>