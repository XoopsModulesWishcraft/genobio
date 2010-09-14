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
						
			$title = 'Edit Sibblings Item - '.$member->getVar('display_name');
		} else {
			redirect_header('index.php', 2, _GB_NOID);
			exit;
		}
		
		$form = new XoopsThemeForm($title, "edititem", "", "post");

		$editor_config['editor'] = 'fckeditor';
		
		$form->addElement(new GenobioFormSelectMember('Father:', "member_father_id", $member_father_id, 1, false));
		$form->addElement(new GenobioFormSelectMember('Mother:', "member_mother_id", $member_mother_id, 1, false));
		$form->addElement(new GenobioFormSelectMember('Partner:', "member_partner_id", $member_partner_id, 1, false));
		$form->addElement(new GenobioFormSelectSibblings('Sibbling Group:', "member_siblings_id", $member_siblings_id, 1, false));
		$form->insertBreak();
				
		$form->addElement(new XoopsFormText('Nickname:', "nickname", 35, 128, $nickname));
		$form->addElement(new XoopsFormText('DOB:', "dob", 15, 10, $dob));
		$form->addElement(new XoopsFormText('DOD:', "dod", 15, 10, $dod));
		$form->addElement(new XoopsFormText('Anniversary:', "anniversary", 15, 10, $anniversary));		
		$form->addElement(new XoopsFormText('Height:', "height", 25, 20, $height));
		$form->addElement(new XoopsFormText('Weight:', "weight", 25, 20, $weight));
		$form->addElement(new XoopsFormText('Colour Hair:', "colour_hair", 35, 50, $colour_hair));
		$form->addElement(new XoopsFormText('Colour Eyes:', "colour_eyes", 35, 50, $colour_eyes));
		$form->addElement(new XoopsFormFile('Baby Photo:', "baby_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile('Midlife Photo:', "midlife_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile('Elderly Photo:', "elderly_photo", 1024*8172*2));
		$form->addElement(new XoopsFormFile('Current Photo:', "current_photo", 1024*8172*2));				
		$form->insertBreak();
		
		$editor_config['value'] = $bio;
		$form->addElement(new XoopsFormEditor('Individual Biograph:', "bio", $editor_config));
		$editor_config['value'] = $history;
		$form->addElement(new XoopsFormEditor('History:', "history", $editor_config));
		$editor_config['value'] = $education;
		$form->addElement(new XoopsFormEditor('Education:', "education", $editor_config));
		$editor_config['value'] = $fellowship;
		$form->addElement(new XoopsFormEditor('Fellowship:', "fellowship", $editor_config));
		$editor_config['value'] = $earlyhistory;
		$form->addElement(new XoopsFormEditor('Early History:', "earlyhistory", $editor_config));
		$editor_config['value'] = $medical;
		$form->addElement(new XoopsFormEditor('Medical:', "medical", $editor_config));
		$editor_config['value'] = $achivements;
		$form->addElement(new XoopsFormEditor('Achivements:', "achivements", $editor_config));
		$editor_config['value'] = $contributations;
		$form->addElement(new XoopsFormEditor('Contributations:', "contributations", $editor_config));
		$editor_config['value'] = $awards;
		$form->addElement(new XoopsFormEditor('Awards:', "awards", $editor_config));
		$editor_config['value'] = $media;
		$form->addElement(new XoopsFormEditor('Media:', "media", $editor_config));
		$editor_config['value'] = $publications;
		$form->addElement(new XoopsFormEditor('Publications:', "publications", $editor_config));
		$editor_config['value'] = $jobs;
		$form->addElement(new XoopsFormEditor('Jobs/Employment:', "jobs", $editor_config));
		$editor_config['value'] = $spirtual;
		$form->addElement(new XoopsFormEditor('Spiritual Beliefs:', "spirtual", $editor_config));
		$editor_config['value'] = $hates;
		$form->addElement(new XoopsFormEditor('Individual Hates:', "hates", $editor_config));
		$editor_config['value'] = $likes;
		$form->addElement(new XoopsFormEditor('Individual Likes:', "likes", $editor_config));
		$editor_config['value'] = $music;		
		$form->addElement(new XoopsFormEditor('Music:', "music", $editor_config));
		$editor_config['value'] = $thearts;
		$form->addElement(new XoopsFormEditor('The Arts:', "thearts", $editor_config));
		$editor_config['value'] = $other;
		$form->addElement(new XoopsFormEditor('Other Information:', "other", $editor_config));

		$form->addElement(new XoopsFormHidden("id", $id));
		$form->addElement(new XoopsFormHidden("op", "profiles"));		
		$form->addElement(new XoopsFormHidden("fct", "save"));		
		$form->addElement(new XoopsFormButton('', 'contents_submit', _SUBMIT, "submit"));
		
		$form->setExtra('enctype="multipart/form-data"'); 
		
		$form->display();
	}
		
?>