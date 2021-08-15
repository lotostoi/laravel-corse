<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('main-admin') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Main</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#news-basic" aria-expanded="false"
                aria-controls="news-basic">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">News</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="news-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin-news') }}">News</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin-categories') }}">Category</a></li>
                </ul>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users-basic" aria-expanded="false"
                aria-controls="users-basic">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users') }}">Users</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Roles</a></li>
                </ul>
        </li>

        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="sidebar-profile-img">
                                <img src="{{ asset('assets/img/faces/face28.png') }}" alt="image">
                            </div>
                            <div class="sidebar-profile-text">
                                <p class="mb-1">Henry Klein</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge badge-danger">3</div>
                </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>
