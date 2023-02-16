@extends('admin.layouts.app')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
           
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 main ">
                <div class="card-list">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                            <div class="card blue">
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
                <div class="form-group" >
                    <label for="description">{{_('Description')}}</label>
                    <textarea class="form-control" name="description" rows="5" id="#editor">{{old('description')}}</textarea>
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
</section>

@endsection
