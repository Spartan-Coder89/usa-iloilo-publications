window.addEventListener( 'pageshow', common_js );

function common_js() {

  function bottom_bar_element_margining( direction, element_ref, target_element ) {

    if ( direction == 'left' ) {
      let margin_left = element_ref.getBoundingClientRect().left;
      target_element.style = 'margin-left: '+ margin_left +'px';

    } else {
      let margin_right = window.innerWidth - element_ref.getBoundingClientRect().right;
      target_element.style = 'margin-right: '+ margin_right +'px';
    }
  }


  /**
   *  Bottom bar element margining on pageshow
   */
  if ( document.querySelector( '#footer .bottom .created_by' ) !== null ) {

    bottom_bar_element_margining( 
      'right', 
      document.querySelector( '#footer .top .bg' ), 
      document.querySelector( '#footer .bottom .created_by' ) 
    );
  }

  if ( document.querySelector( '#footer .bottom .copyright' ) !== null ) {

    bottom_bar_element_margining( 
      'left', 
      document.querySelector( '#footer .top .col_1' ), 
      document.querySelector( '#footer .bottom .copyright' ) 
    );
  }
  

  /**
   *  Get reveal search articles on click
   */
  document.getElementById( 'reveal_search' ).addEventListener( 'click', function() {
    this.classList.remove( 'show' );
    document.getElementById( 'hide_search' ).classList.add( 'show' );
    document.getElementById( 'search_articles' ).classList.add( 'show' );
  });

  document.getElementById( 'hide_search' ).addEventListener( 'click', function() {
    this.classList.remove( 'show' );
    document.getElementById( 'reveal_search' ).classList.add( 'show' );
    document.getElementById( 'search_articles' ).classList.remove( 'show' );
  });


  /**
   *  Toggle mobile menu
   */
   document.getElementById( 'mobile_menu_icon' ).addEventListener( 'click', function() {
      
    const mobile_menu_icon = this;
    const main_nav = document.getElementById( 'main_nav' );
    let main_nav_height = window.outerHeight - document.getElementById( 'header' ).offsetHeight;

    if ( mobile_menu_icon.classList.contains( 'show' ) ) {

      mobile_menu_icon.classList.remove( 'show' );
      main_nav.classList.remove( 'show' );
      document.getElementById( 'main_nav' ).style = 'max-height: 0px;';

    } else {

      mobile_menu_icon.classList.add( 'show' );
      main_nav.classList.add( 'show' );
      document.getElementById( 'main_nav' ).style = 'max-height: '+ main_nav_height +'px;';
    }
  });
  

  /**
   *  Back to top
   */
  if ( document.getElementById( 'back_to_top' ) ) {

    document.getElementById( 'back_to_top' ).addEventListener( 'click', function() {
      window.scrollTo({top: 0, behavior: 'smooth'});
    });
  }

  // window.addEventListener( 'scroll', function() {

  //   let back_to_top = document.getElementById( 'back_to_top' );
    
  //   if ( window.pageYOffset <= 380 ) {

  //     if ( !back_to_top.classList.contains( 'hide' ) ) {
  //       back_to_top.classList.add( 'hide' );
  //     }
      
  //   } else {

  //     if ( back_to_top.classList.contains( 'hide' ) ) {
  //       back_to_top.classList.remove( 'hide' );
  //     }
  //   }
  // });


  /**
   *  Actions to be done on pageshow and below 768px screen
   *  1. Add spacing on main for header
   */
  if ( window.innerWidth <= 768 ) {
    document.querySelector( 'main' ).style = 'padding-top: '+ document.getElementById( 'header' ).offsetHeight +'px';
  }


  /**
   *  Actions to be done on pageshow and below 380px screen
   *  1. Reveal search icon
   */
  if ( window.innerWidth <= 380 ) {
    document.getElementById( 'reveal_search' ).classList.add( 'show' )
  }


  /**
   *  Actions to be done on window resize
   *  1. Set footer bottom elements margin alignment
   */
  window.addEventListener( 'resize', function() {

    //  1.
    if ( document.querySelector( '#footer .bottom .created_by' )  ) {

      bottom_bar_element_margining( 
        'right', 
        document.querySelector( '#footer .top .bg' ), 
        document.querySelector( '#footer .bottom .created_by' ) 
      );
    }
    
    if ( document.querySelector( '#footer .bottom .copyright' )  ) {

      bottom_bar_element_margining( 
        'left', 
        document.querySelector( '#footer .top .col_1' ), 
        document.querySelector( '#footer .bottom .copyright' ) 
      );
    }

    if ( window.innerWidth <= 768 ) {
      document.querySelector( 'main' ).style = 'padding-top: '+ document.getElementById( 'header' ).offsetHeight +'px';
    } else {
      document.querySelector( 'main' ).style = 'padding-top: 0px';
    }
  
  });

}