<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('/img/logo.png') }}" alt="" width="40px" />
        </div>
        <div class="sidebar-brand-text mx-3">BPSDMP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title == 'dashboard') ? 'active' : " " ?>">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Users -->
    <li class="nav-item <?= ($title == 'users') ? 'active' : " " ?>">
        <a class="nav-link" href="/dashboard/users">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span></a>
    </li>

    <!-- Nav Item - Activity -->
    <li class="nav-item <?= ($title == 'activity') ? 'active' : " " ?>">
        <a class="nav-link" href="/dashboard/activity">
            <i class="fas fa-fw fa-table"></i>
            <span>Activity</span></a>
    </li>

    <!-- Nav Item - Testimoni -->
    <li class="nav-item <?= ($title == 'testimoni') ? 'active' : " " ?>">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Testimoni</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>