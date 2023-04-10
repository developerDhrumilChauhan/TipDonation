<?php

/**
*
* @package PLUGIN_TGDFFW
* 
**/

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option("plugin-tgdffw-home-options");        /* Remove Home Options */
delete_option("plugin-tgdffw-setting-options");     /* Remove Settings Options */
delete_option("plugin-tgdffw-appearance-options");  /* Remove Appearance Options */
delete_option("plugin-tgdffw-tip-title-meta");      /* Remove Tip Title Meta Storage */

?>