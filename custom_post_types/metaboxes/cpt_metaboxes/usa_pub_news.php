<?php

function usa_pub_create_news_metaboxes() {

  add_meta_box(
    'news_metabox', 
    'Set To News Highlight',
    'usa_pub_create_news_metaboxes_callback', 
    'usa_pub_news'
  );
}


function usa_pub_create_news_metaboxes_callback( $post ) { 
  
  $is_checked = get_post_meta( $post->ID, '_news_highlight', true ) == 1 ? 'checked' : '';
  ?>

  <div class="news_highlight">
    <input type="checkbox" name="news_highlight" value="1" <?php echo $is_checked; ?>>
    <label>Set this article as news highlight</label>
  </div>
<?php
}