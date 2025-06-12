window.addEventListener( 'pageshow', single_article_js );
function single_article_js() {
  
  document.querySelectorAll( '#the_content p' ).forEach( function(p) {
    p.innerHTML == '&nbsp;' ? p.remove() : '';
  });

  // document.querySelectorAll( '#the_content p span' ).forEach( function(span) {
  //   span.innerHTML == '&nbsp;' ? span.remove() : '';
  // });
}