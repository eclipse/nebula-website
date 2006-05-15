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
	$pageTitle 		= "Nebula Tiers";
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
		<p>The Nebula project is an incubator.  As such, each widget in Nebula will change over time.
		Users should be aware that they are not using a complete and 100% supported widget.  As widgets
		progress, method signatures may change and features may be removed and/or added.  So in order
		 to try to give Nebula users an indication of a widget's stability, each widget will
		be organized into either tier 1 or tier 2.  
		<p>
		<ul>
		<li><b>Tier 1</b>
		All initial widget contributions will start at tier 1.  At tier 1 widgets should be considered (at best) minimally
		supported.  Widget authors may have not completed their widget yet.  Many changes
		will likely occur while a widget is in tier 1.
		</li>
		<p>
		<li><b>Tier 2</b>
		At tier 2, widget should be mostly feature complete.  Though tier 2 widgets are still not
		100% supported API, users can assume a smaller amount of changes will likely occur.  If an 
		author wishes his/her widget to be included in SWT, this is the proper time to start discussing
		requirements with the SWT team.  In order for a widget to graduate from Nebula into SWT, it
		must satisfy some SWT requirements such as:
			<ul>
			<li>CLDC - SWT is <a href='http://java.sun.com/products/cldc/'>CLDC</a> compatible and 
			therefore is restricted in its use of core JDK classes.</li>
 			<li>Accessiblity - All widgets must be accessible (see getAccessible).</li>
 			<li>SWT Paradigms - Widget should seek to match core SWT paradigms such as a single two
 			argument constructor (Composite parent, int style) as well as other existing paradigms.</li>
			</ul>
		</li>
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>