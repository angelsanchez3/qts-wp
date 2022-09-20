<?php get_header(); ?>

<?php while (have_posts()) { 
    the_post();
?>
<div class="realfactory-page-title-wrap  realfactory-style-medium realfactory-center-align">
    <div class="realfactory-header-transparent-substitute"></div>
    <div class="realfactory-page-title-overlay"></div>
    <div class="realfactory-page-title-container realfactory-container">
        <div class="realfactory-page-title-content realfactory-item-pdlr">
            <h1 class="realfactory-page-title"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right c-service-page" style="padding: 25px 0px 40px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <?php the_content(); ?>
                            <!-- <div class="gdlr-core-pbf-column gdlr-core-column-24">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <?php
                                        $get_the_id = get_the_ID();
                                        $size = array(800, 570);
                                        $media = get_attached_media('image', get_the_ID());
                                        console_log($get_the_id);
                                        foreach ($media as $id  => $attachment) :

                                            $title = esc_html($attachment->post_title, 1);
                                            $img = wp_get_attachment_image_src($id, $size);

                                            $output .= '<div class="gdlr-core-pbf-element">';
                                            $output .= '<div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">';
                                            $output .= '<div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">';
                                            $output .= '<a class="gdlr-core-ilightbox gdlr-core-js " href="' . esc_url(wp_get_attachment_url($id)) . '">';
                                            $output .= '<img src="' . esc_url($img[0]) . '" alt="' . esc_attr($title) . '" width="920" height="415"><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon fa fa-search gdlr-core-size-22"></i></span></a>';
                                            $output .= '</div></div></div>';
                                        endforeach;
                                        print_r($output);
                                        ?>
                                    </div>
                                </div>
                            </div> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>