<ul style="background: #003366;" class="navbar-nav sidebar  sidebar-dark accordion" id="accordionSidebar">
    <!-- style="background: #003366;" -->
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3"><?= $title; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $active1; ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= $active2; ?>">
        <a class="nav-link" href="<?= base_url('admin/kriteria'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kriteria</span>
        </a>
    </li>
    <li class="nav-item <?= $active4; ?>">
        <a class="nav-link" href="<?= base_url('admin/alternatif'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Alternatif</span>
        </a>
    </li>
    <li class="nav-item <?= $active3; ?>">
        <a class="nav-link" href="<?= base_url('admin/proses'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Proses Perhitungan</span>
        </a>
    </li>
    <li class="nav-item <?= $active5; ?>">
        <a class="nav-link" href="<?= base_url('admin/ubahPassword'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ubah Password</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand  navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                <!-- Nav Item - Alerts -->


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Zulfikri</span>
                        <img class="img-profile rounded-circle" src="<?= base_url("assets/img/"); ?>user.jpg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>