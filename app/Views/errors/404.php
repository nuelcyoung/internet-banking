<?= $this->extend('errors/default') ?>
<?= $this->section('content') ?>
<main class="page-error">
    <div class="page-error__content">
        <div class="page-error__type">404</div>
        <h1 class="page-error__title">Looks like you got lost</h1>
        <p class="text-large">The page you're looking for doesn't exist or has been moved</p>
        <div class="page-error__bottom"><a class="button button--primary" href="<?=site_url()?>"><span class="button__text">Back to home</span></a>
        </div>
    </div>
</main>
<?= $this->endSection() ?>