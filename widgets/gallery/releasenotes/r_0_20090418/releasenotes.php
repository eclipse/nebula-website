<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# release-notes.php
	#
	# Author: 		Nicolas Richeton
	# Date:			2009-04-18
	#
	# Description: Release 0.5.2 R_0_20090418
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Gallery R_0_20090418 release notes";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Gallery";
	$pageAuthor		= "Nicolas Richeton";
	
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
		
		<h3>General</h3>
		<p>This release is the latest stable version of the Nebula Gallery widget : <b>v0.5.2_R_0_20090418</b>. This is <b>NOT</b> a 1.0 release : 
		the nebula project is still in its incubation phase and some features are still missing in the widget (see below). 
		However, this version is stable enough to be included in RCP applications or plugins. </p>
		
		
		
		<h3>Components</h3>
		<p>The Gallery plug-in includes 3 main components :
		<table border="1" width="100%" style="padding:3px; border: 1px solid #000;">
		<tr>
		<th style="padding:3px; font-weight:bold;">Component</th>
		<th style="padding:3px; font-weight:bold;">Package</th>
		<th style="padding:3px; font-weight:bold;">API</th>
		<th style="padding:3px; font-weight:bold;">Features</th>
		<th style="padding:3px; font-weight:bold;">Comments</th>
		</tr>
		<tr>
		<td>Gallery Widget</td>
		<td>o.e.nebula.widgets.gallery</td>
		<td>Stable</td>
		<td>Stable</td>
		<td>Except experimental feature 'fillIfsingle'</td>
		</tr>
		<tr>
		<td>Gallery Viewer</td>
		<td>o.e.nebula.jface.galleryviewer</td>
		<td>Stable</td>
		<td style="color: #FF0000;">Dev</td>
		<td>Standard mode should be quite stable but requires a lot of testing. SWT.VIRTUAL mode is not yet implemented.</td>
		</tr>
		<tr>
		<td>Nebula Animation</td>
		<td>o.e.nebula.animation</td>
		<td style="color: #FF0000;">Dev</td>
		<td>Stable</td>
		<td>Will be moved to CWT at some point. Effects are working great but API will be improved in the future.</td>
		</tr>
		</table>
		<p>Dev : features not fully implemented, major API changes expected, ...</p>
	
		<h3>New features and changes</h3>
		<ul>
			<li>Animations : Expanding and closing of groups is now animated. The animation code is from SAT. Expand and collapse animations can be chosen between all existing Nebula animations including Exponential, Elastic or Bounce or by any custom animation which implements IMovement. </li>
			<li>Images and descriptions for groups : images and descriptions are now displayed for groups.

            Up to 3 lines of text are supported, simply by using GalleryItem#setText( int index, String text) with id=0 for the main label and id=1 or id=2 for the two descriptions lines.</li>
	  <li>Lower quality on user actions : Since this widget can draw easily draw more than 20 images at every redraw, the framerate can become very low with large images. This new mode reduce the quality of images (disables antialias or interpolation) when the user is resizing or scrolling the widget in order to get ultra fast redraws. </li>
	  <li>Decorators : support for decorators has been added in the widget. This allows to scale decorators differently from the main image, and solves resize problems with transparent images. Decorators can be specified using GalleryItem#setData(String id, Object value) as single images or arrays of images.

All four corners are supported, and decorators are automatically resized if there is no enough room to draw all of them</li>
<li>Quality settings: It's now possible to change the quality settings for the graphic context. Previously quality was always set to the maximum (antialias = on and interpolation = high). Quality can now be reduced when needed. </li>
<li>Virtual groups: The widget supports SWT.VIRTUAL, which create items where they are first used. But as the widget needs to know the size of every group, they are all created right await while items are still created on demand.

The new lazy groups mode allows to create groups only when they get visible. Until that moment, a default value is used for every groups making the content creation even more lazy. This feature uses exactly the same code as the standard virtual mode.</li>
<li>Always expanded : if you don't need to expand/collapse groups, you can use DefaultGroupRenderer#setAlwaysExpanded to remove the button in the title bar and display groups as expanded whatever their state is. With this option, the Gallery widget looks like it was on the very first versions. </li>
<li>PAGE_UP, PAGE_DOWN, HOME, END keys are supported</li>
<li>Other bug fixes.</li>
	
		</ul>
			
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>