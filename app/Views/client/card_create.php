<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Card Request</h4>
                        <p class="card-title-desc"><code>NOTE:</code> Card minimum amount is <?=$site_setting->currency_symbol ?> 1000</p>
                        <p class="card-title-desc">Card will be delivered to your address after approval</p>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-6">
                                <form method="post">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label">Choose a card type</label>
                                            <select name="type" class="form-select">
                                                <option value="Visa">Visa Card</option>
                                                <option value="Mastercard">Master Card</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-number-input" class="form-label">Amount to add</label>
                                            <input class="form-control" type="number" min="1000" name="amount" id="example-number-input" placeholder="1000">
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