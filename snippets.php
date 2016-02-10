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
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/cdatetime/org.eclipse.nebula.widgets.cdatetime.snippets/src/org/eclipse/nebula/widgets/cdatetime/snippets/CDTSnippet01.java'>
				Textual selector with a Spinner</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/cdatetime/org.eclipse.nebula.widgets.cdatetime.snippets/src/org/eclipse/nebula/widgets/cdatetime/snippets/CDTSnippet02.java'>
				Drop-down Combo with Calendar and Analog Time selector (Compact style)</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/cdatetime/org.eclipse.nebula.widgets.cdatetime.snippets/src/org/eclipse/nebula/widgets/cdatetime/snippets/CDTSnippet03.java'>
				Graphical Calendar selector</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/cdatetime/org.eclipse.nebula.widgets.cdatetime.snippets/src/org/eclipse/nebula/widgets/cdatetime/snippets/CDTSnippet04.java'>
				Drop-down Combo with Discrete Time selector</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/cdatetime'>Other Snippets - 1</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/widgets/cdatetime/org.eclipse.nebula.widgets.cdatetime.snippets/src/org/eclipse/nebula/widgets/cdatetime/snippets'>Other Snippets - 2</a></li>
		</ul>

		<a name="CollapsibleButtons"></a>
		<h2>CollapsibleButtons</h2>
		<ul>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/collapsiblebuttons/CollapsibleButtonsSnippet1.java">CollapsibleButtonsSnippet1</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/collapsiblebuttons'>Other Snippets</a></li>
		</ul>

		<a name="CompositeTable"></a>
		<h2>CompositeTable</h2>
		<ul>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet0.java">A CompositeTable displaying a header and some row controls but no data</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet1.java">A CompositeTable displaying first/last name pairs</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet2.java">A CompositeTable editing first/last name pairs</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet3.java">A CompositeTable editing, inserting, and deleting first/last name pairs</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet4.java">A CompositeTable listing first/last name pairs, emulating SWT.FULL_SELECTION</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet5.java">A CompositeTable listing first/last name pairs, utilizing a native header control, allowing sorting by clicking columns and allowing columns to be resized by dragging in the header</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/CompositeTableSnippet6.java"> A CompositeTable editing a name/address block</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/DayEditorSnippet0.java">DayEditorSnippet</a></li>
			<li><a href="http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable/MonthCalendarSnippet.java">MonthCalendarSnippet</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/compositetable'>Other Snippets</a></li>
		</ul>

		<a name="DateChooser"></a>
		<h2>DateChooser</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser/DateChooserSnippet1.java'>All default settings</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser/DateChooserSnippet2.java'>Border, blue theme, week numbers and footer</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser/DateChooserSnippet3.java'>Multi selection, selection listener</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser/DateChooserSnippet4.java'>Navigation controlled by program</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser/DateChooserSnippet5.java'>A custom default theme</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/datechooser'>Other Snippets</a></li>
		</ul>

		<a name="FormattedText"></a>
		<h2>FormattedText (DateFormatter)</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/DateFormatterSnippet1.java'>Default Locale US, default mask, no default value</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/DateFormatterSnippet2.java'>Fixed mask, no default value</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext'>Other Snippets</a></li>
		</ul>

		<h2>FormattedText (NumberFormatter)</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/NumberFormatterSnippet1.java'>Default Locale US, given fixed mask, no default value</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/NumberFormatterSnippet2.java'>Locale FR, default fixed mask, no default value</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/NumberFormatterSnippet3.java'>Default Locale and mask, variable length in the integer part, value is provided</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/NumberFormatterSnippet4.java'>Get and set value between to fields having same edit and display masks for two differents Locale (US and FR)</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext/NumberFormatterSnippet5.java'>Default Locale US, given fixed mask, no default value</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/formattedtext'>Other Snippets</a></li>
		</ul>

		<a name="Gallery"></a>
		<h2>Gallery</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/gallery/SnippetSimple.java'>A simple example</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/gallery/SnippetVirtual.java'>A simple example using SWT.VIRTUAL</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/gallery/SnippetCustomDraw.java'>Using custom draw</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/gallery'>Other Snippets</a></li>
		</ul>

		<a name="GanttChart"></a>
		<h2>GanttChart</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/ConnectionExample.java'>Connected events</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/ScopeExample.java'>Scope Example</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/GanttGroupExample.java'>Gantt Group example</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/EventTextAlignmentExample.java'>Event text alignment</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/EverythingExample.java'>A bit of everything the chart can do</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/GanttSectionExample.java'>Gantt Sections example</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/LayersExample.java'>Gantt Layers example</a></li>		
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart/TreeConnectorExample.java'>Linking the Gantt chart with a tree</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/ganttchart'>Other Snippets</a></li>
		</ul>

		<a name="Grid"></a>
		<h2>Grid</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet1.java'>A simple hierarchical grid</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet2.java'>create an item that spans columns</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet3.java'>put a checkbox in the second column</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet4.java'>create a static column group</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet5.java'>create a collapsible column group</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid/GridSnippet6.java'>create a collapsible column group that swaps columns</a></li>		
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/grid'>Other Snippets</a></li>
		</ul>

		<a name="Oscilloscope"></a>
		<h2>Oscilloscope</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/oscilloscope/org.eclipse.nebula.widgets.oscilloscope.snippets/src/org/eclipse/nebula/widgets/oscilloscope/snippets/SnippetDispatcher.java'>Get this first, the other snippets rely on it</a></li>		
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/oscilloscope/org.eclipse.nebula.widgets.oscilloscope.snippets/src/org/eclipse/nebula/widgets/oscilloscope/snippets/Snippet.java'>Shows many random scopes</a></li>		
		    <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/oscilloscope/org.eclipse.nebula.widgets.oscilloscope.snippets/src/org/eclipse/nebula/widgets/oscilloscope/snippets/Snippet1.java'>Show a single random scope</a></li>
		    <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/oscilloscope/org.eclipse.nebula.widgets.oscilloscope.snippets/src/org/eclipse/nebula/widgets/oscilloscope/snippets/Snippet2.java'>Scope with empty stack listener</a></li>
		    <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/widgets/oscilloscope/org.eclipse.nebula.widgets.oscilloscope.snippets/src/org/eclipse/nebula/widgets/oscilloscope/snippets'>Other Snippets</a></li>
		</ul>
		
		<a name="PGroup"></a>
		<h2>PGroup</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/pgroup/PGroupSnippet1.java'>Create a PGroup</a></li>		
		    <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/pgroup/PGroupSnippet2.java'>Create a PGroup with rounded corners using parent's background</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/pgroup'>Other Snippets</a></li>
		</ul>

		<a name="PShelf"></a>
		<h2>PShelf</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/pshelf/PShelfSnippet1.java'>Create a PShelf</a></li>		
		</ul>
		
		<a name="RadioGroup"></a>
		<h2>RadioGroup</h2>
		<ul>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/radiogroup/RadioGroupViewerSnippet01.java'>Set up a RadioGroupViewer with data binding</a></li>		
		</ul>

		<a name="RichText"></a>
		<h2>RichText</h2>
		<ul>
			<li><a href='https://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/richtext/org.eclipse.nebula.widgets.richtext.example/src/org/eclipse/nebula/widgets/richtext/example/RichTextEditorExample.java'>RichTextEditor</a></li>		
			<li><a href='https://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/richtext/org.eclipse.nebula.widgets.richtext.example/src/org/eclipse/nebula/widgets/richtext/example/RichTextViewerExample.java'>RichTextViewer</a></li>		
			<li><a href='https://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/richtext/org.eclipse.nebula.widgets.richtext.example/src/org/eclipse/nebula/widgets/richtext/example/JFaceViewerIntegrationExample.java'>JFace Viewer Integration</a></li>		
		</ul>

		<a name="STW - SWT Transition Widget"></a>
        <h2>STW - SWT Transition Widget</h2>
        <ul>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/effects/org.eclipse.nebula.effects.stw.example/src/org/eclipse/nebula/effects/stw/example/TransitionTest.java'>Perform transitions on a button</a></li>      
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/effects/org.eclipse.nebula.effects.stw.example/src/org/eclipse/nebula/effects/stw/example/TransitionTest1.java'>Perform transitions on tabs of a TabFolder</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/widgets/effects/org.eclipse.nebula.effects.stw.example/src/org/eclipse/nebula/effects/stw/example/TransitionTest2.java'>Perform transitions on images</a></li>
			<li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/tree/widgets/effects/org.eclipse.nebula.effects.stw.example/src/org/eclipse/nebula/effects/stw/example'>Other Snippets</a></li>
        </ul>
		
        <a name="TableCombo"></a>
        <h2>TableCombo</h2>
        <ul>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/tablecombo/TableComboSnippet1.java'>An example that shows the features of the TableCombo</a></li>      
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/tablecombo/viewer/TableComboViewerSnippet1.java'>An example that shows the features of the TableComboViewer</a></li>
        </ul>

		<a name="XViewer"></a>
		<h2>XViewer</h2>
		<ul>
			<li>XViewer examples are provided within the source code.  See <a href='http://wiki.eclipse.org/Nebula_XViewer_Getting_Started'>Getting Started</a> for more information on how to setup and run.</li>
		</ul>

 <a name="Visualization"></a>
        <h2>Visualization</h2>
        <ul>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/SimpleExample.java'>Simple XY Graph</a></li>      
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/SimpleToolbarArmedXYGraphExample.java'>Simple XY Graph Graph with toolbar</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/BarChartExample.java'>Bar Chart</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/ComprehensiveExample.java'>A comprehensive XY Graph</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/IntensityGraphExample.java'>Intensity Graph</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/GaugeExample.java'>Gauge</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/KnobExample.java'>Knob</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/MeterExample.java'>Meter</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/ProgressBarExample.java'>Progress Bar</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/ScaledSliderExample.java'>Scaled Slider</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/TankExample.java'>Tank</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/ThermometerExample.java'>Thermometer</a></li>
            <li><a href='http://git.eclipse.org/c/nebula/org.eclipse.nebula.git/plain/examples/org.eclipse.nebula.snippets/src/org/eclipse/nebula/snippets/visualization/MultipleWidgetsExample.java'>Multiple widgets</a></li>
        </ul>
        
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>