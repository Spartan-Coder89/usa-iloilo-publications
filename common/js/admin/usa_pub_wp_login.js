window.addEventListener( 'pageshow', usa_pub_wp_login_js );
function usa_pub_wp_login_js() {
  document.querySelector( 'body.login div#login h1 a' ).href = '#';
  document.querySelector( 'body.login div#login h1 a' ).style = 'cursor: default;';
}
