
<!--  -->
<!--  -->
<!-- Don't use because no way of making this id exact -->
<!--  -->
<!--  -->



<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php while (have_posts()): the_post(); ?>
                <div class="col-12 col-md-4">
                    <div class="card  m-1 mt-3">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <?php if (has_post_thumbnail()): ?>

                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        <?php endif; ?>

                        <div class="card-body">
                            <div>
                                <?php if (!is_singular()): ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                                <?php else: ?>
                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                    <div>
                                        <?php the_content(); ?>
                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>



            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>



<?php get_footer(); ?>
