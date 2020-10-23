<?php
  include("segment/header.php");
 ?>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0">Revenue</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media my-2"><img src="../assets/images/widgets/dollar.png" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-24">$36154.00</h4>
                                                <p class="text-muted text-uppercase mb-0 font-12">Total Revenue Of This Month</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-8">
                                        <ul class="nav-border nav nav-pills" role="tablist">
                                            <li class="nav-item"><a class="nav-link font-weight-semibold" data-toggle="tab" href="#Today" role="tab">Today</a></li>
                                            <li class="nav-item"><a class="nav-link font-weight-semibold" data-toggle="tab" href="#This_Week" role="tab">This Week</a></li>
                                            <li class="nav-item"><a class="nav-link active font-weight-semibold" data-toggle="tab" href="#This_Month" role="tab">This Month</a></li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="tab-content">
                                    <div class="tab-pane pt-3" id="Today" role="tabpanel">
                                        <div id="eco_dash" class="apex-charts"></div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-pane pt-3" id="This_Week" role="tabpanel">
                                        <div id="Top_Week" class="apex-charts"></div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-pane active pt-3" id="This_Month" role="tabpanel">
                                        <canvas id="bar" class="drop-shadow w-100" height="290"></canvas>
                                    </div>
                                    <!-- Tab panes -->
                                </div>
                                <!-- Tab content -->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center text-center"><i data-feather="users" class="align-self-center icon-md icon-dual-pink"></i></div>
                                    <!--end col-->
                                    <div class="col-8">
                                        <h3 class="mt-0 mb-1 font-24 font-weight-semibold">24k</h3>
                                        <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">Visits</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end  card-->
                        <div class="card">
                            <div class="card-body justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center text-center"><i data-feather="shopping-cart" class="align-self-center icon-md icon-dual-secondary"></i></div>
                                    <!--end col-->
                                    <div class="col-8">
                                        <h3 class="mt-0 mb-1 font-weight-semibold">10k</h3>
                                        <p class="mb-0 font-12 text-muted text-uppercase font-weight-semibold-alt">New Orders</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end  card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center text-center"><i data-feather="repeat" class="align-self-center icon-md icon-dual-purple"></i></div>
                                    <!--end col-->
                                    <div class="col-8">
                                        <h3 class="mt-0 mb-1 font-weight-semibold">1.5k</h3>
                                        <p class="mb-0 font-12 text-uppercase font-weight-semibold-alt text-muted">Return Orders</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end  card-->
                        <div class="card">
                            <div class="card-body justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center text-center"><i data-feather="layers" class="align-self-center icon-md icon-dual-warning"></i></div>
                                    <!--end col-->
                                    <div class="col-8">
                                        <h3 class="mt-0 mb-1 font-weight-semibold">+22.98%</h3>
                                        <p class="mb-0 font-12 text-uppercase font-weight-semibold-alt text-muted">Growth</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end  card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 align-self-center">
                                        <div class="timer-data">
                                            <div class="icon-info mt-1 mb-4"><i class="mdi mdi-bullseye bg-soft-success"></i></div>
                                            <h3 class="mt-0 text-dark">45k <span class="font-14">of 70k</span></h3>
                                            <h4 class="mt-0 header-title font-14 text-truncate mb-1">Monthly Goal</h4>
                                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-5 align-self-center">
                                        <div class="mt-4"><span class="text-info">Complate</span> <small class="float-right text-muted ml-3 font-13">62%</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 62%; border-radius:5px;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 align-self-center">
                                        <div class="timer-data">
                                            <div class="icon-info mt-1 mb-4"><i class="mdi mdi-bullseye-arrow bg-soft-pink"></i></div>
                                            <h3 class="mt-0 text-dark">26m <span class="font-14">of 30m</span></h3>
                                            <h4 class="mt-0 header-title font-14 text-truncate mb-1">Yearly Goal</h4>
                                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-5 align-self-center">
                                        <div class="mt-4"><span class="text-info">Complate</span> <small class="float-right text-muted ml-3 font-13">81%</small>
                                            <div class="progress mt-2" style="height:5px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Monthly Trends</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="eco_categories" class="apex-charts mb-n3"></div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6 align-self-center">
                                        <ul class="list-unstyled">
                                            <li class="list-item mb-2 font-weight-semibold-alt"><i class="fas fa-play text-primary mr-2"></i>Electronic</li>
                                            <li class="list-item mb-2 font-weight-semibold-alt"><i class="fas fa-play text-success mr-2"></i>Footwear</li>
                                            <li class="list-item font-weight-semibold-alt"><i class="fas fa-play text-pink mr-2"></i>Clothes</li>
                                        </ul>
                                        <button type="button" class="btn btn-sm btn-outline-primary btn-round dual-btn-icon">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end  card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body"><a href="#" class="float-right"><i class="dripicons-download"></i></a>
                                <div class="media"><img src="https://mannatthemes.com/metrica/metrica_simple/assets/images/widgets/reports.svg" height="55" class="mr-4" alt="...">
                                    <div class="media-body align-self-center"><span class="badge badge-soft-primary mb-1 font-12">154 files</span>
                                        <h4 class="mt-0 title-text mb-0">Shared Files of This Month</h4></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-body dash-info-carousel">
                                <h4 class="mt-0 header-title mb-0">Top 3 Best Saler</h4>
                                <div id="carousel_1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <div class="text-center"><img src="../assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-lg mt-3">
                                                <h4 class="mb-0 font-weight-semibold text-dark font-16">Matt Rosales</h4>
                                                <p class="text-muted text-uppercase mb-0 font-12">Tokyo Japan</p>
                                            </div>
                                            <hr class="hr-dashed">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h4 class="font-18 mb-0">$51,541.00</h4>
                                                    <p class="text-muted mb-0 font-12">Total Revenue Of This Month</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <button type="button" class="btn btn-sn btn-circle-sm btn-light"><i class="far fa-envelope"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end carousel-item-->
                                        <div class="carousel-item active">
                                            <div class="text-center"><img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-lg mt-3">
                                                <h4 class="mb-0 font-weight-semibold text-dark font-16">Dorothy Key</h4>
                                                <p class="text-muted text-uppercase mb-0 font-12">New York USA</p>
                                            </div>
                                            <hr class="hr-dashed">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h4 class="font-18 mb-0">$62,320.00</h4>
                                                    <p class="text-muted mb-0 font-12">Total Revenue Of This Month</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <button type="button" class="btn btn-sn btn-circle-sm btn-light"><i class="far fa-envelope"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end carousel-item-->
                                        <div class="carousel-item">
                                            <div class="text-center"><img src="../assets/images/users/user-1.jpg" alt="" class="rounded-circle thumb-lg mt-3">
                                                <h4 class="mb-0 font-weight-semibold text-dark font-16">Donald Gardner</h4>
                                                <p class="text-muted text-uppercase mb-0 font-12">Berlin, Germany</p>
                                            </div>
                                            <hr class="hr-dashed">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h4 class="font-18 mb-0">$45,840.00</h4>
                                                    <p class="text-muted mb-0 font-12">Total Revenue Of This Month</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <button type="button" class="btn btn-sn btn-circle-sm btn-light"><i class="far fa-envelope"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end carousel-item-->
                                    </div>
                                    <!--end carousel-inner--><a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
                                <!--end carousel-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-4">Top Sales In USA</h4>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div id="usa" class="drop-shadow-map" style="height: 305px"></div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-5 align-self-center">
                                        <div class=""><span class="text-dark">Texas</span> <small class="float-right text-muted ml-3 font-13">81%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3"><span class="text-dark">Washington</span> <small class="float-right text-muted ml-3 font-13">68%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%; border-radius:5px;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3"><span class="text-dark">Wyoming</span> <small class="float-right text-muted ml-3 font-13">48%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 48%; border-radius:5px;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3"><span class="text-dark">Virginia</span> <small class="float-right text-muted ml-3 font-13">32%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 32%; border-radius:5px;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body order-list">
                                <h4 class="header-title mt-0 mb-3">Order List</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Product</th>
                                                <th class="border-top-0">Pro Name</th>
                                                <th class="border-top-0">Country</th>
                                                <th class="border-top-0">Order Date/Time</th>
                                                <th class="border-top-0">Pcs.</th>
                                                <th class="border-top-0">Amount ($)</th>
                                                <th class="border-top-0">Status</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="" src="../assets/images/products/img-1.png" alt="user"></td>
                                                <td>Shoe</td>
                                                <td><img src="../assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle"></td>
                                                <td>3/03/2019 4:29 PM</td>
                                                <td>200</td>
                                                <td>$750</td>
                                                <td><span class="badge badge-md badge-boxed badge-soft-success">Shipped</span></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img class="" src="../assets/images/products/img-2.png" alt="user"></td>
                                                <td>Wall Watch</td>
                                                <td><img src="../assets/images/flags/french_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle"></td>
                                                <td>13/03/2019 1:09 PM</td>
                                                <td>180</td>
                                                <td>$970</td>
                                                <td><span class="badge badge-md badge-boxed badge-soft-danger">Delivered</span></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img class="" src="../assets/images/products/img-3.png" alt="user"></td>
                                                <td>Showpiece</td>
                                                <td><img src="../assets/images/flags/spain_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle"></td>
                                                <td>22/03/2019 12:09 PM</td>
                                                <td>30</td>
                                                <td>$2800</td>
                                                <td><span class="badge badge-md badge-boxed badge-soft-warning">Pending</span></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img class="" src="../assets/images/products/img-4.png" alt="user"></td>
                                                <td>Watch</td>
                                                <td><img src="../assets/images/flags/russia_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle"></td>
                                                <td>14/03/2019 8:27 PM</td>
                                                <td>100</td>
                                                <td>$520</td>
                                                <td><span class="badge badge-md badge-boxed badge-soft-success">Shipped</span></td>
                                            </tr>
                                            <!--end tr-->
                                            <tr>
                                                <td><img class="" src="../assets/images/products/img-5.png" alt="user"></td>
                                                <td>Beg</td>
                                                <td><img src="../assets/images/flags/italy_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle"></td>
                                                <td>18/03/2019 5:09 PM</td>
                                                <td>100</td>
                                                <td>$1150</td>
                                                <td><span class="badge badge-md badge-boxed badge-soft-warning">Pending</span></td>
                                            </tr>
                                            <!--end tr-->
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <!--end /div-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!-- container -->
            <!--  Modal content for the above example -->
            <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                            <button type="button" class="btn btn-sm btn-soft-primary btn-circle-sm btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                        </div>
                        <div class="modal-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="ActivityTab" role="tabpanel">
                                    <div class="bg-light mx-n3"><img src="../assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180"></div>
                                    <div class="slimscroll scroll-rightbar">
                                        <div class="activity">
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">10 Min ago</small> <a href="#" class="m-0 w-75">Task finished</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-timer-off bg-soft-pink"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">50 Min ago</small> <a href="#" class="m-0 w-75">Task Overdue</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p><span class="badge badge-soft-secondary">Design</span> <span class="badge badge-soft-secondary">HTML</span></div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-alert-decagram bg-soft-purple"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">10 hours ago</small> <a href="#" class="m-0 w-75">New Task</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-clipboard-alert bg-soft-warning"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">yesterday</small> <a href="#" class="m-0 w-75">New Comment</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-clipboard-alert bg-soft-secondary"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">01 feb 2020</small> <a href="#" class="m-0 w-75">New Lead Meting</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                </div>
                                            </div>
                                            <div class="activity-info">
                                                <div class="icon-info-activity"><i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i></div>
                                                <div class="activity-info-text mb-2">
                                                    <div class="mb-1"><small class="text-muted d-block mb-1">26 jan 2020</small> <a href="#" class="m-0 w-75">Task finished</a></div>
                                                    <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end activity-->
                                    </div>
                                    <!--end activity-scroll-->
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="TasksTab" role="tabpanel">
                                    <div class="m-0">
                                        <div id="rightbar_chart" class="apex-charts"></div>
                                    </div>
                                    <div class="text-center mt-n2 mb-2">
                                        <button type="button" class="btn btn-soft-primary">Create Project</button>
                                        <button type="button" class="btn btn-soft-primary">Create Task</button>
                                    </div>
                                    <div class="slimscroll scroll-rightbar">
                                        <div class="p-2">
                                            <div class="media mb-3"><img src="../assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
                                                <div class="media-body align-self-center text-truncate ml-3">
                                                    <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                                                    <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4></div>
                                                <!--end media-body-->
                                            </div><span><b>Deadline:</b> 02 June 2020</span>
                                            <a href="javascript: void(0);" class="d-block mt-3">
                                                <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                                                <div class="progress mt-2" style="height: 4px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="hr-dashed">
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="SettingsTab" role="tabpanel">
                                    <div class="p-1 bg-light mx-n3">
                                        <h6 class="px-3">Account Settings</h6></div>
                                    <div class="p-2 text-left mt-3">
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                                            <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch2">
                                            <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                                            <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                                        </div>
                                    </div>
                                    <div class="p-1 bg-light mx-n3">
                                        <h6 class="px-3">General Settings</h6></div>
                                    <div class="p-2 text-left mt-3">
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                                            <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch5">
                                            <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-primary mb-3">
                                            <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                                            <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                                        </div>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                            </div>
                            <!--end tab-content-->
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <footer class="footer text-center text-sm-left">&copy; 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span></footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metismenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../plugins/chartjs/chart.min.js"></script>
    <script src="../plugins/chartjs/roundedBar.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../assets/pages/jquery.ecommerce_dashboard.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/metrica/metrica_simple/ecommerce/ecommerce-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 05:03:07 GMT -->

</html>