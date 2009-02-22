<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2008-02-20
	#
	# Description:  Nebula Source Page.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Source Code";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Source, Code";
	$pageAuthor		= "Nebula Committers";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);


	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p style="margin:5px 0 15px 15px">
			This project hosts its CVS repository at:
		</p>
		<p style="margin:5px 0 15px 30px">
			:pserver:anonymous@dev.eclipse.org:/cvsroot/technology/org.eclipse.swt.nebula
		</p>
		<p style="margin:5px 0 15px 15px">
			The CVS repository is browseable <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/?root=Technology_Project">on the web</a>.
		</p>
		
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>