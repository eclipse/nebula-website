<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# tablecombo.php
	#
	# Author: 	Marty Jones
	# Date:		2009-11-11
	#
	# Description: Describes the TableCombo widget.
	#
	#****************************************************************************


	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Nebula TableCombo Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Marty Jones";

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
		<h2>TableCombo</h2>

		<table border="0" cellspacing="2" cellpadding="0">
			<tr>
				<td><img src='images/tablecombo.png'></td>
			</tr>
		</table>
		<p>
		The TableCombo Widget is a custom combo control that uses a table instead of a list when dropped down. The following features are supported by this widget.
		
        <ul class="list2">
            <li>Supports displaying multiple columns of data in the drop down portion of the combo.</li>
            <li>Supports displaying a header for the drop down portion of the combo.</li>
            <li>Supports images for each column that is displayed within the drop down portion of the combo.</li>
            <li>Supports custom Colors and Fonts for each Row & Column within the drop down portion of the combo.</li>
            <li>Supports displaying a % of the full drop down portion of the combo. So you can specify that the viewable portion of the drop down will be 75% of the full width of the table and a Horizontal scrollbar will be displayed.</li>
		</ul>
		</p>

        <p>
        NOTE: The TableCombo widget is in an <font color="red"><b>ALPHA</b></font> state.
        The API is stable, but users should expect changes in future versions: add of
        new features, minor behavior changes.
        </p>
        <br><br>
        <p>
        <a href='/nebula/snippets.php#TableCombo'>Snippets</a>
        </p>

        <hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>