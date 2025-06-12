<?php 
if ( is_page( 'about' ) ) {
  $page_title_tag = 'USA Pub - About';

} else if ( is_page( 'feature' ) ) {
  $page_title_tag = 'USA Pub - Feature';
  $current_page_slug = 'feature';

} else if ( is_page( 'graphics' ) ) {
  $page_title_tag = 'USA Pub - Graphics';
  $current_page_slug = 'graphics';

} else if ( is_page( 'literary' ) ) {
  $page_title_tag = 'USA Pub - Literary';
  $current_page_slug = 'literary';

} else if ( is_page( 'news' ) ) {
  $page_title_tag = 'USA Pub - News';
  $current_page_slug = 'news';

} else if ( is_page( 'opinion' ) ) {
  $page_title_tag = 'USA Pub - Opinion';
  $current_page_slug = 'opinion';

} else {
  $page_title_tag = 'USA Publication';
}
?>

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
    
    wp_head(); ?>
  </head>
  <body <?php echo body_class(); ?>>
    <header id="header">
      <div class="top">
        <div class="max_width">
          <ul class="contact_info">
            <li>
              <a href="tel:<?php echo get_theme_mod( 'usa_pub_tel_setting' ); ?>">
                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.75 17.0415H14.6437C2.36247 16.3353 0.618722 5.97275 0.374972 2.81025C0.355331 2.56437 0.384402 2.31702 0.460518 2.08239C0.536635 1.84775 0.658301 1.63044 0.818545 1.44291C0.978789 1.25538 1.17446 1.10131 1.39435 0.989529C1.61424 0.877748 1.85403 0.810455 2.09997 0.791504H5.54372C5.79407 0.791262 6.03872 0.866198 6.24599 1.00661C6.45326 1.14701 6.61359 1.34642 6.70622 1.579L7.65622 3.9165C7.74769 4.14372 7.77039 4.3928 7.7215 4.63281C7.67261 4.87282 7.55428 5.09317 7.38122 5.2665L6.04997 6.61025C6.25792 7.79197 6.82384 8.8813 7.67116 9.73085C8.51848 10.5804 9.60631 11.1492 10.7875 11.3603L12.1437 10.0165C12.3197 9.84535 12.5421 9.72978 12.7833 9.68422C13.0245 9.63865 13.2737 9.66509 13.5 9.76025L15.8562 10.704C16.0853 10.7996 16.2807 10.9611 16.4176 11.1682C16.5546 11.3752 16.6267 11.6183 16.625 11.8665V15.1665C16.625 15.6638 16.4274 16.1407 16.0758 16.4923C15.7242 16.844 15.2473 17.0415 14.75 17.0415ZM2.24997 2.0415C2.08421 2.0415 1.92524 2.10735 1.80803 2.22456C1.69082 2.34177 1.62497 2.50074 1.62497 2.6665V2.7165C1.91247 6.4165 3.75622 15.1665 14.7125 15.7915C14.7946 15.7966 14.8769 15.7854 14.9547 15.7586C15.0324 15.7318 15.1042 15.6899 15.1657 15.6353C15.2273 15.5807 15.2774 15.5145 15.3133 15.4405C15.3492 15.3665 15.3702 15.2861 15.375 15.204V11.8665L13.0187 10.9228L11.225 12.704L10.925 12.6665C5.48747 11.9853 4.74997 6.54775 4.74997 6.4915L4.71247 6.1915L6.48747 4.39775L5.54997 2.0415H2.24997Z" fill="white"/>
                </svg>
                <span><?php echo get_theme_mod( 'usa_pub_tel_setting', '(033) 337 4842' ); ?></span>
              </a>
            </li>
            <li>
              <a href="mailto:<?php echo get_theme_mod( 'usa_pub_email_setting' ); ?>">
                <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 0.64917H2C1.66848 0.64917 1.35054 0.780255 1.11612 1.01359C0.881696 1.24692 0.75 1.56339 0.75 1.89337V11.847C0.75 12.177 0.881696 12.4934 1.11612 12.7268C1.35054 12.9601 1.66848 13.0912 2 13.0912H17C17.3315 13.0912 17.6495 12.9601 17.8839 12.7268C18.1183 12.4934 18.25 12.177 18.25 11.847V1.89337C18.25 1.56339 18.1183 1.24692 17.8839 1.01359C17.6495 0.780255 17.3315 0.64917 17 0.64917ZM15.625 1.89337L9.5 6.11122L3.375 1.89337H15.625ZM2 11.847V2.45948L9.14375 7.3803C9.24837 7.45254 9.37267 7.49126 9.5 7.49126C9.62733 7.49126 9.75163 7.45254 9.85625 7.3803L17 2.45948V11.847H2Z" fill="white"/>
                </svg>
                <span><?php echo get_theme_mod( 'usa_pub_email_setting', 'usapub@usa.edu.ph' ); ?></span>
              </a>
            </li>
          </ul>
          <ul class="social_links">
            <li>
              <a href="<?php echo get_theme_mod( 'usa_pub_fb_setting' ); ?>">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0558C0 15.0275 3.61083 19.1617 8.33333 20V12.7775H5.83333V10H8.33333V7.7775C8.33333 5.2775 9.94417 3.88917 12.2225 3.88917C12.9442 3.88917 13.7225 4 14.4442 4.11083V6.66667H13.1667C11.9442 6.66667 11.6667 7.2775 11.6667 8.05583V10H14.3333L13.8892 12.7775H11.6667V20C16.3892 19.1617 20 15.0283 20 10.0558C20 4.525 15.5 0 10 0C4.5 0 0 4.525 0 10.0558Z" fill="white"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="<?php echo get_theme_mod( 'usa_pub_inst_setting' ); ?>">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22081 0.888252C7.19831 0.843252 7.50998 0.833252 9.99998 0.833252C12.49 0.833252 12.8016 0.844085 13.7783 0.888252C14.755 0.932419 15.4216 1.08825 16.005 1.31409C16.6158 1.54492 17.17 1.90575 17.6283 2.37242C18.095 2.82992 18.455 3.38325 18.685 3.99492C18.9116 4.57825 19.0666 5.24492 19.1116 6.21992C19.1566 7.19908 19.1666 7.51075 19.1666 9.99992C19.1666 12.4899 19.1558 12.8016 19.1116 13.7791C19.0675 14.7541 18.9116 15.4208 18.685 16.0041C18.455 16.6158 18.0944 17.1701 17.6283 17.6283C17.17 18.0949 16.6158 18.4549 16.005 18.6849C15.4216 18.9116 14.755 19.0666 13.78 19.1116C12.8016 19.1566 12.49 19.1666 9.99998 19.1666C7.50998 19.1666 7.19831 19.1558 6.22081 19.1116C5.24581 19.0674 4.57915 18.9116 3.99581 18.6849C3.38408 18.4549 2.82983 18.0943 2.37165 17.6283C1.9053 17.1705 1.54441 16.6165 1.31415 16.0049C1.08831 15.4216 0.933313 14.7549 0.888313 13.7799C0.843313 12.8008 0.833313 12.4891 0.833313 9.99992C0.833313 7.50992 0.844146 7.19825 0.888313 6.22158C0.93248 5.24492 1.08831 4.57825 1.31415 3.99492C1.54475 3.38332 1.90591 2.82935 2.37248 2.37159C2.83001 1.90534 3.38371 1.54445 3.99498 1.31409C4.57831 1.08825 5.24498 0.933252 6.21998 0.888252H6.22081ZM13.7041 2.53825C12.7375 2.49409 12.4475 2.48492 9.99998 2.48492C7.55248 2.48492 7.26248 2.49409 6.29581 2.53825C5.40165 2.57909 4.91665 2.72825 4.59331 2.85408C4.16581 3.02075 3.85998 3.21825 3.53915 3.53909C3.23502 3.83496 3.00096 4.19515 2.85415 4.59325C2.72831 4.91658 2.57915 5.40158 2.53831 6.29575C2.49415 7.26242 2.48498 7.55242 2.48498 9.99992C2.48498 12.4474 2.49415 12.7374 2.53831 13.7041C2.57915 14.5983 2.72831 15.0833 2.85415 15.4066C3.00081 15.8041 3.23498 16.1649 3.53915 16.4608C3.83498 16.7649 4.19581 16.9991 4.59331 17.1458C4.91665 17.2716 5.40165 17.4208 6.29581 17.4616C7.26248 17.5058 7.55165 17.5149 9.99998 17.5149C12.4483 17.5149 12.7375 17.5058 13.7041 17.4616C14.5983 17.4208 15.0833 17.2716 15.4066 17.1458C15.8341 16.9791 16.14 16.7816 16.4608 16.4608C16.765 16.1649 16.9991 15.8041 17.1458 15.4066C17.2716 15.0833 17.4208 14.5983 17.4616 13.7041C17.5058 12.7374 17.515 12.4474 17.515 9.99992C17.515 7.55242 17.5058 7.26242 17.4616 6.29575C17.4208 5.40158 17.2716 4.91658 17.1458 4.59325C16.9791 4.16575 16.7816 3.85992 16.4608 3.53909C16.1649 3.23498 15.8047 3.00093 15.4066 2.85408C15.0833 2.72825 14.5983 2.57909 13.7041 2.53825ZM8.82915 12.8258C9.48303 13.0979 10.2111 13.1347 10.8891 12.9297C11.567 12.7247 12.1528 12.2907 12.5463 11.7018C12.9398 11.1129 13.1167 10.4056 13.0467 9.70084C12.9767 8.99603 12.6641 8.3374 12.1625 7.83742C11.8427 7.51782 11.456 7.27309 11.0303 7.12087C10.6045 6.96865 10.1503 6.91272 9.70039 6.9571C9.25045 7.00148 8.81594 7.14507 8.42815 7.37753C8.04036 7.60999 7.70893 7.92554 7.45773 8.30146C7.20653 8.67738 7.0418 9.10433 6.97541 9.55155C6.90901 9.99878 6.94261 10.4552 7.07376 10.8878C7.20492 11.3205 7.43038 11.7188 7.73391 12.0539C8.03745 12.3889 8.4115 12.6526 8.82915 12.8258ZM6.66831 6.66825C7.10583 6.23073 7.62525 5.88367 8.19689 5.64689C8.76854 5.4101 9.38123 5.28823 9.99998 5.28823C10.6187 5.28823 11.2314 5.4101 11.8031 5.64689C12.3747 5.88367 12.8941 6.23073 13.3316 6.66825C13.7692 7.10577 14.1162 7.62518 14.353 8.19683C14.5898 8.76848 14.7117 9.38117 14.7117 9.99992C14.7117 10.6187 14.5898 11.2314 14.353 11.803C14.1162 12.3747 13.7692 12.8941 13.3316 13.3316C12.448 14.2152 11.2496 14.7116 9.99998 14.7116C8.75036 14.7116 7.55193 14.2152 6.66831 13.3316C5.7847 12.448 5.28829 11.2495 5.28829 9.99992C5.28829 8.7503 5.7847 7.55186 6.66831 6.66825ZM15.7566 5.98992C15.8651 5.88764 15.9519 5.76465 16.0119 5.62823C16.0719 5.49181 16.104 5.34473 16.1062 5.19569C16.1083 5.04666 16.0806 4.89871 16.0245 4.76059C15.9685 4.62248 15.8853 4.49701 15.7799 4.39162C15.6746 4.28622 15.5491 4.20305 15.411 4.14702C15.2729 4.09098 15.1249 4.06323 14.9759 4.0654C14.8268 4.06758 14.6798 4.09963 14.5433 4.15967C14.4069 4.2197 14.2839 4.3065 14.1816 4.41492C13.9827 4.62578 13.8738 4.90585 13.8781 5.19569C13.8823 5.48553 13.9993 5.76232 14.2043 5.96729C14.4092 6.17226 14.686 6.28928 14.9759 6.2935C15.2657 6.29773 15.5458 6.18883 15.7566 5.98992Z" fill="white"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="<?php echo get_theme_mod( 'usa_pub_twit_setting' ); ?>">
                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7025 2.11415C19.0067 2.42248 18.2592 2.63082 17.4733 2.72498C18.2842 2.23981 18.8908 1.4762 19.18 0.576649C18.4182 1.02914 17.5844 1.34765 16.715 1.51832C16.1303 0.894037 15.3559 0.480255 14.5119 0.341211C13.668 0.202168 12.8017 0.345642 12.0477 0.74936C11.2936 1.15308 10.694 1.79445 10.3418 2.5739C9.9896 3.35335 9.9046 4.22727 10.1 5.05998C8.5564 4.98248 7.04635 4.58127 5.66784 3.8824C4.28934 3.18353 3.07319 2.20262 2.09832 1.00332C1.76499 1.57832 1.57332 2.24498 1.57332 2.95498C1.57295 3.59415 1.73035 4.22352 2.03155 4.78726C2.33276 5.351 2.76846 5.83168 3.29999 6.18665C2.68355 6.16703 2.08072 6.00047 1.54166 5.70082V5.75082C1.54159 6.64727 1.85168 7.51613 2.41931 8.20998C2.98693 8.90383 3.77713 9.37992 4.65582 9.55748C4.08398 9.71225 3.48444 9.73504 2.90249 9.62415C3.1504 10.3955 3.63332 11.07 4.28363 11.5533C4.93394 12.0365 5.71909 12.3043 6.52916 12.3191C5.15402 13.3987 3.45573 13.9842 1.70749 13.9816C1.39781 13.9817 1.08839 13.9636 0.780823 13.9275C2.55539 15.0685 4.62111 15.674 6.73082 15.6716C13.8725 15.6716 17.7767 9.75665 17.7767 4.62665C17.7767 4.45998 17.7725 4.29165 17.765 4.12498C18.5244 3.57579 19.1799 2.89573 19.7008 2.11665L19.7025 2.11415Z" fill="white"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="<?php echo get_theme_mod( 'usa_pub_yt_setting' ); ?>">
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.5834 2.4224C19.4701 2.01843 19.2495 1.65269 18.945 1.36407C18.6319 1.06657 18.2482 0.853764 17.83 0.745734C16.265 0.333234 9.99503 0.333234 9.99503 0.333234C7.38113 0.303495 4.76788 0.434296 2.17003 0.7249C1.75185 0.840911 1.36883 1.05847 1.05503 1.35823C0.746693 1.6549 0.523359 2.02073 0.406693 2.42157C0.126437 3.93135 -0.00973061 5.46435 2.6038e-05 6.9999C-0.00997396 8.53407 0.125859 10.0666 0.406693 11.5782C0.520859 11.9774 0.743359 12.3416 1.05253 12.6357C1.36169 12.9299 1.74669 13.1424 2.17003 13.2549C3.75586 13.6666 9.99503 13.6666 9.99503 13.6666C12.6122 13.6963 15.2288 13.5655 17.83 13.2749C18.2482 13.1669 18.6319 12.9541 18.945 12.6566C19.2494 12.368 19.4697 12.0022 19.5825 11.5982C19.8701 10.089 20.0099 8.55539 20 7.01907C20.0217 5.47624 19.882 3.93537 19.5834 2.42157V2.4224ZM8.00169 9.85323V4.1474L13.2184 7.00073L8.00169 9.85323Z" fill="white"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="bottom">
        <div class="max_width">
          <h1 class="header_logo">
            <a href="<?php echo get_site_url(); ?>">
              <?php 
              if ( !empty( get_theme_mod( 'usa_pub_header_logo_setting' ) ) ) {
                $header_logo_url = wp_get_attachment_image_url( get_theme_mod( 'usa_pub_header_logo_setting' ) );
              } else {
                $header_logo_url = THEME_ABS_PATH_IMAGES .'img_header_logo.png';
              }
              ?>
              <img src="<?php echo $header_logo_url ?>" alt="University of San Agustin Iloilo Publication">
            </a>
          </h1>
          <ul id="main_nav">
            <?php 
            $active_class = is_page( 'top' ) ? 'class="active"' : '';
            echo '<li '. $active_class .'><a href="'. get_site_url() .'">Home</a></li>';

            if ( !cpt_empty( 'usa_pub_news' ) ) {
              $active_class = ( is_page( 'news' ) or is_singular( 'usa_pub_news' ) ) ? 'class="active"' : '';
              echo '<li '. $active_class .'><a href="'. get_site_url() .'/news">News</a></li>';
            }

            if ( !cpt_empty( 'usa_pub_literary' ) ) {
              $active_class = ( is_page( 'literary' ) or is_singular( 'usa_pub_literary' ) ) ? 'class="active"' : '';
              echo '<li '. $active_class .'><a href="'. get_site_url() .'/literary">Literary</a></li>';
            }

            if ( !cpt_empty( 'usa_pub_opinion' ) ) {
              $active_class = ( is_page( 'opinion' ) or is_singular( 'usa_pub_opinion' ) ) ? 'class="active"' : '';
              echo '<li '. $active_class .'><a href="'. get_site_url() .'/opinion">Opinion</a></li>';
            }

            if ( !cpt_empty( 'usa_pub_feature' ) ) {
              $active_class = ( is_page( 'feature' ) or is_singular( 'usa_pub_feature' ) ) ? 'class="active"' : '';
              echo '<li '. $active_class .'><a href="'. get_site_url() .'/feature">Feature</a></li>';
            }

            if ( !cpt_empty( 'usa_pub_graphics' ) ) {
              $active_class = is_page( 'graphics' ) ? 'class="active"' : '';
              echo '<li '. $active_class .'><a href="'. get_site_url() .'/graphics">Graphics</a></li>';
            }

            $active_class = is_page( 'about' ) ? 'class="active"' : '';
            echo '<li '. $active_class .'><a href="'. get_site_url() .'/about">About</a></li>';
            ?>
          </ul>
          <form id="search_articles" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="POST">
            <input type="text" name="search_key" placeholder="search">
            <button class="search_submit" type="submit">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.325 12.899L19.705 18.279C19.8941 18.4682 20.0003 18.7248 20.0002 18.9923C20.0001 19.2599 19.8937 19.5164 19.7045 19.7055C19.5153 19.8946 19.2587 20.0008 18.9912 20.0007C18.7236 20.0006 18.4671 19.8942 18.278 19.705L12.898 14.325C11.2897 15.5707 9.26729 16.1569 7.24214 15.9643C5.21699 15.7718 3.34124 14.815 1.99649 13.2886C0.651744 11.7622 -0.0609975 9.7808 0.0032639 7.74753C0.0675253 5.71427 0.903963 3.78185 2.34242 2.34339C3.78087 0.904939 5.71329 0.0685019 7.74656 0.00424047C9.77982 -0.0600209 11.7612 0.652721 13.2876 1.99747C14.814 3.34222 15.7708 5.21796 15.9634 7.24312C16.1559 9.26827 15.5697 11.2907 14.324 12.899H14.325ZM8.00001 14C9.59131 14 11.1174 13.3678 12.2427 12.2426C13.3679 11.1174 14 9.59129 14 7.99999C14 6.40869 13.3679 4.88257 12.2427 3.75735C11.1174 2.63213 9.59131 1.99999 8.00001 1.99999C6.40871 1.99999 4.88259 2.63213 3.75737 3.75735C2.63215 4.88257 2.00001 6.40869 2.00001 7.99999C2.00001 9.59129 2.63215 11.1174 3.75737 12.2426C4.88259 13.3678 6.40871 14 8.00001 14Z" fill="#505050"/>
              </svg>
            </button>
            <input type="hidden" name="action" value="search_articles">
            <input type="hidden" name="search_articles_nonce" value="<?php echo wp_create_nonce( 'search_articles_nonce' ); ?>">
          </form>
          
          <div class="menu_icon_wrap">
            <svg id="reveal_search" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.325 12.899L19.705 18.279C19.8941 18.4682 20.0003 18.7248 20.0002 18.9923C20.0001 19.2599 19.8937 19.5164 19.7045 19.7055C19.5153 19.8946 19.2587 20.0008 18.9912 20.0007C18.7236 20.0006 18.4671 19.8942 18.278 19.705L12.898 14.325C11.2897 15.5707 9.26729 16.1569 7.24214 15.9643C5.21699 15.7718 3.34124 14.815 1.99649 13.2886C0.651744 11.7622 -0.0609975 9.7808 0.0032639 7.74753C0.0675253 5.71427 0.903963 3.78185 2.34242 2.34339C3.78087 0.904939 5.71329 0.0685019 7.74656 0.00424047C9.77982 -0.0600209 11.7612 0.652721 13.2876 1.99747C14.814 3.34222 15.7708 5.21796 15.9634 7.24312C16.1559 9.26827 15.5697 11.2907 14.324 12.899H14.325ZM8.00001 14C9.59131 14 11.1174 13.3678 12.2427 12.2426C13.3679 11.1174 14 9.59129 14 7.99999C14 6.40869 13.3679 4.88257 12.2427 3.75735C11.1174 2.63213 9.59131 1.99999 8.00001 1.99999C6.40871 1.99999 4.88259 2.63213 3.75737 3.75735C2.63215 4.88257 2.00001 6.40869 2.00001 7.99999C2.00001 9.59129 2.63215 11.1174 3.75737 12.2426C4.88259 13.3678 6.40871 14 8.00001 14Z" fill="#505050"/>
            </svg>
            <svg id="hide_search" fill="none" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px">
              <path d="M 40.783203 7.2714844 A 2.0002 2.0002 0 0 0 39.386719 7.8867188 L 25.050781 22.222656 L 10.714844 7.8867188 A 2.0002 2.0002 0 0 0 9.2792969 7.2792969 A 2.0002 2.0002 0 0 0 7.8867188 10.714844 L 22.222656 25.050781 L 7.8867188 39.386719 A 2.0002 2.0002 0 1 0 10.714844 42.214844 L 25.050781 27.878906 L 39.386719 42.214844 A 2.0002 2.0002 0 1 0 42.214844 39.386719 L 27.878906 25.050781 L 42.214844 10.714844 A 2.0002 2.0002 0 0 0 40.783203 7.2714844 z" fill="#505050"/>
            </svg>
            <svg id="mobile_menu_icon" width="44" height="28" viewBox="0 0 44 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 2L42 2" stroke="#B80717" stroke-width="4" stroke-linecap="round"/>
              <path d="M2 14L42 14" stroke="#B80717" stroke-width="4" stroke-linecap="round"/>
              <path d="M2 26L42 26" stroke="#B80717" stroke-width="4" stroke-linecap="round"/>
            </svg>
          </div>
        </div>
      </div>
    </header>