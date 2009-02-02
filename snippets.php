<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2008-02-01
	#
	# Description:  Nebula Snippets Page.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Snippets";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
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

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p style="margin:5px 0 15px 15px">
			For information on snippets, and how to run a snippet, Please see the 
			<a href="http://www.eclipse.org/swt/snippets/">SWT Snippets page</a>.
		</p>

		<a name="CalendarCombo"></a>
		<h2>CalendarCombo</h2>
		<ul>
			<li>There are no snippets available at this time.</li>
		</ul>

		<a name="CDateTime"></a>
		<h2>CDateTime</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/cdatetime/CDTSnippet01.java?root=Technology_Project&view=co'>A CDateTime with a DROP_DOWN style</a></li>
		</ul>

		<a name="CollapsibleButtons"></a>
		<h2>CollapsibleButtons</h2>
		<ul>
			<li>There are no snippets available at this time.</li>
		</ul>

		<a name="CompositeTable"></a>
		<h2>CompositeTable</h2>
		<ul>
			<li>There are no snippets available at this time.</li>
		</ul>

		<a name="DateChooser"></a>
		<h2>DateChooser</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet1.java?cvsroot=Technology_Project'>All default settings</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet2.java?cvsroot=Technology_Project'>Border, blue theme, week numbers and footer</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet3.java?cvsroot=Technology_Project'>Multi selection, selection listener</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet4.java?cvsroot=Technology_Project'>Navigation controlled by program</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/datechooser/DateChooserSnippet5.java?cvsroot=Technology_Project'>A custom default theme</a></li>
		</ul>

		<a name="FormattedText"></a>
		<h2>FormattedText (DateFormatter)</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/DateFormatterSnippet1.java?cvsroot=Technology_Project'>Default Locale US, default mask, no default value</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/DateFormatterSnippet2.java?cvsroot=Technology_Project'>Fixed mask, no default value</a></li>
		</ul>

		<h2>FormattedText (NumberFormatter)</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet1.java?cvsroot=Technology_Project'>Default Locale US, given fixed mask, no default value</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet2.java?cvsroot=Technology_Project'>Locale FR, default fixed mask, no default value</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet3.java?cvsroot=Technology_Project'>Default Locale and mask, variable length in the integer part, value is provided</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet4.java?cvsroot=Technology_Project'>Get and set value between to fields having same edit and display masks for two differents Locale (US and FR)</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/formattedtext/NumberFormatterSnippet5.java?cvsroot=Technology_Project'>Default Locale US, given fixed mask, no default value</a></li>
		</ul>

		<a name="Gallery"></a>
		<h2>Gallery</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/gallery/SnippetSimple.java?root=Technology_Project&view=co'>A simple example</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/gallery/SnippetVirtual.java?root=Technology_Project&view=co'>A simple example using SWT.VIRTUAL</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/gallery/SnippetCustomDraw.java?root=Technology_Project&view=co'>Using custom draw</a></li>
		</ul>

		<a name="GanttChart"></a>
		<h2>GanttChart</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/ConnectionExample.java?cvsroot=Technology_Project&view=co'>Connected events</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/ScopeExample.java?cvsroot=Technology_Project&view=co'>Scope Example</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/GanttGroupExample.java?cvsroot=Technology_Project&view=co'>Gantt Group example</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/EventTextAlignmentExample.java?cvsroot=Technology_Project&view=co'>Event text alignment</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/EverythingExample.java?cvsroot=Technology_Project&view=co'>A bit of everything the chart can do</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/GanttSectionExample.java?cvsroot=Technology_Project&view=co'>Gantt Sections example</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/LayersExample.java?cvsroot=Technology_Project&view=co'>Gantt Layers example</a></li>		
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/ganttchart/TreeConnectorExample.java?cvsroot=Technology_Project&view=co'>Linking the Gantt chart with a tree</a></li>
		</ul>

		<a name="Grid"></a>
		<h2>Grid</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet1.java?cvsroot=Technology_Project'>A simple hierarchical grid</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet2.java?cvsroot=Technology_Project'>create an item that spans columns</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet3.java?cvsroot=Technology_Project'>put a checkbox in the second column</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet4.java?cvsroot=Technology_Project'>create a static column group</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet5.java?cvsroot=Technology_Project'>create a collapsible column group</a></li>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/grid/GridSnippet6.java?cvsroot=Technology_Project'>create a collapsible column group that swaps columns</a></li>		
		</ul>

		<a name="PGroup"></a>
		<h2>PGroup</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/pgroup/PGroupSnippet1.java?cvsroot=Technology_Project'>Create a PGroup</a></li>		
		    <li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/pgroup/PGroupSnippet2.java?cvsroot=Technology_Project'>Create a PGroup with rounded corners using parent's background</a></li>
		</ul>

		<a name="PShelf"></a>
		<h2>PShelf</h2>
		<ul>
			<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/pshelf/PShelfSnippet1.java?cvsroot=Technology_Project'>Create a PShelf</a></li>		
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>