<!DOCTYPE html>
<html lang="en">
   <head>
     @include('admin.layouts.head')
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
           @include('admin.layouts.sidebar')
            <!-- top navigation -->
           @include('admin.layouts.topnavbar')
            
            <!-- /top navigation -->
            <!-- page content -->
           @yield('main-content')
            <!-- /page content -->
            <!-- footer content -->
          @include('admin.layouts.footer')
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      @include('admin.layouts.script')
   </body>
</html>