
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('company.index')}}" class="nav-link @if(request()->routeIs('company.index')) active @endif">
                        <i class="nav-icon far fa-id-card"></i>
                        <p>
                            Companies
                            <span class="badge badge-info right">@isset($companies){{$companies->total()}}@endisset</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('client.index')}}" class="nav-link @if(request()->routeIs('client.index')) active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Clients
                            <span class="badge badge-info right">@isset($clients){{$clients->total()}}@endisset</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
