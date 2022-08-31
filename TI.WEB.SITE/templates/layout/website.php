<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Igreja Batista Bela Vista</title>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="assets/css/master.css"/>
    <!-- SWITCHER-->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css"/>
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1"/>
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2"/>
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3"/>
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4"/>
    <link href="assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5"/>
    <link rel="icon" type="image/x-icon" href="img/igreja/adultos/logo/logo2.png"/>
    <!--[if lt IE 9 ]>
    <script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script>
    <meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
</head>
<body>
<!-- Loader-->
<div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
<!-- Loader end-->

<div data-header="sticky" data-header-top="200" data-canvas="container" class="l-theme animated-css">
    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->
    <div data-off-canvas="mobile-slidebar left overlay">
        <ul class="nav navbar-nav">
            <li><a><?= $this->Html->link('Inicio', ['controller' => 'Web', 'action' => 'index']);?></a></li>
            <li><a><?= $this->Html->link('Eventos', ['controller' => 'Events', 'action' => 'index']);?></a></li>
            <li><a><?= $this->Html->link('Reciclagem', ['controller' => 'Delivery', 'action' => 'index']);?></a></li>
            <li><a><?= $this->Html->link('Contato', ['controller' => 'Web', 'action' => 'contato']);?></a></li>
            <?php if ($usuarioAtual != null): ?>
                <?php if ($usuarioAtual->role_id == 2 || $usuarioAtual->role_id == 5): ?>
                    <li><a><?= $this->Html->link('Login', ['controller' => 'Receive', 'action' => 'index']);?></a></li>
                <?php endif ?>
            <?php endif ?>
            <?php if ($usuarioAtual == null): ?>
                <li><a><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']);?></a></li>
            <?php else: ?>
                <li><a><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']);?></a></li>
            <?php endif ?>
        </ul>
    </div>
    <!-- ==========================-->
    <!-- FULL SCREEN MENU-->
    <!-- ==========================-->
    <div class="wrap-fixed-menu" id="fixedMenu">
        <nav class="fullscreen-center-menu">
            <div class="menu-main-menu-container">
                <ul class="nav navbar-nav">
                    <li><a><?= $this->Html->link('Inicio', ['controller' => 'Web', 'action' => 'index']);?></a></li>
                    <li><a><?= $this->Html->link('Eventos', ['controller' => 'Events', 'action' => 'index']);?></a></li>
                    <li><a><?= $this->Html->link('Reciclagem', ['controller' => 'Delivery', 'action' => 'index']);?></a></li>
                    <li><a><?= $this->Html->link('Contato', ['controller' => 'Web', 'action' => 'contato']);?></a></li>
                    <?php if ($usuarioAtual != null): ?>
                        <?php if ($usuarioAtual->role_id == 2 || $usuarioAtual->role_id == 5): ?>
                            <li><a><?= $this->Html->link('Login', ['controller' => 'Receive', 'action' => 'index']);?></a></li>
                        <?php endif ?>
                    <?php endif ?>
                    <?php if ($usuarioAtual == null): ?>
                        <li><a><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']);?></a></li>
                    <?php else: ?>
                        <li><a><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']);?></a></li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>
        <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
    </div>

    <header
        class="header header-boxed-width header-background-trans header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
        <div class="top-bar">
            <div class="container container-boxed-width">
                <div class="container">
                    <div class="header-topbarbox-1">
                        <ul class="top-bar-contact">
                            <li class="top-bar-contact__item"><i class="icon icon-call-in"></i>
                                31 985054547
                            </li>
                            <li class="top-bar-contact__item"><i class="icon icon-envelope-open"></i>
                                igbatistabelavista@gmail.com
                            </li>
                            <li class="top-bar-contact__item"><i class="icon icon-clock"></i> Todos os dias</li>
                        </ul>
                    </div>
                    <div class="header-topbarbox-2">
                        <ul class="social-net list-inline">
                            <li class="social-net__item"><a href="twitter.com"
                                                            class="social-net__link text-primary_h"><i
                                        class="icon fa fa-twitter"></i></a></li>
                            <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i
                                        class="icon fa fa-facebook"></i></a></li>
                            <li class="social-net__item"><a href="plus.google.com"
                                                            class="social-net__link text-primary_h"><i
                                        class="icon fa fa-google-plus"></i></a></li>
                            <li class="social-net__item"><a href="linkedin.com" class="social-net__link text-primary_h"><i
                                        class="icon fa fa-linkedin"></i></a></li>
                        </ul>
                        <!-- end social-list-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-boxed-width">
            <nav id="nav" class="navbar">
                <div class="container">
                    <div class="header-navibox-1" style="padding: 0px">
                        <!-- Mobile Trigger Start-->
                        <button
                            class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i
                                class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i>
                        </button>
                        <!-- Mobile Trigger End--><a href="/TI.WEB.SITE/" class="navbar-brand scroll"><img
                                src="img/igreja/adultos/logo/logo2.png" style="width: 100px;" alt="logo"
                                class="normal-logo"/><img
                                src="img/igreja/adultos/logo/logo1.png" style="width: 150px;" alt="logo"
                                class="scroll-logo hidden-xs"/></a>
                    </div>
                    <div class="header-navibox-2">
                        <ul class="yamm main-menu nav navbar-nav">
                            <li><?= $this->Html->link('Inicio', ['controller' => 'Web', 'action' => 'index']);?></li>
                            <li><?= $this->Html->link('Eventos', ['controller' => 'Events', 'action' => 'index']);?></li>
                            <li><?= $this->Html->link('Reciclagem', ['controller' => 'Delivery', 'action' => 'index']);?></li>
                            <li><?= $this->Html->link('Contato', ['controller' => 'Web', 'action' => 'contato']);?></li>
                            <?php if ($usuarioAtual != null): ?>
                                <?php if ($usuarioAtual->role_id == 2 || $usuarioAtual->role_id == 5): ?>
                                    <li><?= $this->Html->link('Motorista', ['controller' => 'Receive', 'action' => 'index']);?></li>
                                <?php endif ?>
                            <?php endif ?>
                            <?php if ($usuarioAtual == null): ?>
                                <li><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']);?></li>
                            <?php else: ?>
                                <li><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']);?></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <?= $this->fetch('content') ?>
    <footer class="footer">
        <div class="footer__main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center"><a href="/TI.WEB.SITE/" class="footer__logo"><img
                                    src="img/igreja/adultos/logo/logo2.png" style="width: 250px;" alt="Logo"
                                    class="img-responsive"/></a></div>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i> Contato
                        </h3>
                        <div class="footer__contact"><i class="icon icon-map"></i> Rua Décio Cardoso 196, Bela Vista,
                            Ibirite
                        </div>
                        <div class="footer__contact"><i class="icon icon-call-in"></i> (31) 985054547</div>
                        <div class="footer__contact"><i class="icon icon-envelope-open"></i>
                            igbatistabelavista@gmail.com
                        </div>
                        <div class="footer__contact"><i class="icon icon-clock"></i> Todos os dias
                        </div>
                    </section>
                </div>
            </div>
        </div>
</div>
<div class="footer__bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="copyright pull-left">© 2022<strong> Raphael Tonelli, Monique Feitosa e Rafael
                        Oliveira</strong> - Todos os direitos reservados.
                </div>
                <ul class="social-net list-inline pull-right">
                    <li class="social-net__item"><a href="youtube.com"
                                                    class="social-net__link text-primary_h"><i
                                class="icon fa fa-youtube"></i></a></li>
                    <li class="social-net__item"><a href="twitter.com"
                                                    class="social-net__link text-primary_h"><i
                                class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link text-primary_h"><i
                                class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="plus.google.com"
                                                    class="social-net__link text-primary_h"><i
                                class="icon fa fa-google-plus"></i></a></li>
                    <li class="social-net__item"><a href="instagram.com"
                                                    class="social-net__link text-primary_h"><i
                                class="icon fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
</div>

<script src="assets/libs/jquery-1.12.4.min.js"></script>
<script src="assets/libs/jquery-migrate-1.2.1.js"></script>
<!-- Bootstrap-->
<script src="assets/libs/bootstrap/bootstrap.min.js"></script>
<!-- User customization-->
<script src="assets/js/custom.js"></script>
<!---->
<!-- Color scheme-->
<script src="assets/plugins/switcher/js/dmss.js"></script>
<!-- Select customization & Color scheme-->
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<!-- Slider 1-->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- Slider 2-->
<script src="assets/plugins/bxslider/vendor/jquery.easing.1.3.js"></script>
<script src="assets/plugins/bxslider/vendor/jquery.fitvids.js"></script>
<script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<!-- Pop-up window-->
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Headers scripts-->
<script src="assets/plugins/headers/slidebar.js"></script>
<script src="assets/plugins/headers/header.js"></script>
<!-- Mail scripts-->
<script src="assets/plugins/jqBootstrapValidation.js"></script>
<script src="assets/plugins/contact_me.js"></script>
<!-- Parallax-->
<script src="assets/plugins/stellar/jquery.stellar.min.js"></script>
<!-- Filter and sorting images-->
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/isotope/imagesLoaded.js"></script>
<!-- Progress numbers-->
<script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
<!-- Animations-->
<script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
<!-- Main slider-->
<script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
</body>
</html>
