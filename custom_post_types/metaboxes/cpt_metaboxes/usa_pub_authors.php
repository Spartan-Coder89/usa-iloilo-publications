<?php

function usa_pub_create_authors_metaboxes() {

  add_meta_box(
    'authors_metabox', 
    'Author Details', 
    'usa_pub_create_authors_metaboxes_callback', 
    'usa_pub_authors'
  );

}


function usa_pub_create_authors_metaboxes_callback( $post ) { ?>

  <div id="input_wrap">
    <div class="form_control">
      <label>Full Name:</label>
      <input type="text" name="author_fullname" value="<?php echo esc_attr( get_post_meta( $post->ID, '_author_fullname', true ) );  ?>">
    </div>
    <div class="form_control">
      <label>Course:</label>
      <input type="text" name="author_course" value="<?php echo esc_attr( get_post_meta( $post->ID, '_author_course', true ) ); ?>">
    </div>
  </div>

  <input type="hidden" name="author_metadata_nonce" value="<?php echo wp_create_nonce( 'author_metadata_nonce' ); ?>">

<?php
}