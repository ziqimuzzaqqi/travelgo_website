<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="#" alt="TGO" class="brand-image opacity-75 shadow">
            <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">TravelGO</span>
            <!--end::Brand Text--> </a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ route('dashboard') }}" class="nav-link active"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open"> <a href="{{ route('pengguna') }}" class="nav-link active"> <i
                            class="nav-icon bi bi-person-circle"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open"> <a href="{{ route('kendaraan') }}" class="nav-link active"> <i
                            class="nav-icon bi bi-car-front"></i>
                        <p>
                            Kendaraan
                        </p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
