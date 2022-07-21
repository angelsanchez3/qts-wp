<?php get_header(); ?>

<div class="realfactory-page-title-wrap  realfactory-style-medium realfactory-center-align">
    <div class="realfactory-header-transparent-substitute"></div>
    <div class="realfactory-page-title-overlay"></div>
    <div class="realfactory-page-title-container realfactory-container">
        <div class="realfactory-page-title-content realfactory-item-pdlr">
            <h1 class="realfactory-page-title">Sobre Nós</h1>
        </div>
    </div>
</div>
<div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <?php while(have_posts()) {
                        the_post();
                    ?>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-left" style="padding: 100px 100px 0px 0px;" data-sync-height="height-1">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f1f0f0 ;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8"></div>
                        </div>
                    </div>
                    <?php the_content(); } ?>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" data-skin="Dark">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" style="padding: 130px 0px 30px 70px;" data-sync-height="height-2">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #1f1f1f ;"></div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 40px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-1.png" alt="" width="62" height="62">
                                        </div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 21px;text-transform: none;">Certificação 1</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" style="font-size: 16px;">
                                                <p>Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 45px;margin-left: 5px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-2.png" alt="" width="53" height="61">
                                        </div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 21px;text-transform: none;">Certificação 2</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" style="font-size: 16px;">
                                                <p>Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 49px;margin-bottom: 0px;margin-left: 13px;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-3.png" alt="" width="40" height="61">
                                        </div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 21px;text-transform: none;">Certificação 3</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" style="font-size: 16px;">
                                                <p>Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>