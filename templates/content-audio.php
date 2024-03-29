<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {
                if ($allBlocks[$i]['blockName'] == 'core-embed/soundcloud' || $allBlocks[$i]['blockName'] == 'core-embed/spotify' || $allBlocks[$i]['blockName'] == 'core/audio') {
                    $firstAudioBlock = $allBlocks[$i];
                    break;
                }
        }
    };
?>
<div class="card h-100 border border-success">
    <div class="card-body">
        <h5 class="card-header cardTitleBackgroundColor"><?php the_title(); ?></h5>
        <?php if ($firstAudioBlock): ?>
            <div class="fullAudio">
                <?php echo apply_filters( 'the_content', render_block($firstAudioBlock)) ; ?>
            </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-block">Listen Here</a>
    </div>
</div>
