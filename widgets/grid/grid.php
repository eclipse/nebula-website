<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_tiers.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: Describes the tiers in Nebula.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Grid Widget";
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
		<h2>Grid</h2>
		
		<img src='grid.png'>
		<p>
		The Grid widget is a spreadsheet/table component that offers features not currently found in
		the base SWT Table.  Features include cell selection, column grouping, column spanning, row headers, and more.

		<p>
		NOTE: The Grid widget is still under active development.  The code is made available in an
		<font color=red><b>ALPHA</b></font> state.  Users should expect changes in future versions.
		
		<p>
		<a href='snippets.php'>Grid Snippets</a>
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.grid_1.0_ALPHA_NIGHTLY.zip'>Download the Grid widget - Nightly Build - Alpha Version</a>
		<p>
		<a href='https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=Nebula&component=Grid&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0='>Resolved Issues</a>


		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>