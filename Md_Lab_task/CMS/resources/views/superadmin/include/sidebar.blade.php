<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{-- {{ route('admin.dashboard') }} --}}" class="brand-link">
    <img src="{{ asset('source/back') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Super Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('source/back/default.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon text-primary class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('superadmin.dashboard') }}" class="nav-link">
                <i class="nav-icon text-primary fas fa-th"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Sales.physicalStore') }}" class="nav-link">
                <i class="nav-icon text-primary fab fa-shopify"></i>
                <p>
                    Physical Store
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Sales.ecommercestore') }}" class="nav-link">
                <i class="nav-icon text-primary fab fa-shopify"></i>
                <p>
                    E-commerce Store
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Sales.mediastore') }}" class="nav-link">
                <i class="nav-icon text-primary fab fa-shopify"></i>
                <p>
                    Social Media Store
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('Sales.loggs') }}" class="nav-link">
                <i class="nav-icon text-primary fab fa-shopify"></i>
                <p>
                    View Sales Log
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('Sales.excel.upload')}}" class="nav-link">
                <i class="nav-icon text-primary fas fa-upload"></i>
                <p>
                    Upload Data
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                <i class="nav-icon text-primary fab fa-shopify"></i>
                <p>
                    Product Management
                </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
