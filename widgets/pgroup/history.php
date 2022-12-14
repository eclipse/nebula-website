<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# history.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: Describes the history of Grid.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula PGroup Update History";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
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

		<h3>12/5/06 Update</h3>
		<ul>
		<li>Updated background drawing code to show parent's background (using SWT.INHERIT_DEFAULT) behind the rounded corners when the group's background color has been modified.</li>
		</ul>

		<h3>11/3/06 Update</h3>
		<ul>
		<li>Fixed PGroup jar to include all necessary classes. (doh)</li>
		</ul>
		
		<h3>10/20/06 Update</h3>
		<ul>
		<li>Updated FormGroupStrategy drawing behavior to correctly fade to the parent's background.</li>
		</ul>

		<h3>10/19/06 Update</h3>
		<ul>
		<li>First Nebula release of PGroup.</li>
		<li>Significant API redesign from prior SWTPlus versions.</li>
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>