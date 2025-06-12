<?php

function usa_pub_create_graphics_metaboxes() {

  add_meta_box(
    'graphics_metabox', 
    'Credits',
    'usa_pub_create_graphics_metaboxes_callback', 
    'usa_pub_graphics'
  );
}


function usa_pub_create_graphics_metaboxes_callback( $post ) { ?>

  <div lass="form_control">
    <label style="display: block; margin-bottom: 10px;">Image Copyright:</label>
    <input type="text" name="img_copyright" style="max-width: 480px; width: 100%;" value="<?php echo get_post_meta( $post->ID, '_img_copyright', true ); ?>">
    <input type="hidden" name="article_metadata_nonce" value="<?php echo wp_create_nonce( 'article_metadata_nonce' ); ?>">
  </div>
<?php
}