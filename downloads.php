<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# examples.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2009-02-01
	#
	# Description:  Nebula Download page.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Downloads";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Downloads";
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
	
	
	<h2>Nebula Release Latest</h2>

	<div
		style="background-color: orange; border: red dotted 2px; padding: 10px">
		<p style="font-weight: bold">We are working towards a set of
			widgets that are production ready, stable and maintained.</p>
		<p>
			This set of widgets is known as "Nebula Release". The widgets that
			are proposed to be in "Nebula Release" are listed on the left. This
			update site contains the latest version of the widgets.Our CI build
			flows from check-in to publish on the Eclipse Download site. Use this
			URL to <a
				href="http://help.eclipse.org/indigo/index.jsp?topic=%2Forg.eclipse.platform.doc.user%2Ftasks%2Ftasks-129.htm">install</a>
			"Nebula Release" widgets in your Eclipse Platform:
		</p>
		<div
			style="background-color: #fdf; border: red dotted 2px; padding: 10px">
			<center>
				<p style="font-weight: bold">
				P2 Update Site: <a href="http://download.eclipse.org/technology/nebula/snapshot">http://download.eclipse.org/technology/nebula/snapshot</a><br/>
				JAR download: <a href="http://build.eclipse.org/technology/nebula/nebula/">http://build.eclipse.org/technology/nebula/nebula/</a><br/>
				</p>
			</center>
		</div>
	</div>

	<h2>Nebula Incubation Latest</h2>

	<div
		style="background-color: orange; border: red dotted 2px; padding: 10px">
		<p style="font-weight: bold">The widgets are in incubation because
			they are in an early state of development or because we do not have
			an active committers for the widget.</p>
		<p>
			Some widgets are stable enough for production use. Please see the
			individual widget pages for more status information. You will find
			latest version of widgets, with their new feature and more recent bug
			fixes. However, since they are development build, they may include
			some bugs that are not present in releases. Test these widgets with
			your use case before you release them in production. Use this URL to
			<a
				href="http://help.eclipse.org/indigo/index.jsp?topic=%2Forg.eclipse.platform.doc.user%2Ftasks%2Ftasks-129.htm">install</a>
			"Nebula Incubation" widgets in your Eclipse Platform:
		</p>
		<div
			style="background-color: #fdf; border: red dotted 2px; padding: 10px">
			<center>
				<p style="font-weight: bold">
					<a
						href="http://download.eclipse.org/technology/nebula/incubation/snapshot">http://download.eclipse.org/technology/nebula/incubation/snapshot</a>
				</p>
			</center>
		</div>
	</div>

	<hr class="clearer" />
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div align="center">
				<a href="http://www.eclipse.org/projects/what-is-incubation.php">
					<img align="center"
					src="http://www.eclipse.org/images/egg-incubation.png" border="0"
					alt="Incubation" />
				</a>
			</div>
		</div>
	</div>
		
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>