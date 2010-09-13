<?php

	function edit_sibblings_form()
	{	
		if (isset($_REQUEST['id']))
		{
			$id = intval($_REQUEST['id']);				
			$sibblingshandler = xoops_getmodulehandler('sibblings','genobio');
			$sibbling = $sibblingshandler->get($id);	
			$sibblings_id = $sibbling->getVar('sibblings_id');
			$members_group = $sibbling->getVar('members_group');
			$nickname = $sibbling->getVar('nickname');
			$bio = $sibbling->getVar('bio');
			$history = $sibbling->getVar('history');
			$activities = $sibbling->getVar('activities');
			$toys = $sibbling->getVar('toys');			
			$title = _AM_GENOBIO_EDITSIBBLING;
		} else {
			$sibblings_id = 0;
			$members_group = array();
			$nickname = '';
			$bio = '';
			$history = '';
			$activities = '';
			$toys = '';			
			$title = _AM_GENOBIO_NEWSIBBLING;
		}
		
		$form = new XoopsThemeForm($title, "edititem", "", "post");
		
		$form->addElement(new GenobioFormSelectMember(_GB_AM_MEMBERS, "members_group", $members_group, 10, true));
		$form->addElement(new XoopsFormText(_GB_AM_GROUPNICKNAME, "nickname", 35, 255, $nickname));
		$form->addElement(new XoopsFormEditor(_GB_AM_GROUPBIO, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "bio", 'value' => $bio)));
		$form->addElement(new XoopsFormEditor(_GB_AM_GROUPHISTORY, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "history", 'value' => $history)));
		$form->addElement(new XoopsFormEditor(_GB_AM_GROUPACTIVITIES, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "activities", 'value' => $activities)));
		$form->addElement(new XoopsFormEditor(_GB_AM_GROUPTOYS, $GLOBALS['xoopsModuleConfig']['editor'], array('name' => "toys", 'value' => $toys)));

		$form->addElement(new XoopsFormHidden("id", $id));
		$form->addElement(new XoopsFormHidden("op", "sibblings"));		
		$form->addElement(new XoopsFormHidden("fct", "save"));		
		$form->addElement(new XoopsFormButton('', 'contents_submit', _SUBMIT, "submit"));
		$form->display();
	}
	
	function sel_sibblings_form()
	{
	
		$form = new XoopsThemeForm(_AM_GENOBIO_CURRENTSIBBLING, "current", "", "post");

		$sibblingshandler = xoops_getmodulehandler('sibblings','genobio');
		$sibblings = $sibblingshandler->getObjects($criteria);	
		$element = array();
		foreach($sibblings as $key => $item)
		{
			$element[$key] = new XoopsFormElementTray('Item '.$item->getVar('id').':');
			$element[$key]->addElement(new XoopsFormLabel('', '<a href="index.php?op=sibblings&fct=edit&id='.$item->getVar('sibblings_id').'">'._EDIT.'</a>&nbsp;<a href="index.php?index.php?op=sibblings&fct=delete&id='.$item->getVar('sibblings_id').'">'._DELETE.'</a>'));
			$element[$key]->addElement(new XoopsFormLabel(_GB_AM_NICKNAME, ''.$item->getVar('nickname').''));			
			$form->addElement($element[$key]);
		}
		$form->display();
	}
		
?>