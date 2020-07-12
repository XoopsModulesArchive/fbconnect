<?php

function fbconnectButton($size ="meduim") 
{
	include_once XOOPS_ROOT_PATH."/modules/fbconnect/lib/config.php";
	$module_handler =& xoops_gethandler('module');
  $module =& $module_handler->getByDirname('fbconnect');
  $config_handler =& xoops_gethandler('config');
  $moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));
	$user = User::fbc_getLoggedIn();
	//$block['user']= $user;
	($user) ? $fb_active_session = $user->fbc_is_session_active() : $fb_active_session = FALSE;
	 $block = array();
	
$api_key = $moduleConfig['fbconnect_api_key'];
	$block['api'] = $api_key;
if(!$user){

	$block ['fb_button']= '<fb:login-button v="2" size="medium" onlogin="window.location.reload(true);">Connect with Facebook</fb:login-button>';
 
	}
	else{
		
		$block['fb_user']='<fb:profile-pic uid="'.$user.'" size="square" facebook-logo="true"></fb:profile-pic>';
	}
	return $block;
}
?>