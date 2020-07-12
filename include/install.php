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
 
$indexFile = XOOPS_ROOT_PATH."/modules/TDMCreate/include/index.html";
$blankFile = XOOPS_ROOT_PATH."/modules/TDMCreate/images/deco/blank.gif";

//Creation du dossier "uploads" pour le module à la racine du site
$module_uploads = XOOPS_ROOT_PATH."/uploads/fbconnect";
if(!is_dir($module_uploads))
	mkdir($module_uploads, 0777);
	chmod($module_uploads, 0777);
copy($indexFile, XOOPS_ROOT_PATH."/uploads/fbconnect/index.html");

?>