<?php get_header(); ?>

<main>
  <section id="above_the_fold" class="max_width">
    <h2>
      All About the 
      <span>USA Publications</span>
    </h2>
    <?php echo wpautop( get_theme_mod( 'usa_pub_org_description_setting' ) ); ?>
  </section>
  <img class="img_about" src="<?php echo THEME_ABS_PATH_IMAGES; ?>img_about_main.png" alt="">

  <div id="mission_vision">
    <section class="vision">
      <h2>Our Vision</h2>
      <p><?php echo get_theme_mod( 'usa_pub_vision_setting' ) ?></p>
    </section>
    <section class="mission">
      <h2>Our Mission</h2>
      <p><?php echo get_theme_mod( 'usa_pub_mission_setting' ) ?></p>
    </section>
  </div>


  <?php 
  $teams = get_terms([
    'taxonomy' => 'usa_tax_team',
    'hide_empty' => true,
    'orderby' => 'meta_value_num',
    'meta_query' => array(
      array(
        'key' => '_term_meta_tax_team',
        'type' => 'NUMERIC'
      )
    )
  ]);
  ?>

  <?php if ( !empty( $teams ) ): ?>

    <section id="editorial_board" class="max_width">
      <h2>The Editorial Board</h2>

      <?php

      //  For staffs
      foreach ( $teams as $key => $team ) {

        //  For team head
        $team_head_member = get_posts([
          'numberposts' => 1,
          'post_type' => 'usa_pub_editorial',
          'meta_key'=> '_team_head',
          'meta_value' => '1',
          'meta_compare' => '=',
          'tax_query' => array(
            array(
              'taxonomy' => 'usa_tax_team',
              'field'    => 'slug',
              'terms'    => $team->slug
            )
          )
        ]); 
        ?>
        
        <section class="team">
          <h3 class="team_title"><?php echo $team->name; ?></h3>
          <ul>

            <li class="team_head">
              <div class="person">
                <div class="profile_pic" style="background-image: url(<?php echo get_the_post_thumbnail_url( $team_head_member[0]->ID ) ?>);"></div>
                <div class="person_details">
                  <p class="name"><?php echo get_post_meta( $team_head_member[0]->ID, '_fullname', true ); ?></p>
                  <p class="position"><?php echo get_post_meta( $team_head_member[0]->ID, '_position', true ); ?></p>
                </div>
              </div>
            </li>
            
            <li class="staffs"> 

            <?php
            $team_members = new WP_Query([
              'posts_per_page' => -1,
              'post_type' => 'usa_pub_editorial',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'usa_tax_team',
                  'field'    => 'slug',
                  'terms'    => $team->slug
                )
              ),
              'post__not_in' => array( $team_head_member[0]->ID )
            ]); 
            
            if ( $team_members->have_posts() ) {

              while( $team_members->have_posts() ) {

                $team_members->the_post(); ?>

                <div class="person">
                  <div class="profile_pic" style="background-image: url( <?php echo get_the_post_thumbnail_url() ?> );"></div>
                  <div class="person_details">
                    <p class="name"><?php echo get_post_meta( get_the_ID(), '_fullname', true ); ?></p>
                    <p class="position"><?php echo get_post_meta( get_the_ID(), '_position', true ); ?></p>
                  </div>
                </div>

              <?php
              }
            }
            ?>

            </li>
          </ul>
        </section>

      <?php } ?>

    </section>

  <?php endif; ?>
</main>

<?php get_footer(); ?>