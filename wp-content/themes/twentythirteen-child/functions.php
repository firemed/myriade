<?php
/* favicone du site */
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/oiseau_noir.png" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );
?>