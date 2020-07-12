<?php

/*   
 *   FACEBOOK CONNECT LIBRARY FUNCTIONS/CLASSES
 */

/*   
 *   FILE INCLUDE PATHS
 *   MAKE SURE THESE PATHS ALL END WITH A FORWARD SLASH
 */

define(CONNECT_APPLICATION_PATH, XOOPS_ROOT_PATH."/modules/fbconnect/");
define(CONNECT_JAVASCRIPT_PATH, XOOPS_URL."/modules/fbconnect/javascript/");
define(CONNECT_CSS_PATH, XOOPS_URL."/modules/fbconnect/");
define(CONNECT_IMG_PATH, XOOPS_URL."/modules/fbconnect/");

include_once CONNECT_APPLICATION_PATH . 'class/facebook.php';
include_once CONNECT_APPLICATION_PATH . 'lib/fbconnect.php';
include_once CONNECT_APPLICATION_PATH . 'lib/core.php';
include_once CONNECT_APPLICATION_PATH . 'lib/user.php';
include_once CONNECT_APPLICATION_PATH . 'lib/display.php';

/*   
 *   FB CONNECT APPLICATION DATA
 */
global $xoopsModuleConfig;
$callback_url    = $xoopsModuleConfig['fbconnect_callback_url'];
$api_key         = $xoopsModuleConfig['fbconnect_api_key'];
$api_secret      = $xoopsModuleConfig['fbconnect_api_secret'];
$base_fb_url     = 'connect.facebook.com';
$feed_bundle_id  = '';

/*   
 *   SAMPLE BUNDLE DATA
 */

$sample_post_title = $xoopsModuleConfig['fbconnect_post_title'];
$sample_post_url = $xoopsModuleConfig['fbconnect_post_url'];
$sample_one_line_story = '{*actor*} posted a comment on <a href="{*post-url*}">{*post-title*}</a> and said {*post*}.';
$sample_template_data = '{"post-url":'.$sample_post_url.', "post-title":'.$sample_post_title.', "post":"This is so easy to use!"}';

?>