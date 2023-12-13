@extends('layouts.master')
@section('landing')
<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <div class="brand-logo">
        <a href="index.html">
         <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
         <h5 class="logo-text">Dashtreme Admin</h5>
       </a>
     </div>
     <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('landing') }}">
            <i class="zmdi zmdi-view-dashboard"></i> <span>HOME</span>
          </a>
        </li>

        <li>
          <a href="{{ route('welcome') }}">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Professors</span>
          </a>
        </li>
        <li>
          <a href="{{ route('create') }}">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          </a>
        </li>

        <li>
          <a href="{{ route('calendar') }}">
            <i class="zmdi zmdi-calendar-check"></i> <span>Scheduling</span>
          </a>
        </li>

        <li>
          <a href="{{ route('profile') }}">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
          </a>
        </li>

        <li>
          <a href="{{ route('login') }}" target="_blank">
            <i class="zmdi zmdi-lock"></i> <span>Login</span>
          </a>
        </li>

         <li>
          <a href="{{ route('register') }}" target="_blank">
            <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
          </a>
        </li>

      </ul>

     </div>
     <!--End sidebar-wrapper-->

  <!--Start topbar header-->
  <header class="topbar-nav">
   <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
       </a>
      </li>
      <li class="nav-item">
        <form class="search-bar">
          <input type="text" class="form-control" placeholder="Enter keywords">
           <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form>
      </li>
    </ul>

    <ul class="navbar-nav align-items-center right-nav-link">
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-envelope-open-o"></i></a>
      </li>
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-bell-o"></i></a>
      </li>
      <li class="nav-item language">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
        </a>
        @if(Auth::check())
        <p>{{ Auth::user()->email }}</p>
    @endif
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
              <p class="user-subtitle">mccoy@example.com</p>
              </div>
             </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
        </ul>
      </li>
    </ul>
  </nav>
  </header>
  <!--End topbar header-->

  <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">

    <!--Start Dashboard Content-->

      <div class="card mt-3">
      <div class="card-content">
          <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">11 <span class="float-right"><i class="zmdi zmdi-account-box-phone"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Number of Offers<span class="float-right"></i></span></p>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Total Salary <span class="float-right"></i></span></p>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">52<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Visitors<span class="float-right"></i></span></p>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                  <div class="card-body">
                    <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                    <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                  </div>
              </div>
          </div>
      </div>
   </div>

      <div class="row">
       <div class="col-12 col-lg-8 col-xl-8">
          <div class="card">
           <div class="card-header">Schedules
             <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                  <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void();">Action</a>
                  <a class="dropdown-item" href="javascript:void();">Another action</a>
                  <a class="dropdown-item" href="javascript:void();">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
             </div>
           </div>
           <div class="card-body">
              <div class="chart-container-1">
                <canvas id="chart1"></canvas>
              </div>
           </div>

           <div class="row m-0 row-group text-center border-top border-light-3">
             <div class="col-12 col-lg-4">

             </div>
             <div class="col-12 col-lg-4">

             </div>
             <div class="col-12 col-lg-4">

             </div>
           </div>

          </div>
       </div>

       <div class="col-12 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-header">Reminders
               <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
             </div>
             <div class="card-body">
               <div class="chart-container-2">
                 <canvas id="chart2"></canvas>
                </div>
             </div>
             <div class="table-responsive">
               <table class="table align-items-center">
                 <tbody>
                   <tr>
                     <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                     <td>$5856</td>
                     <td>+55%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                     <td>$2602</td>
                     <td>+25%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                     <td>$1802</td>
                     <td>+15%</td>
                   </tr>
                   <tr>
                     <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                     <td>$1105</td>
                     <td>+5%</td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
       </div>
      </div><!--End Row-->

      {{-- <div class="row">
       <div class="col-12 col-lg-12">
         <div class="card">
           <div class="card-header">Recent Order Tables
            <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
           </div>
             <div class="table-responsive">
                   <table class="table align-items-center table-flush table-borderless">
                    <thead>
                     <tr>
                       <th>Product</th>
                       <th>Photo</th>
                       <th>Product ID</th>
                       <th>Amount</th>
                       <th>Date</th>
                       <th>Shipping</th>
                     </tr>
                     </thead>
                     <tbody><tr>
                      <td>Iphone 5</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405822</td>
                      <td>$ 1250.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                          </div></td>
                     </tr>

                     <tr>
                      <td>Earphone GL</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405820</td>
                      <td>$ 1500.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                          </div></td>
                     </tr>

                     <tr>
                      <td>HD Hand Camera</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405830</td>
                      <td>$ 1400.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                          </div></td>
                     </tr>

                     <tr>
                      <td>Clasic Shoes</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405825</td>
                      <td>$ 1200.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                          </div></td>
                     </tr>

                     <tr>
                      <td>Hand Watch</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405840</td>
                      <td>$ 1800.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                          </div></td>
                     </tr>

                     <tr>
                      <td>Clasic Shoes</td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td>#9405825</td>
                      <td>$ 1200.00</td>
                      <td>03 Aug 2017</td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                          </div></td>
                     </tr>

                   </tbody></table>
                 </div>
         </div>
       </div>
      </div><!--End Row--> --}}

        <!--End Dashboard Content-->

      <!--start overlay-->
            <div class="overlay toggle-menu"></div>
          <!--end overlay-->

      </div>
      <!-- End container-fluid-->

      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->

      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center">
            Copyright © 2018 Dashtreme Admin
          </div>
        </div>
      </footer>
      <!--End footer-->
  {{--
    <!--start color switcher-->
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
     </div>
    <!--end color switcher-->

    </div><!--End wrapper--> --}}

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

   <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="assets/js/index.js"></script> --}}
    @endsection