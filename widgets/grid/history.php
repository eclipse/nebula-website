<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# history.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: Describes the history of Grid.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Grid Update History";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
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
		
		<h3>8/18/06 Update</h3>
		<ul>
		<li>GridItem.getBounds(int) updated to return correct bounds when item is invisible.</li>
		<li>Removing items in certain scenarios can cause the scrollbars to have incorrect values.  [<a href='https://bugs.eclipse.org/bugs/show_bug.cgi?id=154381'>154381</a>]</li>
		</ul>
		
		<h3>8/14/06 Update</h3>
		<ul>
		<li>GridEditor layout issue resolved.  [<a href='https://bugs.eclipse.org/bugs/show_bug.cgi?id=153729'>153729</a>]</li>
		<li>First pass of in-place tooltips.</li>
		<li>Small bug with images in cells fixed.</li>
		</ul>

		<h3>7/24/06 Update</h3>
		<ul>
		<li>Disposed events now fired as appropriate.  [<a href='https://bugs.eclipse.org/bugs/show_bug.cgi?id=151352'>151352</a>]</li>
		<li>Images are now displayed in cells.</li>
		<li>Removed test code which cause cell 2,2 to be automatically selected at construction.</li>
		</ul>

		<h3>7/14/06 Update</h3>
		<ul>
		<li>First pass of cell selection.  Use Grid.setCellSelection(true).</li>
		<li>Some methods names changed to better reflect SWT practices.  Methods named isXXXX were renamed to getXXXX if they simply returned the property value.</li>
		<li>Javadoc slightly improved.  ALPHA warnings added.</li>
		<li>Many changes were made affecting renderers including: InternalWidget event constants renamed, the contract for values passed to row header renderers was changed (the paint method value now receives the actual GridItem rather than the Integer value of the row number), the contract on empty renderers was changed (many now take the Grid as the value)</li>
		<li>A variety of bug fixes.</li>
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>