<style>
    .avatar {
        border-radius: 50%;
        width: 150px !important;
        height: 150px !important;
        object-fit: cover;
    }
    .avatar2 {
        border-radius: 50%;
        width: 75px !important;
        height: 75px !important;
        object-fit: cover;
    }
</style>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="flex-direction: column;">
        <div class="info">
            <center>
                <a href="{{ route('admin.profile.show') }}"><img src="{{ Storage::url('foto/'.Auth::user()->foto) }}" alt="" class="avatar" /></a>
            </center>
            <!-- <a href="{{ route('admin.profile.show') }}" class="d-block">{{ Auth::user()->name }}</a> -->
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.pelanggar.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-pen"></i>
                    <p>
                        Data Pelanggar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.contact.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>
                        Hubungi Kami
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.profile.show') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profil Saya
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->