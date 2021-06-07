    <footer id="footer" class="d-flex flex-column justify-content-center align-items-center text-white">
        <h3 class="fs-2 mb-2"><?php bloginfo('name') ?></h3>

        <ul class="social-icons">

            <?php
                $facebook_url = get_theme_mod('everest_theme_options_facebook', '#');
                $instagram_url = get_theme_mod('everest_theme_options_instagram', '#');
                $pinterest_url = get_theme_mod('everest_theme_options_pinterest', '#');
                $youtube_url = get_theme_mod('everest_theme_options_youtube', '#');
            ?>

            <?php if ( !empty( $facebook_url) ) : ?>
            <a href="<?php echo $facebook_url ?>" class="text-white">
                <i class="fab fa-facebook-square"></i>
            </a>
            <?php endif ?>
            
            <?php if ( !empty( $instagram_url) ) : ?>
            <a href="<?php echo $instagram_url ?>" class="text-white">
                <i class="fab fa-instagram"></i>
            </a>
            <?php endif ?>
            
            <?php if ( !empty( $pinterest_url) ) : ?>
            <a href="<?php echo $pinterest_url ?>" class="text-white">
                <i class="fab fa-pinterest-square"></i>
            </a>
            <?php endif ?>
            
            <?php if ( !empty( $youtube_url) ) : ?>
            <a href="<?php echo $youtube_url ?>" class="text-white">
                <i class="fab fa-youtube"></i>
            </a>
            <?php endif ?>
        </ul>
    </footer>

    <a href="#page-top" id="scroll-top" title="Aller en haut">
        <li class="fas fa-chevron-up fs-4"></li>
    </a>

    <?php wp_footer() ?>
</body>

</html>