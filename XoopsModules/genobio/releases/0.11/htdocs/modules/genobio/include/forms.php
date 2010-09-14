<?php

	if ($_REQUEST['op']=='members'||$_REQUEST['op']=='profiles') {
		$id = intval($_REQUEST['id']);				
		if (is_object($member)) {
			define('XOOPS_UPLOAD_PATH', XOOPS_ROOT_PATH.'/uploads/genobio/member');
			define('XOOPS_UPLOAD_URL', XOOPS_URL.'/uploads/genobio/member');
			define('XOOPS_FCK_FOLDER', 'member-'.$id);
		}
		else {
			define('XOOPS_UPLOAD_PATH', XOOPS_ROOT_PATH.'/uploads/genobio/member');
			define('XOOPS_UPLOAD_URL', XOOPS_URL.'/uploads/genobio/member');
			define('XOOPS_FCK_FOLDER', 'default');
		}

	} else {
		define('XOOPS_UPLOAD_PATH', XOOPS_ROOT_PATH.'/uploads/genobio/member');
		define('XOOPS_UPLOAD_URL', XOOPS_URL.'/uploads/genobio/member');
		define('XOOPS_FCK_FOLDER', 'default');
	}

	genobio_makeWritable(XOOPS_UPLOAD_PATH.'/'.XOOPS_FCK_FOLDER);
	
	include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
	
	// Include Internal Form Objects
	include_once XOOPS_ROOT_PATH."/modules/genobio/class/formselectcategory.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/class/formselectmember.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/class/formselectdisplaypicture.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/class/formselectsibbling.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/class/formselectsex.php";
	include_once XOOPS_ROOT_PATH."/modules/multisite/class/formselectdomains.php";

	
	// Include Forms
	include_once XOOPS_ROOT_PATH."/modules/genobio/include/sibblings.forms.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/include/profiles.forms.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/include/members.forms.php";
	include_once XOOPS_ROOT_PATH."/modules/genobio/include/categories.forms.php"	;
	

		
?>