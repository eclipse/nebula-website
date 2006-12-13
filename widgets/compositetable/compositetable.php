<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# ctabletree.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Describes the CTableTree widget.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula CompositeTable Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, CompositeTable";
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
		<h2>CompositeTable</h2>
		
		<img src='images/ctable-sn3.PNG'>
		<img src='images/ctable-sn5.PNG'>
		<p>
		CompositeTable is a custom SWT grid control that:
		<ol>
			<li>Gives you control over the layout of your rows</li>
			<li>Automatically edits in place using any SWT control</li>
			<li>Manages CRUD operations simply and automatically</li>
		</ol>
		</p>
		<p>
		CompositeTable is designed to solve 80% of the problems faced by RCP
		developers creating CRUD interfaces that aren't solved by Eclipse 
		Data Binding.</p>
		<p>
		It does this though two strategies:  (a) CompositeTable enables you 
		to design your grid's row control as a custom SWT control.  Your row
		control can be anything and can contain any other SWT control.
		SWT controls are in an always-on, always-editing state all the time.
		This simplifies the user's experience with the application considerably
		while giving you great control over your application's layout.
		(b) Providing an event model with features like two-phase commits
		making it simple to map CompositeTable events to CRUD database semantics.
		</p>

		<p>
		NOTE: The CompositeTable widget is still under active development.<br>
		The code is made available in a
		<font color=red><b>BETA</b></font> state.  Users should expect changes in future versions.
		</p>
		
		<p>
		<a href='snippets.php'>CTableTree Snippets</a>
		</p>
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/nebula_ctabletree_alpha.zip'>Download the CTableTree widget - Alpha Version</a>
		</p>
		<p>
		<a href='history.php'>Update History (like release notes)</a>
		</p>


		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>