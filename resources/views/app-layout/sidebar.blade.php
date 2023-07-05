<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <img src="{{ asset('AdminLTE/dist') }}/img/TNIAULogo.png" alt="Lambang_TNI_AU"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TAKAH MUSEUM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE/dist') }}/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">Revanza Marsapala</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MAIN MENU</li>
                <li class="nav-item {{ request()->routeIs('suratmasuk') ? 'menu-open' : '' }}">
                    <a href="{{ route('suratmasuk') }}" class="nav-link">
                        <i class="nav-icon far fa-folder-open"></i>
                        <p>
                            Surat Masuk
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('ditakahkan') ? 'menu-open' : '' }}">
                    <a href="{{ route('ditakahkan') }}" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Ditakahkan
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('disposisi') ? 'menu-open' : '' }}">
                    <a href="{{ route('disposisi') }}" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Disposisi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
