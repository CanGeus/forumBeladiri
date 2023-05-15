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
            <div class="col-12">
                <div class="card">
                    <?php foreach ($data as $d) : ?>
                        <div class="card-header">
                            Profile <?= $d['username'] ?>
                        </div>

                        <div class="card-body">
                            <?php if (!empty(session()->getFlashdata('massage'))) : ?>
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    <?php echo session()->getFlashdata('massage'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex mb-3">
                                <div class="col-2">
                                    <img src="<?= base_url() ?>img/core-img/<?= $d['img'] ?>" alt="profile picture" class="img-thumbnail">
                                </div>
                                <div class="col-5">
                                    <form method="post" action="<?= base_url(); ?>User/updateProfile" enctype="multipart/form-data">
                                        <h5 class="card-title">Update Profile Picture</h5>
                                        <?= csrf_field(); ?>
                                        <input type="file" class="form-control" id="img" name="img">
                                        <p>* Max size 1Mb</p>
                                </div>
                            </div>
                            <div class="d-flex col-12">
                                <div class="form-group col-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="<?= $d['username'] ?>">
                                </div>
                                <div class="form-group col-6">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $d['name'] ?>">
                                </div>
                            </div>
                            <div class="d-flex col-12">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="username" placeholder="<?= $d['email'] ?>">
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary">simpan</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


</section>

<?= $this->endSection(); ?>