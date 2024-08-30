
<?php if($level == "admin"):?>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN TAU</div>
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/admin/menu'); ?>">
                    <i class="fas fa-fw fa-store-alt"></i>
                    <span>Menu</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/admin/users'); ?>">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>User List</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/'); ?>">
                    <i class="fas fa-fw fa-star-half-alt"></i>
                    <span>Halaman Utama</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        
        <?php elseif($level == "user"):?>
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">USER TAU</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/admin/orders'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Orders</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/'); ?>">
                    <i class="fas fa-fw fa-star-half-alt"></i>
                    <span>Halaman Utama</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <?php endif; ?>
