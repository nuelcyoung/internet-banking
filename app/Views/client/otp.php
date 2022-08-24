<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-danger">
                        <h4 class="card-title text-light">Transaction PIN</h4>
                        <p class="card-title-desc text-light"><code class="text-dark">NOTE:</code> Kindly provide your four (4) digit transaction PIN</p>
                        <p class="card-title-desc text-light">Transaction will require approval</p>
                        <p class="card-title-desc"></p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-6 col-md-5">
                            <div class="auth-full-page-content d-flex p-sm-5 p-0">
                                <div class="">
                                    <div class="d-flex flex-column justify-content-center">
                                        <div class="auth-content my-auto col-md-6">
                                            <div class="text-center">
                                                <div class="p-2 mt-0">
                                                    <h4>Verify your transaction PIN</h4>
                                                    <p class="mb-5">Please enter the 4 digit <span class="fw-bold">PIN</span></p>

                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="mb-3">
                                                                    <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                                    <input type="text" name="pin1" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 2)" maxlength="1" id="digit1-input">
                                                                </div>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="mb-3">
                                                                    <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                                    <input type="text" name="pin2" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 3)" maxlength="1" id="digit2-input">
                                                                </div>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="mb-3">
                                                                    <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                                    <input type="text" name="pin3" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit3-input">
                                                                </div>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="mb-3">
                                                                    <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                                    <input type="text" name="pin4" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit4-input">
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