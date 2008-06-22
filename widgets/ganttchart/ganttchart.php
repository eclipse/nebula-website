<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# ganttchart.php
	#
	# Author: 	Emil Crumhorn
	# Date:		2007-09-02
	#
	# Description: Describes the GanttChart widget.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula GANTT Chart Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Emil Crumhorn";

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
		<h2>GanttChart</h2>
		<p>
		Version 2.0 is around the corner, it adds loads of new functionality along with several bug fixes and enhancements. Some new features are:<br>
		<ul>
			<li>Hours view (to control items down to the minute level) - which also adds 3 more zoom levels.
			<li>GanttSections to split chart into individual sections.
			<li>Advanced tooltips and individual tooltips for events.
			<li>Fixed row heights / group heights.
			<li>Language settings.
			<li>Color Themes (and easy to make your own).
			<li>Loads more. See screenshots below.
		</ul>
		<p>
		<b>Version 2.0 BETA</b> (shown using GanttSections - Silver theme)<br>
		<img src='images/gantt_20_silver.jpg'>
		<br><br>		
		<b>Version 2.0 BETA</b> (shown using GanttSections - Blue theme)<br>
		<img src='images/gantt_sections.jpg'>
		<br><br>
		<b>Version 1.0</b><br>	
		<img src='images/ganttchart_full.png'>
		<p>
		The GANTT chart is a fully customizable widget for displaying anything from a simple chart to allowing user interaction via drag and drop and resizing and well
		as dependency interaction.
		<p>
		The GANTT widget has taken hints from Microsoft Project as far as styles and overall look and feel goes. There are features such as dependencies,
		checkpoints, revised dates, and much more. Nearly everything is customizable and you can zoom in to detailed day views all the way out to yearly overviews
		(12 zoom levels). Events can be resized, dragged and dropped and various other things.
		<p>
		The widget is extremely simple to use for those wishing a basic implementation, or you can customize everything down to the pixel level if you so prefer.
		Basically, if you don't like something, change it!

		<p>
		<!-- <a href='snippets.php'>CollapsibleButton Snippets</a> -->
		<p>
		<a href='snippets.php'>Gantt 2.0 Snippets</a>		
		<p>
		<b>Version 2.0</b><br>
		<a href='http://www.hexapixel.com/files/nightly/org.eclipse.nebula.widgets.ganttchart-2.0-NIGHTLY.jar'>Download the GanttChart widget - Nightly Build - Jar</a><br>
		<a href='http://www.hexapixel.com/files/nightly/org.eclipse.nebula.widgets.ganttchart-2.0-NIGHTLY-sources.jar'>Download the GanttChart widget - Nightly Build - Sources</a><br>
		<a href='http://www.hexapixel.com/files/nightly/org.eclipse.nebula.widgets.ganttchart-2.0-NIGHTLY-javadoc.jar'>Download the GanttChart widget - Nightly Build - JavaDoc</a><br>
		<!--
		<p>
		<b>Version 1.0 - STABLE</b><br>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.ganttchart_1.0_ALPHA_NIGHTLY.zip'>Download the GanttChart widget - Nightly Build</a>
		-->
				
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>