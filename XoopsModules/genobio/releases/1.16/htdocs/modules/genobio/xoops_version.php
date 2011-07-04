<?php
/* *********************************************/
/*                          	TAKEAWEB					*/
/*        	           http://www.takeaweb       			*/
/*       					       				*/
/*           		  Francesco Mulassano   				*/
/*            		  Alessandro Sturniolo     				*/
/*                  	        	  2009           				*/
/* ------------------------------------------------------------------*/
/*    	      XOOPS - PHP Content Management System    		*/
/*                  Copyright (c) 2000 XOOPS.org        		*/
/*                      <http://www.xoops.org/>          			*/
/* *********************************************/
if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}
$modversion['dirname'] 	   = 'genobio';
$modversion['name'] 	   = 'GenoBio';
$modversion['version']     = "1.16";
$modversion['releasedate'] = "Tues: 2011-03-08";
$modversion['status']      = "Stable";
$modversion['description'] = _MI_GENOBIO_DESC;
$modversion['credits']     = "Wishcraft, Trabis, Runeher";
$modversion['author']      = "Wishcraft";
$modversion['help']        = "";
$modversion['license']     = "A small genological biographic wiki multisite profiler.";
$modversion['official']    = 1;
$modversion['image']       = "images/genobio_slogo.png";

$modversion['author_realname'] = "Simon Roberts";
$modversion['author_website_url'] = "http://www.chronolabs.org.au";
$modversion['author_website_name'] = "Chronolabs Australia";
$modversion['author_email'] = "simon@chronolabs.coop";
$modversion['demo_site_url'] = "Chronolabs Australia";
$modversion['demo_site_name'] = "http://roberts.co.in/";
$modversion['support_site_url'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=32";
$modversion['support_site_name'] = "Chronolabs";
$modversion['submit_bug'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=32";
$modversion['submit_feature'] = "http://www.chronolabs.org.au/forums/viewforum.php?forum=32";
$modversion['usenet_group'] = "sci.chronolabs";
$modversion['maillist_announcements'] = "";
$modversion['maillist_bugs'] = "";
$modversion['maillist_features'] = "";
// Upgrade
$modversion['onUpgrade'] = "include/upgrade.php";

// Main
$modversion['hasMain'] = 1;

// Admin
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file
$modversion['tables'][0] = "genobio_member";
$modversion['tables'][1] = "genobio_members_profiles";
$modversion['tables'][2] = "genobio_categories";
$modversion['tables'][3] = "genobio_sibblings";

// Templates
$i = 0;

$i++;
$modversion['templates'][$i]['file'] = 'genobio_index.html';
$modversion['templates'][$i]['description'] = 'Picture Profile Screen';

$i++;
$modversion['templates'][$i]['file'] = 'genobio_member.html';
$modversion['templates'][$i]['description'] = 'Member Picture Profile Screen';

$i++;
$modversion['templates'][$i]['file'] = 'genobio_birth.html';
$modversion['templates'][$i]['description'] = 'Birth Picture Booth';

$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'id';
$modversion['comments']['pageName'] = 'index.php';
$modversion['comments']['extraParams'] = array('op');

xoops_load('XoopsEditorHandler');
$editor_handler = XoopsEditorHandler::getInstance();
foreach ($editor_handler->getList(false) as $id => $val)
	$options[$val] = $id;

$i=1;	
$modversion['config'][$i]['name'] = 'editor';
$modversion['config'][$i]['title'] = "_MI_GENOBIO_EDITORS";
$modversion['config'][$i]['description'] = "_MI_GENOBIO_EDITORS_DESC";
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'ckeditor';
$modversion['config'][$i]['options'] = $options;

$i++;	
$modversion['config'][$i]['name'] = 'editor_rows';
$modversion['config'][$i]['title'] = "_MI_GENOBIO_EDITORS_ROWS";
$modversion['config'][$i]['description'] = "_MI_GENOBIO_EDITORS_ROWS_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '35';

$i++;	
$modversion['config'][$i]['name'] = 'editor_cols';
$modversion['config'][$i]['title'] = "_MI_GENOBIO_EDITORS_COLS";
$modversion['config'][$i]['description'] = "_MI_GENOBIO_EDITORS_COLS_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '60';

$i++;	
$modversion['config'][$i]['name'] = 'editor_width';
$modversion['config'][$i]['title'] = "_MI_GENOBIO_EDITORS_WIDTH";
$modversion['config'][$i]['description'] = "_MI_GENOBIO_EDITORS_WIDTH_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '100%';

$i++;	
$modversion['config'][$i]['name'] = 'editor_height';
$modversion['config'][$i]['title'] = "_MI_GENOBIO_EDITORS_HEIGHT";
$modversion['config'][$i]['description'] = "_MI_GENOBIO_EDITORS_HEIGHT_DESC";
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '400px';

?>
