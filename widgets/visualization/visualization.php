<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# visualization.php
	#
	# Author: 	Wim Jongman / Xihui Chen
	# Date:		2013-10-03
	#
	# Description: Describes the Visualization widgets.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Visualization Widgets";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Wim Jongman / Xihui Chen";

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
		<h2>Visualization</h2>

		<table border="0" cellspacing="2" cellpadding="0">
			<tr>
				<td><img src='images/Widgets.jpg'></td>
			</tr>
		</table>
		<p>
		SWT XYGraph is a light weight scientific and engineering widgets library for SWT or Draw2D applications. It has widgets especially for science, engineering and SCADA applications, such as XY Graph, intensity graph, meter, gauge and knob. All the widgets are implemented on Draw2D, so it can be used in both SWT and GEF applications. These widgets are originally from CSS BOY project.
<p>
Functions of XY Graph
<ul>
<li>line chart, scatter chart, bar chart, step chart, area chart...</li>
<li>Five Zoom Types: Zoom in/out, Rubberband Zoom, Horizontal Zoom in/out, Vertical Zoom in/out</li>
<li>Panning on both graph area and axes</li>
<li>Auto Scale</li>
<li>Annotation support. Annotations could be either free or snapped to a trace</li>
<li>Undo/Redo support for all operations</li>
<li>Take snapshot</li>
<li>All properties can be interactively configured, such as trace color, line width and axis color etc,.</li>
<li>Multiple axes support</li>
<li>Log scale, date time format support</li>
<li>Grouping legends by axes</li>
<li>It is possible to implement your customized data provider based on a simple interface.</li>
<li>And more ...	</li>	
</ul>
</p>
        <p>
        <a href='/nebula/snippets.php#Visualization'>Snippets</a>
        </p>

        <hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>