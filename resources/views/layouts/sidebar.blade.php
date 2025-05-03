{{-- <div class="border-end inter-500  position-fixed bg-white" style="width: 300px; height: 100vh; padding-top: 60px;">
    <div class=" py-3 px-0 ">
        <ul class="nav flex-column d-flex sidebar-hover">
            <p class="text-uppercase text-secondary ms-3 fw-bold mb-1" style="line-height: 14px; font-size: 12px;">Dashboard</p>
            <li class="nav-item lh-sm d-flex align-items-center ps-3 pe-3 {{Request::segment(1) == 'dashboard' ? 'active_menu' : ''}} ">
              <a class="nav-link d-flex text-secondary align-items-center "  href="/dashboard">
                <span class="material-symbols-outlined">
                    dashboard
                    </span>
                    <span class="ms-3">Dashboard</span>
                </a>
                <span class="badge bg-primary rounded-pill ms-auto">Pro</span>
            </li>
          </ul>
    </div>
    <div class=" py-2 px-0 ">
        <ul class="nav flex-column d-flex sidebar-hover">
            <p class="text-uppercase text-secondary ms-3 fw-bold mb-1" style="line-height: 14px; font-size: 12px;">Setting</p>
            <li class="nav-item lh-sm d-flex align-items-center ps-3 pe-3 {{Request::segment(2) == 'device' ? 'active_menu' : ''}} ">
              <a class="nav-link d-flex text-secondary align-items-center " href="{{route('device.index')}}">
                <span class="material-symbols-outlined">
                    devices
                    </span>
                    <span class="ms-3">Rental Devices</span>
                </a>
                <span class="badge bg-primary rounded-pill ms-auto">Pro</span>
            </li>
          </ul>
    </div>

</div>

 --}}


<div class="sidebar" id="sidebar">
    <ul class="nav flex-column px-0">
        <!-- Group: Dashboard -->
        <li class="nav-item mt-2">
            <small class="text-muted ps-3 text-uppercase">Dashboard</small>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center nav-tooltip" href="#"
                data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <div>
                    <span class="material-icons">dashboard</span>
                    <span class="text">Dashboard</span>
                </div>
                <span class="badge bg-primary">3</span>
            </a>
        </li>

        <!-- Group: Manajemen -->
        <li class="nav-item">
            <small class="text-muted ps-3 text-uppercase">Manajemen</small>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center nav-tooltip active" href="#"
                data-bs-toggle="tooltip" data-bs-placement="right" title="Manajemen">
                <div>
                    <span class="material-icons">folder</span>
                    <span class="text">Menu 1</span>
                </div>
                <span class="badge bg-secondary">5</span>
            </a>
        </li>

        <!-- Collapsible Menu with Submenu -->
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#submenu2" role="button" aria-expanded="false" aria-controls="submenu2">
                <div>
                    <span class="material-icons">settings</span>
                    <span class="text">Menu 2</span>
                </div>
                <span class="material-icons toggle-icon">expand_more</span>
            </a>
            <div class="collapse" id="submenu2">
                <ul class="nav flex-column ms-4 border-start border-2 border-secondary-subtle ps-2">
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#">Submenu 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fw-semibold" href="#">Submenu 2</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Group: Pengaturan -->
        <li class="nav-item my-0">
            <small class="text-muted ps-3 text-uppercase">Pengaturan</small>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center nav-tooltip" href="#"
                title="Pengaturan" data-bs-toggle="tooltip" data-bs-placement="right">
                <div>
                    <span class="material-icons">security</span>
                    <span class="text">Akun</span>
                </div>
                <span class="badge bg-danger">1</span>
            </a>
        </li>
    </ul>
</div>
