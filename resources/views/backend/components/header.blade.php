<style>
    /*i {color: #91d1ff;}*/
    .main-sidebar{

    }
</style>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                Logout
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->


    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link" style="height: 65px;">
        <img src="{{asset('Backend/assets/images/avatar/user.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style=" max-height: 45px; width: 45px;margin-top: -5px;margin-left: 39%;">
        <span class="brand-text font-weight-light" style="max-height: 45px;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 0px solid #4f5962;">
            <div class="image">
                <img src="{{asset('Backend/Assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('product.index')}}" class="nav-link {{ Route::currentRouteNamed('product.index') || Route::currentRouteNamed('product.edit') || Route::currentRouteNamed('product.create') ? 'active' : '' }}" style="padding-left: 35px;">
                        <i class="nav-icon fad fa-project-diagram"></i>
                        <p>Product</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user-index')}}" class="nav-link {{ Route::currentRouteNamed('user-index') ? 'active' : '' }}" style="padding-left: 35px;">
                        <i class="nav-icon fad fa-project-diagram"></i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
