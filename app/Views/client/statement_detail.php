<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="mb-4">
                                    <img src="<?=site_url()?>assets/images/logo-sm.svg" alt="" height="24"><span class="logo-txt"><?=$site_setting->site_name?></span>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="mb-4">
                                    <h4 class="float-end font-size-16"><p class="mb-1">Sonnenweg 24, Martherenges, Switzerland.</p>
                        <p class="mb-1">info@ofusebank.com</p>
                        <p><?=$site_setting->phone?></p></h4>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                    <hr class="my-4">
                
                    <div class="d-flex justify-content-center col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-nowrap  mb-0">
                                <tbody>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Payment From</h5></td>
                                        <td align="left" class="text-left"><?=$user->firstname.' '.$user->lastname?></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><h5 class="font-size-15 mb-1">Amount</h5></td>
                                        <td align="left" class="text-left"><?=number_format($detail->amount,'0.00')?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Payment Date From Ofusebank</h5></td>
                                        <td align="left" class="text-left"><?=$detail->created_at?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Payment Reference</h5></td>
                                        <td align="left" class="text-left"><?=$detail->reference?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Account Name</h5></td>
                                        <td align="left" class="text-left"><?=$detail->bname?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Bank</h5></td>
                                        <td align="left" class="text-left"><?=$detail->to_bank?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Branch Number</h5></td>
                                        <td align="left" class="text-left"><?=$user->firstname.' '.$user->lastname?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Bank Account Number</h5></td>
                                        <td align="left" class="text-left"><?=$detail->to_accno?></td>
                                    </tr>
                                    <!-- <tr>
                                        <td align="right" class="text-right"><h5 class="font-size-15 mb-1">Beneficiary Reference</h5></td>
                                        <td align="left" class="text-left"><?=$user->firstname.' '.$user->lastname?></td>
                                    </tr> -->

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-print-none mt-3">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>