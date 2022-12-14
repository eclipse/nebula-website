<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committers.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Committers";
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
		<p>Each component within Nebula is managed by a single committer.  The list of committers is:		
		<p>
		<ul>
		<li>Chris Gross (Project Lead) - Grid, PGroup, PShelf</li>
		<li>Jeremy Dowdall - CTableTree</li>
		<li>David Orme - CompositeTable</li>
		<li>Nicolas Richeton - Gallery</li>
		<li>Eric Wuillai - FormattedText, DateChooser</li>
		<li>Emil Crumhorn - CalendarCombo, CollapsibleButtons, GanttChart</li>
		<li>Matthew Hall - PaperClips, RadioGroup</li>
		<li>Marty Jones - TableCombo</li>
		<li>Wim Jongman - Oscilloscope</li>
		<li>Xihui Chen - Visualization</li>
		</ul>
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>