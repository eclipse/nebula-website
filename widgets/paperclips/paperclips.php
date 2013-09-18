<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# paperclips
	#
	# Author: 		Matthew Hall
	# Date:			2009-07-29
	#
	# Description: Describes the PaperClips project in Nebula
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula PaperClips Printing Library";
	$pageKeywords	= "Nebula, SWT, Printing, Widgets, Controls";
	$pageAuthor		= "Matthew Hall";
	
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
		<h2>PaperClips</h2>
		
		<img src='paperclips.jpg'>
		
		<p>
		PaperClips is a simple, light weight, extensible Java printing
		library for SWT.  PaperClips hides the complexity of laying out and
		rendering documents on the printer, helping you focus on what to print
		instead of how to print it.
		</p>
		
		<p>
		In a nutshell, PaperClips provides an assortment of document "building
		blocks," which you can tweak and combine to form a custom document. The
		assembled document is then sent to PaperClips for printing. PaperClips
		includes support for printing text, images, borders, headers and
		footers, column layouts and grid layouts, to name a few. It can also be
		extended with your own printable classes.
		</p>
		
		<p>
		With PaperClips you do not have to track cursors, calculate line
		breaking, fool around with font metrics, or manage system
		resources--it's all handled internally. And unlike report-generation
		tools, you are not constrained to a predefined document structure (like
		report bands). Every document is custom and the layout is up to you.
		</p>
		
		<p>
		Requirements:
		<ul>
		<li> Java 1.4 or later
		<li> SWT 3.2 or later 
		</ul>
		</p>
		
		<p>
		PaperClips may be used as an Eclipse plug-in or as a regular Jar
		(provided the SWT libraries are on the classpath).
		</p>
		
		<p>
		The Nebula PaperClips library has a stable API and is used in various production
		environments. </p>
		
		<p>
			<a href='/nebula/snippets.php#PaperClips'>Snippets</a>
		</p>

		<p>
			<a href='https://bugs.eclipse.org/bugs/buglist.cgi?classification=Technology&product=Nebula&component=Paperclips&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED'>Open Bugs</a>
		</p>
		
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>