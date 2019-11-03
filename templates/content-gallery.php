<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo "<pre>";
            // print_r($allBlocks[$i]);
            // echo "</pre>";
                // echo "Block number" .$i. ' is a ' . $allBlocks[$i]['blockName'];
                // echo '<br>';
                if ($allBlocks[$i]['blockName'] == 'core/gallery' ) {
                    // echo "this is a video block";
                    $firstGalleryBlock = $allBlocks[$i];
                    break;
                }
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<div class="card h-100 border border-danger">
    <div class="card-body">
        <h5 class="card-header cardTitleBackgroundColor"><?php the_title(); ?></h5>
        <?php if ($firstGalleryBlock): ?>
            <div class="fullGallery">
                <?php echo apply_filters( 'the_content', render_block($firstGalleryBlock)) ; ?>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">View Gallery</a>
    </div>
</div>
