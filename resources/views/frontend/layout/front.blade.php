<!DOCTYPE html>
<html>
 @include('frontend.layout.fronthead')
   <body>
    
    @yield('content')
      <!-- footer start -->
    @include('frontend.layout.frontfooter')
      <!-- jQery -->
     @include('frontend.layout.frontfooterscript')
   </body>
</html>