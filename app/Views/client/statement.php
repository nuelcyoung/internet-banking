<?=$this->extend('client/layout/default')?>
<?=$this->section('content')?>
    <div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="card-header bg-danger">

                                </div>
                                <?php if(isset($allstatement)):?>
                                <div class="table-responsive">
                                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                        <thead>
                                            <tr class="bg-transparent">
                                                <th style="width: 120px;">Reference ID</th>
                                                <th>Type</th>
                                                <th>Beneficiary</th>
                                                <th>Bank name</th>
                                                <th>Bank Account</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th style="width: 150px;">Download Pdf</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($allstatement as $item) : ?>
                                                <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><?=$item->tx_no?></a> </td>
                                                <td>
                                                <?=$item->tx_type?>
                                                </td>
                                                <td><?=$item->bname?></td>

                                                <td>
                                                <?=$item->to_accno?>
                                                </td>
                                                <td><?=$item->to_bank?></td>
                                                <td>
                                                <?=$item->amount?>
                                                </td>
                                                <td>
                                                    <?php if($item->approved =='false'):?><div class="badge badge-soft-warning font-size-12">Pending</div>
                                                    <?php else:?>
                                                        <div class="badge badge-success font-size-12">Approved</div>
                                                    <?php endif?>
                                                    </td>
                                                <td>
                                                    <div>
                                                        <a href="<?=site_url('statement/pdf/'.$item->id)?>" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i class="bx bx-download label-icon"></i> Pdf</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="<?=site_url('statement/view/'.$item->id)?>" class="badge rounded-pill bg-info font-size-14">View</a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <?php else:?>
                                    <div class="text-center lead">
                                        No transaction found
                                    </div>
                                <?php endif?>
                                <!-- end table responsive -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
    </div>

<?=$this->endSection()?>