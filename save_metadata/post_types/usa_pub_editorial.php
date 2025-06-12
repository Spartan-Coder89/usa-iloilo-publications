<?php

/**
 *  Save updates on editorial metadata
 */
add_action( 'save_post_usa_pub_editorial', 'usa_pub_update_editorial_metadata' );
function usa_pub_update_editorial_metadata( $post_id ) {

  if ( !isset( $_POST['editorial_metadata_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['editorial_metadata_nonce'], 'editorial_metadata_nonce' ) ) {
    return;
  }

  if ( defined( 'DOING_AUTOSAVE' ) and DOING_AUTOSAVE ) {
    return;
  }

  if ( !current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  $fullname = htmlspecialchars( $_POST['fullname'] );
  $position = htmlspecialchars( $_POST['position'] );
  $course = htmlspecialchars( $_POST['course'] );

  if ( get_post( $post_id )->post_title !== $fullname ) {
    
    wp_update_post(
      array(
        'ID' => $post_id,
        'post_title' => $fullname
      )
    );
  }

  update_post_meta( $post_id, '_fullname', $fullname );
  update_post_meta( $post_id, '_position', $position );
  update_post_meta( $post_id, '_course', $course );


  //  Process team head selection
  if ( isset( $_POST['team_head'] ) ) {

    $team_term = get_the_terms( $post_id, 'usa_tax_team' );

    if ( !empty( $team_term ) ) {

      $editorial_query = get_posts([
        'numberposts' => -1,
        'post_type' => 'usa_pub_editorial',
        'tax_query' => array(
          array (
            'taxonomy' => 'usa_tax_team',
            'field'    => 'slug',
            'terms'    => $team_term[0]->slug,
          )
        )
      ]);

      //  Nullify other previously selected as team head
      foreach ( $editorial_query as $key => $member ) {
        if ( $member->ID != $post_id ) {
          update_post_meta( $member->ID, '_team_head', 0 );
        }
      }

      //  Set the selected member to the team head
      update_post_meta( $post_id, '_team_head', 1 );
    }

  } else {
    update_post_meta( $post_id, '_team_head', 0 );
  }
}