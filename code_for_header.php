<?php
/*
*   ---------------------------------------------------------------------
*   MNKY Template part: site header
*   ---------------------------------------------------------------------
*/
function remove_header() {
   if (!is_page("own-your-home")) {
    return;
   }
   $css_to_hide_header = "
   <style>
  header{
    display:none;
  }
  nav {
    display:none;
  }
  footer {
    display:none;
  }
  #mobile-header{
    display:none;
  }
    </style>";

   echo $css_to_hide_header;
}
add_action('wp_head', 'remove_header');

?>
