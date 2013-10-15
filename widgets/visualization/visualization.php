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
				<td><img src='images/XYGraph.png'></td>
			</tr>
			<tr>
				<td><img src='images/widgets.png'></td>
			</tr>
		</table>
		<p>
		Nebula Visualization is a light weight widgets library for data visualization in science, engineering and SCADA areas.
		These widgets are originally from CSS BOY project.


				<h3>Widgets</h3>
				<p>
				<ul>
					<li>XY Graph</li>
					<li>Intensity Graph</li>
					<li>Thermometer</li>
					<li>Tank</li>
					<li>Progress Bar</li>
					<li>Meter</li>
					<li>Gauge</li>
					<li>Knob</li>
					<li>Scaled Slider</li>
				</ul>
				</p>
			<p>
<h3>Functions of XY Graph</h3>
<ul>
<li>line chart, scatter chart, bar chart, step chart, area chart...</li>
<li>Zoom in/out, Rubberband Zoom, Horizontal Zoom in/out, Vertical Zoom in/out</li>
<li>Panning on both graph area and axes</li>
<li>Auto Scale</li>
<li>Annotation</li>
<li>Undo/Redo</li>
<li>Take snapshot</li>
<li>Properties configuration dialog</li>
<li>Multiple axes support</li>
<li>Log scale, date time format support</li>
<li>Grouping legends by axes</li>
<li>Support customized data provider based on a simple interface.</li>
<li>And more ...	</li>	
</ul>
</p>
		<p>
		<a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/visualization/org.eclipse.nebula.visualization.xygraph/html/GettingStarted.html'>Getting Started</a>
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