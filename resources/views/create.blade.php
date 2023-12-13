@extends('layouts.master')
@section('create')
<body class="bg-theme bg-theme1">

    <!-- start loader -->
       <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
       <!-- end loader -->

    <!-- Start wrapper-->
     <div id="wrapper">

     <!--Start sidebar-wrapper-->
       <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
         <div class="brand-logo">
          <a href="index.html">
            <img src="/images/logo-icon.png" class="logo-icon" alt="logo icon" style="width: 200px; height: 50px">
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
              <i class="zmdi zmdi-view-dashboard"></i> <span>Professor</span>
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
            <a href={{ route('login') }} target="_blank">
              <i class="zmdi zmdi-lock"></i> <span>Login</span>
            </a>
          </li>

           <li>
            <a href={{ route('register') }} target="_blank">
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

        <div class="row mt-3">
          <div class="col-lg-6">
             <div class="card">
               <div class="card-body">
               <div class="card-title zmdi zmdi-account-circle">&nbsp;Professor Form</div>
               <hr>
               <form method="POST" action="{{ route('professors.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="input-1">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="input-1" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="input-1">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" id="input-1" placeholder="Enter Middle Name">
                </div>
                <div class="form-group">
                    <label for="input-1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="input-1" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="input-2">Email</label>
                    <input type="text" name="email" class="form-control" id="input-2" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label for="input-3">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="input-3" placeholder="Enter Your Mobile Number">
                </div>
                <div class="form-group">
                    <label for="input-4">Age</label>
                    <input type="text" name="age" class="form-control" id="input-4" placeholder="Enter Your Age">
                </div>
                <div class="form-group">
                    <label for="input-6">Address</label>
                    <input type="text" name="address" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Address">
                </div>
                <div class="form-group">
                    <label for="input-4">Educational Attainment</label>
                    <input type="text" name="educ" class="form-control" id="input-4" placeholder="Enter Educational Attainment">
                </div>
                <div class="form-group">
                    <label for="input-4">Specialization</label>
                    <input type="text" name="special" class="form-control" id="input-4" placeholder="Enter Specialization">
                </div>
                <div class="form-group">
                    <label for="input-4">Work Experience</label>
                    <input type="text" name="work" class="form-control" id="input-4" placeholder="Enter Work Experience">
                </div>
                <div class="form-group">
                    <label for="input-6">Profile Image</label>
                    <input type="file" name="img" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Preferred Subject">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-account-add"></i>Submit</button>
                </div>
            </form>

             </div>
             </div>
          </div>

          {{-- <div class="col-lg-6">
            <div class="card">
               <div class="card-body">
               <div class="card-title zmdi zmdi-account-circle">&nbsp;Student From</div>
               <hr>
                <form>
               <div class="form-group">
                <label for="input-6">First Name</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your First Name">
               </div>
               <div class="form-group">
                <label for="input-6">Middle Name</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Middle Name">
               </div>
               <div class="form-group">
                <label for="input-6">Last Name</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Last Name">
               </div>
               <div class="form-group">
                <label for="input-7">Email</label>
                <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
               </div>
               <div class="form-group">
                <label for="input-8">Mobile</label>
                <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
               </div>
               <div class="form-group">
                <label for="input-6">Age</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Age">
               </div>
               <div class="form-group">
                <label for="input-6">Address</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Address">
               </div>
               <div class="form-group">
                <label for="input-6">STRAND</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your STRAND">
               </div>
               <div class="form-group">
                <label for="input-6">Subject Preference</label>
                <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Preferred Subject">
               </div>
               <div class="form-group">
                <label for="input-6">Profile Image</label>
                <input type="file" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Preferred Subject">
               </div>
               <div class="form-group">
                <button type="submit" class="btn btn-light btn-round px-5"><i class="zmdi zmdi-account-add"></i> Submit</button>
              </div>
              </form>
             </div>
             </div>
          </div>
        </div><!--End Row--> --}}

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
       </div>
      <!--end color switcher-->

      </div><!--End wrapper-->


      <!-- Bootstrap core JavaScript-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

     <!-- simplebar js -->
      <script src="assets/plugins/simplebar/js/simplebar.js"></script>
      <!-- sidebar-menu js -->
      <script src="assets/js/sidebar-menu.js"></script>

      <!-- Custom scripts -->
      <script src="assets/js/app-script.js"></script> --}}
      @endsection
