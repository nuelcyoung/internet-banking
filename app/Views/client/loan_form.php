<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <?= $page_title ?>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="text-muted mb-3 lh-1 d-block text-truncate">Account Balance</h5>
                                <h4 class="mb-3">
                                    $<span class=""><?= number_format($details->balance) ?></span>
                                </h4>
                            </div>

                            <div class="col-4">
                                <div id="mini-chart1" data-colors='["#f2132b"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h5 class="text-muted mb-3 lh-1 d-block text-truncate">Account Details</h5>

                                <div><span>Account Status</span><span> </span></div>
                                <div><span>Account Name:</span> <span> <?= $details->firstname . ' ' . $details->lastname ?></span></div>
                                <div><span>Account Number:</span> <span> <?= $details->account_no ?></span></div>
                                <div><span>Account Type:</span> <span> <?= $details->account_type ?></span></div>

                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h5 class="text-muted mb-3 lh-1 d-block text-truncate">Personal Details</h5>
                            </div>

                        </div>
                        <div class="text-nowrap">
                            <div><span>First Name:</span> <span class="font-size-14"> <?= $details->firstname ?></span></div>
                            <div><span>Last Name:</span> <span class="font-size-14"> <?= $details->lastname ?></span></div>
                            <div><span>Sex:</span> <span class="font-size-14"> <?= $details->gender ?></span></div>
                            <div><span>Country:</span> <span class="font-size-14"> <?= $details->country ?></span></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted mb-3 lh-1 d-block text-truncate">Debit Cards</h5>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="12.57">0</span>%
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart4" data-colors='["#f2132b"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+2.95%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Quick Transfer</h4>

                    </div><!-- end card header -->

                    <div class="card-body">
                        <div>
                            <div class="form-group mb-3">
                                <label>Preferred method :</label>
                                <select class="form-select">
                                    <option>Direct Bank Payment</option>
                                    <option>Credit / Debit Card</option>
                                    <option>Paypal</option>
                                    <option>Payoneer</option>
                                    <option>Stripe</option>
                                </select>
                            </div>

                            <div>
                                <label>Add Amount :</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Amount</label>
                                    <select class="form-select" style="max-width: 90px;">
                                        <option value="BT" selected>BTC</option>
                                        <option value="ET">ETH</option>
                                        <option value="LT">LTC</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="0.00121255">
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text">Price</label>
                                    <input type="text" class="form-control" placeholder="$58,245">
                                    <label class="input-group-text">$</label>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="input-group-text">Total</label>
                                    <input type="text" class="form-control" placeholder="$36,854.25">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn btn-success w-md">Buy Coin</button>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                                All
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                                Deposit
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                                Transfer
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end nav tabs -->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-success">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table align-middle table-nowrap table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="font-size-22 text-danger">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="text-end">
                                                                <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                <p class="text-muted mb-0 font-size-12">Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <!-- end col -->

                    <div class="col-xl-4">
                        <!-- card -->
                        <div class="card bg-primary text-white shadow-primary card-h-100">
                            <!-- card body -->
                            <div class="card-body p-0">
                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                        <i class="mdi mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Bitcoin</b> News</h4>
                                                <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                    equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                        <i class="mdi mdi-ethereum"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>ETH</b> News</h4>
                                                <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                    equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                        <div class="carousel-item">
                                            <div class="text-center p-4">
                                                <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                <div class="avatar-md m-auto">
                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                        <i class="mdi mdi-litecoin"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Litecoin</b> News</h4>
                                                <p class="text-white-50 font-size-13"> Bitcoin prices fell sharply amid the global sell-off in
                                                    equities. Negative news over the past week has dampened sentiment for bitcoin. </p>
                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- end carousel-item -->
                                    </div>
                                    <!-- end carousel-inner -->

                                    <div class="carousel-indicators carousel-indicators-rounded">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <!-- end carousel-indicators -->
                                </div>
                                <!-- end carousel -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-xl-12">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Market Overview</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm active">
                                        1Y
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div>
                                    <div id="market-overview" data-colors='["#f2132b", "#34c38f"]' class="apex-charts"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="p-4">
                                    <div class="mt-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    1
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinmarketcap</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+2.5%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    2
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Binance</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+8.3%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    3
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Coinbase</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-3.6%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    4
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Yobit</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+7.1%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    5
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Bitfinex</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.9%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="" class="btn btn-primary w-100">See All Balances <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->
        </div>
        <!-- end row-->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?= $this->endSection() ?>