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
		
		<img src='images/ctable-sn3.PNG' align="RIGHT">
		<img src='images/ctable-sn6.PNG' align="RIGHT">
		
		<h2>CompositeTable</h2>
		
		<p><a target="screencast" href="screencasts/30sec.html">
		30 second introductory screencast</a><br/>(Make sure your speakers are on)</p>
		
		<p>
		CompositeTable is a custom SWT grid control that:
		<ol>
			<li>Gives you control over the layout of your rows</li>
			<li>Automatically edits in place using any SWT control</li>
			<li>Manages CRUD operations simply and automatically</li>
			<li>Requests only visible data using a virtual table API for maximum 
			    scalability and performance.</li>
		</ol>
		</p>
		
		<h2>Project News:</h2>
		<ul>
		<li>2/26/2008 - Normalized the row depart event firing; improved focus event handling. v0.9.4</li>
		</ul>
		<ul>
		<li>1/25/2008 - Fixed an AIOOBE, improved control alignment, scroll wheel handling, added single row refresh API. v0.9.3</li>
		</ul>
		<ul>
		<li>2/5/2007 - Added new delete listener method; added RowDeleteAdapter; added command API.  v0.9.2.1</li>
		</ul>
		<ul>
		<li>2/3/2007 - Fixed several redraw bugs plus bug #164419. v0.9.2</li>
		</ul>
		<ul>
		<li>1/30/2007 - Added movable, resizable native header. v0.9.1</li>
		</ul>
		<ul>
		<li>1/19/2007 - Cleaned up API preparing for API freeze in M5.</li>
		</ul>
		<ul>
		<li>12/19/2006 - Maintanence release.  Version 0.8.2.  See history for details.</li>
		</ul>
		<ul>
		<li>12/14/2006 - Initial release.  Version 0.8.1</li>
		</ul>
		
<!--
		<p>Sponsored by <a href="http://www.coconut-palm-software.com">Coconut
		Palm Software, Inc.</a></p>-->
		
		<p>
		Please note: The CompositeTable widget is still under active development.
		The code is made available in a <font color=red><b>BETA</b></font> state.
		Users should expect changes in future versions.</p>
		<p>
		Having said this, CompositeTable is currently successfully deployed in
		a five million line mission-critical enterprise RCP application.</p>
		
		<p>
		<a href='snippets.php'>CompositeTable Snippets</a>
		</p>
		<p>
		<a href='http://www.coconut-palm-software.com/compositetable/nebula_compositetable_beta.zip'>Download the CompositeTable widget - Beta Version</a>
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
