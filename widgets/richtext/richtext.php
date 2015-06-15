<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# picture.php
	#
	# Author: 	Wim Jongman
	# Date:		2015-06-04
	#
	# Description: Describes the Rich Text.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Rich Text Control";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Wim Jongman";

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
		<h2>Rich Text Control</h2>

		<p>
			The Rich Text control is a control that allows you to create rich text. It is based on ckeditor [1]. 
			Technically it internally uses a SWT Browser and supports callbacks so it can be used as SWT control 
			in Java without knowledge of the underlying Javascript. 
			This control is useful to quickly create rich text that has to be displayed on a web page, for example 
			if you want build a web content management system in a Eclipse RCP desktop application.
			
		<img src='images/richtext.png'>	
		
		<h3>Features</h3>
		<ul>
		   <li>Customizable Tool Bars</li>
		   <li>WYSIWYG Editor to HTML text</li>
		   <li>Provides JFace cell editors</li>
		   <li>Large number of examples available</li>
		   <li>POJO/RCP/RAP: can be used in a SWT standalone, RCP and RAP Applications.</li>
		</ul>
		
	 		<p>
				QUICK START : Look at the <a href='/nebula/snippets.php#RichText'>Snippets</a>. Other snippets are available on <a href="/nebula/source.php">git</a>.
			<br/>
				File a bug: <a href='https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Nebula&component=RichText' target='_blank'>Click here to file a bug or feature request for Rich Text</a>
			</p>
			<p>
		 		<img src='images/richtext2.png'>	
			</p> 
		</p>

		<hr class="clearer"/>
	</div>


EOHTML;

# Generate the web page
$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>