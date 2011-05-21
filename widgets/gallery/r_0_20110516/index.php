<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# release-notes.php
	#
	# Author: 		Nicolas Richeton
	# Date:			2011-05-16
	#
	# Description: Release 0.5.4 R_0_20110516
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Gallery R_0_20110516 release notes";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Gallery";
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
		
		<h3>General</h3>
		<p>This release is the latest stable version of the Nebula Gallery widget : <b>v0.5.4_R_0_20110516</b>. This is <b>NOT</b> a 1.0 release : 
		the nebula project is still in its incubation phase and some features are still missing in the widget (see below). 
		However, this version is stable enough to be included in RCP applications or plugins. </p>
		
		
		
		<h3>Components</h3>
		<p>The Gallery plug-in includes 3 main components :
		<table border="1" width="100%" style="padding:3px; border: 1px solid #000;">
		<tr>
		<th style="padding:3px; font-weight:bold;">Component</th>
		<th style="padding:3px; font-weight:bold;">Package</th>
		<th style="padding:3px; font-weight:bold;">API</th>
		<th style="padding:3px; font-weight:bold;">Features</th>
		<th style="padding:3px; font-weight:bold;">Comments</th>
		</tr>
		<tr>
		<td>Gallery Widget</td>
		<td>org.eclipse.nebula.widgets.gallery</td>
		<td>Stable</td>
		<td>Stable</td>
		<td>Except experimental feature 'fillIfsingle'</td>
		</tr>
		<tr>
		<td>Gallery Viewer</td>
		<td>org.eclipse.nebula.jface.galleryviewer</td>
		<td>Stable</td>
		<td style="color: #FF0000;">Dev</td>
		<td>Standard mode should be quite stable but requires a lot of testing. SWT.VIRTUAL mode is not yet implemented.</td>
		</tr>
		<tr>
		<td>Nebula Animation</td>
		<td>org.eclipse.nebula.animation</td>
		<td style="color: #FF0000;">Dev</td>
		<td>Stable</td>
		<td>Will be moved to CWT at some point. Effects are working great but API will be improved in the future.</td>
		</tr>
		</table>
		<p>Dev : features not fully implemented, major API changes expected, ...</p>
	
		<h3>New features and changes</h3>
		<ul>
			<li>Autohide scrollbar : Scrollbar will be displayed only if required. </li>
			<li>Bug and performances fixes</li>

	
		</ul>
		<h3>Download</h3>
		<p><a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/gallery/downloads/drops/R_0_20110516/org.eclipse.nebula.widgets.gallery-0.5.4.jar">Nebula Gallery widget R_0_20110516 (0.5.4)</a>. 
			<h3>Changelog</h3>
			<p>See <a href="https://bugs.eclipse.org/bugs/buglist.cgi?chfieldto=20110516;query_format=advanced;chfieldfrom=2009-04-18;component=Gallery;resolution=FIXED;classification=Technology;product=Nebula">Nebula Gallery 20110516 changelog (bugzilla).</a></p>
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>