<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description:  Examples plugin.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Examples";
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
			
		<p>The Nebula project maintains an example view to demo all of the Nebula widgets.</p>
		
		<table border="0">
		   <tr>
		       <td><a href="images/example_grid.png"><img src="images/example_grid_small.png" border="0"/></a></td>
	           <td><a href="images/example_cdatetime.png"><img src="images/example_cdatetime_small.png" border="0"/></a></td>
		   </tr>
		   <tr>
               <td><a href="images/example_pshelf.png"><img src="images/example_pshelf_small.png" border="0"/></a></td>
               <td><a href="images/example_pgroup.png"><img src="images/example_pgroup_small.png" border="0"/></a></td>
		   </tr>
		   <tr>
		      <td><a href="images/example_gallery.png"><img src="images/example_gallery_small.png" border="0"/></a></td>
		       <td><a href="images/example_oscilloscope.png"><img src="images/example_oscilloscope_small.png" border="0"/></a></td>
		   </tr>
		</table>     
		
		<p>The examples view can be downloaded from the <a href="downloads.php">download page</a> 
		 (includes update site link).</p>
		
		<hr class="clearer"/>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>