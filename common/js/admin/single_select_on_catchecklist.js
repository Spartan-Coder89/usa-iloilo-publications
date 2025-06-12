window.addEventListener( 'pageshow', usa_pub_news );
function usa_pub_news() {

  function single_select_catchecklist( target_elements ) {

    const checkboxes = document.querySelectorAll( target_elements );
    checkboxes.forEach( checkbox => {

      checkbox.addEventListener( 'change', () => {
        let current_checkbox = checkbox;

        //  Uncheck all checkboxes
        checkboxes.forEach( checkbox => {
          if ( current_checkbox != checkbox ) {
            checkbox.checked = false;
          }
        });

      });
    });
  }

  if ( document.querySelector( '#usa_tax_news_catchecklist-pop input[type="checkbox"]' ) ) {
    single_select_catchecklist( '#usa_tax_news_catchecklist-pop input[type="checkbox"]' );
  }

  if ( document.querySelector( '#usa_tax_teamchecklist-pop input[type="checkbox"]' ) ) {
    single_select_catchecklist( '#usa_tax_teamchecklist-pop input[type="checkbox"]' );
  }
}
