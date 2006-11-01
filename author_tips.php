<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# author_tips.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Tips, Tricks and Guidelines for Widget Authors";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Chris Gross";
	
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
		<p>The following is a list of various tips, tricks, guidelines and other general information
		for developers writing custom widgets for Nebula.  This is an unorganized list which will
		hopefully become larger and more organized over time.  Many of the items below will also help your code 
		and your widget more closely match SWT.
		<p>
		<ul>
		<li><b>Don't paint outside the paint event.</b>  When you want draw something new on your
		widget simply invalidate it (redraw) and allow it repainted by the OS.
		</li>
		<li><b>Be wary of ScrolledComposite.</b>  ScrolledComposite can allow you to quickly and 
		easily add scrolling to your widget but there are limitations.  Windows has a limitation on 
		the maximum size of a control (32k pixels).  Therefore your widget will have a maximum size to its 
		content.  Also, ScrolledComposite scrolls your content pixel-by-pixel.  Generally widgets 
		should scroll by row or by item.  In other words, each click on the scrollbar arrow should 
		move the top item of the widget by one.
		</li>
		<li><b>Fail fast - use checkWidget.</b>  Each public method should be prefaced with a call
		to checkWidget.
		</li>
		<li><b>Use the SWT error methods.</b>  Stay consistent with SWT by using the SWT exception 
		methods in the main SWT class.
		</li>	
		<li><b>Don't override dispose.</b>  The dispose method is not called when an item is disposed
		as its parent is disposed.  If you need to perform some dispose logic, listen for the dispose 
		event.
		</li>	
		<li><b>Dispose of items.</b>  If your widget contains items, you will need to dispose of the items
		when the main widget is disposed.
		</li>	
		<li><b>checkStyle.</b>  SWT widgets are driven by style bits.  As a general guidelines, include 
		a simple static method that filters those styles utilized by your widget (and call it checkStyle).  
		This method should return the filtered style which can then be passed down to the super constructor.  
		This will allow the getStyle method to answer correctly.
		</li>							
		<li><b>Don't forget SWT.RIGHT_TO_LEFT and SWT.LEFT_TO_RIGHT.</b>  In the aforementioned checkStyle method, 
		don't forget to accept the two BiDi styles.
		</li>	
		<li><b>isXXX vs getXXX</b>  Follow the proper conventions for getters.  Preface methods which
		simply return a property value with 'get'.  Preface methods which return the status of a property
		based on more complex logic with 'is' (ex getVisible/setVisible/isVisible).
		</li>					
		<li><b>Be transparent friendly.</b>  TODO
		</li>			
		<li><b>Popups.</b>  TODO
		</li>			
		</ul>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>