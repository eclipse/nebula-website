<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# snippets.php
	#
	# Author: Eric Wuillai
	# Date:		2007-03-22
	#
	# Description: Snippets for FormattedText component.
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula FormattedText Snippets";
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
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/DateFormatterSnippet1.java?cvsroot=Technology_Project'>DateFormatter : default Locale US, default mask, no default value.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/DateFormatterSnippet2.java?cvsroot=Technology_Project'>DateFormatter : fixed mask, no default value.</a></li>
		</ul>

		<p>
		<ul>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet1.java?cvsroot=Technology_Project'>NumberFormatter : default Locale US, given fixed mask, no default value.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet2.java?cvsroot=Technology_Project'>NumberFormatter : Locale FR, default fixed mask, no default value.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet3.java?cvsroot=Technology_Project'>NumberFormatter : default Locale and mask, variable length in the integer part, value is provided.</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet4.java?cvsroot=Technology_Project'>NumberFormatter : get and set value between to fields having same edit and display masks for two differents Locale (US and FR).</a></li>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet5.java?cvsroot=Technology_Project'>NumberFormatter : default Locale US, given fixed mask, no default value.</a></li>
		</ul>

		<hr class="clearer"/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>