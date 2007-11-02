<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# collapsiblebuttons.php
	#
	# Author: 	Emil Crumhorn
	# Date:		2007-09-02
	#
	# Description: Describes the CollapsibleButtons widget.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Collapsible Buttons Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Emil Crumhorn";

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
		<h2>CollapsibleButtons</h2>

		<img src='images/collapsiblebuttons.png'>
		<p>
		The Collapsible Buttons Widget is a customizable collapsible buttons widget modeled after the bottom left buttons widget in Microsoft Outlook.
		The widget is highly customizable from simple flags for setting things on and off, to extending interfaces for controlling how the buttons should
		be painted and other more advanced aspects.
		<p>
		By default, the widget comes with Default implementations for everything that allows you to skin the button bar according to the following:
		<p>
		<ul>
		      &raquo; Outlook 2005 - Windows XP Blue Theme<br>
		      &raquo; Outlook 2005 - Windows XP Olive Theme<br>
		      &raquo; Outlook 2005 - Windows XP Silver Theme<br>
      		  &raquo; Outlook 2007 - Blue Theme (Same regardless of XP color scheme)
		</ul>

		<p>
		Please note that this widget usually fits best inside components that push it into place as it changes the actual widget size when buttons are collapsed,
		such as the <b>SashForm</b>, <b>ViewForm</b> or a custom layout.
		<p>
		<!-- <a href='snippets.php'>CollapsibleButton Snippets</a> -->
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.collapsiblebuttons_1.0_ALPHA_NIGHTLY.zip'>Download the CollapsibleButtons widget - Nightly Build</a>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>