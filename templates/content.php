<?php if (get_theme_mod('1902_postLayout') == 'grid'): ?>
    <div class="card  h-100 border border-primary">
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
        <div class="card-body">
            <h5 class="card-title cardTitleBackgroundColor"><?php the_title(); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Read more</a>
        </div>
    </div>
<?php endif; ?>

<?php if (get_theme_mod('1902_postLayout') == 'rows'): ?>
    <div class="card mt-2">
        <h5 class="card-header"><?php the_title(); ?></h5>
        <div class="card-body">
            <div>
                <?php if (!is_singular()): ?>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="col-8">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                    <div>
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
