<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App = new App();
	$Nav = new Nav();
	$Menu = new Menu();
	include($App->getProjectCommon());
	
	# All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula XViewer Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, XViewer, Table, Spreadsheet";
	$pageAuthor		= "Donald G. Dunne";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn" >

		<h3>$pageTitle</h3>
		
		<p>Advanced TreeViewer Widget</p>

<p>The purpose of the XViewer is to give the application developer a more advanced and dynamic TreeViewer that has the filtering and sorting the capabilities of a spreadsheet while providing the users the ability to customize their table to suit their current needs and save/restore these customizations for future use by individual or group.<br><br>


<a href="XViewer.pdf">EclipseCon 2009 Presentation Slides</a><br><br>
XViewer was developed and used by the <a href="http://www.eclipse.org/osee/">Eclipse OSEE Project</a><br><br> 

<img border="1" style="align:center; width:150%; height:150%;" src="images/xviewer_main.PNG" alt="XViewer Main"/>

<h3>Table Customizations</h3>
<ul>
<li>Provides <font color="blue">table customization dialog</font> to allow customization of visible columns, widths and renaming of columns</li>
<li><font color="blue">Easily reorder columns</font> through drag/drop or table customization</li>
<li>Provides mechanism to <font color="blue">save and load table customizations</font> so users can easily switch between customizations</li>
<li>Provides mechanism to <font color="blue">mark table customizations as individual or global </font>to provide sharing of customizations by users and teams (needs to be backed with shared file system or database)</li>
<li>Provides mechanism to <font color="blue">mark table customization as default customization</font> to display whenever this table is shown</li>
<li>Provides ability for <font color="blue">multiple XViewer tables to be used within the same application</font>, but provide their own columns and customiztions</li>
</ul>
<h3>Sorting</h3>
<ul>
<li>Sort individual columns (forward or reverse) using <font color="blue">data-specific configured sorter</font> for that columns data type</li>
<li>Perform unlimited <font color="blue">multi-column sorting</font> by holding Ctrl key down and selecting other columns.  Re-selecting a column while Ctrl is held down will reverse the sort for that column</li>
</ul>
<h3>Filtering</h3>
<ul>
<li><font color="blue">Quick filter (bottom left)</font> provides for filtering of all visible data by entered keywords</li>
<li>Alt-left click on column header (or right-click menu) allows for <font color="blue">filtering by column</font>.  As many column filters can be added and work together.</li>
<li>Provides <font color="blue">simple metrics (bottom status label)</font> to show number of objects loaded, number shown and number selected.</li>
<li><font color="blue">Status label shows filters and sorters</font> that are currently applied to viewer (bottom status label)</li>
</ul>
<h3>Other Capabilities</h3>
<ul>
<li>Provides ability to <font color="blue">copy rows, columns or individual cells into buffer</font> for pasting into other applications</li>
<li>Allows for <font color="blue">multi-column editing of selected rows/columns</font></li>
<li>Provides <font color="blue">html rendering</font> of currently visible table data</li>
<li>Provides <font color="blue">comma separated value export</font> to csv file that can be opened in any spreadsheet application</li>
<li>All the normal capabilities of the existing SWT Tree/TreeViewer have been retained as XViewer is an extension to TreeViewer</li>
</ul>

<h3>Future</h3>
<ul>
<li><font color="blue">Submitted to Nebula</font> as alternative to existing SWT TreeViewer (already part of eclipse.org/osee project)</li>
<li>Allow for <font color="blue">advanced column filtering</font> by complex expression and "canned list" of already entered items</li>
<li>Add <font color="blue">regular expressions</font> to all filtering capabilities</li>
<li>Provide easy ability to <font color="blue">sum selected rows for selected column</font></li>
<li>Provide simple <font color="blue">summing/counting of rows/column</font> data</li>
<li>Provide <font color="blue">formulas and functions</font> for advanced summing/counting of data</li>
<li>Provide <font color="blue">graphing and charting</font> of data</li>
<li>Collaborate with other table/tree solutions to integrate functionality... </li>
</ul>

<h3>Table Customizations</h3>
<img border="1" style="align:center; width:150%; height:150%;" src="images/xviewer_customize.PNG" alt="XViewer Customize"/>

<h3>Sorting and Filtering</h3>
<img border="1" style="align:center; width:150%; height:150%;" src="images/xviewer_sortfilter.PNG" alt="XViewer Sorting and Filtering"/>

<h3>HTML Report and CSV Export</h3>
<img border="1" style="align:center; width:150%; height:150%;" src="images/xviewer_reportexport.PNG" alt="XViewer Html Reporting"/>
		
		<p/>
	</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
