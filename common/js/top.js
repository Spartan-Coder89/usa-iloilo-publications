window.addEventListener( 'pageshow', top_js );

function top_js() {

  /**
   *  Graphics carousel
   */
  $( '#carousel' ).slick({
    centerMode: true,
    slidesToShow: 3,
    centerPadding: '30px',
    variableWidth: true,
    arrows: true,
    prevArrow: '<div id="carousel_prev"><img src="https://usa-publications.simonjiloma.com/wp-content/themes/usa-pub/common/images/ico_left_arrow.png" /></div>',
    nextArrow: '<div id="carousel_next"><img src="https://usa-publications.simonjiloma.com/wp-content/themes/usa-pub/common/images/ico_right_arrow.png" /></div>'
  });
  
}