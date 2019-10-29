<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
            // echo "<pre>";
            // print_r($allBlocks[$i]);
            // echo "</pre>";
                // echo "Block number" .$i. ' is a ' . $allBlocks[$i]['blockName'];
                // echo '<br>';
                if ($allBlocks[$i]['blockName'] == 'core-embed/youtube' || $allBlocks[$i]['blockName'] == 'core/video' || $allBlocks[$i]['blockName'] == 'core-embed/vimeo') {
                    // echo "this is a video block";
                    $firstVideoBlock = $allBlocks[$i];
                    break;
                }
        }
        // var_dump($firstVideoBlock);
        // die();
    };
?>

<div class="card h-100 border border-warning">
    <div class="card-body">
        <h5 class="card-header"><?php the_title(); ?></h5>
        <?php if ($firstVideoBlock): ?>
            <div class="fullVideo">
                <?php echo apply_filters( 'the_content', render_block($firstVideoBlock)) ; ?>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-block">Watch Video</a>
    </div>
</div>
