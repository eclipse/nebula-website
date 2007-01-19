<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# history.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Describes the history of CompositeTable.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula CompositeTable History";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, History";
	$pageAuthor		= "David Orme";
	
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
		
		<p>The CompositeTable build version is placed in the README file in
		the distribution.  By examining the version number in your README file,
		you can see if a bug you have encountered is fixed in future versions.</p>
		
		<h3>12/14/2006 Version 0.9.0</h3>
		<ul>
		<li><b>NOTE: API change.</b>  Cleaned up layout manager API to make resizable columns possible.</li>
		</ul>
		
		<h3>12/14/2006 Version 0.8.2</h3>
		<ul>
		<li>Fixed bug <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168517">168517</a>.</li>
		</ul>
		
		<h3>12/14/2006 Version 0.8.1</h3>
		<ul>
		<li>Fixed an obscure bug that could cause Platform/UI to throw an
		assertion failed exception when used in an RCP app; fixed possible
		WidgetDisposedException.</li>
		</ul>
		
		<h3>12/14/2006 Version 0.8.0</h3>
		<ul>
		<li>The initial website is up; initial release!</li>
		</ul>
		
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>