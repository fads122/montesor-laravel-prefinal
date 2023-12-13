@extends('layouts.master')
@section('register')
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
    <!-- end loader -->

 <!-- Start wrapper-->
  <div id="wrapper">

     <div class="card card-authentication1" style="margin-top: 100px; float: right; margin-right: 200px; box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);">
         <div class="card-body">
          <div class="card-content p-2">
              <div class="text-center">
               <img src="/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 200px; height: 50px">
              </div>
           <div class="card-title text-uppercase text-center py-3">Sign Up</div>
           <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email ID" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Choose Password" required>
            </div>
            <button type="submit" class="btn btn-light btn-block">Sign Up</button>
        </form>
            </div>
           </div>
           <div class="card-footer text-center py-3">
             <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
           </div>
          </div>
          <img src="/images/asd.jpg" class="logo-icon" alt="logo icon" style="width: 782px; height: 498px; position:absolute; left: 100px; top: 125px; border-radius: 100px; box-shadow: 6px 6px 4px 0px rgba(0, 0, 0, 0.25);>
      <!--Start Back To Top Button-->
     /* <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> */
     <!--End Back To Top Button-->

     {{-- <!--start color switcher-->
    <div class="right-sidebar">
     <div class="switcher-icon">
       <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
     </div>
     <div class="right-sidebar-content">

       <p class="mb-0">Gaussion Texture</p>
       <hr>

       <ul class="switcher">
         <li id="theme1"></li>
         <li id="theme2"></li>
         <li id="theme3"></li>
         <li id="theme4"></li>
         <li id="theme5"></li>
         <li id="theme6"></li>
       </ul>

       <p class="mb-0">Gradient Background</p>
       <hr>

       <ul class="switcher">
         <li id="theme7"></li>
         <li id="theme8"></li>
         <li id="theme9"></li>
         <li id="theme10"></li>
         <li id="theme11"></li>
         <li id="theme12"></li>
         <li id="theme13"></li>
         <li id="theme14"></li>
         <li id="theme15"></li>
       </ul>

      </div>
    </div> --}}
   <!--end color switcher-->

     </div><!--wrapper-->

{{--
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script> --}}
@endsection
