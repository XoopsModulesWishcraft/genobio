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
$modversion['dirname'] = basename(dirname(__FILE__));
$modversion['name'] = ucfirst(basename(dirname(__FILE__)));
$modversion['version']     = "0.1";
$modversion['releasedate'] = "2009-06-13";
$modversion['status']      = "Alpha 1";
$modversion['description'] = _MI_GEOBIO_DESC;
$modversion['credits']     = "Family Tree Profile";
$modversion['author']      = "Wishcraft";
$modversion['help']        = "";
$modversion['license']     = "This small family multisite profiler.";
$modversion['official']    = 0;
$modversion['image']       = "images/genobio_slogo.png";

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

$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'id';
$modversion['comments']['pageName'] = 'index.php';
$modversion['comments']['extraParams'] = array('op');

?>
