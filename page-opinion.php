<?php 
  get_header(); 
  $current_post_type = 'usa_pub_opinion';
?>

<main>
  <div class="max_width">
    <?php 
      if ( !cpt_empty( $current_post_type ) ) {
        include_once THEME_REL_PATH .'/temp_part/top_three.php'; 
        include_once THEME_REL_PATH .'/temp_part/more_articles.php'; 
      } else { 
        include_once THEME_REL_PATH .'/temp_part/no_articles.php'; 
      }
    ?>
  </div>
</main>

<?php get_footer(); ?>