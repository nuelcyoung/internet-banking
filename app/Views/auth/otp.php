<?= $this->extend('auth/layout/default') ?>
<?= $this->section('content') ?>
<div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-4 col-lg-6 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="/" class="d-block auth-logo">
                                            <img src="assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt"><?php if(isset($site_name))?></span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">

                                            <div class="p-2 mt-4">
                    
                                                <h4>Verify your transaction PIN</h4>
                                                <p class="mb-5">Please enter the 4 digit <span class="fw-bold">PIN</span></p>
                    
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                                <input type="text" name="pin1" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 2)" maxlength="1" id="digit1-input">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                                <input type="text" name="pin2" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 3)" maxlength="1" id="digit2-input">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                                <input type="text" name="pin3" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit3-input">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                                <input type="text" name="pin4" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit4-input">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Proceed</button>
                                                </div>
                                                    </div>
                                                </form>
                    
                                                
                                            </div>
                    
                                        </div>

                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> <?=$site_setting->site_name?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-8 col-lg-6 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">

                                                        <h4 class="mt-4 fw-medium lh-base text-white">
                                                            <li>Ofusebank will never ask you to disclose sensitive banking information such as your online login details or PIN Number.</li>
                                                            <li>Beware of emails or text messages that ask you to confirm personal banking details</li>
                                                        </h4>
                                                        
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">

                                                        <h4 class="mt-4 fw-medium lh-base text-white">
                                                           <li>Do not respond to suspicious emails and delete them from your mailbox immediately</li>
                                                           <li>Do not click on any links in emails to connect to our online banking website</li>
                                                        </h4>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">

                                                        <h4 class="mt-4 fw-medium lh-base text-white">
                                                            <li>Always click on the internet banking on our website (www.ofusebank.com) to access your Online Account</li>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>
<?= $this->endSection() ?>