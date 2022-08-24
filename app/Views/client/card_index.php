<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="col-12 d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">
                        Debit Cards
                    </h5>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="fas fa-plus-circle fa-lg"></i>Create</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row col-xl-12">
                    <?php if ($card_count <= 0) : ?>
                        <div class="tex-center">No Cards Created Yet</div>
                    <?php else : ?>
                        <?php foreach ($cards as $card) : ?>
                            <div class="col-md-6 px-md-2">
                                <div class="card__credits-item col-auto">
                                    <div class="credit-card credit-card--light">
                                        <?php if ($card->type == 'Visa') : ?><img class="credit-card__image credit-card__image--light" src="<?=site_url()?>assets/images/credit-visa.svg" alt="#" />
                                        <?php else : ?><img class="credit-card__image credit-card__image--light" src="<?=site_url()?>assets/images/credit-mastercard.svg" alt="#" />
                                        <?php endif ?>
                                        <div class="credit-card__number-wrapper">

                                            <div class="credit-card__number">
                                                <input class="credit-card__number-input" type="text" value="<?= wordwrap($card->cardnumber, 4, ' ', true) ?>" readonly="readonly" />

                                            </div>
                                        </div>
                                        <div class="credit-card__name">
                                            <div class="credit-card__caption">Card Holder</div> <?= session()->get('firstname') . ' ' . session()->get('lastname') ?>
                                        </div>
                                        <div class="credit-card__date">
                                            <div class="credit-card__caption">Expire</div><span><?= str_replace('20', '', $card->expire); ?></span>
                                        </div>
                                    </div>
                                    <div class="card__credit-list">
                                        <ul class="card-list">
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Card Type</div>
                                                <div class="card-list__value col"><?= strtoupper($card->type) ?></div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Card Holder</div>
                                                <div class="card-list__value col"><?= session()->get('firstname') . ' ' . session()->get('lastname') ?></div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Expire</div>
                                                <div class="card-list__value col"><?= str_replace('20', '', $card->expire); ?></div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">CVV</div>
                                                <div class="card-list__value col"><?= $card->cvv ?></div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Card Number</div>
                                                <div class="card-list__value col"><?= $card->cardnumber ?></div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Card Balance</div>
                                                <div class="card-list__value col"><?= $card->amount ?></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
                <!-- Scrollable modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Card Agreement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>Definitions.</b> In this Agreement, the words “<b>you</b>” and “<b>your</b>” means the
                                Debit Card Owner and any Authorized User of the Debit Card. “<b>Debit Card Owner</b>”
                                means the person who qualified for and opened the Debit Card Account and owns the funds in
                                the Debit Card Account. “<b>Authorized User</b>” means any person issued a Debit Card
                                at the request of the Debit Card Owner and authorized by the Debit Card Owner to use the
                                Debit Card. “<b>We</b>”, “<b>us</b>”, “<b>our</b>” and “<b>The Bank</b>" mean <b><?=$site_name->site_name?></b>, the issuer of the Debit Card. “<b>Debit Card</b>” means the Prepaid
                                Mastercard Debit Card that is issued to you by us. “<b>Primary Debit Account</b>” means
                                the Debit Account that is qualified for and opened by the Debit Card Owner. “<b>Primary
                                    Debit Account Card</b>” means the Debit Card issued to you for your Primary Debit
                                Account. “<b>Debit Sub-Card</b>” means any additional Debit Card(s) that are ordered and
                                managed by the Debit Card Owner through the Primary Debit Account; this definition
                                explicitly does not include the Primary Debit Account Card. "<b>Debit Card Account</b>"
                                means the custodial sub-account we maintain on your behalf to track your Debit Card balance
                                on deposit with us and record transactions made using your Debit Card or by other means
                                authorized by this Agreement. “<b>Debit Card Number</b>” means the 16-digit number
                                associated with your Debit Card. "<b>Business days</b>" are Monday through Friday,
                                excluding federal holidays. Saturday, Sunday, and federal holidays are not considered
                                business days, even if we are open. “<b>PIN</b>” means personal identification number, if
                                applicable. “<b>Access Information</b>” means collectively your PIN, online user name,
                                password, challenge questions, and any other security information used to access your Debit
                                Card Account.<br/>
                                <b>Debit Card.</b> The Debit Card is a prepaid Debit account. The Debit Card allows
      you to access funds loaded or deposited to your Debit Card Account by you or on your
      behalf. Your Debit Card Account does not constitute a checking or savings account and is
      not connected in any way to any other account you may have. The Debit Card is not a gift
      card, nor is it intended to be used for gifting purposes. The Debit Card is not a credit
      card and may not provide the same rights to you as those available in credit card
      transactions. You will not receive any interest on the funds in your Debit Card Account.
      The funds in the Debit Card Account will be insured for the benefit of the Debit Card
      Owner to the maximum limit provided by the Federal Deposit Insurance Corporation provided we
      have been able to verify your identity. Your funds will never expire, regardless of the
      expiration date associated with your Debit Card. The Debit Card will remain the property
      of the Bank and is nontransferable.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <a href="<?=site_url('cards/create')?>"  class="btn btn-primary">Agree</a>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>

    </div>
<?= $this->endSection() ?>