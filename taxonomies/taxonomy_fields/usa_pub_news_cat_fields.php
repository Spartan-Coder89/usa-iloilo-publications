<?php 

// ADD FIELD TO CATEGORY TERM PAGE
add_action( 'usa_tax_news_cat_add_form_fields', 'usa_pub_add_form_field_term_meta' );
function usa_pub_add_form_field_term_meta() { ?>

  <input type="hidden" name="term_meta_news_cat_nonce" value="<?php echo wp_create_nonce( 'term_meta_news_cat_nonce' ); ?>">
  <div class="form-field term-meta-property-type-wrap">
    <label for="term-meta-property-type"><?php _e( 'Term color', 'text_domain' ); ?></label>

    <div id="swatches_list">
      <button type="button" class="swatch" data-color="rgb(24, 152, 187)" style="background-color: rgb(24, 152, 187);"></button>
      <button type="button" class="swatch" data-color="rgb(184, 7, 23)" style="background-color: rgb(184, 7, 23);"></button>
      <button type="button" class="swatch" data-color="rgb(225, 167, 0)" style="background-color: rgb(225, 167, 0);"></button>
      <button type="button" class="swatch" data-color="rgb(1, 42, 146)" style="background-color: rgb(1, 42, 146);"></button>
      <button type="button" class="swatch" data-color="rgb(49, 178, 115)" style="background-color: rgb(49, 178, 115);"></button>
      <button type="button" class="swatch" data-color="rgb(49, 86, 178)" style="background-color: rgb(49, 86, 178);"></button>
      <button type="button" class="swatch" data-color="rgb(194, 88, 39)" style="background-color: rgb(194, 88, 39);"></button>
      <button type="button" class="swatch" data-color="rgb(178, 101, 49)" style="background-color: rgb(178, 101, 49);"></button>
    </div>
    <input type="text" id="selected_color" readonly name="term_meta_news_cat" id="term-meta-usa_tax_news_cat" class="term-meta-usa_tax_news_cat-field">
  </div>
<?php }


// ADD FIELD TO CATEGORY EDIT PAGE
add_action( 'usa_tax_news_cat_edit_form_fields', 'usa_pub_edit_form_field_term_meta_news_cat' );
function usa_pub_edit_form_field_term_meta_news_cat( $term ) {

  $term_color = get_term_meta( $term->term_id, '_term_meta_news_cat', true );
  if ( !$term_color ) $term_color = ""; ?>

  <tr class="form-field term-meta-usa_tax_news_cat-wrap">
    <th scope="row"><label for="term-meta-usa_tax_news_cat"><?php _e( 'Term color', 'text_domain' ); ?></label></th>
    <td>

      <div id="swatches_list">
        <button type="button" class="swatch" data-color="rgb(24, 152, 187)" style="background-color: rgb(24, 152, 187);"></button>
        <button type="button" class="swatch" data-color="rgb(184, 7, 23)" style="background-color: rgb(184, 7, 23);"></button>
        <button type="button" class="swatch" data-color="rgb(225, 167, 0)" style="background-color: rgb(225, 167, 0);"></button>
        <button type="button" class="swatch" data-color="rgb(1, 42, 146)" style="background-color: rgb(1, 42, 146);"></button>
        <button type="button" class="swatch" data-color="rgb(49, 178, 115)" style="background-color: rgb(49, 178, 115);"></button>
        <button type="button" class="swatch" data-color="rgb(49, 86, 178)" style="background-color: rgb(49, 86, 178);"></button>
        <button type="button" class="swatch" data-color="rgb(194, 88, 39)" style="background-color: rgb(194, 88, 39);"></button>
        <button type="button" class="swatch" data-color="rgb(178, 101, 49)" style="background-color: rgb(178, 101, 49);"></button>
      </div>
      <input 
        type="text" 
        id="selected_color" 
        readonly 
        name="term_meta_news_cat" 
        id="term-meta-usa_tax_news_cat" 
        class="term-meta-usa_tax_news_cat-field" 
        style="background-color: <?php echo $term_color; ?>;"
        value="<?php echo $term_color; ?>"
      >
      <input type="hidden" name="term_meta_news_cat_nonce" value="<?php echo wp_create_nonce( 'term_meta_news_cat_nonce' ); ?>">
    </td>
  </tr>
<?php }


// SAVE TERM META (on term edit & create)
add_action( 'edited_usa_tax_news_cat', 'usa_pub_save_term_meta_news_cat' );
add_action( 'created_usa_tax_news_cat', 'usa_pub_save_term_meta_news_cat' );
function usa_pub_save_term_meta_news_cat( $term_id ) {

  if ( !isset( $_POST['term_meta_news_cat_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['term_meta_news_cat_nonce'], 'term_meta_news_cat_nonce' ) ) {
    return;
  }

  $value = htmlspecialchars( $_POST['term_meta_news_cat'] );
  update_term_meta( $term_id, '_term_meta_news_cat', $value );
}