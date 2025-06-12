<?php

/**
 *  Define constants to be used across the site
 */
define( 'THEME_REL_PATH', get_template_directory() );
define( 'THEME_ABS_PATH', get_template_directory_uri() );
define( 'THEME_ABS_PATH_IMAGES', THEME_ABS_PATH .'/common/images/' );

/**
 *  Include neccessary logic
 */
include_once THEME_REL_PATH .'/pages/create_pages.php';
include_once THEME_REL_PATH .'/custom_post_types/create_custom_post_types.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/create_metaboxes.php';
include_once THEME_REL_PATH .'/taxonomies/create_taxonomies.php';
include_once THEME_REL_PATH .'/save_metadata/save_metadata.php';
include_once THEME_REL_PATH .'/customizer/add_custom_customizer.php';
include_once THEME_REL_PATH .'/form_actions/add_form_actions.php';


/**
 *  Check if maintenance mode
 */
add_action( 'template_redirect', 'check_if_maintenance' );
function check_if_maintenance(){

  if ( get_option( '_maintainance_mode' ) == 1 and !is_page( 'maintenance-mode' ) and !is_user_logged_in() ) {
    wp_safe_redirect( get_site_url() .'/maintenance-mode' );
    exit;
  }
}


/**
 *  Initial actions
 */
add_action( 'init', 'usa_pub_initial_actions' );
function usa_pub_initial_actions(){

  //  1. 
  add_theme_support( 'post-thumbnails' );
}


/**
 *  Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'usa_pub_enqueue_scripts_styles' );
function usa_pub_enqueue_scripts_styles() {

  wp_enqueue_style( 'usa_pub_common_css', get_template_directory_uri() .'/common/css/common.css' );
  wp_enqueue_script( 'usa_pub_common_script', get_template_directory_uri() . '/common/js/common.js', array(), NULL, true );

  if ( is_page( 'top' ) ) {

    wp_enqueue_style( 'usa_pub_top_css', get_template_directory_uri() .'/common/css/top.css' );
    wp_enqueue_style( 'usa_pub_slick_css', get_template_directory_uri() .'/common/vendor/slick/slick.css' );
    wp_enqueue_style( 'usa_pub_slick_theme_css', get_template_directory_uri() .'/common/vendor/slick/slick-theme.css' );

    wp_enqueue_script( 'usa_pub_jquery_script', get_template_directory_uri() . '/common/js/jquery.js', array(), NULL, true );
    wp_enqueue_script( 'usa_pub_slick_script', get_template_directory_uri() . '/common/vendor/slick/slick.min.js', array(), NULL, true );
    wp_enqueue_script( 'usa_pub_top_script', get_template_directory_uri() . '/common/js/top.js', array(), NULL, true );
  
  } else if ( is_page( 'news' ) ) {
    wp_enqueue_style( 'usa_pub_no_articles_css', get_template_directory_uri() .'/common/css/no_articles.css' );
    wp_enqueue_style( 'usa_pub_more_articles_css', get_template_directory_uri() .'/common/css/more_articles.css' );
    wp_enqueue_style( 'usa_pub_top_three_css', get_template_directory_uri() .'/common/css/top_three.css' );
    wp_enqueue_script( 'usa_news_script', get_template_directory_uri() . '/common/js/news.js', array(), NULL, true );

  } else if ( is_page( 'literary' ) ) {
    wp_enqueue_style( 'usa_pub_no_articles_css', get_template_directory_uri() .'/common/css/no_articles.css' );
    wp_enqueue_style( 'usa_pub_literary_css', get_template_directory_uri() .'/common/css/literary.css' );
    wp_enqueue_style( 'usa_pub_more_articles_css', get_template_directory_uri() .'/common/css/more_articles.css' );
    wp_enqueue_style( 'usa_pub_top_three_css', get_template_directory_uri() .'/common/css/top_three.css' );

  } else if ( is_page( 'opinion' ) ) {
    wp_enqueue_style( 'usa_pub_no_articles_css', get_template_directory_uri() .'/common/css/no_articles.css' );
    wp_enqueue_style( 'usa_pub_more_articles_css', get_template_directory_uri() .'/common/css/more_articles.css' );
    wp_enqueue_style( 'usa_pub_top_three_css', get_template_directory_uri() .'/common/css/top_three.css' );

  } else if ( is_page( 'graphics' ) ) {
    wp_enqueue_style( 'usa_pub_graphics_css', get_template_directory_uri() .'/common/css/graphics.css' );
    wp_enqueue_style( 'usa_pub_no_articles_css', get_template_directory_uri() .'/common/css/no_articles.css' );

  } else if ( is_page( 'feature' ) ) {
    wp_enqueue_style( 'usa_pub_no_articles_css', get_template_directory_uri() .'/common/css/no_articles.css' );
    wp_enqueue_style( 'usa_pub_more_articles_css', get_template_directory_uri() .'/common/css/more_articles.css' );
    wp_enqueue_style( 'usa_pub_top_three_css', get_template_directory_uri() .'/common/css/top_three.css' );

  } else if ( is_page( 'about' ) ) {
    wp_enqueue_style( 'usa_pub_about_css', get_template_directory_uri() .'/common/css/about.css' );

  } else if ( is_page( 'search-results' ) ) {
    wp_enqueue_style( 'usa_pub_search_results_css', get_template_directory_uri() .'/common/css/search_results.css' );

  } else if ( is_page( 'maintenance-mode' ) ) {
    wp_enqueue_style( 'usa_pub_maintenance_mode_css', get_template_directory_uri() .'/common/css/maintenance_mode.css' );

  } else if ( is_singular( 'usa_pub_news' ) or is_singular( 'usa_pub_literary' ) or 
              is_singular( 'usa_pub_opinion' ) or is_singular( 'usa_pub_feature' ) ) {

    wp_enqueue_style( 'usa_pub_single_article_css', get_template_directory_uri() .'/common/css/single_article.css' );
    wp_enqueue_style( 'usa_pub_related_articles_css', get_template_directory_uri() .'/common/css/related_articles.css' );
    wp_enqueue_script( 'usa_pub_single_article_script', get_template_directory_uri() . '/common/js/single_article.js', array(), NULL, true );

  } else if ( is_404() ) {
      
    wp_enqueue_style( 'usa_pub_404_css', get_template_directory_uri() .'/common/css/404.css' );
      
  } else {
    //  Do nothing
  }
  
}


/**
 *  Enqueue admin scripts and styles
 */
add_action( 'admin_enqueue_scripts', 'usa_pub_enqueue_admin_scripts_styles' );
function usa_pub_enqueue_admin_scripts_styles( $hook_suffix ){

  wp_enqueue_style( 'usa_pub_override_load_styles_css', get_template_directory_uri() .'/common/css/admin/usa_pub_override_load_styles.css' ); //  General css

  //  For taxonomy
  if ( ( $hook_suffix == 'edit-tags.php' or $hook_suffix == 'term.php' ) and isset( $_GET['taxonomy'] ) ) {

    if ( $_GET['taxonomy'] == 'usa_tax_news_cat' ) {
      wp_enqueue_style( 'admin_usa_pub_news_cat_css', get_template_directory_uri() .'/common/css/admin/usa_pub_news_cat_term.css' );
      wp_enqueue_script( 'admin_usa_pub_news_cat_script', get_template_directory_uri() . '/common/js/admin/usa_pub_news_cat_term.js', array(), NULL, true );
    }
  }

  //  For post page
  if ( ( $hook_suffix == 'post.php' or $hook_suffix == 'post-new.php' ) ) { 

    if ( isset( $_GET['post_type'] ) ) {

      if ( $_GET['post_type'] == 'usa_pub_news' ) {
        wp_enqueue_style( 'admin_usa_pub_news_css', get_template_directory_uri() .'/common/css/admin/usa_pub_news.css' );
        wp_enqueue_script( 'admin_usa_pub_single_select_script', get_template_directory_uri() . '/common/js/admin/single_select_on_catchecklist.js', array(), NULL, true );

      } else if ( $_GET['post_type'] == 'usa_pub_authors' ) {
        wp_enqueue_style( 'admin_usa_pub_author_css', get_template_directory_uri() .'/common/css/admin/usa_pub_authors.css' );
      
      } else if ( $_GET['post_type'] == 'usa_pub_editorial' ) {
        wp_enqueue_style( 'admin_usa_pub_editorial_css', get_template_directory_uri() .'/common/css/admin/usa_pub_editorial.css' );
        wp_enqueue_script( 'admin_usa_pub_single_select_script', get_template_directory_uri() . '/common/js/admin/single_select_on_catchecklist.js', array(), NULL, true );

      } else if ( $_GET['post_type'] == 'usa_pub_graphics' ) {
        wp_enqueue_style( 'admin_usa_pub_graphics_css', get_template_directory_uri() .'/common/css/admin/usa_pub_graphics.css' );
      
      } else {
        //  Do nothing
      }

    } else if ( $_GET['post'] ) {

      if ( get_post_type( $_GET['post'] ) == 'usa_pub_news' ) {
        wp_enqueue_style( 'admin_usa_pub_news_css', get_template_directory_uri() .'/common/css/admin/usa_pub_news.css' );
        wp_enqueue_script( 'admin_usa_pub_single_select_script', get_template_directory_uri() . '/common/js/admin/single_select_on_catchecklist.js', array(), NULL, true );

      } else if ( get_post_type( $_GET['post'] ) == 'usa_pub_authors' ) {
        wp_enqueue_style( 'admin_usa_pub_author_css', get_template_directory_uri() .'/common/css/admin/usa_pub_authors.css' );
      
      } else if ( get_post_type( $_GET['post'] ) == 'usa_pub_editorial' ) {
        wp_enqueue_style( 'admin_usa_pub_editorial_css', get_template_directory_uri() .'/common/css/admin/usa_pub_editorial.css' );
        wp_enqueue_script( 'admin_usa_pub_single_select_script', get_template_directory_uri() . '/common/js/admin/single_select_on_catchecklist.js', array(), NULL, true );

      } else if ( get_post_type( $_GET['post'] ) == 'usa_pub_graphics' ) {
        wp_enqueue_style( 'admin_usa_pub_graphics_css', get_template_directory_uri() .'/common/css/admin/usa_pub_graphics.css' );
      
      } else {
        //  Do nothing
      }

    } else {
      //  Do nothing
    }

  }
}


/**
 *  Create submenu in settings for maintenance mode toggling
 */
add_action( 'admin_menu', 'usa_pub_custom_admin_pages' );
function usa_pub_custom_admin_pages() {

  add_submenu_page( 
    'options-general.php', 
    'Toggle Maintenance Mode', 
    'Maintenance Mode', 
    'manage_options', 
    'usa-pub-maintenance-mode', 
    'usa_pub_custom_admin_pages_callback'
  );

  function usa_pub_custom_admin_pages_callback() { ?>
    
    <style>
      h1 {
        margin-bottom: 30px;  
      }

      .form_control_wrap {
        max-width: 640px;
        width: 100%;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
      }

      .form_control_wrap .form_control {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        margin-right: 20px;
        margin-bottom: 20px;
      }

      .form_control_wrap .form_control input {
        margin: 0px;
        margin-right: 10px;
      }
    </style>

    <form action="<?php echo admin_url( 'admin-post.php' ); ?>" method="POST">
      <h1>Maintenance Mode</h1>
      <div class="form_control_wrap">
        <div class="form_control">
          <input type="radio" name="maintainance_mode" value="1" <?php echo get_option( '_maintainance_mode' ) == 1 ? 'checked':''; ?>>
          <label>On</label>
        </div>
        <div class="form_control">
          <input type="radio" name="maintainance_mode" value="0" <?php echo get_option( '_maintainance_mode' ) == 0 ? 'checked':''; ?>>
          <label>Off</label>
        </div>
      </div>

      <input type="submit" class="button button-primary" value="Save Changes">
      <input type="hidden" name="action" value="maintenance_mode">
      <input type="hidden" name="origin" value="<?php menu_page_url( 'usa-pub-maintenance-mode' ); ?>">
      <input type="hidden" name="maintenance_mode_nonce" value="<?php echo wp_create_nonce( 'maintenance_mode_nonce' ); ?>">
    </form>

  <?php
  }
}


/**
 *  Enqueue scripts and styles on wp-login page
 */
add_action( 'login_enqueue_scripts', 'enqueue_custom_login_css' );
function enqueue_custom_login_css() {
  wp_enqueue_style( 'usa_pub_wp_login_css', get_template_directory_uri() .'/common/css/admin/usa_pub_wp_login.css' );
  wp_enqueue_script( 'usa_pub_wp_login_script', get_template_directory_uri() . '/common/js/admin/usa_pub_wp_login.js', array(), NULL, true );
}


/**
 *  Remove WP logo from the administration bar
 */
add_action( 'wp_before_admin_bar_render', 'remove_logo_wp_admin', 0 );
function remove_logo_wp_admin() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'wp-logo' );
}


/**
 *  Modify TinyMCE editor
 */
add_filter( 'tiny_mce_before_init', 'custom_format_tinymce' );
function custom_format_tinymce( $in ) {

  $in['toolbar1'] = 'bold,italic,bullist,numlist,link,spellchecker,pastetext,charmap,undo,redo';
  $in['toolbar2'] = '';
  $in['wp_autoresize_on'] = false;
  $in['entities'] = false;
  $in['entity_encoding'] = false;

  return $in;
}

add_filter( 'wp_editor_settings', 'my_wp_editor_settings', 10, 2 );
function my_wp_editor_settings( $settings, $id ){

  // $settings['tinymce'] = false;
  $settings['quicktags'] = false;  
  $settings['drag_drop_upload'] = false;
  $settings['media_buttons'] = false;
  $settings['editor_height'] = 600;

  return $settings;
}


/**
 *  Use radio inputs instead of checkboxes for news taxonomy and team taxonomy
 */
add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );
function wpse_139269_term_radio_checklist( $args ) {

  if ( !empty( $args['taxonomy'] ) && ( $args['taxonomy'] === 'usa_tax_news_cat' or $args['taxonomy'] === 'usa_tax_team' ) ) {

    if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.

      if ( !class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {

        //  Custom walker for switching checkbox inputs to radio.
        class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {

          function walk( $elements, $max_depth, ...$args ) {
            $output = parent::walk( $elements, $max_depth, ...$args );
            $output = str_replace(
              array( 'type="checkbox"', "type='checkbox'" ),
              array( 'type="radio"', "type='radio'" ),
              $output
            );

            return $output;
          }
        }
      }

      $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
    }
  }

  return $args;
}


/**
 *  Helper function to get the authors of an article
 */
function get_authors( $id ) {

  if ( !empty( get_post_meta( $id, '_authors', true ) ) ) {

    foreach ( get_post_meta( $id, '_authors', true ) as $key => $id ) {
      $author = get_post_meta( $id, '_author_fullname', true );
      $literary_authors[] = $author;
    }

    return implode( '<br>', $literary_authors );

  } else {
    return null;
  }
}


/**
 *  Helper function to get the authors of an article
 */
function get_authors_with_courses( $id ) {

  if ( !empty( get_post_meta( $id, '_authors', true ) ) ) {

    foreach ( get_post_meta( $id, '_authors', true ) as $key => $id ) {
      $author_name = get_post_meta( $id, '_author_fullname', true );
      $author_course = get_post_meta( $id, '_author_course', true );
      $literary_authors[] = $author_name .'<br>'. $author_course;
    }

    return implode( '<br>', $literary_authors );

  } else {
    return null;
  }
}


/**
 *  Helper function to check if a custom post type is empty or not
 */
function cpt_empty( $cpt_slug ) {

  $check_current_post_type_entries = get_posts([
    'numberposts' => 1,
    'post_type' => $cpt_slug,
    'orderby' => 'date'
  ]);

  return !empty( $check_current_post_type_entries ) ? false : true;
}


/**
 *  Add university of San Agustin Colors
 */
add_action( 'admin_init', 'usa_color_admin_color_scheme' );
function usa_color_admin_color_scheme() {

  wp_admin_css_color( 'usa-color', __( 'University of San Agustin Colors' ),
    THEME_ABS_PATH . '/usa-color.css',
    array( '#a80000', '#f7f7f7', '#e5800c' , '#e5800c')
  );
}


/**
 *  Disable admin toolbar
 */
add_filter( 'show_admin_bar', 'usa_pub_hide_admin_bar' );
function usa_pub_hide_admin_bar(){ 
  return false; 
}