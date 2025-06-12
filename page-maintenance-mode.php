<!DOCTYPE html>
<html lang="en" style="margin: 0px !important;">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $page_title_tag ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="USA-PUB,University of San Agustin,University of San Agustin Iloilo Publications,USA Iloilo">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="copyright" content="University of San Agustin Iloilo Publications">
    <meta name="format-detection" content="telephone=no">

    <?php 
    if ( !empty( get_site_icon_url() ) ) {
      echo 
      '<link rel="icon" href="'. get_site_icon_url() .'" type="image/x-icon" />
      <link rel="shortcut icon" href="'. get_site_icon_url() .'" type="image/x-icon" />';

    } else { ?>

      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/favicon-16x16.png">
      <link rel="manifest" href="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo THEME_ABS_PATH_IMAGES; ?>favicons/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
    <?php
    }
    
    wp_head(); 
    ?>
  </head>

  <body>
    <div id="wrap">
      <div id="no_articles" class="max_width">
        <p class="heading">Website Update</p>
        <p class="description">We are updating the site to bring you more articles soon.</p>
      </div>
    </div>
  </body>

  <?php wp_footer(); ?>
</html>
