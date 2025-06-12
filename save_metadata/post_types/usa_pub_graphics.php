<?php

/**
 *  Save updates on graphics article metadata
 */
add_action( 'save_post_usa_pub_graphics', 'usa_pub_update_graphics_article_metadata' );
function usa_pub_update_graphics_article_metadata( $post_id ) {

  if ( !isset( $_POST['article_metadata_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['article_metadata_nonce'], 'article_metadata_nonce' ) ) {
    return;
  }

  if ( defined( 'DOING_AUTOSAVE' ) and DOING_AUTOSAVE ) {
    return;
  }

  if ( !current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  //  Save credits
  $img_copyright = ( isset( $_POST['img_copyright'] ) and !empty( $_POST['img_copyright'] ) ) ? htmlspecialchars( $_POST['img_copyright'] ) : '';
  $img_caption = ( isset( $_POST['img_caption'] ) and !empty( $_POST['img_caption'] ) ) ? htmlspecialchars( $_POST['img_caption'] ) : '';

  update_post_meta( $post_id, '_img_copyright', $img_copyright );
  update_post_meta( $post_id, '_img_caption', $img_caption );
}