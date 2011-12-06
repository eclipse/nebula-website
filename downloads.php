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
	
	
	<div style="background-color: #fdf; border: red dotted 2px; padding:10px">
	    Note: When installing from an update site, you may have to uncheck 'group by categories' to make the feature appear in the update manager on some Eclipse versions (3.5M6).</div>
	
	<h2>Releases</h2>
	
		<div style="background-color: #fdf; border: red dotted 2px; padding:10px">
			<p style="font-weight: bold">
				No release is available yet. We are currently working on providing one.
			</p>
			<p>
			    In the meantime, we recommand you start using the continuous integration builds. Most of them shoud
			    be stable enough to be used in your context. Feel free to ask on forum for more details.
			</p>
			<p>
				We appreciate your patience as we go through these changes because, though inconvenient, 
				they will help the project move forward and set it up to better serve the Eclipse community at large.
			</p>
		</div>
	
	<h2>Continuous integration builds (snapshots)</h2>
	
	<div style="background-color: yellow; border: orange dotted 2px; padding:10px">
		<p style="font-weight: bold">
			These builds does not guarantee full quality for these widgets. Testing only! 
		</p>
		<p>
		    You may find here the latest version of widgets, with there new feature and more recent bug fixes.
		    However, since they are development build, they may suffer from bugs that are not present in releases.
		</p>
		<p>
			Use these widgets carefully in your products. We highly recommand you to use released versions.
		</p>
	</div>
	
	<h3>Main widgets</h3>
	Use this URL to <a href="http://help.eclipse.org/indigo/index.jsp?topic=%2Forg.eclipse.platform.doc.user%2Ftasks%2Ftasks-129.htm">install</a> main Nebula widgets in your Eclipse Platform: <a href="http://download.eclipse.org/technology/nebula/proper/snapshots">http://download.eclipse.org/technology/nebula/proper/snapshots</a>
	<h3>Incubation widgets</h3>
	Use this URL to <a href="http://help.eclipse.org/indigo/index.jsp?topic=%2Forg.eclipse.platform.doc.user%2Ftasks%2Ftasks-129.htm">install</a> incubating Nebula widgets in your Eclipse Platform: <a href="http://download.eclipse.org/technology/nebula/proper/snapshots">http://download.eclipse.org/technology/nebula/incubation/snapshots</a>
	
		<hr class="clearer"/>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div align="center">
				<a href="http://www.eclipse.org/projects/what-is-incubation.php">
					<img align="center" src="http://www.eclipse.org/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>