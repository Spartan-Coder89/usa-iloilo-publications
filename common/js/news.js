window.addEventListener( 'pageshow', news_js );

function news_js() {

  document.querySelector( '#more_articles .filter select' ).addEventListener( 'change', function() {
    document.querySelector( '#more_articles .filter' ).submit();
  });
}