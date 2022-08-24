<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4 class="card-title text-light">International Transfer</h4>
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
                                            <input class="form-control" type="text" name="ben_name" placeholder="John doe">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Beneficiary Bank</label>
                                            <input class="form-control" type="text" name="ben_bank"  placeholder="Bank name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Beneficiary Account Number</label>
                                            <input class="form-control" type="text" name="to_accno"  placeholder="Bank name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">BIC / SWIFT</label>
                                            <input class="form-control" type="text" name="swift"  placeholder="AAAABBCCDDD">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Reference</label>
                                            <input class="form-control" type="text" name="reference"  placeholder="CH7474747474747499">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Country</label>
                                            <select name="country" id="" class="form-select">
                                                <?php foreach ($country as $item) : ?>
                                                    <option><?= $item['countryname'] ?></option>
                                                <?php endforeach ?>
                                                
                                            </select>
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