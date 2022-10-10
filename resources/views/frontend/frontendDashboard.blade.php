@extends('frontend.layout.front')
@section('title')
E-Shop
@endsection
@section('content')
	  <div class="hero_area">
         <!-- header section strats -->
        @include('frontend.layout.frontheader')
         <!-- end header section -->
         <!-- slider section -->
        @include('frontend.layout.frontslider')
        
         <!-- end slider section -->
      </div>
      <!-- why section -->
        @include('frontend.layout.frontwhysection')
      <!-- end why section -->
      
      <!-- arrival section -->
     
      <!-- end arrival section -->
        @include('frontend.layout.frontarrivalsection')
      
      <!-- product section -->
        @include('frontend.layout.frontproductsection')
      
      <!-- end product section -->

      <!-- subscribe section -->
        @include('frontend.layout.frontsubscribesection')
     
      <!-- end subscribe section -->
      <!-- client section -->
        @include('frontend.layout.frontclientsection')
      
      <!-- end client section -->
@endsection