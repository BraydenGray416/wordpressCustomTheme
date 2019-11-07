<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="row mt-3">
        <div class="container py-5">
            <?php if (get_theme_mod('1902_postLayout') == 'grid'): ?>
                <div class="row justify-content-center">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="col-12 col-md-4 mb-3">
                            <?php get_template_part('templates/content', get_post_format()); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;

                $default_posts_per_page = get_option('posts_per_page')
                ?>
                <?php if ($published_posts > $default_posts_per_page): ?>
                    <?php
                    $args = array(
                        'type' =>  'array'
                    );
                    $paginataionLinks = paginate_links( $args );

                    ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (get_theme_mod('1902_postLayout') == 'rows'): ?>
                <div class="row justify-content-center">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="col-12 mb-3">
                            <?php get_template_part('templates/content', get_post_format()); ?>
                        </div>



                    <?php endwhile; ?>
                </div>
                <?php
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;

                $default_posts_per_page = get_option('posts_per_page')
                ?>
                <?php if ($published_posts > $default_posts_per_page): ?>
                    <?php
                    $args = array(
                        'type' =>  'array'
                    );
                    $paginataionLinks = paginate_links( $args );

                    ?>
                <?php endif; ?>
            <?php endif; ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php foreach ($paginataionLinks as $link): ?>
                        <li class="page-item">
                            <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="col-12 col-md-3">
            <div class="card h-100 mb-2 mt-2 p-2">
                <?php wp_nav_menu( array(
                    'theme_location' => 'side_navigation',
                )); ?>
            </div>
        </div>
    </div>
<?php endif; ?>




<?php get_footer(); ?>
