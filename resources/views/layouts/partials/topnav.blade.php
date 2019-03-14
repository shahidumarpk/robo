<?php
$user = Auth::user();
?>
 <!-- Main Header -->
 <header class="main-header">
<!-- Logo -->
<a href="{!! url('/home'); !!}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>robo</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Robo ERP</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

      <!-- Notifications Menu -->
      <li class="dropdown notifications-menu">
        <!-- Menu toggle button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">You have 10 notifications</li>
          <li>
            <!-- Inner Menu: contains the notifications -->
            <ul class="menu">
              <li><!-- start notification -->
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i>  Deadline for the Order No# RBD13245 is tomorrow
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i>   New Invoice has been created
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i>  2 more items were added to the invoice 
                </a>
              </li>
              <!-- end notification -->
            </ul>
          </li>
        <li class="footer"><a href="{{url('/notifications')}}">View all</a></li>
        </ul>
      </li>
      
      
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="{{ asset('img/staff/'.$user->avatar) }}" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">{{$user->fname}} {{$user->lname}}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="{{ asset('img/staff/'.$user->avatar) }}" class="img-circle" alt="User Image">

            <p>
              {{$user->fname}} {{$user->lname}}
              <small>Member since {{$user->created_at}}</small>
            </p>
          </li>
          <li class="user-footer">
            <div>
              <a href="{!! url('/profile'); !!}" class="btn btn-primary btn-flat">Profile</a>
              <a href="{!! url('/changepassword'); !!}" class="btn btn-warning btn-flat">Change Password</a>
              <a class="btn btn-danger btn-flat" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
            
          </li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>
</header>