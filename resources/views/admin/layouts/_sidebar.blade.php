<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'dashboard') @else collapsed @endif" href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'customers') @else collapsed @endif " href="{{ url('admin/customers') }}">
                <i class="bi bi-person"></i>
                <span>Customer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'medicines') @else collapsed @endif " href="{{ url('admin/medicines') }}">
                <i class="bi bi-shop"></i>
                <span>Medicines</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'medicines_stock') @else collapsed @endif " href="{{ url('admin/medicines_stock') }}">
                <i class="bi bi-archive"></i>
                <span>Medicines Stock</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'suppliers') @else collapsed @endif " href="{{ url('admin/suppliers') }}">
                <i class="bi bi-person"></i>
                <span>Suppliers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'invoices') @else collapsed @endif " href="{{ url('admin/invoices') }}">
                <i class="bi bi-journal-text"></i>
                <span>Invoices</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'purchases') @else collapsed @endif " href="{{ url('admin/purchases') }}">
                <i class="bi bi-currency-dollar"></i>
                <span>Purchases</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'settings') @else collapsed @endif " href="{{ url('admin/settings') }}">
                <i class="bi bi-gear-fill"></i>
                <span>Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'my_account') @else collapsed @endif " href="{{ url('admin/dashboard/my_account') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>My Account</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)== 'logout') @else collapsed @endif " href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
