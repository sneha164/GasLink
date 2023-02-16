@extends('layouts.app')

@section('content')
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
                            Transition
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-layer-group"></i>
                            Orders
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
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card blue ">
                            <div class="title">all projects</div>
                            <i class="fa-solid fa-arrow-up" style="font-size: 30px; margin-left: 180px;"></i>
                            <div class="value">89</div>
                            <div class="stat">
                                <b>13</b>
                                % increase
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card green">
                            <div class="title">team members</div>
                            <i class="fa-solid fa-arrow-up" style="font-size: 30px; margin-left: 180px;"></i>
                            <div class="value">5,990</div>
                            <div class="stat">
                                <b>4</b>
                                % increase
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card orange">
                            <div class="title">total budget</div>
                            <i class="fa-solid fa-arrow-down" style="font-size: 30px; margin-left: 180px;"></i>
                            <div class="value">$80,990</div>
                            <div class="stat">
                                <b>13</b>
                                % decrease
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card red">
                            <div class="title">new customers</div>
                            <i class="fa-solid fa-arrow-down" style="font-size: 30px; margin-left: 180px;"></i>
                            <div class="value">3</div>
                            <div class="stat">
                                <b>13</b>
                                % decrease
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects mb-4">
                <div class="projects-inner">
                    <header class="projects-header">
                        <div class="title">Ongoing Projects</div>
                        <div class="count">| 32 Projects</div>
                    </header>
                    <table class="projects-table">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Deadline</th>
                                <th>Leader + Team</th>
                                <th>Budget</th>
                                <th>Status</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <p>New Dashboard</p>
                                <p>Google</p>
                            </td>
                            <td>
                                <p>17th Oct, 15</p>
                                <p class="text-danger">Overdue</p>
                            </td>
                            <td class="member">
                                <figure>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png">
                                </figure>
                                <div class="member-info">
                                    <p>Myrtle Erickson</p>
                                    <p>UK Design Team</p>
                                </div>
                            </td>
                            <td>
                                <p>$4,670</p>
                                <p>Paid</p>
                            </td>
                            <td class="status">
                                <span class="status-text status-orange">In progress</span>
                            </td>
                            <td>
                                <form class="form" action="#" method="POST">
                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>Start project</option>
                                        <option>Send for QA</option>
                                        <option>Send invoice</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr class="danger-item">
                            <td>
                                <p>New Dashboard</p>
                                <p>Google</p>
                            </td>
                            <td>
                                <p>17th Oct, 15</p>
                                <p class="text-danger">Overdue</p>
                            </td>
                            <td class="member">
                                <figure>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png">
                                </figure>
                                <div class="member-info">
                                    <p>Myrtle Erickson</p>
                                    <p>UK Design Team</p>
                                </div>
                            </td>
                            <td>
                                <p>$4,670</p>
                                <p>Paid</p>
                            </td>
                            <td class="status">
                                <span class="status-text status-red">Blocked</span>
                            </td>
                            <td>
                                <form class="form" action="#" method="POST">
                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>Start project</option>
                                        <option>Send for QA</option>
                                        <option>Send invoice</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>New Dashboard</p>
                                <p>Google</p>
                            </td>
                            <td>
                                <p>17th Oct, 15</p>
                                <p class="text-danger">Overdue</p>
                            </td>
                            <td class="member">
                                <figure>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png">
                                </figure>
                                <div class="member-info">
                                    <p>Myrtle Erickson</p>
                                    <p>UK Design Team</p>
                                </div>
                            </td>
                            <td>
                                <p>$4,670</p>
                                <p>Paid</p>
                            </td>
                            <td class="status">
                                <span class="status-text status-orange">In progress</span>
                            </td>
                            <td>
                                <form class="form" action="#" method="POST">
                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>Start project</option>
                                        <option>Send for QA</option>
                                        <option>Send invoice</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>New Dashboard</p>
                                <p>Google</p>
                            </td>
                            <td>
                                <p>17th Oct, 15</p>
                                <p class="text-danger">Overdue</p>
                            </td>
                            <td class="member">
                                <figure>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png">
                                </figure>
                                <div class="member-info">
                                    <p>Myrtle Erickson</p>
                                    <p>UK Design Team</p>
                                </div>
                            </td>
                            <td>
                                <p>$4,670</p>
                                <p>Paid</p>
                            </td>
                            <td class="status">
                                <span class="status-text status-blue">Early stages</span>
                            </td>
                            <td>
                                <form class="form" action="#" method="POST">
                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>Start project</option>
                                        <option>Send for QA</option>
                                        <option>Send invoice</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>New Dashboard</p>
                                <p>Google</p>
                            </td>
                            <td>
                                <p>17th Oct, 15</p>
                                <p class="text-danger">Overdue</p>
                            </td>
                            <td class="member">
                                <figure>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_8.png">
                                </figure>
                                <div class="member-info">
                                    <p>Myrtle Erickson</p>
                                    <p>UK Design Team</p>
                                </div>
                            </td>
                            <td>
                                <p>$4,670</p>
                                <p>Paid</p>
                            </td>
                            <td class="status">
                                <span class="status-text status-orange">In progress</span>
                            </td>
                            <td>
                                <form class="form" action="#" method="POST">
                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>Start project</option>
                                        <option>Send for QA</option>
                                        <option>Send invoice</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </table>
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
        @endsection