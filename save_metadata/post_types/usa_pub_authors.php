<?php

/**
 *  Save updates on news article metadata
 */
add_action( 'save_post_usa_pub_authors', 'usa_pub_update_authors_metadata' );
function usa_pub_update_authors_metadata( $post_id ) {

  if ( !isset( $_POST['author_metadata_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['author_metadata_nonce'], 'author_metadata_nonce' ) ) {
    return;
  }

  if ( defined( 'DOING_AUTOSAVE' ) and DOING_AUTOSAVE ) {
    return;
  }

  if ( !current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  $author_fullname = htmlspecialchars( $_POST['author_fullname'] );
  $author_course = htmlspecialchars( $_POST['author_course'] );

  if ( get_post( $post_id )->post_title !== $author_fullname ) {
    
    wp_update_post(
      array(
        'ID' => $post_id,
        'post_title' => $author_fullname
      )
    );
  }

  update_post_meta( $post_id, '_author_fullname', $author_fullname );
  update_post_meta( $post_id, '_author_course', $author_course );
}