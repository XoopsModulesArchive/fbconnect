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
 
include_once("./header.php");

xoops_cp_header();

global $xoopsModule;

//Apelle du menu admin
if ( !is_readable(XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php"))	{
fbconnect_adminmenu(0, _AM_FBCONNECT_MANAGER_INDEX);
} else {
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
loadModuleAdminMenu (0, _AM_FBCONNECT_MANAGER_INDEX);
}


xoops_cp_footer();

?>