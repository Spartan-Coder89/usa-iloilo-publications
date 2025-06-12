window.addEventListener( 'pageshow', usa_pub_news_cat_js );

function usa_pub_news_cat_js() {

  document.querySelectorAll( '#swatches_list .swatch' ).forEach( swatch => {

    swatch.addEventListener( 'click', function() {
      document.getElementById( 'selected_color' ).value = swatch.dataset.color;
      document.getElementById( 'selected_color' ).style = 'background-color: '+ swatch.dataset.color +';';
    });
  });
}