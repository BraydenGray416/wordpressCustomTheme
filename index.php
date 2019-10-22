<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>
    <?php if (has_nav_menu('top_navigation')): ?>
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'top_navigation',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'top_navigation',
                    'menu_class'      => 'navbar-nav mr-auto ',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
    <?php endif; ?>



    <div class="container">
        <?php if (has_nav_menu('side_navigation')): ?>
            <div class="row">
                <div class="col-12 col-md-3">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'list-group',
                        'container_id'    => 'side_navigation',
                        'menu_class'      => 'list-group-item',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    )); ?>
                </div>
                <div class="col-12 col-md-9">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="card mt-3">
                                <h5 class="card-header"><?php the_title(); ?></h5>
                                <div class="card-body">
                                    <div>
                                        <?php if (!is_single()): ?>
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
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="card mt-3">
                                <h5 class="card-header"><?php the_title(); ?></h5>
                                <div class="card-body">
                                    <div>
                                        <?php if (!is_single()): ?>
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

        <?php endif; ?>

    </div>
    <?php if (has_nav_menu('bottom_navigation')): ?>

    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html>
