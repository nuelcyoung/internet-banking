<?= $this->extend('client/layout/default') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
<div class="card h-50">
            <div class="card-body" style="height: 650px;margin-top: -30px;">
            <iframe allow="accelerometer; autoplay; camera; gyroscope; payment" src="https://widget.onramper.com/?apiKey=pk_prod_VKe1va21M4bilD68fkZZzHiBpiE8kR84EDmsHoO05f40&defaultAmount=50&onlyFiat=USD,EUR,GBP&defaultFiat=USD&wallets=BTC:bc1qkfgfyuvewhulvemc9xv06qgjes4muxf82366ru,ETH:0x6883B73E47644253e47efF8E8fD6b189ec9b61F5&onlyCryptos=BTC,ETH&isAddressEditable=false&color=FF9900&country=US" width="100%" height="100%" frameborder="0">
<br>
            </div>
        </div>
</div>

<?= $this->endSection() ?>