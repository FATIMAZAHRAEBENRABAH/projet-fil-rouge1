<!DOCTYPE html>
<html lang="en">
<?php
    include "RealisationsManager.php";
    // Trouver tous les employés depuis la base de données 
    $realisationsManager = new RealisationsManager();
    $data = $realisationsManager->afficher_realisations();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stemland</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo-edit.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo-edit.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-edit.png">
    <link rel="manifest" href="assets/images/logo-edit.png">
    <meta name="description" content="stemland">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">

                        <!-- réseaux sociales -->
                        <div class="topbar__social">
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                    </div><!-- /.topbar__left -->

                    <!-- information de l'entreprise -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>streamland.sarl@gmail.com</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Lun - Sam 8:00 - 18:00, Dimanche - FERMÉ</a>
                        <a href="#"><i class="agrikon-icon-pin"></i>Rue Amr Ibn Al Ass, Tanger</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">

                        <!-- navbar -->

                        <!-- logo -->
                        <a href="index.php" aria-label="logo image"><img src="assets/images/logo-removebg.png" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            
                            <!-- menu -->
                            <a href="index.php">Accueil</a>
                        </li>
                        <li class="dropdown"><a href="services.html">Nos services</a>
                        </li>
                        <li>
                            <a href="page-devis.php">demande devis</a>
                        </li>
                        <li class="dropdown">
                            <a href="project-details.php">Nos réalisations</a>
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->
                    
                    <!-- tel -->
                    <div class="main-header__info">
                        <a href="tel:06 69 22 50 63" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Appelez à tout moment</span>
                                <span class="main-header__info-phone-title">06 69 22 50 63</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="project-details">
            <div class="container">
            <?php
                    foreach($data as $value){
            ?>
                <img src="assets/images/projects/project-d-1-1.jpg" class="img-fluid" alt="">
                
                <h2><?= $value->getTitre() ?></h2>
                <p><?= $value->getDescription() ?></p>
                <?php }?>
            </div><!-- /.container -->
        </section><!-- /.project-details -->

        <!-- footer -->
        <footer class="site-footer">
            <img src="assets/images/icons/footer-bg-icon-1.png" class="site-footer__shape-1" alt="">
            <img src="assets/images/icons/footer-bg-icon-2.png" class="site-footer__shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-widget__Logo">
                                <img src="assets/images/logo-removebg.png" width="153" alt="">
                            </a>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="devis.html">demande devis</a></li>
                                <li><a href="services.html">Nos services</a></li>
                                <li><a href="project-details.html">Nos réalisations</a></li><br>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                            <li>
                                <i class="agrikon-icon-telephone"></i>
                                <a href="06 69 22 50 63">06 69 22 50 63</a>
                            </li>
                            <li>
                                <i class="agrikon-icon-email"></i>
                                <a href="mailto:streamland.sarl@gmail.com">streamland.sarl@gmail.com</a>
                            </li>
                            <li>
                                <i class="agrikon-icon-pin"></i>
                                <a href="#">Rue Amr Ibn Al Ass, Tanger</a>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->
        <div class="bottom-footer">
            <div class="container">
                <p>© Copyright 2022 stemland.com</p>
                <div class="mc-form__response"></div>
                                <div class="footer__social">
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-facebook-square"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                </div><!-- /.topbar__social -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-removebg.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:streamland.sarl@gmail.com">streamland.sarl@gmail.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:06 69 22 50 63">06 69 22 50 63</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    <!-- /.mobile-nav__wrapper -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>
</body>

</html>