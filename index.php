<?php get_header() ?>

<header id="home-header" class="d-flex flex-column align-items-center text-white" style="<?php echo get_bg_image() ?>">
    <h1 class="display-3 mb-4"><?php bloginfo('name') ?></h1>
    <p class="blog-description"><?php bloginfo('description') ?></p>
</header>

<main>
    <section class="container py-5">
        <div class="row">
            <?php 
                get_template_part( 'template-parts/content');
                get_sidebar(); 
            ?>
        </div>
    </section>
</main>

<?php get_footer() ?>
