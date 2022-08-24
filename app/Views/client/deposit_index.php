<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-body">
                    <div class="alert alert-danger " role="alert">
                        <i class="mdi mdi-block-helper me-2"></i>
                        Making deposit into your Ofuse banking account now easier, we have different payment options to choose from
                        <ul>
                            <li>
                                Bank Deposit
                            </li>
                            <li>
                                Card Deposit
                            </li>
                            <li>Paypal Deposit</li>
                        </ul>
                        Choose below the option that suits you.
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="<?= site_url() ?>assets/images/small/bank.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Bank Payment</h4>
                    <p class="card-text">transfer's made through this deposit mode is credit almost instantly.</p>
                </div>
                <a href="<?=site_url('deposit/bankpayment')?>" class="btn btn-primary waves-effect waves-light w-100">Bank Deposit</a>
            </div>
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="<?= site_url() ?>assets/images/small/paypal.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Paypal</h4>
                    <p class="card-text">Payments are made to the bank through your account manager.</p>
                </div>
                <a href="<?=site_url('deposit/paypal')?>" class="btn btn-primary waves-effect waves-light w-100">Paypal Deposit</a>
            </div>
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="<?= site_url() ?>assets/images/small/card.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Cards</h4>
                    <p class="card-text">You can make payments using your credit or debit, deposit's are instantly credited</p>
                </div>
                <a href="<?=site_url('deposit/cardpayment')?>" class="btn btn-primary waves-effect waves-light w-100">Card Deposit</a>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->
</div>

<?= $this->endSection() ?>