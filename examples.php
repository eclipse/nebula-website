<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description:  Examples plugin.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Examples Plugin";
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
			
		The Nebula examples plugin adds a view to your Eclipse installation.  This view is essentially
		a gallery of the Nebula widgets where you can play with each widget to get a sense of its
		abilities.
		<p>
		<b>The latest version of this plugin can be downloaded from CVS : dev.eclipse.org /cvsroot/technology/ org.eclipse.swt.nebula/org.eclipse.swt.nebula.examples</b>
		<p>
		or : simply download the zip file below, add the two plugin jars to your Eclipse plugins directory,
		restart Eclipse, then (in the menu) go to Window - Show View - Other and choose the Nebula
		Examples view from the 'Other' folder.   <b>TEMPORARY UNAVAILABLE.</b>
		
		<!-- <p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/nebula_examples.zip'>Download the Nebula Examples plugin</a> -->

		<p>
		<img src='examples.png'>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>