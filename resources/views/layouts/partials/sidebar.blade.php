<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                {{-- Admin --}}
                <li class="menu-title"><span data-key="t-menu">Admin</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/dashboard">
                        <i class="ri-home-line"></i> <span data-key="t-landing">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/pengurus">
                        <i class="ri-user-line"></i> <span data-key="t-landing">Pengurus</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="mdi mdi-layers-triple-outline"></i> <span data-key="t-advance-ui">Koperasi</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/market" class="nav-link" data-key="t-sweet-alerts">Market</a>
                            </li>
                            <li class="nav-item">
                                <a href="/simpan-pinjam" class="nav-link" data-key="t-nestable-list">Simpan Pinjam</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="mdi mdi-logout"></i> <span data-key="t-widgets">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
