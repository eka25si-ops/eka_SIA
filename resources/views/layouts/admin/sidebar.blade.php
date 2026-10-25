<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <span class="badge bg-secondary p-2">⚡</span>
                </div>
                <div class="d-block">
                    <h2 class="h5 fw-bold mb-0">Volt Overview</h2>
                </div>
            </div>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">
            <!-- Active Menu Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="#" class="nav-link text-white-50">
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <!-- Active Menu Pelanggan -->
            <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <a href="{{ route('pelanggan.index') }}" class="nav-link text-white fw-bold">
                    <span class="sidebar-text">Pelanggan</span>
                </a>
            </li>
            <!-- Menu User -->
                 <li class="nav-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                 <a href="{{ route('user.index') }}" class="nav-link text-white fw-bold">
                  <span class="sidebar-text">User</span>
                    </a>
              </li>
            <li class="nav-item mt-4">
                <a href="#" class="nav-link text-white-50">
                    <span class="sidebar-text">Documentation <span class="badge bg-warning text-dark ms-2">v1.4</span></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
