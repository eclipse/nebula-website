<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# calendarcombo.php
	#
	# Author: 	Emil Crumhorn
	# Date:		2007-09-02
	#
	# Description: Describes the CalendarCombo widget.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula Calendar Combo Widget";
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
		<h2>CalendarCombo</h2>

		<table border="0" cellspacing="2" cellpadding="0">
			<tr>
				<td><img src='images/calendarcombo.png'></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td valign="top"><img src='images/daterange.png'></td>
			</tr>
		</table>
		<p>
		The Calendar Combo Widget is a combo box widget that opens a calendar when dropped down. The calendar is modelled after Microsoft Outlook's calendar widget
		and acts and behaves exactly the same (and it is also theme based).
		<p>
		Another "feature" is that the combo is not based on CCombo (as many other custom implementations), but is instead programatically attached to the native Combo box.
		<p>
		By default, the widget comes with Default implementations for everything that allows you to skin the combo according to the following:
		<p>
		<ul>
		      &raquo; Outlook 2005 - Windows XP Blue Theme<br>
		      &raquo; Outlook 2005 - Windows XP Olive Theme<br>
      		  &raquo; Outlook 2005 - Windows XP Silver Theme
      	</ul>

		<p>
		<b>Update!</b> The CalendarCombo now supports date range selection. Due to this the constructor API has been reworked. Another addition is the ability to set dates "prior to" and "after" which should be blocked from user selection.
		<br><br>
		<b>For the latest version of the code, please use the CVS repository code as nightly builds are not currently working.</b>
		<br><br>	
		
		<!-- <a href='snippets.php'>CollapsibleButton Snippets</a> -->
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/org.eclipse.nebula.widgets.calendarcombo_1.0_ALPHA_NIGHTLY.zip'>Download the CalendarCombo widget - Nightly Build</a>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>