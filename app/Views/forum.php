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
            <div class="col text-center mb-5">
                <?php foreach ($beladiri as $b) : ?>
                    <h2>Forum <?= $b->nama; ?></h2>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="card-header mb-5" style="border-radius: 13px;border:none; ">
                    <?php if (!empty(session()->getFlashdata('massage'))) : ?>
                        <div class="alert alert-success fade show mt-3" role="alert">
                            <?php echo session()->getFlashdata('massage'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <form action="<?= base_url() ?>User/diskusi/<?php foreach ($beladiri as $b) {
                                                                        echo $b->id;
                                                                    } ?>" method="post">
                            <div class="col-12 d-flex">
                                <input style="display: none;" type="text" name="username" value="<?= session()->get('username') ?>">
                                <?php foreach ($beladiri as $b) : ?>
                                    <input style="display: none;" type="text" name="kode" value="<?= $b->id ?>">
                                <?php endforeach; ?>
                                <div class="col-1" style="margin: 0;padding:0;">
                                    <img src="<?= base_url() ?>img/core-img/default.png" alt="" width="100%">
                                </div>
                                <div class="col-11">
                                    <textarea placeholder="Apa yang sedang Terjadi ?" style="resize: none;" name="pesan" maxlength="500" rows="5" class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="text-right col-12">
                                <button type="submit" class="btn btn-primary mt-2 mr-3" style="border-radius: 13px; padding:10px 20px;"> POST </button>
                            </div>
                        </form>
                    </div>
                </div>


                <?php foreach ($diskusi as $d) : ?>
                    <div class="card-header mb-5 col-12" style="border-radius: 13px;border:none;">
                        <div class="card-body">
                            <div class="col-12">
                                <a href="<?= base_url() ?>Pages/">
                                    <h5 class="card-title"><?= $d['pesan'] ?></h5>
                                </a>
                            </div>
                            <nav class="navbar mt-3 text-left align-center">
                                <div class="mr-auto ">
                                    <img src="<?= base_url() ?>img/core-img/default.png" width="30" class="d-inline-block mr-3" alt="">
                                    <?= $d['username'] ?>
                                </div>
                                <div class="">
                                    <?= date('D-m-Y', strtotime($d["date"])) ?>
                                </div>
                            </nav>
                        </div>
                    </div>
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
                                        <p>By <?= $l['username'] ?> / <?= date('M-d-Y', strtotime($d["date"])) ?></p>
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