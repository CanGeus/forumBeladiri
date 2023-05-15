<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<!-- ***** Blog Area Start ***** -->
<section class="sonar-blog-area section-padding-100">
    <!-- back end content -->
    <div class="backEnd-content">
        <img class="dots" src="<?= base_url() ?>img/core-img/dots.png" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">




                <!-- <div class="card-header mb-5" style="border-radius: 13px;border:none; ">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="col-12 d-flex">
                                <div class="col-1" style="margin: 0;padding:0;">
                                    <img src="img/core-img/default.png" alt="" width="100%">
                                </div>
                                <div class="col-11">
                                    <textarea placeholder="Apa yang sedang Terjadi ?" style="resize: none;" name="" id="" rows="5" class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="text-right col-12">
                                <button type="submit" class="btn btn-primary mt-2 mr-3" style="border-radius: 13px; padding:10px 20px;"> POST </button>
                            </div>
                        </form>
                    </div>
                </div> -->

                <!-- Single Blog Area -->
                <?php foreach ($beladiri as $b) : ?>
                    <a href="<?= base_url() ?>Pages/forum_about/<?= $b['id'] ?>">
                        <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                            <!-- Post Thumbnail -->
                            <div class="blog-post-thumbnail">
                                <img width="100%" src="<?= base_url() ?>img/bg-img/<?= $b['imgf'] ?>" alt="">
                                <!-- Post Date -->
                                <div class="post-date">
                                    <a href="#">Feb 12 '18</a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content" style="margin-bottom: 100px;" style="margin-bottom: 100px;">
                                    <a href="<?= base_url() ?>Pages/forum_about/pencaksilat" class="headline">Diskisi <?= $b['nama'] ?></a>
                                    <div class="post-meta">
                                        <a href="<?= base_url() ?>Pages/forum_about/pencaksilat" class="comments"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>




            </div>

            <div class="col-12 col-md-3">
                <div class="sonar-blog-sidebar-area">

                    <!-- Catagories Widget -->
                    <div class="sonar-catagories-widget-area mb-50">
                        <h6>Forum</h6>
                        <ul class="catagories-menu">
                            <?php foreach ($forum as $f) : ?>
                                <li><a href="<?= base_url() ?>Pages/forum_about/<?= $f['id'] ?>"><?= $f['nama'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="sonar-catagories-widget-area mb-50">
                        <a href="https://my.domainesia.com/ref.php?u=22539"><img src="https://dnva.me/6tdb4" width="250px" height="250px" alt="DomaiNesia"></a>
                    </div>

                    <div class="sonar-catagories-widget-area mb-50">
                        <a href="https://my.domainesia.com/ref.php?u=22539"><img src="https://dnva.me/c2qau" width="350px" height="250px" alt="DomaiNesia"></a>
                    </div>



                    <!-- Latest News -->
                    <div class="latest-news-widget-area mb-50">
                        <h6>Latest Discuss</h6>

                        <div class="widget-blog-post">
                            <?php foreach ($lastestdiskusi as $l) : ?>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex align-items-start">
                                    <div class="widget-post-thumbnail pr-3">
                                        <img src="img/blog-img/lp1.png" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">A simple blog post</a>
                                        <p>By <?= $l['username'] ?> / <?= date('M-d-Y', strtotime($l["date"])) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->

<?= $this->endSection(); ?>