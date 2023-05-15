<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<!-- ***** Hero Area Start ***** -->
<?php foreach ($beladiri as $b) : ?>
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?= base_url() ?>/img/bg-img/<?= $b->imgh ?>);"></div>

        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2><?= $b->nama ?></h2>
                        <p><?= $b->deskripsi  ?></p>
                        <!-- <a href="#" class="btn sonar-btn white-btn">contact me</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- ***** Hero Area End ***** -->

<!-- semboyan -->
<!-- <div class="portfolio-area section-padding-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-title">
                    <h2>"Aku ramah bukan berarti takut. Aku tunduk bukan berarti takluk."</h2>
                    <h2> <span> Semboyan tarung derajat </span></h2>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- semboyan -->

<!-- ***** Services Area Start ***** -->
<div class="bg-img" style="background-image: url(<?= base_url() ?>/img/bg-img/-bg.jpg);background-size: auto;">
    <div class="sonar-services-area section-padding-50">
        <div class="container">
            <div class="row">
                <!-- Single Area -->
                <div class="col-12">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam maiores assumenda ipsam incidunt vero suscipit eligendi, consequuntur inventore nobis tenetur culpa, voluptatem architecto commodi? Laborum laudantium magni nisi neque expedita voluptates quam asperiores excepturi eos totam iusto aperiam odio in nulla consectetur, fugiat pariatur ex placeat rem cupiditate reiciendis! Dolores minus esse fugiat eius atque labore, error provident nemo, praesentium voluptates maiores voluptatibus sunt omnis. Ipsa, id praesentium illum doloribus molestias quis vitae iste velit.</h4>
                    </div>
                </div>
                <!-- Single Area -->
                <div class="col-12">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="600ms">
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni nobis eum doloremque temporibus quasi dicta quaerat repellendus adipisci sed. Corrupti recusandae ipsa quam, sapiente id delectus nihil, velit tempora voluptatem cupiditate obcaecati nemo voluptas explicabo harum reprehenderit vitae! Eos sunt reiciendis magni est a pariatur totam soluta aspernatur tenetur! Consectetur aliquid repudiandae iusto fuga laudantium, sint corporis nobis aperiam quis consequuntur dolores, et recusandae eius autem porro veritatis. Perspiciatis pariatur, cum, nostrum voluptates autem ab eaque perferendis corrupti possimus praesentium magni dolorum, ducimus nesciunt sint neque eveniet hic aut id quae illo voluptas ipsa debitis? Dolores quo maxime unde!</h4>
                    </div>
                </div>
                <!-- Single Area -->
                <div class="col-12">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="900ms">
                        <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus praesentium illo voluptatem ab, libero ratione eum doloribus nostrum velit molestias adipisci sunt odio consectetur rerum!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>