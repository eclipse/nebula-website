<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# formattedtext.php
	#
	# Author: Eric Wuillai
	# Date:		2007-03-22
	#
	# Description: Describes the DateChooser widgets.
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula DateChooser Widgets";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Eric Wuillai";

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
		<h2>DateChooser</h2>

		<table border="0">
			<tr>
				<td width="200" align="center" valign="top"><img src="images/DateChooser1.png" border="0" alt="GRAY theme" /><br />GRAY theme (default)</td>
				<td width="200" align="center" valign="top"><img src="images/DateChooser2.png" border="0" alt="BLUE theme" /><br />BLUE theme</td>
				<td width="200" align="center" valign="top"><img src="images/DateChooser3.png" border="0" alt="YELLOW theme" /><br />YELLOW theme</td>
			</tr>
		</table>

		<p>
		DateChooser widget presents the monthly view of a calendar for date picking.<br />
		Features :
		<ul class="list2">
			<li>Month names, weekday names and first day of week depend of the locale setted on the calendar.</li>
			<li>Support for mouse and keyboard navigation.</li>
			<li>Customizable look & feel by themes (colors, font, lines) (3 themes provided).</li>
			<li>Shows days from adjacent months.</li>
			<li>Listener for date selection events.</li>
			<li>Support for multi selection and selection of intervals.</li>
			<li>Optional weeks numbers.</li>
			<li>Optional footer displaying the today date.</li>
			<li>Full support of internationalization (days and months names, labels, first day of week, minimal days in first week).</li>
		</ul>
		</p>

		<h2>DateChooserCombo</h2>

		<table border="0">
			<tr>
				<td width="200" align="center" valign="top"><img src="images/DateChooserCombo1.png" border="0" alt="DateChooserCombo" /></td>
			</tr>
		</table>

		<p>
		DateChooserCombo widget is a date field editor that combines a text field and a popup calendar. This widget is based on
		FormattedText and DateChooser.<br />
		Features :
		<ul class="list2">
			<li>See <a href="../formattedtext/formattedtext.php">FormattedText</a> for text features. Uses a DateFormatter.</li>
			<li>See DateChooser for popup calendar features.</li>
			<li>Customization of locale, date mask, font and colors (themes are shared with DateChooser).</li>
		</ul>
		</p>

		<p>
		NOTE: The DateChooser and DateChooserCombo widgets are in an <font color="red"><b>ALPHA</b></font> state.
		The API is stable, but users should expect changes in future versions: add of
		new features, minor behavior changes.
		</p>
		<br><br>

		<p>
		<a href='snippets.php'>Snippets</a>
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.datechooser_1.0_ALPHA_NIGHTLY.zip'>Download the DateChooser widgets - Alpha Version (nightly build)</a>
		<br>Important : DateChooserCombo widget depends on <a href="../formattedtext/formattedtext.php">FormattedText</a> component. So you must download and put the FormattedText library in your classpath.
		<p>
		<a href='history.php'>Update History (like release notes)</a>

		<hr class="clearer"/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>