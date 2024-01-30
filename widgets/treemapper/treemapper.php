<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# treemapper.php
	#
	# Author: 	Mickael Istria
	# Date:		2011-11-30
	#
	# Description: Describes the TreeMapper widget.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula TreeMapper Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Mickael Istria";

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
		<h2>TreeMapper</h2>

		<table border="0" cellspacing="2" cellpadding="0">
			<tr>
				<td><img src='images/treemapper.png'></td>
			</tr>
		</table>
		<p>
		The TreeMapper widget is a widget that allows you to define mapping by simply drag'n'dropping elements between 2 JFace TreeViewers. 
		
		The following features are supported by this widget:
		
        <ul class="list2">
            <li>Supports JFace TreeViewer.</li>
            <li>Implements JFace interface for easy integration with databinding.</li>
            <li>Customizable feedback and colors for mappings.</li>
            <li>Supports "provider-based" and "event-based" approach for your integrations.</li>
		</ul>
		</p>

        <hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>