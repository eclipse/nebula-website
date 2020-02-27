<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# timeline.php
	#
	# Author: 		Christian Pontesegger
	# Date:			2020-02-27
	#
	# Description: Describes the Timeline control in Nebula
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Timeline Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Christian Pontesegger";
	
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
		<h2>Timeline</h2>
		
		<img src='timeline.png'>
		<p>
		The Timeline widget displays a events aligned on a time axis. Events can be grouped into separate rows. Cursors allow to measure timings.

		<p>
		NOTE: The Timeline widget is still under active development.  The code is made available in an
		<font color=red><b>ALPHA</b></font> state.  Users should expect changes in future versions.
		
		<p>
			<a href='/nebula/snippets.php#Timeline'>Snippets</a>
		</p>

		<p>
			<a href='https://wiki.eclipse.org/Nebula_Timeline'>Wiki documentation</a>
		</p>

		<p>
			<a href='https://bugs.eclipse.org/bugs/buglist.cgi?classification=Technology&product=Nebula&component=Timeline&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED'>Open Bugs</a>
		</p>
		
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>