<?php 

// ADD FIELD TO TEAMS TERM PAGE
add_action( 'usa_tax_team_add_form_fields', 'usa_pub_add_form_field_term_meta_tax_team' );
function usa_pub_add_form_field_term_meta_tax_team() { ?>

  <input type="hidden" name="term_meta_tax_team_nonce" value="<?php echo wp_create_nonce( 'term_meta_tax_team_nonce' ); ?>">
  <div class="form-field term-meta-property-type-wrap">
    <label for="term-meta-property-type"><?php _e( 'Term Order', 'text_domain' ); ?></label>
    <input 
      type="number" 
      name="term_meta_tax_team" 
      id="term-meta-usa_tax_tax_team" 
      class="term-meta-usa_tax_tax_team-field"
      style="background-color: rgb( 255, 255, 255 ); max-width: 100px; width: 100%;"
      min="1"
      max="1000"
    >
  </div>
<?php }


// ADD FIELD TO TEAMS EDIT PAGE
add_action( 'usa_tax_team_edit_form_fields', 'usa_pub_edit_form_field_term_meta_tax_team' );
function usa_pub_edit_form_field_term_meta_tax_team( $term ) {

  $term_order = get_term_meta( $term->term_id, '_term_meta_tax_team', true );
  if ( !$term_order ) $term_order = ""; ?>

  <tr class="form-field term-meta-usa_tax_tax_team-wrap">
    <th scope="row"><label for="term-meta-usa_tax_tax_team"><?php _e( 'Term Order', 'text_domain' ); ?></label></th>
    <td>
      <input 
        type="number" 
        name="term_meta_tax_team" 
        id="term-meta-usa_tax_tax_team" 
        class="term-meta-usa_tax_tax_team-field" 
        value="<?php echo $term_order; ?>"
        min="1"
        max="1000"
        style="background-color: rgb( 255, 255, 255 ); max-width: 100px; width: 100%;"
      >
      <input type="hidden" name="term_meta_tax_team_nonce" value="<?php echo wp_create_nonce( 'term_meta_tax_team_nonce' ); ?>">
    </td>
  </tr>
<?php }


// SAVE TERM META (on term edit & create)
add_action( 'edited_usa_tax_team', 'usa_pub_save_term_meta_tax_team' );
add_action( 'created_usa_tax_team', 'usa_pub_save_term_meta_tax_team' );
function usa_pub_save_term_meta_tax_team( $term_id ) {

  if ( !isset( $_POST['term_meta_tax_team_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['term_meta_tax_team_nonce'], 'term_meta_tax_team_nonce' ) ) {
    return;
  }

  //  Query all team terms with the same value of term order and set to null
  $teams = get_terms([
    'taxonomy' => 'usa_tax_team',
    'hide_empty' => false,
    'meta_query' => [[
      'key' => '_term_meta_tax_team',
      'value' => $_POST['term_meta_tax_team'],
      'type' => 'NUMERIC'
    ]],
  ]);

  if ( !empty( $teams ) ) {

    foreach ( $teams as $key => $team ) {
      update_term_meta( $team->term_id, '_term_meta_tax_team', null );
    }
  }

  $value = htmlspecialchars( $_POST['term_meta_tax_team'] );
  update_term_meta( $term_id, '_term_meta_tax_team', $value );
}