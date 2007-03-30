<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Project";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Chris Gross";
	
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
		<h2>Supplemental Custom Widgets for SWT</h2>
		<p>The Nebula project is a source for custom SWT widgets and other UI components.  Nebula is also an incubator for 
		SWT.  Some Nebula widgets will graduate into SWT and therefore into the main Eclipse Platform.
		<p>
		All Nebula components are available on the navigation tree on the left or from the table below.
		  Each page will describe the component and also link to the component download.

		<p>
		
		<div class="homeitem">
		   <h3>Components</h3>
		      <ul>
		         <li><a href="/nebula/widgets/grid/grid.php">Grid</a>
		         <BR>The Grid is a table component that offers spreadsheet like features while 
		         maintaining the traditional SWT Table-like API.
		         </li>
		         <li><a href="/nebula/widgets/cdatetime/cdatetime.php">CDateTime</a>
		         <BR>The CDateTime is a graphical and textual Date selection widget. Intended 
				 for use in cross-platform task management applications, it attempts to provide
				 improved usability while maintaining a native look and feel. [Carbon, GTK, Win32]
		         </li>
		         <li><a href="/nebula/widgets/ctabletree/ctabletree.php">CTableTree</a>
		         <BR>The CTableTree is a table-tree component which uses dynamic custom cells while 
		         maintaining the traditional SWT Table/Tree-like API.
		         </li>
		         <li><a href="/nebula/widgets/compositetable/compositetable.php">CompositeTable</a>
		         <BR>CompositeTable gives you total flexibility to present and edit row-oriented
		         data however you want.  Editing in-place is CompositeTable's native user experience.
		         CompositeTable also provides API features like two-phase row changes that make it
		         easy to map user interface semantics to database semantics.
		         </li>
		         <li><a href="/nebula/widgets/pgroup/pgroup.php">PGroup</a>
		         <BR>PGroup is a expandable/collapsible composite widget with attractive styling and 
				 an extensible design.
		         </li>
		        <li><a href="/nebula/widgets/pshelf/pshelf.php">PShelf</a>
		         <BR>PShelf is a composite widget similar to a tab folder but uses an accordion-like
		         metaphor.
		         </li>
		         <li><a href="/nebula/widgets/gallery/gallery.php">Gallery</a>
		         <BR>Gallery lets you display any number of items organised in groups. Several group
		          and item renderers are available with support for dynamic item size, drop shadows,
		          auto margins, icon and list styles. Gallery uses a SWT Tree-like API (including 
		          MULTI and VIRTUAL styles).   
		         </li>
		         <li><a href="/nebula/widgets/formattedtext/formattedtext.php">FormattedText</a>
		         <BR>Decorator component adding input and display mask capabilities on a Text widget.
		         Formatting is based on a public formatter API. The component is provided with standard
		         formatters for differents types of values : DateTime, Date, Time, Number, String.
		         </li>
		         <li><a href="/nebula/widgets/datechooser/datechooser.php">DateChooser / DateChooserCombo</a>
		         <BR>DateChooser is a graphical date selection widget, with a fully customizable
		         look & feel which is consistent between the differents platforms. Supports the multi selection.<br>
		         The combo form combines a FormattedText / DateFormatter with a drop down DateChooser popup.
		         </li>
		      </ul>
		</div>

		<hr class="clearer" />
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
