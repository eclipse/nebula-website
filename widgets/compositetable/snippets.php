<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# snippets.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Presents the snippets for the CTableTree widget
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula CompositeTable Snippets";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Snippets";
	$pageAuthor		= "David Orme";
	
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

		Please see the <a href="http://www.eclipse.org/swt/snippets/">SWT Snippets page</a> for information on snippets and how to run a snippet.
		<p>
		
		<ul>
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet0.java?root=Technology_Project&view=co'>
		A CompositeTable displaying a header and some row controls but no data</a></li>

		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet1.java?root=Technology_Project&view=co'>
		A CompositeTable displaying first/last name pairs</a></li>

		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet2.java?root=Technology_Project&view=co'>
		A CompositeTable editing first/last name pairs</a></li>

		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet3.java?root=Technology_Project&view=co'>
		A CompositeTable editing, inserting, and deleting first/last name pairs</a></li>

		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet4.java?root=Technology_Project&view=co'>
		A CompositeTable listing first/last name pairs with behavior like SWT.FULL_SELECTION</a></li>

		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet5.java?root=Technology_Project&view=co'>
		A CompositeTable listing first/last name pairs, allowing sorting by clicking columns.</a></li>
		
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/CompositeTableSnippet6.java?root=Technology_Project&view=co'>
		A CompositeTable editing a name/address block</a></li>
		
		<!-- DayEditor, MonthEditor -->
		<br/><br/>
		
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/DayEditorSnippet0.java?root=Technology_Project&view=co'>
		A DayEditor control (extending CompositeTable) displaying a week calendar</a></li>
		
		<li><a href='http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.swt.nebula/org.eclipse.swt.nebula.snippets/src/org/eclipse/swt/nebula/snippets/compositetable/MonthCalendarSnippet.java?root=Technology_Project&view=co'>
		A MonthCalendar control with the </a></li>
		
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>