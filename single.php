<?php 
get_header();

while ( have_posts() ) : the_post() 
?>

<header id="post-header" class="d-flex flex-column align-items-center text-white" style="<?php echo get_bg_image() ?>">
    <h1 class="display-5"><?php the_title(); ?></h1>
    <p class="blog-description">
        <em><?php echo get_the_date() ?></em> by

        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" class="flat-link text-white">
            <?php echo get_the_author() ?>
        </a> 
    </p>
</header>

<main>
    <section class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <?php echo wp_breadcrumb_html() ?>

                <article class="card border-0 px-5">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ) ?>" class="card-img-top" alt="<?php echo get_the_post_type_description() ?>">
                    <?php } ?>

                    <div class="card-body">
                        <p class="card-text">
                            <?php the_content() ?>
                        </p>

                        <a href="<?php echo get_home_url() ?>" class="btn btn-dark-blue">
                            Go back home
                        </a>
                    </div>
                </article>

                <hr class="separator">

                <?php if ( comments_open() ) : comments_template(); endif ?>
            </div>

            <?php get_sidebar() ?>
        </div>
    </section>
</main>

<?php 
endwhile;

get_footer() 
?>
