<?php 
 include("segment/header.php");
?>
  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0">Shopping Cart</h4>
                                <p class="mb-4 text-muted">Metrica morden shopping cart.</p>
                                <div class="table-responsive shopping-cart">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="../assets/images/products/img-1.png" alt="" height="40" class="mr-2">
                                                    <p class="d-inline-block align-middle mb-0"><a href="#" class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</a>
                                                        <br><span class="text-muted font-13">size-08 (Model 2019)</span></p>
                                                </td>
                                                <td>$99</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="2" id="example-number-input1">
                                                </td>
                                                <td>$198</td>
                                                <td><a href="#" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-4.png" alt="" height="40" class="mr-2">
                                                    <p class="d-inline-block align-middle mb-0"><a href="#" class="d-inline-block align-middle mb-0 product-name">Red Morden Chair</a>
                                                        <br><span class="text-muted font-13">size-06 (Model 2019)</span></p>
                                                </td>
                                                <td>$75</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="2" id="example-number-input2">
                                                </td>
                                                <td>$150</td>
                                                <td><a href="#" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-6.png" alt="" height="40" class="mr-2">
                                                    <p class="d-inline-block align-middle mb-0"><a href="#" class="d-inline-block align-middle mb-0 product-name">Lava Purse</a>
                                                        <br><span class="text-muted font-13">Pure Lether 100%(Model 2019)</span></p>
                                                </td>
                                                <td>$49</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="1" id="example-number-input3">
                                                </td>
                                                <td>$49</td>
                                                <td><a href="#" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/products/img-7.png" alt="" height="40" class="mr-2">
                                                    <p class="d-inline-block align-middle mb-0"><a href="#" class="d-inline-block align-middle mb-0 product-name">Important Chair</a>
                                                        <br><span class="text-muted font-13">size-07 (Model 2019)</span></p>
                                                </td>
                                                <td>$99</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="1" id="example-number-input4">
                                                </td>
                                                <td>$99</td>
                                                <td><a href="#" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 align-self-center">
                                        <div class="text-center cart-promo"><img src="../assets/images/logo-sm.png" alt="" height="50" class="mb-2">
                                            <h4 class="">Have a promo code ?</h4>
                                            <p class="font-13">If you have a promocode, You can take discount !</p>
                                            <div class="input-group w-75 mx-auto">
                                                <input type="text" class="form-control form-control-sm" placeholder="Use Promocode" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-6"><a href="#" class="text-info"><i class="fas fa-long-arrow-alt-left mr-1"></i> Continue Shopping</a></div>
                                                <div class="col-6 text-right"><a href="https://mannatthemes.com/metrica/metrica_simple/app-ecommerce-checkout.html" class="text-info">Checkout <i class="fas fa-long-arrow-alt-right ml-1"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="total-payment p-3">
                                            <h4 class="header-title">Total Payment</h4>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="payment-title">Subtotal</td>
                                                        <td>$496.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="payment-title">Shipping</td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0">
                                                                <li>
                                                                    <div class="radio radio-info">
                                                                        <input type="radio" name="radio" id="radio_1" value="option_1" checked="checked">
                                                                        <label for="radio_1">Shipping Charge : $5.00</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="radio radio-info">
                                                                        <input type="radio" name="radio" id="radio_2" value="option_2">
                                                                        <label for="radio_2">Express Shipping Charge : $10.00</label>
                                                                    </div>
                                                                </li>
                                                                <li><a href="#" class="text-dark"><strong>Change Address</strong></a></li>
                                                            </ul>
                                                        </td>
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
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end card-body-->
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
    <script src="../assets/js/app.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/metrica/metrica_simple/ecommerce/ecommerce-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 May 2020 05:11:08 GMT -->

</html>