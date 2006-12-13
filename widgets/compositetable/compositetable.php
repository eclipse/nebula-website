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
	$pageTitle 		= "Nebula CTableTree Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Jeremy Dowdall";
	
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
		<h2>CTableTree</h2>
		
		<img src='ctabletree.png'>
		<p>
		The CTableTree widget is a custom TableTree component created with two primary
		purposes.
		<ol>
			<li>Allow items to expand and collapse independently of one another</li>
			<li>Separate the creation and maintenance of Cells from the implementation of the TableTree</li>
		</ol>
		</p>
		<p>
		At its heart, the CTableTree widget is simply a container for custom cells which are
		organized by items and displayed in a manner similar to a SWT TableTree.  More
		importantly though, the custom cells may become quite complex and have a great deal of
		functionality beyond just displaying data.  For example, a cell can be written to hold
		a fully functional IM session.  By placing these cells into a CTableTree a user could
		scroll through many sessions, expanding and collapsing them as convenient.  Further more,
		the cell and the implementation of the containing CTableTree are not tightly coupled so
		they do not have to be in the same Eclipse Plug-in - or maintained by the same programmer.
		</p>

		<p>
		NOTE: The CTableTree widget is still under active development.<br>
		The code is made available in an
		<font color=red><b>ALPHA</b></font> state.  Users should expect changes in future versions.
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