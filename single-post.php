<?php get_header(); ?>
<div class="container">
    <?php if (get_theme_mod('1902_sidebarLocation') == 'left'): ?>

        <?php if (has_nav_menu('side_navigation')): ?>
            <div class="row mt-3">
                <div class="col-12 col-md-3">
                    <div class="card h-100 mb-2 mt-2 p-2">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'side_navigation',
                            'menu_class' => 'list-group list-group-flush',
                            'container' => '',
                            'menu_id' => 'sideNav'
                        )); ?>
                    </div>
                </div>
                <div class="col">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
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
                        <?php endwhile; ?>
                    </div>

                <?php endif; ?>
            </div>

        <?php endif; ?>

    <?php endif; ?>
    <?php if (get_theme_mod('1902_sidebarLocation') == 'right'): ?>
        <?php if (has_nav_menu('side_navigation')): ?>
            <div class="row mt-3">
                <div class="row">
                    <div class="col">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post(); ?>
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
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-12 col-md-3">
                    <div class="card h-100 mb-2 mt-2 p-2">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'side_navigation',
                        )); ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    <?php endif; ?>
    <?php if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif; ?>
    <?php if (have_comments()): ?>
        <ol class="post-comments">
        <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            ));
        ?>
    </ol>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
