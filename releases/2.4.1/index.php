<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Wim Jongman
	# Description:  Nebula Releases page.

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Release 2.4.1";
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

	<div class="col-md-24">
		<h1>$pageTitle</h1>
		<br/>
		<p>
		This is the Nebula <b>2.4.1</b> maintenance release. <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=Technology&f1=target_milestone&list_id=19738440&o1=regexp&product=Nebula&query_format=advanced&v1=2.4.." target=blank>Resolved Issues</a>  
		</p>

		<h3>Downloads</a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/releases/2.4.1">http://download.eclipse.org/nebula/releases/2.4.1</a></li>
					<li>Update site repo zipped: <a href="http://www.eclipse.org/downloads/download.php?file=/nebula/releases/2.4.1/repository-nebula-2.4.1.zip">repository.zip</a></li>
					<li>Javadoc:  <a href="javadoc/index.html">Link to Javadoc</a></li>
					<li>New and Noteworthy:  <a href="https://wiki.eclipse.org/Nebula/Releases/2.4.0/NaN">Link to N&N (2.4.0)</a></li>
				</ul>
			</p>	
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
