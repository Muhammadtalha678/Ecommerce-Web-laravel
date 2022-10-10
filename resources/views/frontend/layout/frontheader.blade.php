 <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{ route('frontend.index') }}"><img width="250" src="/assets-1/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('frontend.index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        @if(!(Auth::check()) || Auth::user()->hasRole('admin'))
                        {{-- @if((Auth::user()->hasRole('admin'))) --}}
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('login')  }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                       @else
                       @if(Auth::user()->hasRole('user'))
                         <li class="nav-item dropdown open" style="padding-left: 15px;">
                           <a href="javascript:;" class="user-profile nav-link dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                           {{Auth::user()->name}}
                           </a>
                           <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item"  href="javascript:;"> Profile</a>
                              <a class="dropdown-item"  href="javascript:;">
                              <span class="badge bg-red pull-right">50%</span>
                              <span>Settings</span>
                              </a>
                              <a class="dropdown-item"  href="javascript:;">Help</a>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                   <a class="dropdown-item"  href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                              </form>
                           </div>
                        </li>
                       @endif
                       @endif
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>