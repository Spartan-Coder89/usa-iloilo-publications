<?php

function usa_pub_create_authors_imgcreds_metaboxes() {

  add_meta_box(
    'authors_imgcreds_metabox', 
    'Credits',
    'usa_pub_create_authors_imgcreds_metaboxes_callback', 
    array(
      'usa_pub_news',
      'usa_pub_opinion',
      'usa_pub_literary',
      'usa_pub_feature'
    ),
    'side'
  );

}


function usa_pub_create_authors_imgcreds_metaboxes_callback( $post ) { ?>

  <div class="form_control">
    <label>Author(s):</label>
    <ul class="authors" style="display: flex; align-items: center; flex-wrap: wrap;">
    <?php
      $authors = get_posts( 
        array(
          'numberposts' => -1,
          'post_type' => 'usa_pub_authors'
        )
      );

      foreach ( $authors as $key => $author ) {

        $is_checked = '';
        
        if ( is_array( get_post_meta( $post->ID, '_authors', true ) ) ) {
          $is_checked = in_array( $author->ID, get_post_meta( $post->ID, '_authors', true ) ) ? 'checked' : '';
        }
        
        echo '<li style="flex: 0 1 280px; padding-right: 20px;">
          <input type="checkbox" name="authors[]" value="'. $author->ID .'" '. $is_checked .'>
          <span>'. $author->post_title .'</span>
        </li>';
      }
    ?>
    </ul>
  </div>
  <div class="form_control" style="margin-bottom: 10px;">
    <label style="display: block; margin-bottom: 10px;">Image Copyright:</label>
    <input type="text" name="img_copyright" style="width: 100%;" value="<?php echo get_post_meta( $post->ID, '_img_copyright', true ); ?>">
  </div>
  <div class="form_control">
    <label style="display: block; margin-bottom: 10px;">Image Caption:</label>
    <?php $image_caption = !empty( get_post_meta( $post->ID, '_img_caption', true ) ) ? get_post_meta( $post->ID, '_img_caption', true ) : ''; ?>
    <textarea rows="1" cols="40" name="img_caption" style="width: 100%; height: 150px;"><?php echo $image_caption; ?></textarea>
  </div>

  <input type="hidden" name="article_metadata_nonce" value="<?php echo wp_create_nonce( 'article_metadata_nonce' ); ?>">

<?php
}