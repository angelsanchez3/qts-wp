<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>QTS Quality, Trading & Services</title> -->

    <?php wp_head(); ?>

</head>

<body data-rsssl="1" class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js realfactory-body realfactory-body-front realfactory-full  realfactory-with-sticky-navigation gdlr-core-link-to-lightbox">
    <div class="realfactory-mobile-header-wrap">
        <div class="realfactory-mobile-header realfactory-header-background realfactory-style-slide" id="realfactory-mobile-header">
            <div class="realfactory-mobile-header-container realfactory-container">
                <div class="realfactory-logo  realfactory-item-pdlr">
                    <div class="realfactory-logo-inner">
                        <a href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/qts-110x52.png" alt="QTS Logo"></a>
                    </div>
                </div>
                <div class="realfactory-mobile-menu-right">
                    <div class="realfactory-main-menu-search" id="realfactory-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="realfactory-top-search-wrap">
                        <div class="realfactory-top-search-close"></div>
                        <div class="realfactory-top-search-row">
                            <div class="realfactory-top-search-cell">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="realfactory-mobile-menu"><a class="realfactory-mm-menu-button realfactory-mobile-menu-button realfactory-mobile-button-hamburger-with-border" href="#realfactory-mobile-menu"><i class="fa fa-bars"></i></a>
                        <div class="realfactory-mm-menu-wrap realfactory-navigation-font" id="realfactory-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-has-children"><a href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo site_url('/about'); ?>">Sobre Nós</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Serviços</a>
                                    <ul class="sub-menu">
                                        <?php
                                        $args = array(
                                            'post_type' => 'service',
                                            'orderby' => 'ID',
                                            'order'   => 'ASC',
                                        );
                                        $services = new WP_Query($args);

                                        while ($services->have_posts()) {
                                            $services->the_post();
                                        ?>
                                            <li class="menu-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo site_url('/information'); ?>">Informações</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo site_url('/news'); ?>">Notícias</a>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo site_url('/contact'); ?>">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="realfactory-body-outer-wrapper ">
        <div class="realfactory-body-wrapper clearfix  realfactory-with-transparent-navigation realfactory-with-frame">
            <div class="realfactory-top-bar">
                <div class="realfactory-top-bar-background"></div>
                <div class="realfactory-top-bar-container clearfix realfactory-container ">
                    <div class="realfactory-top-bar-left realfactory-item-pdlr c-header-logo-wrapper">
                        <div class="realfactory-top-bar-right-social c-header-logo">
                            <a href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/qts-110x52.png" alt="QTS Logo"></a>
                        </div>
                    </div>
                    <div class="realfactory-top-bar-right realfactory-item-pdlr c-header-social-wrapper">
                        <div class="realfactory-top-bar-right-social">
                            <a href="https://www.facebook.com/qualitytradingservices" target="_blank" class="realfactory-top-bar-social-icon" title="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/qts-quality-trading-services/" target="_blank" class="realfactory-top-bar-social-icon" title="linkedin"><i class="fa fa-linkedin"></i></a>
                            <!-- <a href="#" target="_blank" class="realfactory-top-bar-social-icon" title="youtube"><i class="fa fa-youtube-play"></i></a> -->
                        </div>
                    </div>
                    <div class="realfactory-top-bar-right realfactory-item-pdlr">
                        <div class="gdlr-core-dropdown-tab gdlr-core-js clearfix">
                            <?php echo do_shortcode('[language-switcher]'); ?>
                        </div>
                    </div>
                    <div class="realfactory-top-bar-right realfactory-item-pdlr">
                        <div class="gdlr-core-dropdown-tab gdlr-core-js clearfix">
                            <div class="gdlr-core-dropdown-tab-content-wrap">
                                <div class="gdlr-core-dropdown-tab-content gdlr-core-active" data-index="0">
                                    <i class="fa fa-phone" style="font-size: 16px;color: #99c329;margin-right: 10px;"></i> +351 911 509 738 <i class="fa fa-envelope-o" style="font-size: 16px;color: #99c329;margin-left: 24px;margin-right: 10px;"></i> marketing@qtservices.pt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="realfactory-navigation-bar-wrap  realfactory-style-transparent realfactory-sticky-navigation realfactory-sticky-navigation-height realfactory-style-left  realfactory-style-fixed realfactory-without-placeholder">
                <div class="realfactory-navigation-background"></div>
                <div class="realfactory-navigation-container clearfix  realfactory-container">
                    <div class="realfactory-navigation realfactory-item-pdlr clearfix ">
                        <div class="realfactory-main-menu" id="realfactory-main-menu">
                            <ul id="menu-main-navigation-1" class="sf-menu">
                                <li id="h-nav" class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="<?php echo site_url(''); ?>" class="sf-with-ul-pre">Home</a>
                                </li>
                                <li id="about-nav" class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="<?php echo site_url('/about'); ?>" class="sf-with-ul-pre">Sobre Nós</a>
                                </li>
                                <li id="services-nav" class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="#" class="sf-with-ul-pre">Serviços</a>
                                    <ul class="sub-menu">
                                        <?php
                                        $args = array(
                                            'post_type' => 'service',
                                            'orderby' => 'ID',
                                            'order'   => 'ASC',
                                        );
                                        $services = new WP_Query($args);

                                        while ($services->have_posts()) {
                                            $services->the_post();
                                        ?>
                                            <li class="menu-item" data-size="60"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li id="info-nav" class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="<?php echo site_url('/information'); ?>" class="sf-with-ul-pre">Informações</a>
                                </li>
                                <li id="news-nav" class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="<?php echo site_url('/news'); ?>" class="sf-with-ul-pre">Notícias</a>
                                </li>
                                <li id="cont-nav" class="menu-item menu-item-has-children realfactory-normal-menu current-menu-item">
                                    <a href="<?php echo site_url('/contact'); ?>" class="sf-with-ul-pre">Contactos</a>
                                </li>
                            </ul>
                            <div class="realfactory-navigation-slide-bar" id="realfactory-navigation-slide-bar"></div>
                        </div>
                        <div class="realfactory-main-menu-right-wrap clearfix ">
                            <div class="realfactory-main-menu-search" id="realfactory-top-search"><i class="fa fa-search"></i></div>
                            <div class="realfactory-top-search-wrap">
                                <div class="realfactory-top-search-close"></div>
                                <div class="realfactory-top-search-row">
                                    <div class="realfactory-top-search-cell">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>