<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light text-center">{{ Auth::user()->name }}</span>    </a>

    <div class="sidebar-scrollbar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </div>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Daftar Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('company.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Daftar Perusahaan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('loker.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Lowongan Pekerjaan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
