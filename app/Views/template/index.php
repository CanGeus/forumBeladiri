<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?= $title ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url() ?>img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>style.css">

</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->


    <!-- Grids -->
    <div class="grids d-flex justify-content-between">
        <div class="grid1"></div>
        <div class="grid2"></div>
        <div class="grid3"></div>
        <div class="grid4"></div>
        <div class="grid5"></div>
        <div class="grid6"></div>
        <div class="grid7"></div>
        <div class="grid8"></div>
        <div class="grid9"></div>
    </div>

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
        <!-- Logo Area -->
        <div class="logo-area">
            <a href="<?= base_url() ?>">Fortum Beladiri</a>
        </div>
        <!-- Nav -->
        <div class="sonarNav wow fadeInUp" data-wow-delay="1s">
            <nav>
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Pages/forum">Forum</a>
                    </li>
                    <?php
                    if (!empty(session()->get('islogin'))) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>/Pages/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>User/logout">Logout</a>
                        </li>
                    <?php  }; ?>
                </ul>
            </nav>
        </div>
        <!-- Copwrite Text -->
        <div class="copywrite-text">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/CanGeus" target="_blank">CanGeus</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="<?= base_url() ?>">Forum Beladiri</a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <!-- Header Social Area -->
                            <div class="header-social-area d-flex align-items-center">
                                <?php if (empty(session()->get('islogin'))) { ?>
                                    <a href="<?= base_url() ?>Pages/login" data-toggle="tooltip" data-placement="bottom" title="Login">
                                        <button type="button" class="btn btn-outline-light">Login</button>
                                    </a>
                                    <a href="<?= base_url() ?>Pages/register" data-toggle="tooltip" data-placement="bottom" title="Register">
                                        <button type="button" class="btn btn-outline-light">Register</button>
                                    </a>
                                    <a href="https://www.linkedin.com/in/aditya-candra-permana-636801259/" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/cangeus/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="https://www.facebook.com/CanGeus/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://twitter.com/cangeus" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <?php } ?>
                                <?php if (!empty(session()->get('islogin'))) { ?>
                                    <a href="">Hallo, <?= session()->get('username') ?></a>
                                <?php } ?>
                            </div>
                            <!-- Menu Icon -->
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- Content -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/CanGeus" target="_blank">CanGeus</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= base_url() ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url() ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url() ?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>js/active.js"></script>

</body>

</html>