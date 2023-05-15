<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<!-- ***** Hero Area Start ***** -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <?php foreach ($beladiri as $b) : ?>
            <a href="<?= base_url() ?>Pages/about/<?= $b['id'] ?>">
                <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(img/bg-img/<?= $b['imgh'] ?>);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-end">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <div class="line"></div>
                                    <h2><?= $b['nama'] ?></h2>
                                    <p><?= $b['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<!-- ***** Hero Area End ***** -->

<!-- ***** Portfolio Area Start ***** -->
<div class="portfolio-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-title">
                    <h2>"Bukanlah kekuatan sejati yang melumpuhkan, tetapi kelembutan dalam hati." <span> Bruce Lee </span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-5">
                <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Beladiri</h2>
                    </div>
                    <a href="<?= base_url() ?>Pages/about/1">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h1.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Pencak Silat - BIMC Hospital Bali</h2>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-6">
                <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                    </div>
                    <a href="<?= base_url() ?>Pages/about/6">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h2.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Silek Bangouluk Lunau</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-10">
                <div class="single-portfolio-item mt-100 portfolio-item-3 wow fadeIn">
                    <div class="backend-content ">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2 class="mt-5">Beladiri</h2>
                    </div>
                    <a href="<?= base_url() ?>Pages/about/2">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h3.png" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Karate Kick</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-6">
                <div class="single-portfolio-item portfolio-item-4 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                    </div>
                    <a href="<?= base_url() ?>Pages/about/4">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h4.png" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Taekwondo</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-5">
                <div class="single-portfolio-item portfolio-item-5 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Beladiri</h2>
                    </div>
                    <a href="<?= base_url() ?>Pages/about/3">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h5.png" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Judo</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <!-- Single Portfoio Area -->
            <div class="col-12 col-md-4">
                <div class="single-portfolio-item portfolio-item-7 wow fadeIn">
                    <div class="backend-content">
                        <img class="dots" src="img/core-img/dots.png" alt="">
                        <h2>Beladiri</h2>
                    </div>
                    <a href="<?= base_url() ?>Pages/about/5">
                        <div class="portfolio-thumb">
                            <img src="img/bg-img/h6.png" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Tarung Drajat</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Portfolio Area End ***** -->

<!-- ***** Call to Action Area Start ***** -->
<div class="sonar-call-to-action-area section-padding-0-100">
    <div class="backEnd-content">
        <h2>join now</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call-to-action-content wow fadeInUp" data-wow-delay="0.5s">
                    <h2>Pelajari lebih lanjut tentang beladiri</h2>
                    <h5>Join ke Forum Beladiri</h5>
                    <a href="<?= base_url() ?>Pages/register" class="btn sonar-btn mt-100">Join NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Call to Action Area End ***** -->

<?= $this->endSection() ?>