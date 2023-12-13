@extends('layouts.master')
@section('login')
<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

<div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
<div class="logged">
 <div class="card card-authentication1" style="margin-left: 200px; margin-top: 100px; box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);">
     <div class="card-body">
      <div class="card-content p-2">
          <div class="text-center">
     <img src="/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 200px; height: 50px">
          </div>
       <div class="card-title text-uppercase text-center py-3">Sign In</div>
       <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="sr-only" style="box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);">Email</label>
            <div class="position-relative has-icon-right">
                <input type="email" id="email" name="email" class="form-control input-shadow" placeholder="Enter Email">
                <div class="form-control-position">
                    <i class="icon-user"></i>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <div class="position-relative has-icon-right">
                <input type="password" id="password" name="password" class="form-control input-shadow" placeholder="Enter Password">
                <div class="form-control-position">
                    <i class="icon-lock"></i>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-light btn-block">Sign In</button>
    </form>
        </div>
       </div>
       <div class="card-footer text-center py-3">
         <p class="text-warning mb-0">Do not have an account? <a href="register.html"> Sign Up here</a></p>
       </div>
      </div>
   </div>
   <img src="/images/tutors.jpg" class="logo-icon" alt="logo icon" style="width: 782px; height: 498px; position:absolute; right: 100px; top: 20px; border-radius: 100px; box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);>
  <!--Start Back To Top Button-->
 <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
 <!--End Back To Top Button-->

 <!--start color switcher-->

<!--end color switcher-->

 </div><!--wrapper-->
 @endsection
