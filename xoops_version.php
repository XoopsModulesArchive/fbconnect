<?php
/**
 * ****************************************************************************
 * Module généré par TDMCreate de la TDM "http://www.tdmxoops.net"
 * ****************************************************************************
 * fbconnect - MODULE FOR XOOPS AND IMPRESS CMS
 * Copyright (c) waqar (http://www.fluidfusion.net)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       waqar (http://www.fluidfusion.net)
 * @license         GPL
 * @package         fbconnect
 * @author 			waqar (http://www.fluidfusion.net)
 *
 * Version : 1.00:
 * ****************************************************************************
 */
 
	
	$modversion["name"] = "fbconnect";
	$modversion["version"] = 1.00;
	$modversion["description"] = "Facebook connect module for xoops";
	$modversion["author"] = "waqar";
	$modversion["author_website_url"] = "http://www.fluidfusion.net";
	$modversion["author_website_name"] = "Affordable web designing and hosting";
	$modversion["credits"] = "Waqar";
	$modversion["license"] = "GPL";
	$modversion["release_info"] = "Candidate release";
	$modversion["release_file"] = "";
	$modversion["manual"] = "";
	$modversion["manual_file"] = "";
	$modversion["image"] = "images/TDMLogo.png";
	$modversion["dirname"] = "fbconnect";

	//about
	$modversion["demo_site_url"] = "http://www.fluidfusion.net";
	$modversion["demo_site_name"] = "Facebook connect demo";
	$modversion["module_website_url"] = "http://www.fluidfusion.net/modules/fbconnect";
	$modversion["module_website_name"] = "Fluid fusion";
	$modversion["release"] = "Beta";
	$modversion["module_status"] = "";
	
	// Admin things
	$modversion["hasAdmin"] = 1;
	
	$modversion["adminindex"] = "admin/index.php";
	$modversion["adminmenu"] = "admin/menu.php";
	
	
	// Mysql file
	//$modversion["sqlfile"]["mysql"] = "sql/mysql.sql";

	// Tables
	
	
	// Scripts to run upon installation or update
	$modversion["onInstall"] = "include/install.php";
	//$modversion["onUpdate"] = "include/update.php";// Menu
	$modversion["hasMain"] = 1;
	
	//Recherche
	$modversion["hasSearch"] = 1;
	$modversion["search"]["file"] = "include/search.inc.php";
	$modversion["search"]["func"] = "fbconnect_search";
	
	$i = 1;
    /*$modversion["config"][$i]["name"]        = "fbconnect_api_id";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_API";
	$modversion["config"][$i]["description"] = "Facebook connect API code";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	*/
	$modversion["config"][$i]["name"]        = "fbconnect_api_key";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_API_KEY";
	$modversion["config"][$i]["description"] = "Facebook connect API key";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	$modversion["config"][$i]["name"]        = "fbconnect_api_secret";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_API_SECRET";
	$modversion["config"][$i]["description"] = "Facebook connect API secret key";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	$modversion["config"][$i]["name"]        = "fbconnect_callback_url";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_CALLBACK_URL";
	$modversion["config"][$i]["description"] = "Facebook call back url eg http://www.example.com/modules/fbconnect/index.php";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	/*$modversion["config"][$i]["name"]        = "fbconnect_bundle_id";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_FEED_BUNDLE";
	$modversion["config"][$i]["description"] = "Facebook feed bundle id";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	*/
	$modversion["config"][$i]["name"]        = "fbconnect_post_url";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_POST_URL";
	$modversion["config"][$i]["description"] = "Facebook post url";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	
	$modversion["config"][$i]["name"]        = "fbconnect_post_title";
	$modversion["config"][$i]["title"]       = "_MI_FBCONNECT_POST_TITLE";
	$modversion["config"][$i]["description"] = "Facebook sample post title eg(my facebook)";
	$modversion["config"][$i]["formtype"]    = "text";
	$modversion["config"][$i]["valuetype"]   = "text";
	$i++;
	
	//Blocs
	$i = 1;	
	$modversion["blocks"][$i]["file"] = "facebook_block.php";
	$modversion["blocks"][$i]["name"] = _MI_FACEBOOK_LOGIN_BLOCK;
	$modversion["blocks"][$i]["description"] = "";
	$modversion["blocks"][$i]["show_func"] = "fbconnectButton";
	//$modversion["blocks"][$i]["edit_func"] = "b_pages_sections_edit";
	$modversion["blocks"][$i]["template"] = "fblogin.html";
	$i++;
?>