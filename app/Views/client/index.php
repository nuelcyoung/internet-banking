<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card border-dark text-light" style="background: #f2132b;">
                <div class="card-body">
                    <h4 class="mb-4 text-light"><script>
                            var d = new Date();
                            var time = d.getHours();
                            if (time < 12) {
                                document.write("<b> <b>Good morning,</b>");
                            }
                            if (time >= 12 && time<=17) {
                                document.write("<b>Good afternoon,</b>");
                            }
                            if (time >= 17 && time <=24) {
                                document.write("<b>Good evening,</b>");
                            }
                        </script> <b><?= $details->firstname  ?></b></h4>
                    <!-- <p class="card-text">
                        
                    </p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- start page title -->
    <div class="col-12">
    <div class="row">
        <div class="col-xl-4 col-md-4 mx-auto d-flex flex-wrap justify-content-center mb-1">
            <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Account Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?php if ($details->status == 'active') : ?>
                        <p>Your account is Active</p>
                    <?php else : ?>
                        <p>Your account is Active</p>
                    <?php endif ?>
                </div>
            </div>
            
            <!--end toast-->
        </div>
        <?php if(isset($pending)):?>
        <div class="col-xl-4 col-md-4 mx-auto d-flex flex-wrap justify-content-center mb-1">
            <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Pending Transaction</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <div class="row"><h6>You have a pending Transaction that requires <?=strtoupper($pending->status)?></h6> <a class="col-xs-2 btn btn-primary" href="<?=site_url('transfer/'.$pending->status)?>">Click Here</a></div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
    </div>
    

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h5 class="text-muted mb-1 lh-1 d-block">Account Summary Total</h5>
                            <h4 class="mb-0">
                                <?=$details->currency_symbol?> <span class=""><?= number_format($totalbal->balance) ?></span>
                            </h4>
                        </div>

                        <div class="col-2">
                            <div id="mini-chart1" data-colors='["#f2132b"]' class="apex-charts mb-0"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="ms-1 text-muted font-size-13">Available balance</span>
                    </div>
                    <?php foreach ($allaccounts as $item) : ?>
                        <div class="row align-items-center mb-1">
                        <div class="col-12">
                        <?php if($item->account_type=='savings'):?><h5 class="text-muted mb-1 lh-1 d-block">Savings Account</h5>
                            <?php else:?>
                                <h5 class="text-muted mb-1 lh-1 d-block">Checking Account</h5>
                                <?php endif?>
                            <h4 class="mb-0">
                            <?=$details->currency_symbol?> <span class=""><?= number_format($item->balance) ?></span>
                            </h4>
                        </div>

                    </div>
                    <?php endforeach ?>
                    
                    
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
                            <div><span>Account Name:</span> <span> <?= $account->account_name?></span></div>
                            <div><span>Account Number:</span> <span>
                                    <h6><?= $account->account_no ?></h6>
                                </span></div>
                            <div><span>Account Type:</span> <span> <?= $account->account_type ?></span></div>

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
                        <div class="col-10">
                            <h5 class="text-muted mb-3 lh-1 d-block ">Debit Cards</h5>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="<?= $cards ?>">0</span>
                            </h4>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Quick Deposit</h4>

                    </div><!-- end card header -->

                    <div class="card-body">
                        <form method="post" action="<?= site_url('deposit/payment') ?>">
                            <div>
                                <div class="form-group mb-3">
                                    <label>Preferred method :</label>
                                    <select name="method" class="form-select">
                                        <option>Direct Bank Payment</option>
                                        <option>Credit / Debit Card</option>
                                        <option>Paypal</option>
                                        <option>Western Union</option>
                                    </select>
                                </div>

                                <div>
                                    <label>Add Amount :</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Amount</label>
                                        <input type="text" name="amount" class="form-control" placeholder="<?= $site_setting->currency_symbol ?> 1000">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success w-md">Continue</button>
                                </div>
                            </div>
                        </form>
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
                                                    <?php if (!isset($trx_histories)) : ?>
                                                        <div class="lead text-center">No transaction yet</div>
                                                    <?php else : ?>
                                                        <?php foreach ($trx_histories as $item) : ?>
                                                            <tr>
                                                                <?php if ($item->tx_type == 'credit') : ?>
                                                                    <td>
                                                                        <div class="font-size-22 text-success">
                                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                                        </div>
                                                                    </td>
                                                                <?php else : ?>

                                                                    <td>
                                                                        <div class="font-size-22 text-danger">
                                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1"><?= $item->to_accno ?></h5>
                                                                        <p class="text-muted mb-0 font-size-12"><?= $item->created_at ?></p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0"><?= $item->bname ?></h5>
                                                                        <p class="text-muted mb-0 font-size-12">Reciever name</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 text-muted mb-0"><?= $site_setting->currency_symbol . ' ' . number_format($item->amount, '0.00') ?></h5>
                                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
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
                                        <?php $i = 0;
                                        foreach ($news->articles as $item) : ?>
                                            <?php if ($i++ == '0') : ?>
                                                <div class="carousel-item active">
                                                    <div class="text-center p-4">
                                                        <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <img src="<?= $item->image ?>" class="avatar-title rounded-circle bg-soft-light">

                                                        </div>
                                                        <h5 class="mt-3 lh-base fw-normal text-white"><?= $item->title ?></h5>

                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="carousel-item">
                                                    <div class="text-center p-4">
                                                        <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                        <div class="avatar-md m-auto">
                                                            <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                <img src="<?= $item->image ?>" class="avatar-title rounded-circle bg-soft-light">
                                                            </span>
                                                        </div>
                                                        <h4 class="mt-3 lh-base fw-normal text-white"><?= $item->title ?></h4>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>


                                    </div>
                                    <!-- end carousel-inner -->

                                    <div class="carousel-indicators carousel-indicators-rounded">
                                        <?php $i = 0;
                                        foreach ($news->articles as $item) : ?>
                                            <?php if ($i == 0) : ?><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i++ ?>" class="active" aria-current="true"></button>
                                            <?php else : ?><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i++ ?>"></button>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
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
                                    <div id="btc-quote">
                                        <div id="tradingview_119a8"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                        <script type="text/javascript">
                                            new TradingView.MediumWidget({
                                                "symbols": [
                                                    [
                                                        "Euro / U.S. Dollar",
                                                        "FX:EURUSD"
                                                    ],
                                                    [
                                                        "British Pound / U.S. Dollar",
                                                        "FX:GBPUSD"
                                                    ],
                                                    [
                                                        "U.S. Dollar / Canadian Dollar",
                                                        "FX:USDCAD"
                                                    ],
                                                    [
                                                        "Australian Dollar / U.S. Dollar",
                                                        "FX:AUDUSD"
                                                    ]
                                                ],
                                                "chartOnly": false,
                                                "width": "100%",
                                                "height": "390",
                                                "locale": "en",
                                                "colorTheme": "light",
                                                "gridLineColor": "rgba(151, 0, 0, 1)",
                                                "trendLineColor": "rgba(0, 0, 0, 1)",
                                                "fontColor": "rgba(255, 255, 255, 1)",
                                                "underLineColor": "rgba(180, 95, 6, 1)",
                                                "isTransparent": false,
                                                "autosize": false,
                                                "container_id": "tradingview_119a8"
                                            });
                                        </script>

                                    </div>
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
    <!-- End Page-content -->
    <?= $this->endSection() ?>