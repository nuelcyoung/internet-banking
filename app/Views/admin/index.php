<?=$this->extend('admin/layout/default')?>
<?=$this->section('content')?>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Clients</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="<?=$totalusers?>">0</span>
                                </h4>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="ms-1 text-muted font-size-13">All clients</span>
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
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Transfer</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="<?=$totaltransfer?>">0</span>
                                </h4>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="ms-1 text-muted font-size-13">All transfers made</span>
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
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Withdrawals</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="<?=$totalwithdraw?>">0</span>
                                </h4>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="ms-1 text-muted font-size-13">All withdrawals</span>
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
                                <span class="text-muted mb-3 lh-1 d-block">Pending Transfers</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="<?=$pendingtransfer?>">0</span>
                                </h4>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="ms-1 text-muted font-size-13">Total Pending Transfers</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->
    </div>
<?=$this->endSection()?>