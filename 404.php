<?php get_header() ?>

<header id="post-header" class="d-flex flex-column align-items-center text-white" style="<?php echo get_bg_image() ?>">
    <h1 class="display-5 mb-4">Page not found</h1>
</header>

<main>
    <section class="container py-5">
        <div class="row">
            <?php 
                get_template_part( 'template-parts/content', 'none');
                get_sidebar(); 
            ?>
        </div>
    </section>
</main>

<?php get_footer() ?>
