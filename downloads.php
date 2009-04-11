<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2009-02-01
	#
	# Description:  Nebula Download page.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Downloads";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Downloads";
	$pageAuthor		= "Nebula Committers";
	
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
		<ul>
			<li>Latest nightly build : <a href="http://download.eclipse.org/technology/nebula/gallery/downloads/drops/latest/nebula-gallery-SDK-incubation.zip">nebula-gallery-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/gallery/update-N/   (Please uncheck 'group by categories' in Eclipse to make the feature appear)</li>
	    </ul>
	    
	    <h2>Grid</h2>
		<ul>
			<li>Latest nightly build : <a href="http://download.eclipse.org/technology/nebula/grid/downloads/drops/latest/nebula-grid-SDK-incubation.zip">nebula-grid-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/grid/update-N/   (Please uncheck 'group by categories' in Eclipse to make the feature appear)</li>
	    </ul>
	    
	    <h2>PShelf</h2>
		<ul>
			<li>Latest nightly build : <a href="http://download.eclipse.org/technology/nebula/pshelf/downloads/drops/latest/nebula-pshelf-SDK-incubation.zip">nebula-pshelf-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/pshelf/update-N/   (Please uncheck 'group by categories' in Eclipse to make the feature appear)</li>
	    </ul>
	    
	    <h2>CWT (unofficial)</h2>
	    <ul>
			<li>Latest nightly build : <a href="http://download.eclipse.org/technology/nebula/cwt/downloads/drops/latest/nebula-cwt-SDK-incubation.zip">nebula-cwt-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/cwt/update-N/   (Please uncheck 'group by categories' in Eclipse to make the feature appear)</li>
	    </ul>
	    
	    <h2>Other widgets</h2>	
		<p>There are no downloads available at this time.</p>
		
		<p>The source code can be found in <a href="/nebula/source.php">CVS</a>.</p>
		
		<hr class="clearer"/>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div align="center">
				<a href="http://www.eclipse.org/projects/what-is-incubation.php">
					<img align="center" src="http://www.eclipse.org/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>