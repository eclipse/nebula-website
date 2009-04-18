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
		
		<img src='images/gallery.jpg'>	
		
		<p>Gallery <p/>
		<h3>Group renderers</h3>
	    <ul>
	         <li>DefaultGalleryGroupRenderer : expandable groups, item grid with auto margins. Best with SWT.V_SCROLL.</li>
	         <li>NoGroupRenderer : item grid with auto margins.</li>
	    </ul>
	    
	    <h3>Item renderers</h3>
	    <ul>
	         <li>DefaultGalleryItemRenderer : icon style, drop shadows and labels.</li>
	         <li>ListItemRenderer : list style, labels and descriptions.</li>
	    </ul>
	    
	    
	    <h3>Supported styles</h3>
	    <ul>
	    <li>SWT.MULTI : Enables multiple selections.</li>
	    <li>SWT.V_SCROLL : Vertical scrolling. Should not be used with SWT.H_SCROLL.</li>
	    <li>SWT.H_SCROLL : Horizontal scrolling. Should not be used with SWT.V_SCROLL.</li>
	    <li>SWT.VIRTUAL : Virtual mode. Items are created on demand.</li>
	    </ul>
	    
		<p>
		NOTE: The Gallery widget is still under active development. Users should expect changes in future versions.</p>
		</p>
		
		<p>
			<a href='/nebula/downloads.php#Gallery'>Downloads</a>
		</p>
		
		<p>
			<a href='/nebula/snippets.php#Gallery'>Snippets</a>
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