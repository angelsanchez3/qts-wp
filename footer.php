<footer>
    <div class="realfactory-footer-wrapper">
        <div class="realfactory-footer-container realfactory-container clearfix">
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="text-3" class="widget widget_text realfactory-widget">
                    <div class="textwidget c-footer-logo">
                        <span class="gdlr-core-space-shortcode" style="margin-top: -2px;"></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/qts-white-jpg.jpg" alt="" width="110px">
                        <span class="gdlr-core-space-shortcode" style="margin-top: 7px;"></span>
                        <div class="realfactory-top-bar-right-social">
                            <a href="#" target="_blank" class="facebook-footer" title="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="linkedin-footer" title="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank" class="youtube-footer" title="youtube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <div class="c-newsletter">
                            <div class="c-newsletter-text">Subscreva à nossa newsletter</div>
                            <form>
                                <input type="text" name="your-company" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email">
                                <button type="submit" class="submit-button"><span><em>Subscrever</em></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="nav_menu-4" class="widget widget_nav_menu realfactory-widget">
                    <h3 class="realfactory-widget-title">A Empresa</h3>
                    <div class="menu-market-sectors-container">
                        <ul id="menu-market-sectors" class="menu">
                            <li class="menu-item"><a href="<?php echo site_url('/about'); ?>">Sobre Nós</a></li>
                            <li class="menu-item"><a href="<?php echo site_url('/information'); ?>">Informações</a></li>
                            <li class="menu-item"><a href="<?php echo site_url('/news'); ?>">Notícias</a></li>
                            <li class="menu-item"><a href="<?php echo site_url('/contact'); ?>">Contactos</a></li>
                            <li class="menu-item"><a href="<?php echo site_url('/privacy-policy'); ?>">Política de Privacidade</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="recent-posts-3" class="widget widget_recent_entries realfactory-widget">
                    <h3 class="realfactory-widget-title">Serviços</h3>
                    <ul>
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
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="realfactory-footer-column realfactory-item-pdlr realfactory-column-15">
                <div id="text-7" class="widget widget_text realfactory-widget">
                    <h3 class="realfactory-widget-title">Contactos</h3>
                    <div class="textwidget">
                        <p>
                            <i class="fa fa-location-arrow" style="font-size: 20px;color: #99c329;margin-left: 0px;margin-right: 10px;"></i> R. Pomar de Marvila, Lote 15, Parque Industrial de Sequeira, Braga, Portugal
                            <br> <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span>
                            <br> <i class="fa fa-phone" style="font-size: 20px;color: #99c329;margin-right: 10px;"></i> +351 911 509 738
                            <br> <span class="gdlr-core-space-shortcode" style="margin-top: -6px;"></span>
                            <br> <i class="fa fa-envelope-o" style="font-size: 20px;color: #99c329;margin-left: 0px;margin-right: 10px;"></i> geral@qtservices.pt
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<?php wp_footer(); ?>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

</body>

</html>