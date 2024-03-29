<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title text-gray-1 text-space-2">Menu</li>

        <li class="sidebar-item {{ is_page('dashboard') ? 'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ is_page('webinar') ? 'active' : '' }} ">
            <a href="{{ url('admin/webinar') }}" class="sidebar-link">
                <i class="bi bi-camera-video-fill"></i>
                <span>Webinar</span>
            </a>
        </li>
        <li class="sidebar-item {{ is_page('list-class') ? 'active' : '' }} ">
            <a href="{{ url('admin/list-class') }}" class="sidebar-link">
                <i class="bi bi-collection-play-fill"></i>
                <span>Daftar Kelas</span>
            </a>
        </li>
        <li class="sidebar-item {{ is_page('category') ? 'active' : '' }} ">
            <a href="{{ url('admin/category') }}" class="sidebar-link">
                <i class="bi bi-bookmarks-fill"></i>
                <span> Kategori Kelas</span>
            </a>
        </li>
        <li class="sidebar-item {{ is_page('comunity') ? 'active' : '' }} ">
            <a href="{{ url('admin/comunity') }}" class="sidebar-link">
                <i class="bi bi-chat-fill"></i>
                <span> Komunitas</span>
            </a>
        </li>

        {{-- <li class="sidebar-item has-sub {{ is_page('example') ? 'active' : '' }}">
            <a href="#" class="sidebar-link">
                <i class="bi bi-menu-app-fill"></i>
                <span>Edukraf Menu</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item ">
                    <a href="{{ url('admin/webinar') }}" class="sidebar-link">
                        Webinar
                    </a>
                </li>
                <li class="submenu-item">
                    <a href="{{ url('admin/category') }}">Kategori Kelas</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ url('admin/list-class') }}">Daftar Kelas</a>
                </li>
            </ul>
        </li> --}}

        <li class="sidebar-item {{ is_page('user') ? 'active' : '' }}">
            <a href="{{ url('admin/user') }}" class="sidebar-link">
                <i class="bi bi-person-fill"></i>
                <span>Pengguna</span>
            </a>
        </li>

        <hr class="mt-5">

        <div>
            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
            <small class="text-gray-1 text-space-2">{{ Str::ucfirst(strtolower(Auth::user()->access_type)) }}</small>
        </div>

        <li class="sidebar-item">
            <a href="{{ url('auth/logout') }}" class="sidebar-link bg-danger-soft"
                onclick="return confirm('Apakah kamu yakin?')">
                <i class="bi bi-arrow-bar-left"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
