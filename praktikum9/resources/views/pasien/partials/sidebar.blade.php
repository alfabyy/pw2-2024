<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Puskesmas YOLO!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/bg_kucing.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Table Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pasien/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokter/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="periksa/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pesan/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Pesan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kelurahan/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="unit_kerja/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Unit Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" id="logoutButton" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Logout</p> </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault(); 

        Swal.fire({
            title: 'Konfirmasi Logout',
            text: 'Anda yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php';
            }
        });
    });
</script>






