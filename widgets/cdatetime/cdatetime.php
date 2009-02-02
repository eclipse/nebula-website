<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# cdatetime.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Describes the CDateTime widget.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these.
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Jeremy Dowdall";
	$pageTitle1		= "Nebula CDateTime Widget";
	if($_GET['page'] == 'api') {
		$pageTitle2		= "Developer API";
		$pageContent	= file_get_contents("content/api.html");
	} else if($_GET['page'] == 'i18n') {
		$pageTitle2		= "Internationalization";
		$pageContent	= file_get_contents("content/i18n.html");
	} else if($_GET['page'] == 'operation') {
		$pageTitle2		= "End-User Operation";
		$pageContent	= file_get_contents("content/operation.html");
	} else if($_GET['page'] == 'patterns') {
		$pageTitle2		= "Date/Time Patterns and Formats";
		$pageContent	= file_get_contents("content/patterns.html");
	} else if($_GET['page'] == 'reference') {
		$pageTitle2		= "Links to Interesting Stuff";
		$pageContent	= file_get_contents("content/links.html");
	} else if($_GET['page'] == 'snippets') {
		$pageTitle2		= "Example Code Snippets";
		$pageContent	= file_get_contents("content/snippets.html");
	} else if($_GET['page'] == 'styles') {
		$pageTitle2		= "Style Settings";
		$pageContent	= file_get_contents("content/styles.html");
	} else {
		$pageContent	= file_get_contents("content/cdatetime.html");
	}

	if ($pageTitle2) {
		$onPageTitle	= $pageTitle1."<span style='font-size:16px;margin:5px 0 0 10px;color:#333'>(".$pageTitle2.")</span>";
		$pageTitle 		= $pageTitle1.": ".$pageTitle2;
	} else {
		$onPageTitle	= $pageTitle1;
		$pageTitle 		= $pageTitle1;
	}
	
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
			<h1>$onPageTitle</h1>
			$pageContent
			<hr class="clearer"/>
		</div>
		
		<div id="rightcolumn">
			<div class="sideitem">
				<h6>CDateTime</h6>
				<ul>
					<li><a href='cdatetime.php?page=patterns'>Date/Time Formats and Patterns</a></li>
					<li><a href='cdatetime.php?page=styles'>Style Settings</a></li>
					<li><a href='cdatetime.php?page=i18n'>Internationalization (I18N)</a></li>
					<li><a href='cdatetime.php?page=api'>Developer API</a></li>
					<li><a href='cdatetime.php?page=operation'>End-User Operation</a></li>
					<li><a href='cdatetime.php?page=reference'>Links - Clocks, and Calendars</a></li>
					<li><a href='/nebula/snippets.php#CDateTime'>Snippets</a></li>
				</ul>
			</div>
		</div>
		
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>