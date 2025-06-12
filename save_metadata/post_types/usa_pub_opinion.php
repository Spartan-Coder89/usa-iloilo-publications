<?php

/**
 *  Save updates on opinion article metadata
 */
add_action( 'save_post_usa_pub_opinion', 'usa_pub_update_opinion_article_metadata' );
function usa_pub_update_opinion_article_metadata( $post_id ) {

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
  $authors = isset( $_POST['authors'] ) ? $_POST['authors'] : array();
  $img_copyright = ( isset( $_POST['img_copyright'] ) and !empty( $_POST['img_copyright'] ) ) ? htmlspecialchars( $_POST['img_copyright'] ) : '';
  $img_caption = ( isset( $_POST['img_caption'] ) and !empty( $_POST['img_caption'] ) ) ? htmlspecialchars( $_POST['img_caption'] ) : '';
  $post_subtitle = ( isset( $_POST['post_subtitle'] ) and !empty( $_POST['post_subtitle'] ) ) ? htmlspecialchars( $_POST['post_subtitle'] ) : '';
  
  if ( !empty( $authors ) ) {

    foreach ( $authors as $key => $author ) {
      $authors[$key] = htmlspecialchars( $author );
    }
  }

  update_post_meta( $post_id, '_authors',$authors  );
  update_post_meta( $post_id, '_img_copyright', $img_copyright );
  update_post_meta( $post_id, '_img_caption', $img_caption );
  update_post_meta( $post_id, '_post_subtitle', $post_subtitle );
}