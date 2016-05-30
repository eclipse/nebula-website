<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Wim Jongman
	# Description:  Nebula Releases page.

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Release 1.0.0";
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
		This is the first Nebula releases. It releases 20 SWT widgets and visualization components.  
		</p>

		<h3>Downloads</a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/releases/1.0.0/repository-nebula-1.0.0.zip">http://download.eclipse.org/nebula/releases/1.0.0</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/nebula/releases/1.0.0/repository-nebula-1.0.0.zip">repository.zip</a></li>
				</ul>
			</p>


		<table class="news">
  			<colgroup>
    			<col class="title" />
    			<col />
  			</colgroup>

  			<tr>
    			<td colspan="2" class="section" id="Widgets"></td>
  			</tr>

  			<tr id="cdatetime">
    			<td class="title">CDateTime. a Date and Time visualization widget.</td>
    			<td class="content">
					A Date and Time selection widget that can be used in a textual, graphical, or combo mode.    				
					<p>
      					<img src="cdatetime.png"/>
      				</p>
				</td>
  			</tr>
  		</table>
	
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
