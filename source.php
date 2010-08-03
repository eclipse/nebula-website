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
		<div style="margin:5px 0 15px 15px">
			<p>This project hosts its CVS repository at:</p>
			<p style="margin-left:15px">:pserver:anonymous@dev.eclipse.org:/cvsroot/technology</p>
			<p style="margin-left:30px">The source is located under the package <strong>org.eclipse.swt.nebula</strong></p>
			<p style="padding-top:15px">For information on using CVS at Eclipse.org, please visit the <a href="http://wiki.eclipse.org/index.php/CVS_Howto">wiki page</a></p>
			<p>The CVS repository is also browseable <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/?root=Technology_Project">on the web</a>.</p>
			<p>For a quick start, use one of the <a href="http://wiki.eclipse.org/Nebula_Setup">Team Project Sets</a> to download all Nebula projects from CVS.</p>
		</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>