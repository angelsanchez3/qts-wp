<?php get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="realfactory-style-medium realfactory-center-align realfactory-page-title-wrap">
        <div class="realfactory-header-transparent-substitute"></div>
        <div class="realfactory-page-title-overlay"></div>
        <div class="realfactory-page-title-container realfactory-container">
            <!-- <div class="realfactory-page-title-content realfactory-item-pdlr">
                <h1 class="realfactory-page-title" style="color:#727272;"><?php the_title(); ?></h1>
            </div> -->
        </div>
    </div>
    <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-sidebar-wrapper ">
                <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container c-news-post-wrap">
                    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right c-news-post" style="padding: 25px 0px 40px 0px;">
                        <div class="gdlr-core-pbf-sidebar-content-inner">

                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class="realfactory-page-title-content c-news-title">
                                                    <h1 class="realfactory-page-title"><?php the_title(); ?></h1>
                                                </div>
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider" style="margin-bottom: 10px"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                        <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span>
                                                        <a href="#"><?php the_time('F j, Y'); ?></a></span>
                                                </div>
                                                <div class="c-news-feature-image">
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="feature image">
                                                </div>
                                                <div class="gdlr-core-text-box-item-content">
                                                    <?php
                                                    the_content();
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-modern" style="padding-bottom: 10px;">
                                <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    <?php
                                    $get_the_id = get_the_ID();
                                    $size = array(800, 570);
                                    $media = get_attached_media('image', get_the_ID());
                                    console_log($get_the_id);
                                    foreach ($media as $id  => $attachment) :

                                        $title = esc_html($attachment->post_title, 1);
                                        $img = wp_get_attachment_image_src($id, $size);

                                        $output .= '';
                                        $output .= '<div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-30">';
                                        $output .= '<div class="gdlr-core-portfolio-modern">';
                                        $output .= '<div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">';
                                        $output .= '<div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">';
                                        $output .= '<img src="' . esc_url($img[0]) . '" alt="' . esc_attr($title) . '" width="800" height="570">';
                                        $output .= '<span class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">';
                                        $output .= '<span class="gdlr-core-image-overlay-content"><span class="gdlr-core-portfolio-title gdlr-core-title-font">';
                                        $output .= '<a href="' . esc_url(wp_get_attachment_url($id)) . '">' . esc_attr($title) . '</a></span>';
                                        $output .= '<span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-ilightbox gdlr-core-js " href="' . esc_url(wp_get_attachment_url($id)) . '" data-ilightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon icon_zoom-in_alt"></i></a></span>';
                                        $output .= '</span></span></div></div></div></div>';

                                    endforeach;
                                    print_r($output);
                                    ?>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<?php get_footer(); ?>