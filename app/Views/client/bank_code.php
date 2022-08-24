<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="wizard-steps">
                        <div class="active-step step">
                            <div class="a-before"></div>
                            <label>
                                <span>1</span>
                                Transfer Code
                            </label>
                            <div class="a-after"></div>
                        </div>
                        <div class="step">
                            <div class="a-before"></div>
                            <label>
                                <span>2</span>
                                Manager
                            </label>
                            <div class="a-after"></div>
                        </div>
                        <div class="step">
                            <div class="a-before"></div>
                            <label>
                                <span>3</span>
                                Audit
                            </label>
                            <div class="a-after"></div>
                        </div>
                        <div class="step">
                            <div class="a-before"></div>
                            <label>
                                <span>4</span>
                                Completed
                            </label>
                            <div class="a-after"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-6 col-md-4">
                            <div class="auth-full-page-content d-flex p-sm-5 p-0">
                                <div class="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <div class="auth-content my-auto col-md-6">
                                            <div class="text-center">
                                                <div class="p-2 mt-0">
                                                    <h4>Provide your Transfer Code</h4>
                                                    <h4>Please contact a live chat agent for transfer code</h4>

                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="digit1-input" class="visually-hidden">Transfer Code</label>
                                                                    <input type="text" name="otp" class="form-control form-control-lg text-center">
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="mt-4">
                                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Proceed</button>
                                                            </div>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end auth full page content -->
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

<?= $this->endSection() ?>