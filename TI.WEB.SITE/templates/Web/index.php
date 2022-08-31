<div id="main-slider" data-slider-width="100%" data-slider-height="860px" data-slider-arrows="true"
     data-slider-buttons="false" class="main-slider slider-pro">
    <div class="sp-slides">
        <!-- Slide 1-->
        <div class="sp-slide"><img src="assets/media/components/b-main-slider/bg-1.jpg" alt="slider"
                                   class="sp-image"/>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                             data-show-duration="2000" data-show-delay="1200" data-hide-delay="400"
                             class="main-slider__info sp-layer">
                        </div>
                        <h2 data-width="100%" data-show-transition="left" data-hide-transition="left"
                            data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                            class="main-slider__title sp-layer">IGREJA BATISTA BELA VISTA<br>A CASA DE DEUS</h2>
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                             data-show-duration="1200" data-show-delay="2000" data-hide-delay="400"
                             class="sp-layer" id="sobre1"><a href="#" style="scr" class="main-slider__btn btn btn-primary">Conheça sobre
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2-->
        <div class="sp-slide"><img src="assets/media/components/b-main-slider/bg-2.jpg" alt="slider"
                                   class="sp-image"/>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                             data-show-duration="2000" data-show-delay="1200" data-hide-delay="400"
                             class="main-slider__info sp-layer">Ajude na campanha de reciclagem
                        </div>
                        <h2 data-width="100%" data-show-transition="left" data-hide-transition="left"
                            data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                            class="main-slider__title sp-layer">PARTICIPE DOS EVENTOS DE APOIO A COMUNIDADE</h2>
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                             data-show-duration="1200" data-show-delay="2000" data-hide-delay="400"
                             class="sp-layer"><a href="/TI.WEB.SITE/eventos" class="main-slider__btn btn btn-default">Ver
                                eventos</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end .main-slider-->
<section class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="ui-decor-1"><img src="assets/media/general/ui-decor-1.png" alt="decor"
                                             class="center-block"></div>
                <div class="text-center">
                    <h2 class="ui-title-block ui-title-block_lg">Bem vindo a nossa <span
                            class="text-primary"> Igreja</span>
                    </h2>
                    <div class="ui-subtitle-block">A igreja busca sempre ser verdadeiramente cristã, muitas pessoas
                        buscam relacionamentos profundos, uma forma de abrir o coração e um caminho parase contectar
                        com Deus.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1"><i
                        class="b-advantages__icon text-primary icon-puzzle"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner">Missão</h3>
                        <div class="b-advantages__info">Aorem ipsum dolor sit amet consectetur elit sed lusm tempor
                            incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation
                        </div>
                    </div>
                </section>
                <!-- end .b-advantages-->

            </div>
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1"><i
                        class="b-advantages__icon text-primary icon-magic-wand"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner">Visão</h3>
                        <div class="b-advantages__info">
                            Aorem ipsum dolor sit amet consectetur elit sed lusm tempor
                            incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation
                        </div>
                    </div>
                </section>
                <!-- end .b-advantages-->

            </div>
            <div class="col-sm-4">
                <section class="b-advantages b-advantages-1"><i
                        class="b-advantages__icon text-primary icon-pie-chart"></i>
                    <div class="b-advantages__inner">
                        <h3 class="b-advantages__title ui-title-inner">Valores</h3>
                        <div class="b-advantages__info">Eorem ipsum dolor sit amet consectetur elit sed lusm tempor
                            incididunt ut labore et dolore mag aliqua enima minim veniam quis nostrud exercitation
                        </div>
                    </div>
                </section>
                <!-- end .b-advantages-->

            </div>
        </div>
    </div>
</section>

<!-- b-progress width parallax-->
<div class="section-progress section-progress_mod-a area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <ul class="b-progress-list b-progress-list_no-icon list-unstyled clearfix">
            <li class="b-progress-list__item">
                <div class="b-progress-list__label"></div>
                <span data-percent= <?= $queryMembros ?> class="b-progress-list__percent js-chart"><span
                        class="js-percent"></span></span><span
                    class="b-progress-list__name">Membros</span>
            </li>
            <li class="b-progress-list__item">
                <div class="b-progress-list__label"></div>
                <span data-percent= <?= $queryEventos ?> class="b-progress-list__percent js-chart"><span
                        class="js-percent"></span></span><span
                    class="b-progress-list__name">Eventos</span>
            </li>
            <li class="b-progress-list__item">
                <div class="b-progress-list__label"></div>
                <span data-percent= <?= $queryReciclagem ?> class="b-progress-list__percent js-chart"><span
                        class="js-percent"></span></span><span
                    class="b-progress-list__name">Reciclagens</span>
            </li>
        </ul>
    </div>
</div>
<!-- end b-progress width parallax-->

<section class="section-gallery">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ui-decor-1" style="text-align: center"><img src="assets/media/general/ui-decor-1.png" alt="decor"></div>
                <h2 class="ui-title-block" style="text-align: center"><span class="text-primary">Imagens</span> dos eventos</h2>
            </div>
        </div>
    </div>
    <div class="b-isotope">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="b-isotope-filter list-inline">
                        <li><a href="" data-filter="*" class="current">Todos os eventos</a></li>
                        <li><a href="" data-filter=".corporate">Acampamentos</a></li>
                        <li><a href="" data-filter=".birthday">Cultos</a></li>
                        <li><a href="" data-filter=".wedding">Reciclagem</a></li>
                        <li><a href="" data-filter=".product">Infantil</a></li>
                        <li><a href="" data-filter=".social">Outros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="b-isotope-grid grid list-unstyled js-zoom-gallery">
            <li class="grid-sizer"></li>
            <li class="b-isotope-grid__item grid-item corporate product"><a
                    href="assets/media/content/gallery/480x290/1.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/1.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate proposal"><a
                    href="assets/media/content/gallery/480x290/2.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/2.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday product social proposal"><a
                    href="assets/media/content/gallery/480x290/3.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/3.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding"><a href="assets/media/content/gallery/480x290/4.jpg"
                                                                  class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/4.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate product social proposal"><a
                    href="assets/media/content/gallery/480x290/5.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/5.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item birthday"><a href="assets/media/content/gallery/480x290/6.jpg"
                                                                   class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/6.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item wedding social"><a
                    href="assets/media/content/gallery/480x290/7.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/7.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
            <li class="b-isotope-grid__item grid-item corporate birthday"><a
                    href="assets/media/content/gallery/480x290/8.jpg"
                    class="b-isotope-grid__inner js-zoom-gallery__item"><img
                        src="assets/media/content/gallery/480x290/8.jpg" alt="foto"/><span
                        class="b-isotope-grid__wrap-info"><span class="b-isotope-grid__info"></span><i
                            class="icon icon-magnifier-add text-primary"></i></span></a></li>
        </ul>
    </div>
    <!-- end .b-isotope-->
    <div class="text-center"><a href="/TI.WEB.SITE/" class="b-isotope__btn btn btn-primary">Todas as fotos</a></div>
</section>
