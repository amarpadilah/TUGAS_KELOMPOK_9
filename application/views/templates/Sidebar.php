<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-2">MUSLIM WEAR</div>
                <div class="sidebar-brand-icon rotate-n">
                <i class="fas fa-store-alt"></i>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-star-and-crescent"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                kategori
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/fashion_pria') ?>">
                <i class="fas fa-male"></i>
                    <span>Fashion Pria</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/fashion_wanita') ?>">
                <i class="fas fa-female"></i>
                    <span>Fashion Wanita</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/koleksi_dekorasi') ?>">
                <i class="fas fa-magic"></i>
                    <span>Koleksi & Dekorasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">

                            
                        <!-- Nav Item - Messages -->
                                    <!-- <li class="nav-item dropdown no-arrow mx-3">
                                        <a class="nav-link " href="#" id="messagesDropdown" role="button"
                                            data-toggle="" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-envelope fa-fw"></i>-->
                        <!-- Counter - Messages -->
                                    <!--        <span class="badge badge-primary badge-counter"></span>
                                        </a>
                                    </li> -->

                            <!-- Sidebar Message -->

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = '<I class="fas fa-shopping-cart"></I> : '.$this->cart->total_items(). ' items' ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if($this->session->userdata('username')) { ?>
                                    <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                    <li class="ml-2"><?php echo anchor('auth/logout', 'logout')?></li>
                                    <?php }else{?>
                                        <li><?php echo anchor('auth/login', 'login') ?></li>
                                    <?php } ?>

                            </ul>

                        </div>

                        

                    </ul>

                </nav>
                <!-- End of Topbar -->