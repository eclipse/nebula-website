<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# snippets.php
	#
	# Author: Eric Wuillai
	# Date:		2007-03-22
	#
	# Description: Snippets for DateChooser widgets.
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula DateChooser Snippets";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
	$pageAuthor		= "Eric Wuillai";

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

		Please see the <a href="http://www.eclipse.org/swt/snippets/">SWT Snippets page</a> for information on snippets and how to run a snippet.
		<p>

		<ul>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet1.java?cvsroot=Technology_Project'>DateChooser : all default settings.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet2.java?cvsroot=Technology_Project'>DateChooser : border, blue theme, week numbers and footer.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet3.java?cvsroot=Technology_Project'>DateChooser : multi selection, selection listener.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet4.java?cvsroot=Technology_Project'>DateChooser : navigation controlled by program.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet5.java?cvsroot=Technology_Project'>DateChooser : use a custom default theme.</a></li>
		</ul>

		<hr class="clearer"/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>