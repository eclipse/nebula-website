<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# history.php
	#
	# Author: 		Nicolas Richeton
	# Date:			2007-02-20
	#
	# Description: Describes the history of Gallery.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Gallery Update History";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
	$pageAuthor		= "Nicolas Richeton";
	
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
		
		<h3>4/15/07 Update</h3>
		<ul>
			<li>Keyboard navigation.</li>
			<li>Horizontal mode.</li>
			<li>Some bugs fixed.</li>
		</ul>
		
		<h3>2/24/07 Update</h3>
		<ul>
		    <li>Fixed a major bug on Linux GTK (empty widget)</li>
		</ul>
	
		<h3>2/20/07 Update</h3>
		<ul>
		    <li>First Nebula release of Gallery</li>
			<li>Removed java 1.5 specifics. The gallery widget now works with java 1.4+</li>
		</ul>
		
		<h3>Previous history</h3>
	    <p>This widget was initialy written for a RCP photo sharing application.</p>	

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>