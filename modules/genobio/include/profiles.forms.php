<?php


	function edit_profiles_form()
	{	
		if (isset($_REQUEST['id']))
		{
			$id = intval($_REQUEST['id']);				
			$membershandler = xoops_getmodulehandler('members','genobio');
			$profileshandler = xoops_getmodulehandler('profiles','genobio');			
			$member = $membershandler->get($id);
			$profile = $profileshandler->get($id);	
			$member_id = $profile->getVar('member_id');
			$member_father_id = $profile->getVar('member_father_id');
			$member_mother_id = $profile->getVar('member_mother_id');
			$member_siblings_id = $profile->getVar('member_siblings_id');
			$member_partner_id = $profile->getVar('member_partner_id');
			$nickname = $profile->getVar('nickname');
			$dob = $profile->getVar('dob');
			$dod = $profile->getVar('dod');
			$anniversary = $profile->getVar('anniversary');
			$dob_unix = strtotime($profile->getVar('dob'));
			$dod_unix = strtotime($profile->getVar('dod'));
			$anniversary_unix = strtotime($profile->getVar('anniversary'));
			$height = $profile->getVar('height');
			$weight = $profile->getVar('weight');
			$colour_hair = $profile->getVar('colour_hair');
			$colour_eyes = $profile->getVar('colour_eyes');
			$baby_photo = $profile->getVar('baby_photo');
			$midlife_photo = $profile->getVar('midlife_photo');
			$elderly_photo = $profile->getVar('elderly_photo');
			$current_photo = $profile->getVar('current_photo');
			$bio = $profile->getVar('bio');
			$history = $profile->getVar('history');
			$education = $profile->getVar('education');
			$fellowship = $profile->getVar('fellowship');
			$earlyhistory = $profile->getVar('earlyhistory');
			$medical = $profile->getVar('medical');			
			$achivements = $profile->getVar('achivements');
			$contributations = $profile->getVar('contributations');
			$awards = $profile->getVar('awards');
			$media = $profile->getVar('media');
			$publications = $profile->getVar('publications');
			$jobs = $profile->getVar('jobs');												
			$spirtual = $profile->getVar('spirtual');
			$hates = $profile->getVar('hates');
			$likes = $profile->getVar('likes');
			$music = $profile->getVar('music');
			$thearts = $profile->getVar('thearts');															
			$other = $profile->getVar('other');
						
			$title = sprintf(_AM_GENOBIO_PROFILEEDIT, $member->getVar('display_name'));
		} else {
			redirect_header('index.php', 2, _GB_NOID);
			exit;
		}
		
		$form = new XoopsThemeForm($title, "edititem", "", "post");
	
		$form->addElement(new GenobioFormSelectMember(_GB_AM_FATHER, "member_father_id", $member_father_id, 1, false));
		$form->addElement(new GenobioFormSelectMember(_GB_AM_MOTHER, "member_mother_id", $member_mother_id, 1, false));
		$form->addElement(new GenobioFormSelectMember(_GB_AM_PARTNER, "member_partner_id", $member_partner_id, 1, false));
		$form->addElement(new GenobioFormSelectSibblings(_GB_AM_SIBBLINGGROUP, "member_siblings_id", $member_siblings_id, 1, false));
		$form->insertBreak();
				
		$form->addElement(new XoopsFormText(_GB_AM_NICKNAME, "nickname", 35, 128, $nickname));
		$form->addElement(new XoopsFormText(_GB_AM_DOB, "dob", 15, 10, $dob));
		$form->addElement(new XoopsFormText(_GB_AM_DOD, "dod", 15, 10, $dod));
		$form->addElement(new XoopsFormText(_GB_AM_ANNIVERSARY, "anniversary", 15, 10, $anniversary));		
		$form->addElement(new XoopsFormText(_GB_AM_HEIGHT, "height", 25, 20, $height));
		$form->addElement(new XoopsFormText(_GB_AM_WEIGHT, "weight", 25, 20, $weight));
		$form->addElement(new XoopsFormText(_GB_AM_COLOURHAIR, "colour_hair", 35, 50, $colour_hair));
		$form->addElement(new XoopsFormText(_GB_AM_COLOUREYES, "colour_eyes", 35, 50, $colour_eyes));
		$form->addElement(new XoopsFormFile(_GB_AM_BABYPHOTO, "baby_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile(_GB_AM_MIDLIFEPHOTO, "midlife_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile(_GB_AM_ELDERLYPHOTO, "elderly_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile(_GB_AM_CURRENTPHOTO, "current_photo", 1024*8172*2));				
		$form->insertBreak();
		
		$form->addElement(new XoopsFormEditor(_GB_AM_INDIVIDUALBIO, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "bio", 'value' => $bio)));
		$form->addElement(new XoopsFormEditor(_GB_AM_HISTORY, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "history", 'value' => $history)));
		$form->addElement(new XoopsFormEditor(_GB_AM_EDUCATION, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "education", 'value' => $education)));
		$form->addElement(new XoopsFormEditor(_GB_AM_FELLOWSHIP, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "fellowship", 'value' => $fellowship)));
		$form->addElement(new XoopsFormEditor(_GB_AM_EARLYHISTORY, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "earlyhistory", 'value' => $earlyhistory)));
		$form->addElement(new XoopsFormEditor(_GB_AM_MEDICAL, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "medical", 'value' => $medical)));
		$form->addElement(new XoopsFormEditor(_GB_AM_ACHIEVEMENTS, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "achivements", 'value' => $achivements)));
		$form->addElement(new XoopsFormEditor(_GB_AM_CONTRIBUTIONS, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "contributations", 'value' => $contributations)));
		$form->addElement(new XoopsFormEditor(_GB_AM_AWARDS, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "awards", 'value' => $awards)));
		$form->addElement(new XoopsFormEditor(_GB_AM_MEDIA, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "media", 'value' => $media)));
		$form->addElement(new XoopsFormEditor(_GB_AM_PUBLICATION, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "publications", 'value' => $publications)));
		$form->addElement(new XoopsFormEditor(_GB_AM_EMPLOYMENT, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "jobs", 'value' => $jobs)));
		$form->addElement(new XoopsFormEditor(_GB_AM_SPIRITUAL, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "spirtual", 'value' => $spirtual)));
		$form->addElement(new XoopsFormEditor(_GB_AM_INDIVIDUALHATES, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "hates", 'value' => $hates)));
		$form->addElement(new XoopsFormEditor(_GB_AM_INDIVIDUALLIKES, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "likes", 'value' => $likes)));
		$form->addElement(new XoopsFormEditor(_GB_AM_MUSIC, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "music", 'value' => $music)));
		$form->addElement(new XoopsFormEditor(_GB_AM_THEARTS, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "thearts", 'value' => $thearts)));
		$form->addElement(new XoopsFormEditor(_GB_AM_OTHER, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "other", 'value' => $other)));

		$form->addElement(new XoopsFormHidden("id", $id));
		$form->addElement(new XoopsFormHidden("op", "profiles"));		
		$form->addElement(new XoopsFormHidden("fct", "save"));		
		$form->addElement(new XoopsFormButton('', 'contents_submit', _SUBMIT, "submit"));
		
		$form->setExtra('enctype="multipart/form-data"'); 
		
		$form->display();
	}
		
?>