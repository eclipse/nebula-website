<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# formattedtext.php
	#
	# Author: Eric Wuillai
	# Date:		2007-03-22
	#
	# Description: Describes the FormattedText component.
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula FormattedText Component";
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
		<h2>FormattedText</h2>

		<img src="images/FormattedText.png">

		<p>
		FormattedText is a decorator component adding input and display mask
		capabilities on a Text widget. Formatting is based on a public formatter API.
		The component is provided with 5 formatter implementations :
		<ul class="list2">
			<li><i>DateTimeFormatter.</i> Implements masks for Date values, supporting both date and time patterns (e.g. "dd/MM/yyyy HH:mm").</li>
			<li><i>DateFormatter.</i> Extends the DateTimeFormatter, restricting the input mask to the date part only (e.g. "dd/MM/yyyy").</li>
			<li><i>TimeFormatter.</i> Extends the DateTimeFormatter, restricting the input mask to the time part only (e.g. "hh:mm:ss a").</li>
			<li><i>NumberFormatter.</i> Implements masks for Number values (e.g. "#,##0.00").</li>
			<li><i>MaskFormatter.</i> Implements masks for formatted String values (e.g. phone or account number, as "(###)-####").</li>
		</ul>
		</p>

		<p>
		NOTE: The FormattedText is in an <font color="red"><b>ALPHA</b></font> state.
		The API is stable, but users should expect changes in future versions: add of
		new features and formatters, minor behavior changes.
		</p>

		<p>
			<a href='/nebula/snippets.php#FormattedText'>Snippets</a>
		</p>
		<p>
			<a href='history.php'>Update History (like release notes)</a>
		</p>
		
		<hr class="clearer"/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>