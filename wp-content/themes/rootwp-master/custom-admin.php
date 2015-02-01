<?php

function admin_logo() { ?>
 <style type="text/css">
 #wp-admin-bar-wp-logo {
 background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-admin.png) !important;
 }
 #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
 content: "" !important;
 }
 #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus {
 background-color: transparent !important;
 }
 </style>
<?php }
add_action( 'admin_head', 'admin_logo' );
