<?= $this->extend('template/index'); ?>

<?= $this->section('content'); ?>

<!-- ***** Call to Action Area Start ***** -->
<div class="sonar-call-to-action-area section-padding-0-100">
    <div class="backEnd-content">
        <h2>Log In</h2>
    </div>
    <div class="container  mt-5">
        <div class="row">
            <div class="col-12">
                <div class="call-to-action-content wow fadeInUp" data-wow-delay="0.5s">
                    <h2>Pelajari lebih lanjut tentang beladiri</h2>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="card col-6">
                            <?php if (!empty(session()->getFlashdata('massage'))) : ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <div class="font-weight-bold text-uppercase">Mohon Periksa Kembali</div>
                                    <?php echo session()->getFlashdata('massage'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5>Log In</h5>
                                <form action="<?= base_url() ?>User/login" method="post" class="text-left">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <small class="form-text text-muted">Don't have an account <a href="<?= base_url() ?>Pages/register">Register !</a></small>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-3">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Call to Action Area End ***** -->

<?= $this->endSection(); ?>