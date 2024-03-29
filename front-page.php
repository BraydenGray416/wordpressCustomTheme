<?php get_header(); ?>



<?php if (has_header_image()): ?>
    <div class="container-fluid p-0">
        <!-- <img src="<?php echo(get_header_image()); ?>" alt="" class="img-fluid"> -->
        <div class="headerImage" style="background-image:url(<?php echo(get_header_image()); ?>)">
            <h1 class="display-3 headerImageText"><?php echo get_bloginfo('name'); ?></h1>
        </div>
    </div>
<?php else: ?>
    <div class="conatiner">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 headerImageText"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(get_theme_mod('1902_featuredPost')): ?>
    <?php
    $featuredPostQuery = new WP_Query( array( 'p' => get_theme_mod('1902_featuredPost') ) );
    ?>
    <?php if( $featuredPostQuery->have_posts() ): ?>
        <?php while( $featuredPostQuery->have_posts() ): $featuredPostQuery->the_post(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Featured Post</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php endif; ?>

<?php if (have_posts()): ?>
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
        <nav aria-label="Page navigation example">
            <div class="pagination row">
                <?php previous_posts_link( '« Previous' ); ?>
                <?php next_posts_link( 'Next »'); ?>
            </div>
        </nav>

        <img src="<?php echo get_theme_mod('1902_bottomImage'); ?>" alt=""style="width: 100%;">
        <h5 class="display-3 d-flex justify-content-center"><?php echo get_theme_mod('1902_bottomImageText'); ?></h5>

        <?php
        for ($i=1; $i <= 3 ; $i++) {
            if(get_theme_mod('1902_slide_'.$i)){
                $firstSlide = $i;
                break;
            }
        }
        ?>

        <?php if(isset($firstSlide)): ?>
            <div class="container">
                <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i=1; $i <= 3 ; $i++): ?>
                            <?php if(get_theme_mod('1902_slide_'.$i)): ?>
                                <div class="carousel-item <?php if($firstSlide === $i){ echo 'active';} ?>">
                                    <img src="<?php echo get_theme_mod('1902_slide_'.$i); ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>




<?php get_footer(); ?>
