<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# picture.php
	#
	# Author: 	Angelo Zerr
	# Date:		2012-05-22
	#
	# Description: Describes the Picture control.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Picture Control";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Angelo Zerr";

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
		<h2>Picture Control</h2>

		<p>
			The Picture control is a control that allows you to display an image, remove and modify it.  
			This control is useful to manage photo, logo, gravatar, etc in a SWT, RCP and RAP Application.  
		</p>
		<img src='images/picture.png'>	
		
		<h3>Features</h3>
		<ul>
		   <li>Modify image: the Modify link is used to upload a new image.</li>
		   <li>Delete image: the Delete link is used to delete the image.</li>
		   <li>Default image: set a default image.</li>
		   <li>RCP/RAP: can be used in a SWT standalone application, RCP and RAP Application both.</li>
		   <li>SWT/FormToolkit: supports SWT (use org.eclipse.nebula.widgets.picture.PictureControl) 
			and FormToolkit (use org.eclipse.nebula.widgets.picture.FormPictureControl).</li>
		   <li>JFace Databinding: stores the image as byte array and fires events to tell that image has changed.
		   You can bind with JFace Databinding the image byte array with a Model object</li>
		   <li>Internationalization: use Locale to set links label with well language</li>			
		</ul>

		<p>
			For more explanation, documentation, etc, please read <a href='http://angelozerr.wordpress.com/2012/01/06/nebula_picture/'>Eclipse Nebula Picture Control</a> article.
		</p>

		<hr class="clearer"/>
	</div>


EOHTML;

# Generate the web page
$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>