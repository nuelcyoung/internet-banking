<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Register Account</h4>
                    <!-- <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p> -->
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">First name</label>
                            <input class="form-control form-control-sm" name="firstname" type="text" id="form-sm-input" placeholder="Firstname">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Last name</label>
                            <input class="form-control form-control-sm" name="lastname" type="text" id="form-sm-input" placeholder="Lastname">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Email</label>
                            <input class="form-control form-control-sm" name="email" type="text" id="form-sm-input" placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Phone number</label>
                            <input class="form-control form-control-sm" name="phone" type="text" id="form-sm-input" placeholder="Phone">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Password</label>
                            <input class="form-control form-control-sm" name="password" type="text" id="form-sm-input" placeholder="Password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Gender</label>
                            <select class="form-select" name="gender">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Country</label>
                            <select class="form-select" name="country">
                            <option>Select</option>
                            <?php foreach ($country as $item) : ?>
                                <option><?=$item->nicename?></option>
                                <!-- <input type="hidden" value="<?=$item->phonecode?>" id="phonecode"> -->
                            <?php endforeach ?>
                        </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Address</label>
                            <textarea name="address" class="form-control form-control-sm"></textarea>
                        </select>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Currency</label>
                            <select class="form-select" name="currency">
                            <option>Select</option>
                            <option value="$">USD</option>
                            <option value="£">GBP</option>
                            <option value="€">EUR</option>
                            <option value="¥">CNY</option>
                        </select>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Account Type</label>
                            <select class="form-select" name="account_type">
                            <option>Savings</option>
                            <option>Checking</option>
                        </select>
                        <div class="mb-4">
                            <label class="form-label" for="form-sm-input">Transaction PIN</label>
                            <input class="form-control form-control-sm" name="transaction_pin" type="text" id="form-sm-input" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->

    </div>
</div>

<?= $this->endSection() ?>