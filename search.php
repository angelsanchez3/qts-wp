<?php get_header() ?>

<div class="realfactory-page-title-wrap  realfactory-style-medium realfactory-center-align">
    <div class="realfactory-header-transparent-substitute"></div>
    <div class="realfactory-page-title-overlay"></div>
    <div class="realfactory-page-title-container realfactory-container">
        <div class="realfactory-page-title-content realfactory-item-pdlr">
            <h1 class="realfactory-page-title">Pesquisa por: <?php echo get_search_query(); ?></h1>
        </div>
    </div>
</div>

<?php if (have_posts()) { ?>

    <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-section">
                <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column" style="padding-bottom: 40px;">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                ?>
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30">
                                        <div class="gdlr-core-blog-grid ">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" width="800" height="420"></a>
                                            </div>
                                            <div class="gdlr-core-blog-grid-content-wrap">
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                        <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#"><?php the_time('F j, Y'); ?></a></span>
                                                </div>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 26px;font-weight: 700;letter-spacing: 0px;">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="gdlr-core-blog-content">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                                    <div class="clear"></div>
                                                    <a class="gdlr-core-excerpt-read-more" href="<?php the_permalink(); ?>">Continuar a Ler<i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                wp_reset_query(); ?>
                            </div>
                            <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
                                <?php echo paginate_links(array(
                                    'prev_text' => '',
                                    'next_text' => ''

                                )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } else { ?>
    <div class="no-results">
        <h2>Sem resultados</h2>
    </div>
<?php } ?>

<?php get_footer() ?>