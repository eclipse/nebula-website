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

		<h2>External Links</h2>
		<ul>
			<li><a href="https://www.eclipse.org/articles/Article-Writing%20Your%20Own%20Widget/Writing%20Your%20Own%20Widget.htm">Creating Your Own Widgets using SWT</a></li>
			<li><a href="https://help.eclipse.org/photon/index.jsp?topic=%2Forg.eclipse.platform.doc.isv%2Fguide%2Fswt_widgets_custom.htm">SWT Custom Widgets</a></li>
			<li><a href="http://www.vogella.com/tutorials/SWTCustomWidget/article.html">Developing custom widgets with SWT - Tutorial</a></li>
		</ul>

		<h2>$pageTitle</h2>
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
		content.
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
		<li><b>checkStyle.</b>  SWT widgets are driven by style bits.  As a general guideline, include 
		a simple static method that filters those styles utilized by your widget (and call it checkStyle).  
		This method should return the filtered style which can then be passed down to the super constructor.  
		This will allow the getStyle method to answer correctly.
		</li>							
		<li><b>Don't forget SWT.RIGHT_TO_LEFT and SWT.LEFT_TO_RIGHT.</b>  In the aforementioned checkStyle method, 
		don't forget to accept the two BiDi styles.
		</li>	
		<li><b>isXXX vs getXXX.</b>  Follow the proper conventions for boolean getters.  Preface methods which
		simply return a property value with 'get'.  Preface methods which return the status of a property
		based on more complex logic with 'is' (ex getVisible/setVisible/isVisible).
		</li>	
		<li><b>Don't forget to redraw.</b>  When a method changes a value that affects the visual appearance of 
		your widget it will need to be redrawn.  Redraws can occur automatically for a variety of reasons and during 
		testing it may not be obvious that a redraw was missing.  All methods that affect the visual appearance need
		to end in redraw().
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