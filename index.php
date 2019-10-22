<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="card mt-3">
                    <h5 class="card-header"><?php the_title(); ?></h5>
                    <div class="card-body">

                        <h5 class="card-title">Special title treatment</h5>
                        <div>
                            <?php if (!is_single()): ?>
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="row">
                                        <?php the_post_thumbnail('medium', ['class' => 'col col-4']); ?>
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
                                <?php the_content(); ?>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
