<?php

function usa_pub_create_post_subtitle_metaboxes() {

  add_meta_box(
    'post_subtitle_metabox', 
    'Subtitle', 
    'usa_pub_create_post_subtitle_metaboxes_callback', 
    array(
      'usa_pub_news',
      'usa_pub_opinion',
      'usa_pub_literary',
      'usa_pub_feature'
    )
  );

}


function usa_pub_create_post_subtitle_metaboxes_callback( $post ) { ?>

  <div id="input_wrap">
    <div class="form_control">
      <label style="display: block; width: 100%; margin-bottom: 10px;">Subtitle:</label>
      <input style="width: 100%;" type="text" name="post_subtitle" value="<?php echo get_post_meta( $post->ID, '_post_subtitle', true ); ?>">
    </div>
  </div>

<?php
}