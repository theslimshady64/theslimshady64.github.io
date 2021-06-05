<?php get_header(); ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="menu col-lg-3 d-none d-lg-block">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-9">
                <h1 class="h1 page-header">ПАО «Саратовский НПЗ»</h1>
                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="view overlay">
                                <img src="<?= bloginfo('template_directory'); ?>/img/slider/main.jpg" class="img-fluid">
                                <a>
                                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="view overlay">
                                <img src="<?= bloginfo('template_directory'); ?>/img/slider/main-2.jpg" class="img-fluid">
                                <a>
                                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="view overlay">
                                <img src="<?= bloginfo('template_directory'); ?>/img/slider/main-3.jpg" class="img-fluid">
                                <a>
                                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
