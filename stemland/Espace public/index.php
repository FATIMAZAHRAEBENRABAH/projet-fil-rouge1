<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<?php
include "DevisManager.php";
// include "Hotels.php";
// Trouver tous les employés depuis la base de données 
$DevisManager = new DevisManager();


if(!empty($_POST)){
	$Devis = new Devis;
	
	
	$Devis->setNom($_POST['Nom']);
	$Devis->setPrenom($_POST['Prenom']);
	$Devis->setTel($_POST['Tel']);
	$Devis->setEmail($_POST['Email']);
	$Devis->setDescription ($_POST['Description']);
	$DevisManager->Ajouter($Devis);

	
	
}

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

        <!-- animation des slider -->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <!-- titre & button -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/bg1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <h2><span>Bienvenue Chez </span> <br>
                                        Streamland Sarl</h2><br>
                                    <a href="services.html" class=" thm-btn">Voir les sevices</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/bg2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <!-- <span class="tagline">Welcome to Agriculture Farm</span> -->
                                    <h2><span>Bienvenue Chez </span> <br>
                                        Streamland Sarl</h2><br>
                                    <!-- <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                        in some form.</p> -->
                                    <a href="services.html" class=" thm-btn">Voir les sevices</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- Si nous avons besoin de boutons de navigation -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <!-- Qui sommes nous? -->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/photo34.png" alt="">
                            <img src="assets/images/photo37.png" alt="">
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <h3>Qui sommes nous?</h3>
                            </div><!-- /.block-title -->
                            <div class="about-one__summery">
                                <p>STREAMLAND SARL est un cabinet de conseil et d’études en
                                    ingénierie de projets agricoles, agro-industriels et ceux qualifiés
                                    de transverses. Son objectif est d’accompagner votre réussite en
                                    mettant à votre disposition une équipe de consultants de 
                                   renommée : Ingénieurs agronomes, ingénieurs agroéconomistes,
                                    ingénieurs agro-industriels, ingénieurs génie DEVELOPMENT 
                                   rural, environnementalistes, financiers, anciens dirigeants de 
                                   banques, experts marketing et communication, directeurs 
                                   ressources humaines, fiscalistes, avocats, notaires, experts 
                                   comptables. STREAMLAND SARL  vient pour répondre aux 
                                   besoins des différents acteurs publics et privés opérant dans le 
                                   secteur agricole et agro-industriel en perpétuelle évolution, 
                                   suite à la mise en oeuvre de plusieurs programmes et plans de 
                                   développement sectoriels mis en place par les pouvoirs publics :
                                    Plan Maroc Vert est son successeur Green Génération…..</p>
                            </div><!-- /.about-one__summery -->
                            <div class="about-one__icon-row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-farmer"></i>
                                            <h4><a href="#">Ingénieurs agricoles professionnels</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="#">Solutions biologiques et écologiques</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.about-one__icon-row -->
                            <a href="devis.html" class=" thm-btn">Demander un devis</a>
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <!-- les services -->
        <section class="service-two">
            <div class="container">
                <div class="block-title text-center">
                    <p>NOTRE LISTE DE SERVICES</p>
                    <h3>Qu'offrons-nous</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/photo17.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-tractor"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="services.html">Études d'irrigation localisee</a></h3>
                                <p>Études préliminaires, études pédologiques et physique du sol et études géotechniques.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/photo21.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-organic-food"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="services.html">Étude d'impact sur l'environnement</a></h3>
                                <p>Études d’impact environnemental et social pour tout projet d’aménagement.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/photo22.jfif" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-dairy"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="services.html">Pompage solaire</a></h3>
                                <p>Les systèmes de pompage solaire fournissent de l'eau de n'importe quelle source, n'importe où.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/photo24.jfif" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-vegetable"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="services.html">Montage des projets agricoles</a></h3>
                                <p>Études d'évaluation de projets agricoles, études de faisabilité et élaboration du business plan.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->

        <!-- les projets réalisés  -->
        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Projets achevés</p>
                    <h3>Liste des projets récents</h3>
                </div><!-- /.block-title -->

                <!-- animation des slider projects -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                       <!-- les projets réalisés  -->
                       <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/photo28edite.png" alt="">
                                <div class="projects-one__content">
                                    <h3>Formations des agriculteurs</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/photo32.png" alt="">
                                <div class="projects-one__content">
                                    <h3>Formation des apiculteurs</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/photo27.png.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>L'entretien des réseaux d'irrigation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                    </div> <!-- swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <!-- Demander un Devis -->
        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                            <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                            <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                            <img src="assets/images/photo33edit.png" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <p>appelle maintenant</p>
                                <h3>Demander un Devis</h3>
                            </div><!-- /.block-title -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <form action="" class="contact-one__form contact-form-validated " method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="Nom" placeholder="Nom">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="Prenom" placeholder="Prénom">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="email" name="Email" placeholder="Email">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="Tel" placeholder="Tel"> 
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="Description" placeholder="Description"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Envoyer la demande</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->

        <!-- qui nous font confiance -->
        <div class="block-title text-center">
            <h3>Qui nous font confiance</h3>
        </div>
        
        <!-- animation qui nous font confiance -->
        <div class="client-carousel client-carousel__has-border-top">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/icone1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone6.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone7.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/icone8.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

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