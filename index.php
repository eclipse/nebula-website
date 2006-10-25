<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Project";
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
		<h2>Supplemental Custom Widgets for SWT</h2>
		<p>The Nebula project is a source for custom SWT widgets.  Nebula is also an incubator for 
		SWT.  Some Nebula widgets will graduate into SWT and therefore into the main Eclipse Platform.
		<p>
		All Nebula widgets are available on the navigation tree on the left or from the table below.
		  Each widget page will contain information as well as the download for that widget.

		<p>
		
		<div class="homeitem">
		   <h3>Widgets</h3>
		      <ul>
		         <li><a href="/nebula/widgets/grid/grid.php">Grid</a>
		         <BR>The Grid is a table component that offers spreadsheet like features while 
		         maintaining the traditional SWT Table-like API.
		         </li>
		         <li><a href="/nebula/widgets/ctabletree/ctabletree.php">CTableTree</a>
		         <BR>The CTableTree is a table-tree component which uses dynamic custom cells while 
		         maintaining the traditional SWT Table/Tree-like API.
		         </li>
		         <li><a href="/nebula/widgets/pgroup/pgroup.php">PGroup</a>
		         <BR>PGroup is a expandable/collapsible composite widget with attractive styling and 
		an extensible design.
		         </li>
		        <li><a href="/nebula/widgets/pshelf/pshelf.php">PShelf</a>
		         <BR>PShelf is a composite widget similar to a tab folder but uses an accordion-like
		         metaphor.
		         </li>
		      </ul>
		</div>

		<hr class="clearer" />
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
