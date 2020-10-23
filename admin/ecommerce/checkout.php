<?php 
include("segment/header.php");
?>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Order Summary</h4>
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="../assets/images/products/img-1.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</p>
                                                </td>
                                                <td>2</td>
                                                <td>$198</td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-6.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0 product-name">Night Lamp</p>
                                                </td>
                                                <td>2</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-4.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0 product-name">Lava Purse</p>
                                                </td>
                                                <td>1</td>
                                                <td>$49</td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-7.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0 product-name">Important Chair</p>
                                                </td>
                                                <td>1</td>
                                                <td>$99</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Total :</h6></td>
                                                <td></td>
                                                <td class="text-dark"><strong>$496</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end re-table-->
                                <div class="total-payment">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="payment-title">Subtotal</td>
                                                <td>$496.00</td>
                                            </tr>
                                            <tr>
                                                <td class="payment-title">Shipping</td>
                                                <td>Shipping Charge : $5.00</td>
                                            </tr>
                                            <tr>
                                                <td class="payment-title">Promo Code</td>
                                                <td>-$10.00</td>
                                            </tr>
                                            <tr>
                                                <td class="payment-title">Total</td>
                                                <td class="text-dark"><strong>$491.00</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <!--end total-payment-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Delivery Address</h4>
                                <form class="mb-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" id="firstname" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name <small class="text-danger font-13">*</small></label>
                                                <input type="email" class="form-control" id="lastname" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Delivery Address <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" id="city" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label pt-0">State <small class="text-danger font-13">*</small></label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Gujarat</option>
                                                    <option>New york</option>
                                                    <option>California</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label pt-0">Country <small class="text-danger font-13">*</small></label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>India</option>
                                                    <option>USA</option>
                                                    <option>New Zealand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Zip code <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address <small class="text-danger font-13">*</small></label>
                                                <input type="email" class="form-control" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Mobile No <small class="text-danger font-13">*</small></label>
                                                <input type="text" class="form-control" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label class="custom-control-label" for="horizontalCheckbox">Confirm Shipping Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">Billing Details</h4>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card border mb-1 shadow-none">
                                                <div class="card-header custom-accordion" id="headingOne"><a href="#" class="text-dark d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="align-self-center">Credit Card</span> <img src="../assets/images/cards/card-2.png" alt="" height="30"></a></div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="Card_No">Card No :</label>
                                                                    <input type="text" class="form-control" id="Card_No" required="" placeholder="1234-5678-9123-4567">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_month" class="mr-2">Expiry Month</label>
                                                                    <select class="custom-select" id="select_month">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_year" class="mr-2">Expiry Year</label>
                                                                    <select class="custom-select" id="select_year">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">2020</option>
                                                                        <option value="2">2021</option>
                                                                        <option value="3">2022</option>
                                                                        <option value="4">2023</option>
                                                                        <option value="5">2024</option>
                                                                        <option value="6">2025</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="CVV_Code">Security Code</label>
                                                                    <input type="password" class="form-control" id="CVV_Code" required="" placeholder="Enter CVV">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end card-body-->
                                                </div>
                                                <!--end collapseOne-->
                                            </div>
                                            <!--end card-->
                                            <div class="card mb-1 border shadow-none">
                                                <div class="card-header" id="headingTwo"><a href="#" class="text-dark d-flex justify-content-between collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="align-self-center">Paypal</span> <img src="../assets/images/cards/paypal.png" alt="" height="30"></a></div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p class="mb-0 text-muted">Add Paypal form page</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-block btn-success">PLACE YOUR ORDER</button>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="review-box text-center align-item-center">
                                            <h1>4.8</h1>
                                            <h4 class="header-title">Overall Rating</h4>
                                            <ul class="list-inline mb-0 product-review">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                                <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                            </ul>
                                        </div>
                                        <ul class="list-unstyled mt-3">
                                            <li class="mb-2"><span class="text-info">5 Star</span> <small class="float-right text-muted ml-3 font-14">593</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2"><span class="text-info">4 Star</span> <small class="float-right text-muted ml-3 font-14">99</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2"><span class="text-info">3 Star</span> <small class="float-right text-muted ml-3 font-14">6</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2"><span class="text-info">2 Star</span> <small class="float-right text-muted ml-3 font-14">2</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li><span class="text-info">1 Star</span> <small class="float-right text-muted ml-3 font-14">0</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
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
    <!-- App js -->
    <script src="../assets/js/jquery.core.js"></script>
    <script src="../assets/js/app.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/metrica/metrica_simple/ecommerce/ecommerce-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 05:11:09 GMT -->

</html>