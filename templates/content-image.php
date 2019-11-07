<?php
if (has_blocks()) {
    $allBlocks = parse_blocks(get_the_content());
    for ($i=0; $i < count($allBlocks); $i++) {
        // echo "<pre>";
        // print_r($allBlocks[$i]);
        // echo "</pre>";
        // echo "Block number" .$i. ' is a ' . $allBlocks[$i]['blockName'];
        // echo '<br>';
        if ($allBlocks[$i]['blockName'] == 'core/image' ) {
            // echo "this is a video block";
            $firstImageBlock = $allBlocks[$i];
            break;
        }
    }
    // var_dump($firstVideoBlock);
    // die();
};
?>



<?php if (get_theme_mod('1902_postLayout') == 'grid'): ?>

    <div class="card h-100 border border-info">
        <div class="card-body">
            <h5 class="card-header cardTitleBackgroundColor"><?php the_title(); ?></h5>
            <?php if ($firstImageBlock): ?>
                <div class="fullImage">
                    <?php echo apply_filters( 'the_content', render_block($firstImageBlock)) ; ?>
                </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Image</a>
        </div>
    </div>
<?php endif; ?>

<?php if (get_theme_mod('1902_postLayout') == 'rows'): ?>

    <div class="card mt-2">
        <h5 class="card-header cardTitleBackgroundColor"><?php the_title(); ?></h5>
        <div class="card-body">
            <?php if ($firstImageBlock): ?>
                <div class="fullImage">
                    <?php echo apply_filters('the_content', render_block($firstImageBlock)); ?>
                </div>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Image</a>
        </div>
    </div>

    


<?php endif; ?>
