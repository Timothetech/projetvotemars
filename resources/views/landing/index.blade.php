@extends("landing.layouts.master")

@section('main')

<!-- hero section area start -->
<div class="hero-section align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="hero-section-content left">
                    <div class="hero-section-title">
                        <h1>Informatic Solutions pour vous !</h1>
                    </div>
                    <div class="hero-description">
                        <p>Votre partenaire pour vous aider à atteindre vos objectifs grace à la technologie.
                        </p>
                    </div>
                    <div class="hero-button">
                        <a href="#">Découvrez nos services <i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="hero-section-right">
                    <div class="hero-thumb">
                        <img src="{{asset('showcase/assets/images/banner-shape.png')}}" alt="hero img" />
                    </div>
                    <div class="hero-icon-thumb1 hero-icon-animation">
                        <img src="{{asset('showcase/assets/images/hero-icon1.png')}}" alt="icon" />
                    </div>
                    <div class="hero-icon-thumb2 hero-icon-animation2 ">
                        <img src="{{asset('showcase/assets/images/hero-icon2.png')}}" alt="icon" />
                    </div>
                    <div class="hero-icon-thumb3 hero-icon-animation3 ">
                        <img src="{{asset('showcase/assets/images/hero-icon3.png')}}" alt="icon" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- hero section area end -->

<!--feature-area-start-->
<div class="feature-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title t-left">
                    <div class="section-sub-title">
                        <h5>Nos Services</h5>
                    </div>
                    <div class="section-main-title">
                        <h2>Des solutions pratiques </h2>
                        <h1>pour vos besoins</h1>
                    </div>
                    <div class="feature-description">
                        <p>Informatic Solutions propose une gamme complète de services informatiques pour répondre à vos besoins.
                            Nous vous proposons des moyens de developper vos compétences et ainsi d'améliorer votre productivité.
                        </p>
                    </div>
                    <div class="feature-btn">
                        <div class="zomia-button">
                            <a href="#">Tous nos services <i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-feature">
                            <div class="feature-content">
                                <div class="feature-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/feture-img1.png')}}" alt="icom">
                                </div>
                                <div class="feature-title">
                                    <h3>Création des sites web</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-feature">
                            <div class="feature-content">
                                <div class="feature-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/feture-img2.png')}}" alt="icom">
                                </div>
                                <div class="feature-title">
                                    <h3>Developpement de logiciels</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-feature">
                            <div class="feature-content four">
                                <div class="feature-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/feture-img3.png')}}" alt="icom">
                                </div>
                                <div class="feature-title">
                                    <h3>Formations et Stages</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-feature">
                            <div class="feature-content four">
                                <div class="feature-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/feture-img4.png')}}" alt="icom">
                                </div>
                                <div class="feature-title">
                                    <h3>Sécurité Informatique</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--feature-area-end-->

<!--about us-area-start-->
<div class="about-us-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-section-right">
                    <div class="about-thumb">
                        <img src="{{asset('showcase/assets/images/about-img.png')}}" alt="about img" />
                    </div>
                    <div class="about-shape-thumb shape-img-animation">
                        <img src="{{asset('showcase/assets/images/about-shape.png')}}" alt="about img" />
                    </div>
                    <div class="abt-thumb abt-img-animation">
                        <img src="{{asset('showcase/assets/images/about-img2.png')}}" alt="about img" />
                    </div>
                    <div class="about-icon-thumb rotateme">
                        <img src="{{asset('showcase/assets/images/about-icon.png')}}" alt="about img" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title t-left">
                    <div class="section-sub-title">
                        <h5>A propos</h5>
                    </div>
                    <div class="section-main-title">
                        <h4>Entreprise à caractère éducative, </h4>
                        <h4>commerciale et technologique,</h4>
                    </div>
                    <div class="about-description">
                        <p>
                            Informatic solutions est une plateforme où toute personne ou entreprise en quête
                            d’un quelconque service ou connaissance en informatique, peut trouver
                            satisfaction et cela de manière adapté aux moyens uniques.
                        </p>
                    </div>
                    <div class="about-content-inner">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="two fas fa-check"></i>
                                <h4>Innovation</h4>
                            </li>
                            <li>
                                <i aria-hidden="true" class="two fas fa-check"></i>
                                <h4>Qualité</h4>
                            </li>
                            <li>
                                <i aria-hidden="true" class="two fas fa-check"></i>
                                <h4>Confiance</h4>
                            </li>
                            <li>
                                <i aria-hidden="true" class="two fas fa-check"></i>
                                <h4>Equipe</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="about-button">
                        <div class="zomia-button">
                            <a href="#">En savoir plus<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--about us-area-end-->

<!--process-area-start-->
<div class="process-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title t-center">
                    <div class="section-sub-title">
                        <h5>Réalisations</h5>
                    </div>
                    <div class="section-main-title">
                        <h1>Nos solutions déjà existantes</h1>
                    </div>
                    <div class="section-description">
                        <p>
                            Nous avons déjà une gamme d'innovations technologiques. Voici
                            des solutions qui démontrent notre expertise et notre capacité
                            à répondre aux besoins de tous.
                        </p>
                    </div>
                    <div class="process-title-shape-thumb">
                        <img src="{{asset('showcase/assets/images/process-title-shape.png')}}" alt="shape" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-process">
                    <div class="process-content">
                        <div class="process-icon-thumb">
                            <img src="{{asset('showcase/assets/images/process-icon1.png')}}" alt="icon" />
                        </div>
                        <div class="process-title">
                            <h3>CouturePRO</h3>
                        </div>
                        <div class="process-description">
                            <p>
                                Un logiciel de gestion complète de votre entreprise de confection de
                                vetements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-process">
                    <div class="process-content">
                        <div class="process-icon-thumb">
                            <img src="{{asset('showcase/assets/images/process-icon2.png')}}" alt="icon" />
                        </div>
                        <div class="process-title">
                            <h3>IS SchoolManager</h3>
                        </div>
                        <div class="process-description">
                            <p>
                                Un logiciel de gestion de votre établissement scolaire(de la maternel à L'université).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-process">
                    <div class="process-content">
                        <div class="process-icon-thumb">
                            <img src="{{asset('showcase/assets/images/process-icon3.png')}}" alt="icon" />
                        </div>
                        <div class="process-title">
                            <h3>Treperd</h3>
                        </div>
                        <div class="process-description">
                            <p>
                                Un réseau social spécialisé dans la récuperation d'objet perdu et retrouvé
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--process-area-end-->

<!--screenshot-area-start-->
<div class="screenshot-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title t-center">
                    <div class="section-sub-title">
                        <h5>Visuels</h5>
                    </div>
                    <div class="section-main-title">
                        <h1>Explorez en images nos solutions</h1>
                    </div>
                    <div class="section-description">
                        <p>Une experience utilisateur unique.
                            La qualité toujours au rendez-vous, et la simplicité
                            pour vous permettre d'etre optimal
                        </p>
                    </div>
                    <div class="screenshot-title-shape-thumb">
                        <img src="{{asset('showcase/assets/images/screenshot-title-shape.png')}}" alt="shape" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row screenshot">
            <div class="screenshot-slide owl-carousel">
                <div class="col-lg-12">
                    <div class="single-screenshot">
                        <div class="screenshot-thumb">
                            <img src="{{asset('showcase/assets/images/screenshot-img1.png')}}" alt="screenshot img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-screenshot">
                        <div class="screenshot-thumb">
                            <img src="{{asset('showcase/assets/images/screenshot-img2.png')}}" alt="screenshot img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-screenshot">
                        <div class="screenshot-thumb">
                            <img src="{{asset('showcase/assets/images/screenshot-img3.png')}}" alt="screenshot img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-screenshot">
                        <div class="screenshot-thumb">
                            <img src="{{asset('showcase/assets/images/screenshot-img4.png')}}" alt="screenshot img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-screenshot">
                        <div class="screenshot-thumb">
                            <img src="{{asset('showcase/assets/images/screenshot-img5.png')}}" alt="screenshot img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--screenshot-area-end-->

<!--feedback area-start-->
<div class="feedback-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title t-left">
                    <div class="section-sub-title">
                        <h5>Nos clients</h5>
                    </div>
                    <div class="section-main-title">
                        <h2>Plus de 36K entreprises de tout secteur</h2>
                        <h1>et utilisateurs</h1>
                    </div>
                    <div class="feedback-description">
                        <p>Nous comprenons les besoins uniques de chaque client et nous engageons à fournir des
                            solutions personnalisées pour répondre à leurs objectifs.
                        </p>
                    </div>
                    <div class="zomia-button">
                        <a href="#">Voir tous nos clients <i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="feedback-right">
                    <div class="single-feedback">
                        <div class="feedback-content">
                            <div class="feedback-thumb">
                                <img src="{{asset('showcase/assets/images/feedback1.png')}}" alt="img" />
                            </div>
                            <div class="feedback-inner">
                                <div class="feedback-title">
                                    <h3>Anowar, Zomia CEO</h3>
                                </div>
                                <div class="feedback-description">
                                    <p>“Phosfluorescently e-enable front-end this Completely empower an expanded”
                                    </p>
                                </div>
                                <div class="feedback-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/tweeter.png')}}" alt="icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-feedback two">
                        <div class="feedback-content">
                            <div class="feedback-thumb">
                                <img src="{{asset('showcase/assets/images/feedback2.png')}}" alt="img" />
                            </div>
                            <div class="feedback-inner">
                                <div class="feedback-title">
                                    <h3>MD Atikul, Admin</h3>
                                </div>
                                <div class="feedback-description">
                                    <p>“Phosfluorescently e-enable front-end this Completely empower an expanded”
                                    </p>
                                </div>
                                <div class="feedback-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/tweeter.png')}}" alt="icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-feedback">
                        <div class="feedback-content">
                            <div class="feedback-thumb">
                                <img src="{{asset('showcase/assets/images/feedback3.png')}}" alt="img" />
                            </div>
                            <div class="feedback-inner">
                                <div class="feedback-title">
                                    <h3>Benatha, Manager</h3>
                                </div>
                                <div class="feedback-description">
                                    <p>“Phosfluorescently e-enable front-end this Completely empower an expanded”
                                    </p>
                                </div>
                                <div class="feedback-icon-thumb">
                                    <img src="{{asset('showcase/assets/images/tweeter.png')}}" alt="icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--feedback area-end-->

<!--team-area-start-->
<div class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title t-center">
                    <div class="section-sub-title">
                        <h5>Equipe</h5>
                    </div>
                    <div class="section-main-title">
                        <h1>L'équipe d'Experts</h1>
                    </div>
                    <div class="section-description">
                        <p>
                            Rencontrez notre équipe de professionnels chevronnés qui vous
                            accompagnent dans votre projet.
                        </p>
                    </div>
                    <div class="team-title-thumb">
                        <img src="{{asset('showcase/assets/images/team-title-shape.png')}}" alt="shape" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{asset('showcase/assets/images/team1.png')}}" alt="team img">
                    </div>
                    <div class="team-social-icon">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                        <a href="#"><i aria-hidden="true" class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-youtube"></i></a>
                        <a href="#"><i class="flaticon flaticon-pinterest-1"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-content-inner">
                            <div class="team-content-title">
                                <a href="#">
                                    <h3 class="name">David Alexon</h3>
                                </a>
                                <h4 class="designation">App Developer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{asset('showcase/assets/images/team2.png')}}" alt="team img">
                    </div>
                    <div class="team-social-icon">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                        <a href="#"><i aria-hidden="true" class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-youtube"></i></a>
                        <a href="#"><i class="flaticon flaticon-pinterest-1"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-content-inner">
                            <div class="team-content-title">
                                <a href="#">
                                    <h3 class="name">Gautom Norman</h3>
                                </a>
                                <h4 class="designation">HR Manager</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{asset('showcase/assets/images/team3.png')}}" alt="team img">
                    </div>
                    <div class="team-social-icon">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                        <a href="#"><i aria-hidden="true" class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-youtube"></i></a>
                        <a href="#"><i class="flaticon flaticon-pinterest-1"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-content-inner">
                            <div class="team-content-title">
                                <a href="#">
                                    <h3 class="name">Philip Anthorpy</h3>
                                </a>
                                <h4 class="designation">UI Designer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{asset('showcase/assets/images/team4.png')}}" alt="team img">
                    </div>
                    <div class="team-social-icon">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                        <a href="#"><i aria-hidden="true" class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-youtube"></i></a>
                        <a href="#"><i class="flaticon flaticon-pinterest-1"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-content-inner">
                            <div class="team-content-title">
                                <a href="#">
                                    <h3 class="name">Monalisha Sen</h3>
                                </a>
                                <h4 class="designation">Web Designer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="team-button">
                    <a href="#">Voir toute l'équipe <i aria-hidden="true" class="fas fa-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--team-area-end-->

<!--call do action area-start-->
<div class="call-do-action-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="section-title t-left">
                    <div class="section-sub-title">
                        <h5>Informatic Solutions</h5>
                    </div>
                    <div class="section-main-title">
                        <h1>Crée ton compte Maintenant!</h1>
                    </div>
                    <div class="call-do-action-text">
                        <p>
                            Découvrez les possibilités infinies à partir d'aujourd'hui, ainsi que de nos
                            ressources exclusives.
                        </p>
                    </div>
                    <div class="call-do-button">
                        <div class="zomia-button">
                            <a href="#">Créer un compte</a>
                        </div>
                    </div>
                    <div class="call-do-button two">
                        <div class="zomia-button">
                            <a href="#">Partager</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="call-do-action-right">
                    <div class="call-do-action-thumb call-img-animation ">
                        <img src="{{asset('showcase/assets/images/call-do-img.png')}}" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--call-do-action-area-end-->

<!--pricing-area-start-->
<div class="pricing-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="section-title t-left">
                    <div class="section-sub-title">
                        <h5>Nos Plans Tarifaires</h5>
                    </div>
                    <div class="section-main-title">
                        <h2>Meilleures solutions</h2>
                        <h1>pour vous</h1>
                    </div>
                    <div class="section-description">
                        <p>Nos promotions et des tarifs exceptionels à votre portée.
                            Choisissez le plan qui convient le mieux à vos besoins.
                        </p>
                    </div>
                    <div class="zomia-button">
                        <a href="#">Voir les tarifs <i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-pricing">
                    <div class="pricing-content">
                        <div class="pricing-head active">
                            <div class="pricing-title">
                                <h4>Sites web </h4>
                            </div>
                            <div class="pricing-rate">
                                <span class="dollar-sign">à partir de</span>
                                <span class="dollar">80.000</span>
                                <span class="month">FCFA</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <div class="price-featur">
                                <ul>
                                    <li> <i class="fas fa-check"></i>Only 2 professionals email</li>
                                    <li> <i class="fas fa-check"></i>CMS</li>
                                    <li> <i class="fas fa-check"></i>Free Domain &amp; Hosting</li>
                                    <li> <i class="fas fa-check"></i>Services, teams, about</li>
                                    <li> <i class="fas fa-check"></i>Contacts, réalisations</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <div class="priceing-btn">
                                <a href="#">Souscrire maintenant <i aria-hidden="true" class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-pricing">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title two">
                                <h4>Inscription à nos applications</h4>
                            </div>
                            <div class="pricing-rate two">
                                <span class="dollar-sign">à</span>
                                <span class="dollar">50.000</span>
                                <span class="month">FCFA</span>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <div class="price-featur">
                                <ul>
                                    <li> <i class="fas fa-check"></i>Only 2 Operations</li>
                                    <li> <i class="fas fa-check"></i>50+ Widgets</li>
                                    <li> <i class="fas fa-check"></i>Free Domain &amp; Hosting</li>
                                    <li> <i class="fas fa-check"></i>Order Notifications</li>
                                    <li> <i class="fa-sharp fa-solid fa-xmark"></i><del>Lifetime Support</del></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <div class="priceing-btn">
                                <a href="#">Souscrire Maintenant <i aria-hidden="true" class="fas fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--pricing-area-end-->

<!--contact-area Start-->
<div class="mt-5 contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="contact-address">
                                <div class="single-contact">
                                    <div class="contact-content d-flex">
                                        <div class="contact-icon">
                                            <i class="flaticon flaticon-map"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <div class="title">
                                                <h2>Notre Localisation</h2>
                                            </div>
                                            <div class="description">
                                                <p>Yaoundé, Bertoua <br>Douala</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-content d-flex">
                                        <div class="contact-icon">
                                            <i class="flaticon flaticon-email"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <div class="title">
                                                <h2>Quick Contact</h2>
                                            </div>
                                            <div class="description">
                                                <p>informaticsolutionsinfini<br> @gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-content d-flex">
                                        <div class="contact-icon">
                                            <i class="flaticon flaticon-phone-call"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <div class="title">
                                                <h2>Call us Now</h2>
                                            </div>
                                            <div class="description">
                                                <p>Orange: +237 695-626-133 <br>MTN: +237 679-410-223
                                                    <br>Camtel: +237 620-313-839</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-content d-flex">
                                        <div class="contact-icon">
                                            <i class="flaticon flaticon-time"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <div class="title">
                                                <h2>Opening Hours</h2>
                                            </div>
                                            <div class="description">
                                                <p>From Monday – Friday. <br>8 am to 8 pm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="contact-title">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="control-contact-form">
                                <form action="" method="POST" id="dreamit-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Your Email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Your Phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="address" placeholder="Ville">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-box">
                                                <input type="text" name="address" placeholder="Sujet">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-box">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ton Message"></textarea>
                                            </div>
                                            <div class="input-button">
                                                <button type="submit">Envoie le Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- contact-area end-->

{{-- <!--map-area-start-->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-map one">
                    <div class="map-bg">
                        <div class="map-content">
                            <div class="map-title">
                                <h3>Head One</h3>
                            </div>
                            <div class="map-inner">
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="map-description">
                                    <p>9/2B Avenue, Super Market<br />New York, NY</p>
                                </div>
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                </div>
                                <div class="map-description">
                                    <p>yourmail@gmail.com<br />example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-map two">
                    <div class="map-bg active">
                        <div class="map-content active">
                            <div class="map-title">
                                <h3>Head Office</h3>
                            </div>
                            <div class="map-inner">
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="map-description">
                                    <p>9/2B Avenue, Super Market<br />New York, NY</p>
                                </div>
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                </div>
                                <div class="map-description">
                                    <p>yourmail@gmail.com<br />example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-map three">
                    <div class="map-bg">
                        <div class="map-content">
                            <div class="map-title">
                                <h3>Head Two</h3>
                            </div>
                            <div class="map-inner">
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="map-description">
                                    <p>9/2B Avenue, Super Market<br />New York, NY</p>
                                </div>
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                </div>
                                <div class="map-description">
                                    <p>yourmail@gmail.com<br />example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-map">
                    <div class="map-bg">
                        <div class="map-content">
                            <div class="map-title">
                                <h3>Head Four</h3>
                            </div>
                            <div class="map-inner">
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="map-description">
                                    <p>9/2B Avenue, Super Market<br />New York, NY</p>
                                </div>
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                </div>
                                <div class="map-description">
                                    <p>yourmail@gmail.com<br />example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-map">
                    <div class="map-bg">
                        <div class="map-content">
                            <div class="map-title">
                                <h3>Head Three</h3>
                            </div>
                            <div class="map-inner">
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="map-description">
                                    <p>9/2B Avenue, Super Market<br />New York, NY</p>
                                </div>
                                <div class="map-icon">
                                    <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                </div>
                                <div class="map-description">
                                    <p>yourmail@gmail.com<br />example@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--map-area-end--> --}}

@endsection
