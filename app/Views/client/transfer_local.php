<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4 class="card-title">Local Transfer</h4>
                        <p class="card-title-desc text-light"><code class="text-dark">NOTE:</code> Kindly check all information before making transfer</p>
                        <p class="card-title-desc text-light">Transaction will require approval</p>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <form method="post">    
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Beneficiary name</label>
                                            <input class="form-control" type="text" name="amount" placeholder="John doe">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Beneficiary Bank</label>
                                            <input class="form-control" type="text" name="amount"  placeholder="Bank name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="" cols="5" rows="3" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Amount</label>
                                            <input class="form-control" type="number" min="100" name="amount" id="example-number-input" placeholder="1000">
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>