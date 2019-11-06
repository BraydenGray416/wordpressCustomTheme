<div class="">
    <label for="">Year Released</label>
    <input type="number" min="0" max="9999" name="1902_year" value="<?php echo get_post_meta(get_the_ID(), '1902_year', true); ?>">
    <label for="">Length</label>
    <input type="number" min="0" max="999" name="1902_length" value="<?php echo get_post_meta(get_the_ID(), '1902_length', true); ?>">
    <label for="">Director</label>
    <input type="text" name="1902_director" value="<?php echo get_post_meta(get_the_ID(), '1902_director', true); ?>">
</div>
