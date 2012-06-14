<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_tiers.php
	#
	# Author: 		Nicolas Richeton
	# Date:			2007-02-20
	#
	# Description: Describes the tiers in Nebula.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Gallery Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Nicolas Richeton";
	
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
		<h2>Gallery</h2>
		<p>This SWT widget displays images or items in a grid-like presentation. 
		Gallery is very useful to display images in a photo viewer or files in an explorer-like view.</p>
		
		<h3>Features</h3>
		<ul>
		   <li>Tree and Table based API : Gallery is a drop-in replacement of Table and Tree (except columns which are not supported and 2 item levels limitation).
		   <li>Fully customizable appearance : Gallery uses pluggable renderers for groups and items.
		    2 items renderers and 2 group renderers are available out of the box, 
		    but you are free to totally change item ordering and appearance. Custom paint events are also available to inject item drawing code.</li>
		   <li>Designed for speed : SWT.VIRTUAL supported, layout and drawing supports TONS of items at full speed.</li>
		   <li>Photo specific features : drop shadow, dynamic drawing quality<, real-time item resizing</li>
		   <li>JFace viewer : drop-in replacement for TableViewer and TreeViewer</li>
		   <li>Animation : smooth visual effects on all platforms including Bounce and Elastic effects. Animation API can be used to animate RCP applications.</li>
		   <li>Decorators : built-in decorator support for best results with large images and dynamic size</li>
		</ul>
		
		<img src='images/gallery.jpg'>	
	    
		<p>
		NOTE: The Gallery widget is still under active development. Users should expect changes in future versions.</p>
		</p>
		
		<p>TRY IT : The best way to play with all Gallery features is to install the <a href='/nebula/examples.php'>Nebula Examples</a>.</p>
		
		<p>
			DOWNLOAD : Lastest version is <a href="r_0_20110516/">Nebula Gallery r_0_20110516</a>.
		</p>
		
		<p>
			QUICK START : Look at the <a href='/nebula/snippets.php#Gallery'>Snippets</a>. Other snippets are available on <a href="/nebula/source.php">git</a>.
		</p>
		
		<p>
			JAVADOC : Javadoc is available for the latest stable version : <a href="r_0_20110516/javadoc/">Javadoc - 0.5.4_R_0_20110516</a>.
		</p>
		<p>
			<a href='https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=&bug_file_loc_type=allwordssubstr&bug_id=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&bugidtype=include&chfieldfrom=&chfieldto=Now&chfieldvalue=&classification=Technology&component=Gallery&email1=&email2=&emailtype1=substring&emailtype2=substring&field-1-0-0=bug_status&field-1-1-0=classification&field-1-2-0=component&field-1-3-0=product&field-1-4-0=resolution&field-1-5-0=version&field0-0-0=noop&keywords=&keywords_type=allwords&long_desc=&long_desc_type=allwordssubstr&product=Nebula&query_format=advanced&remaction=&resolution=FIXED&short_desc=&short_desc_type=allwordssubstr&status_whiteboard=&status_whiteboard_type=allwordssubstr&type-1-0-0=anyexact&type-1-1-0=anyexact&type-1-2-0=anyexact&type-1-3-0=anyexact&type-1-4-0=anyexact&type-1-5-0=anyexact&type0-0-0=noop&value-1-0-0=RESOLVED%2CVERIFIED%2CCLOSED&value-1-1-0=Technology&value-1-2-0=Gallery&value-1-3-0=Nebula&value-1-4-0=FIXED&value-1-5-0=unspecified&value0-0-0=&version=unspecified&votes=&order=bugs.delta_ts%2Cbugs.delta_ts%2Cbugs.delta_ts%2Cbugs.bug_status%2Cbugs.priority%2Cmap_assigned_to.login_name%2Cbugs.bug_id&query_based_on='>Update History (bugzilla search)</a>
		</p>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>