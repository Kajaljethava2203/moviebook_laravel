<aside class="main-sidebar sidebar-dark-primary elevation-4 " id="offcanvas">

        <span class="brand-text font-weight-light" style="color:white; font-size: 25px;font-weight: bold; margin: 10px;">MovieWorld</span>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
{{--                <img src="dist/img/shruti.jpg" class="img-circle elevation-2"  alt="User Image">--}}
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-weight: bold;font-size: 10px">Kajal Jethava</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="header" style="font-size: 20px;color: #cccccc;">DASHBOARD</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('movies-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d;font-size: 22px">Movie Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('actor-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d;font-size: 22px">Actor Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('theatres-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d;font-size: 22px">Theater Details</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>
