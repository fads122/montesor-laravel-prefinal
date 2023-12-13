@extends('layouts.master')
@section('welcome')
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





   {{-- <div class="row">
     <div class="col-lg-6" style="margin-left: 300px; margin-top: 100px">
         <div class="card">
             <div class="card-body">
                 <h5 class="card-title">Professors Table</h5>
                 <div class="table-responsive mx-auto">
                     <table class="table table-hover" style="width: 1000px">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Profile Image</th>
                                 <th scope="col">First Name</th>
                                 <th scope="col">Middle Name</th>
                                 <th scope="col">Last Name</th>
                                 <th scope="col">Specialization</th>
                                 <th scope="col">Edicational Attainment</th>

                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <th scope="row">1</th>
                                 <td>Image</td>
                                 <td>Christian</td>
                                 <td>Lotino</td>
                                 <td>Montesor</td>
                                 <td>
                                   <ul>
                                     <li>Physics</li>
                                     <li>Chemistry</li>
                                   </ul>
                                 </td>
                                 <td>College Graduate</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div> --}}
 <!--End Row-->
<div class="col-lg-6">
    <div class="card" style="width: 1000px; margin-left: 100px; margin-top: 50px">
        <div class="card-body">
            <h5 class="card-title">Professors Table</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Profile Image</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Educational Attainment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($professors as $professor)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{ $professor->img }}</td>
                                <td>{{ $professor->first_name }}</td>
                                <td>{{ $professor->middle_name }}</td>
                                <td>{{ $professor->last_name }}</td>
                                <td>
                                    <ul>
                                        <li>{{ $professor->special }}</li>
                                    </ul>
                                </td>
                                <td>{{ $professor->educ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('professors.show', $professor->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div><!--End Row-->

   <div class="row">
   </div><!--End Row-->

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
       TutorSync
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
 --}}
</div><!--End wrapper-->


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- simplebar js -->
<script src="{{ asset('plugins/simplebar/js/simplebar.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('js/sidebar-menu.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('js/app-script.js') }}"></script>
@endsection
