<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_process.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: Describes the process for submitting contributions.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Contributing to the Nebula Project";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Chris Gross";
	
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
		<p>Do you have a really cool widget that you'd like to contribute to Nebula? </p>
		<p>Contributing a widget to Nebula requires that you become a full committer.  The Nebula project does not
		have full time resources to manage and support your contribution.  Instead you will become a committer with
		full rights to update your contribution.  But first, you must get approval for your contribution.  We have a wiki
		page that describes the contribution process.</p>
		<p>
		
		<h2 align="center"><a href="http://wiki.eclipse.org/Nebula/New_Contributions" target="_blank">Nebula Contribution Guide</a></h2> 
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
