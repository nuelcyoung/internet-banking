<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="col-12 d-flex flex-wrap align-items-center mb-4">
                <h5 class="card-title me-2">
                    Transfer
                </h5>
                <div class="ms-auto">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="fas fa-plus-circle fa-lg"></i>Standing Order</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <div class="col-md-6 d-flex justify-content-center mb-2 px-md-2">
                    <a href="<?= site_url('transfer/local') ?>" class="btn btn-primary btn-lg">Local Transfer</a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center mb-2 px-md-2">
                    <a href="<?= site_url('transfer/international') ?>" class="btn btn-primary btn-lg">International Transfer</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row col-xl-12">
            <?php if(!isset($transactions)):?>
                <div class="lead text-center">No transaction yet</div>
                <?php else : ?>
                    <?php foreach ($transactions as $item) : ?>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
            <!-- Scrollable modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Standing Order Agreement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            The terms indicated below have the following meaning in the Terms and Conditions of the
                            Standing Order Agreement:<br>
                            <b>Payment Date</b> – a due date agreed on in the Agreement when the Bank executes a Payment
                            Order on the basis of the Standing Order Agreement.<br />
                            <b>Standing Order</b> – a Payment Order given by the Remitter to the Bank for making regular
                            payments from the Remitter’s to the Beneficiary.<br />
                            <b>Settlement Day</b> – the day when the Bank, the Payment Intermediary or the Beneficiary’s Bank
                            are open for the execution of transactions. Generally, all calendar days are regarded as
                            settlement days upon processing a standing order. Depending on the type of the Payment Order
                            or the channel of making the Payment, the Settlement Day may differ from the above and, in
                            such an event, the relevant information is disclosed in the terms and conditions of the service or
                            the price list of the Bank.<br />
                            The Bank shall make a transfer on the basis of the Standing Order Agreement, i.e. execute, on
                            the Payment Date, the Payment Order given by the Customer under the Payment Terms applied
                            at the Bank. The Customer shall pay a fee to the Bank for executing the standing order according
                            to the Bank’s Price List. The Bank shall debit the fee from the Customer’s Account without any
                            additional order by the Customer, simultaneously upon making the Payment.<br /><br />
                            In order to make a payment, the Bank shall verify only the Remitter’s Account specified in the
                            standing order and make the Payment from this Account. The Bank shall not use Funds from any
                            other Accounts of the Remitter to make the Payment.<br /><br />
                            If the Remitter has given several transfer orders with the same Payment Date with regard to the
                            same Account (incl. standing order or e-invoice standing order) and there are insufficient Funds
                            in the Account for executing them all, the sequence of execution shall be determined by the
                            Bank.<br /><br />
                            The Remitter shall receive information about payments executed from the account statement.<br /><br />
                            The Remitter can only cancel future payments. The Bank cannot cancel the payments. If the
                            Remitter wishes to waive the making of the payment or payments, he must cancel them himself
                            or terminate the Agreement. The Payments shall be suspended if the Remitter’s Account is
                            seized or blocked on the grounds set forth in legislation, the General Terms and Conditions of the
                            Bank, the Terms and Conditions of the Account Agreement and the Payment Terms or any the
                            other agreement concluded between the Remitter and the Bank.


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <a href="<?= site_url('transfer/standingorder') ?>" class="btn btn-primary">Agree</a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>

</div>


<?= $this->endSection() ?>