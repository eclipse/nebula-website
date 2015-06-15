<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2008-02-20
	#
	# Description:  Nebula Source Page.
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Source Code";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Source, Code";
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

	<div id="maincontent">
		<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div style="margin: 5px 0 15px 15px">
			<p>We use git @:</p>
			<p style="margin-left: 15px">
				Eclipse: <a
					href="https://git.eclipse.org/c/nebula/org.eclipse.nebula.git">https://git.eclipse.org/c/nebula/org.eclipse.nebula.git</a>
			</p>
			<p style="margin-left: 15px">
				Github mirror: <a href="https://github.com/eclipse/nebula">https://github.com/eclipse/nebula</a>
			</p>
			<p style="margin-left: 15px">
				PSF file: <a
					href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/releng/org.eclipse.nebula.feature/Nebula_All.psf">Copy
					and paste this into a file.psf inside an eclipse project and select
					"Import Project Set..." from the context menu</a>
			</p>
		</div>
	
			<div class="sideitem">
				<h6>Comments</h6>
				<div align="center">
					<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=373009">
						<img align="center"
						src="http://wiki.eclipse.org/images/7/7d/Bug.png" border="0"
						alt="Report Problems with this site here" />Report page problems here.
					</a>

				</div>
     		</div>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>