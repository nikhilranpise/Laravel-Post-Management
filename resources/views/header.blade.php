<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Admin</title>
    <!-- Vendors Style-->
    <link href="{{asset('Content/css/vendors_css.css')}}" rel="stylesheet" />
    <!-- Style-->
    <link href="{{asset('Content/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('Content/css/skin_color.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <i class="fas fa-bars"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </a>
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg" style="height:50px;width:150px">
                        Posts management
                    </div>
                </a>
            </div>
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <h3 style="letter-spacing:initial;font-weight:bold">
                        </h3>
                    </li>
                </ul>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <i class="fas fa-bars"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="fas fa-expand-arrows-alt"></i><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <!-- <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li> -->
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="fas fa-user"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                      <!-- sidebar menu-->
                        <ul class="sidebar-menu active menu-open" data-widget="tree">
                            <li>
                                <a href="{{ url('/posts') }}">
                                    <i class="fas fa-th-large"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Posts</span>
                                </a>
                            </li>
                            @php
                                $adminData = Session::get('adminData');
                                $role = $adminData->role; 
                            @endphp
                            @if( $role == '1')
                            <li>
                                <a href="{{ url('/admins') }}">
                                    <i class="fas fa-user"><span class="path1"></span><span class="path2"></span></i>
                                    <span>Super Admin</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
        </aside>