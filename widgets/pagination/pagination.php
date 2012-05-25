<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# picture.php
	#
	# Author: 	Angelo Zerr
	# Date:		2012-05-22
	#
	# Description: Describes the Pagination control.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Pagination Control";
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
		<h2>Pagination Control</h2>

		<p>
			The Pagination control is a control that allows you to display data in a table with navigation page.  
			This control is useful to display large data in a SWT, RCP and RAP Application.  
		</p>
		<img src='images/pagination.png'>	
		
		<h3>Features</h3>
		<ul>
		   <li>Pagination/Sort : paginate and sort large data in SWT Table. It's possible to use this control with other widget 
		   (ex: <a href='http://nattable.org/drupal/' >NatTable</a>)</li>
		   <li>Pagination renderer : provides several pagination renderer (links, combo, etc..). You can implement your own renderer.</li>
		   <li>RCP/RAP: can be used in a SWT standalone application, RCP and RAP Application both.</li>
		   <li>SWT/FormToolkit: supports SWT (use org.eclipse.nebula.widgets.pagination.table.PageableTable) 
			and FormToolkit (use org.eclipse.nebula.widgets.pagination.table.forms.FormPageableTable).</li>
		   <li>Page result structure: by default org.eclipse.nebula.widgets.pagination.collections.PageResult is used, but it's possible to use another page result structure (ex: Spring Data Structure Page).
		   </li>
		   <li>Internationalization: use Locale to set links label with well language</li>			
		</ul>

		<p>
			For more explanation, documentation, etc, please read :
			<ul>
			  <li>
			  	<a href='http://angelozerr.wordpress.com/2012/01/06/nebula_pagination/'>Eclipse Nebula Pagination Control</a> article.
			  </li>
			  <li>
			    <a href='http://angelozerr.wordpress.com/2012/04/16/eclipse_spring_step9/#installNebula'></a> article which explains how to install Nebula Pagination Control with P2 or repository.zip.
			  </li>
			  <li>
			    <a href='http://angelozerr.wordpress.com/2012/04/16/eclipse_spring_step9/#springdata'></a> article which explains how to use Spring Data structure Page instead of using Nebula Pagination PageResult structure.
			  </li>			  
			</ul>
		</p>

		<hr class="clearer"/>
	</div>


EOHTML;

# Generate the web page
$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>