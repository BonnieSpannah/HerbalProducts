<ul class="nav">
    <li class="nav-item @if ($menu == 'home') active @endif">
        <a class="nav-link" href="/">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    @if(auth()->user()->role == 'Super Admin')
    <li class="nav-item nav-category">User Management</li>
    <li class="nav-item @if ($menu == 'users') active @endif">
        <a class="nav-link" data-bs-toggle="collapse" href="#user-management" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-account-multiple-outline"></i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="user-management">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">All</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}">New</a></li>
            </ul>
        </div>
    </li>
    @endif

    <li class="nav-item nav-category">Product Management</li>
    <li class="nav-item @if ($menu == 'products') active @endif">
        <a class="nav-link" data-bs-toggle="collapse" href="#product-management" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-biohazard"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="product-management">
            <ul class="nav flex-column sub-menu">
                @if(auth()->user()->role == 'Super Admin')
                    <li class="nav-item"> <a class="nav-link" href="">All</a></li>
                @endif
                @if(in_array(auth()->user()->role, ['Super Admin', 'Human Admin']))
                    <li class="nav-item"> <a class="nav-link" href="">Human</a></li>
                @endif
                @if(in_array(auth()->user()->role, ['Super Admin', 'Animal Admin']))
                    <li class="nav-item"> <a class="nav-link" href="">Animal</a></li>
                @endif
            </ul>
        </div>
    </li>
</ul>
