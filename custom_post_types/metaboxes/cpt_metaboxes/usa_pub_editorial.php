<?php

function usa_pub_create_editorial_metaboxes() {

  add_meta_box(
    'editorial_metabox', 
    'Details',
    'usa_pub_create_editorial_metaboxes_callback', 
    'usa_pub_editorial'
  );
}


function usa_pub_create_editorial_metaboxes_callback( $post ) { ?>

  <div id="form_controls">
    <div class="form_control" style="width: 100%; flex: 0 1 100%; margin-bottom: 10px;">
      <?php $is_checked = get_post_meta( $post->ID, '_team_head', true ) == 1 ? 'checked' : null; ?>
      <input type="checkbox" name="team_head" style="margin: 0px 10px 0px 0px;" value="1" <?php echo $is_checked; ?>>
      <label>Set as Team Head:</label>
    </div>
    <div class="form_control fullname">
      <label style="display: block; margin-bottom: 5px;">Full name:</label>
      <input type="text" name="fullname" style="width: 100%;" value="<?php echo get_post_meta( $post->ID, '_fullname', true ); ?>">
    </div>
    <div class="form_control position">
      <label style="display: block; margin-bottom: 5px;">Position:</label>
      <input type="text" name="position" style="width: 100%;" value="<?php echo get_post_meta( $post->ID, '_position', true ); ?>">
    </div>
    <div class="form_control course">
      <label style="display: block; margin-bottom: 5px;">Course:</label>
      <input type="text" name="course" style="width: 100%;" value="<?php echo get_post_meta( $post->ID, '_course', true ); ?>">
    </div>
  </div>

  <input type="hidden" name="editorial_metadata_nonce" value="<?php echo wp_create_nonce( 'editorial_metadata_nonce' ); ?>">

<?php
}