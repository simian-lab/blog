<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (file_exists(dirname( __FILE__ ) . '/stack/local-config.php')) {
  include(dirname( __FILE__ ) . '/stack/local-config.php');
}
else {
  include(dirname( __FILE__ ) . '/stack/lightsail-config.php');
}