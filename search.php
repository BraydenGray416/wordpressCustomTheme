<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()): ?>
        <div class="container">
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
                                        <?php the_date(); ?>
                                        <?php the_time(); ?>
                                        <?php the_author(); ?>
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
            <nav aria-label="Page navigation example">
                    <div class="pagination row">
                        <?php previous_posts_link( '« Previous' ); ?>
                        <?php next_posts_link( 'Next »'); ?>
                    </div>
            </nav>
        </div>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            There was no results that match your request
        </div>
        <form action="<?php echo home_url(); ?>" method="get">
            <div class="form-group">
                <label for="">Search For Posts</label>
                <input type="hidden" name="post_type" value="post,page">
                <input name="s" type="text" class="form-control" aria-describedby="searchPosts" placeholder="Search Posts" value="<?php the_search_query(); ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
