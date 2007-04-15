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
		
		<img src='images/gallery.jpg'>	
		<p>
		<h3>Group renderers</h3>
	    <ul>
	         <li>DefaultGalleryGroupRenderer : expandable groups, item grid with auto margins. Best with SWT.V_SCROLL.</li>
	         <li>NoGroupRenderer : item grid with auto margins.</li>
	    </ul>
	    
	    <h3>Item renderers</h3>
	    <ul>
	         <li>DefaultGalleryItemRenderer : icon style, drop shadows and labels.</li>
	         <li>ListItemRenderer : list style, labels and descriptions.</li>
	    </ul>
	    
	    
	    <h3>Supported styles</h3>
	    <ul>
	    <li>SWT.MULTI : Enables multiple selections.</li>
	    <li>SWT.V_SCROLL : Vertical scrolling. Should not be used with SWT.H_SCROLL.</li>
	    <li>SWT.H_SCROLL : Horizontal scrolling. Should not be used with SWT.V_SCROLL.</li>
	    <li>SWT.VIRTUAL : Virtual mode. Items are created on demand.</li>
	    </ul>
	    
		<p>
		NOTE: The Gallery widget is still under active development.  The code is made available in an
		<font color=red><b>ALPHA</b></font> state.  Users should expect changes in future versions.</p>
		
		<p>
		<a href='snippets.php'>Gallery Snippets</a></p>
		
		<p>
        <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.gallery_1.0_ALPHA_NIGHTLY.zip">Download Gallery nightly build</a></p>

		<p>
		<a href='history.php'>Update History (like release notes)</a></p>


		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>