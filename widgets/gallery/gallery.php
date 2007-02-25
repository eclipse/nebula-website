<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_tiers.php
	#
	# Author: 		Nicolas Richeton
	# Date:			2007-02-20
	#
	# Description: Describes the tiers in Nebula.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Gallery Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
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
		<h2>Gallery</h2>
		
		<img src='images/gallery.png'>	
		<p>
		<h3>Group renderers</h3>
	    <ul>
	         <li>DefaultGalleryGroupRenderer : expandable groups, item grid with auto margins.</li>
	         <li>NoGroupRenderer : item grid with auto margins</li>
	    </ul>
	    
	    <h3>Item renderers</h3>
	    <ul>
	         <li>DefaultGalleryItemRenderer : icon style, drop shadows and labels.</li>
	         <li>ListItemRenderer : list style, labels and descriptions.</li>
	    </ul>
		<p>
		NOTE: The Gallery widget is still under active development.  The code is made available in an
		<font color=red><b>ALPHA</b></font> state.  Users should expect changes in future versions.
		
		<p>
		<a href='snippets.php'>Gallery Snippets</a>
		<p>
        Download from CVS (org.eclipse.nebula.widgets.gallery)
		<p>
		<a href='history.php'>Update History (like release notes)</a>


		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>