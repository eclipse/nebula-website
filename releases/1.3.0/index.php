<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Wim Jongman
	# Description:  Nebula Releases page.

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Release 1.3.0";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Release";
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
		<br/>
		
		<p>
		This is the Nebula <b>1.3.0</b> release. <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=component%2Cpriority%2Cbug_severity&product=Nebula&query_based_on=&query_format=advanced&target_milestone=1.3.0" target=blank>We resolved 77 issues in this release.</a>  
		</p>

		<h3>Downloads</a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/releases/1.3.0">http://download.eclipse.org/nebula/releases/1.3.0</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/nebula/releases/1.3.0/repository-nebula-1.3.0.zip">repository.zip</a></li>
				</ul>
			</p>	
		</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
