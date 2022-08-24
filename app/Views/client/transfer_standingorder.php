<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4 class="card-title text-light">Standing Order Request</h4>
                        <p class="card-title-desc text-light"><code class="text-dark">NOTE:</code> Kindly check all information </p>
                        <p class="card-title-desc text-light">Transaction will be processed every last working day of the month</p>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-12">
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
                                            <label for="example-number-input" class="form-label">BIC / SWIFT</label>
                                            <input class="form-control" type="text" name="swift"  placeholder="AAAABBCCDDD">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Reference</label>
                                            <input class="form-control" type="text" name="reference"  placeholder="CH7474747474747499">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Country</label>
                                            <select name="" id="" class="form-select">
                                                <?php foreach ($country as $item) : ?>
                                                    <option><?= $item['countryname'] ?></option>
                                                <?php endforeach ?>
                                                
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input class="form-control" type="date" id="validFromValue" name="validFrom" min="<?php echo date('Y-m-d'); ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <input class="form-control" type="date" id="validFromValue" name="validTo" min="<?php echo date('Y-m-d'); ?>" required>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Standing Order History</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table id="dTableSavedSo" class="table table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Bank</th>
                                                    <th scope="col">Account number</th>
                                                    <th scope="col">SWIFT</th>
                                                    <th scope="col">Start</th>
                                                    <th scope="col">End</th>
                                                    <th scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>