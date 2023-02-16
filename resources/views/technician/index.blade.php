@extends('layouts.app')

@section('content')
<section>
    <nav class="navbar navigation navbar-dark sticky-top flex-md-nowrap ">
        <img src="images/Logo.png" alt="gaslink">
        <input
            class="form-control mt-2 form-control-dark "
            type="text"
            placeholder="Search"
            aria-label="Search"
        >
        <div class="row flex-md-nowrap icon">
            <i class="fa-solid fa-message"></i>
            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-house-user"></i>
        </div>
        <ul class="navbar-nav px-3">

           
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active " href="#">
                                <i class="fa-solid fa-gauge"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-file-circle-check"></i>
                                Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Products
                            </a>
                        </li>
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
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-note-sticky"></i>
                                Last quarter
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
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main ">
                <div class="card-list">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-5">
                            <div class="card blue text-center">
                                <div class="title ">Hire till date</div>
                                
                                <div class="value">15</div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-5">
                            <div class="card green text-center">
                                <div class="title ">team members</div>
                                
                                <div class="value ">5</div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-5">
                            <div class="card orange text-center">
                                <div class="title">total request</div>
                                
                                <div class="value">10</div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 mb-5">
                            <div class="card red text-center">
                                <div class="title">new customers</div>
                            
                                <div class="value">3</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="chart-data">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="chart radar-chart dark">
                                <div class="actions">
                                    <button
                                        type="button"
                                        class="btn btn-link"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <h3 class="title">Household Expenditure</h3>
                                <p class="tagline">Yearly</p>
                                <canvas height="400" id="radarChartDark"></canvas>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="chart bar-chart light">
                                <div class="actions">
                                    <button
                                        type="button"
                                        class="btn btn-link"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <h3 class="title">Monthly revenue</h3>
                                <p class="tagline">2015 (in thousands US$)</p>
                                <canvas height="400" id="barChartHDark"></canvas>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="chart doughnut-chart dark">
                                <div class="actions">
                                    <button
                                        type="button"
                                        class="btn btn-link"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <h3 class="title">Exports of Goods</h3>
                                <p class="tagline">2015 (in billion US$)</p>
                                <canvas height="400" id="doughnutChartDark"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
@endsection