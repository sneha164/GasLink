<nav class="navbar navigation navbar-dark sticky-top flex-md-nowrap ">
    <a class="navbar-brand col-sm-3 col-md-2 mb-1" href="#">    
         <img src="{{asset('user/images/Logo.jpg')}}"
        alt="logo" ></a>
    <input
        class="form-control form-control-dark w-100"
        type="text"
        placeholder="Search"
        aria-label="Search"
    >
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>
<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::segment(1) == '' ? 'active' : ''}} " href="{{route('admin.dashboard')}}">
                    <i class="fa-solid fa-gauge"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::segment(1) == '' ? 'active' : ''}}" href="{{route('admin.companySetting.edit', 1)}}">
                    <i class="fa-solid fa-file-circle-check"></i>
                    Company Setting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.benefit.index')}}">
                    <i class="fa-solid fa-rocket"></i>
                    Benefits
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.choose.index')}}">
                    <i class="fa-solid fa-check"></i>
                    Choose
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product_category.index')}}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Product Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product.index')}}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Products
                </a>
            </li>
           
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('admin.images.index')}}">
                    <i class="fa-solid fa-user-group"></i>
                    Images
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-user-group"></i>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-note-sticky"></i>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-layer-group"></i>
                    Integrations
                </a>
            </li>
        </ul>
        <h4 class="sidebar-heading d-flex justify-content-between align-items-center pl-3 mt-4 mb-1 m-3 text-muted">
            <span>Saved Reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <i class="zmdi zmdi-plus-circle-o"></i>
            </a>
        </h4>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-note-sticky"></i>
                    Current Month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-note-sticky"></i>
                    Last Quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-note-sticky"></i>
                    Engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-note-sticky"></i>
                    Year-end Sale
                </a>
            </li>
        </ul>
    </div>
</nav>