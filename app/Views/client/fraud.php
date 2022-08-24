<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <ul class="wizard">
                        <li class="">OTP</li>
                        <li class="">Account Manager</li>
                        <li class="">Audit</li>
                        <li class="selected">Fraud</li>
                        <li class="">Transfer Complete</li>
                    </ul>
                </div>
                <div class="card-body">

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