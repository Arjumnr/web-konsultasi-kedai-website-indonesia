<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('admin') }}">Kedai-Website
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('admin') }}">St</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li class="@stack('dashboard')">
                <a class="nav-link" href="/">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="@stack('konsultasi')">
                <a class="nav-link" href="{{ url('konsultasi') }}">
                    <i class="fas fa-fire"></i>
                    <span>Data Konsultasi</span>
                </a>
            </li>
            @if (Auth::user()->role_id == '1')
                <li class="@stack('user')">
                    <a class="nav-link" href="{{ url('user') }}">
                        <i class="fas fa-fire"></i>
                        <span>Data User</span>
                    </a>
                </li>
            @endif

        </ul>
    </aside>
</div>
