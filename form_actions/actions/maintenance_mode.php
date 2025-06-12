<?php

add_action( 'admin_post_maintenance_mode', 'maintenance_mode' );
add_action( 'admin_post_nopriv_maintenance_mode', 'maintenance_mode' );
function maintenance_mode() {

  if ( !isset( $_POST['maintenance_mode_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['maintenance_mode_nonce'], 'maintenance_mode_nonce' ) ) {
    return;
  }

  if ( isset( $_POST['maintainance_mode'] ) ) {
    update_option( '_maintainance_mode', htmlspecialchars( strip_tags( $_POST['maintainance_mode'] ) ) );
  }

  wp_safe_redirect( $_POST['origin'] );
  exit;
}