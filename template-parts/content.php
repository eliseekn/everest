<div class="col-md-8">
    <?php if ( !is_home() ) : echo wp_breadcrumb_html(); endif ?>

    <div class="row row-cols-1 row-cols-md-2">

        <?php while ( have_posts() ) : the_post() ?>

        <article class="col mb-5">
            <div class="card shadow-sm">
                <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ) ?>" class="card-img-top" alt="<?php echo get_the_post_type_description() ?>">
                <?php } ?>

                <div class="card-body">
                    <h2 class="card-title">
                        <?php the_title() ?>
                    </h2>

                    <p class="card-text">
                        <em><?php echo get_the_date() ?></em> by <span class="fw-bold"><?php echo get_the_author() ?></span>
                    </p>

                    <p class="card-text">
                        <?php the_excerpt() ?>
                    </p>

                    <a href="<?php the_permalink() ?>" class="btn btn-dark-blue stretched-link">
                        Lire la suite
                    </a>
                </div>
            </div>
        </article>

        <?php endwhile ?>

    </div>
</div>
