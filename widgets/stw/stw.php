<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_tiers.php
	#
	# Author: 		Ahmed M. Mahran
	# Date:			2012-01-24
	#
	# Description: Describes the tiers in Nebula.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula SWT Transition Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Ahmed M. Mahran";
	
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
		<h2>STW - SWT Transition Widget</h2>
		
		<p>
			STW is a transition widget! It adds fancy effects to SWT GUI.
			Users would enjoy wandering around views with smooth transition effects.
		</p>
		
		<img src='stw2.gif'>
		
		<p>
			Implemented transitions are:
			<ul>
            	<li><a href='doc/org/eclipse/nebula/effects/stw/transitions/CubicRotationTransition.html'>CubicRotationTransition</a>: horizontal and vertical 3D cubic rotations</li>
            	<li><a href='doc/org/eclipse/nebula/effects/stw/transitions/SlideTransition.html'>SlideTransition</a>: horizontal and vertical slide transitions</li>
            	<li><a href='doc/org/eclipse/nebula/effects/stw/transitions/FadeTransition.html'>FadeTransition</a>: fade transition</li>
        	</ul>
		</p>
		
		<p>
			Each transition has its own parameters so as to be tuned to get different effects.
			Not only that, you can also make your own transition effects by extending the <a href="doc/org/eclipse/nebula/effects/stw/Transition.html">Transition</a> abstract class.
		</p>
		
		<p>
			Check these videos:
			
			<object style="height: 390px; width: 640px">
				<param name="movie" value="http://www.youtube.com/v/9KgOmrhWAPc?version=3&feature=player_detailpage">
				<param name="allowFullScreen" value="true">
				<param name="allowScriptAccess" value="always">
				<embed src="http://www.youtube.com/v/9KgOmrhWAPc?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360">
			</object>
			
			<object style="height: 390px; width: 640px">
				<param name="movie" value="http://www.youtube.com/v/DMKv_lNxwsE?version=3&feature=player_detailpage">
				<param name="allowFullScreen" value="true">
				<param name="allowScriptAccess" value="always">
				<embed src="http://www.youtube.com/v/DMKv_lNxwsE?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360">
			</object>
		
			<object style="height: 390px; width: 640px">
				<param name="movie" value="http://www.youtube.com/v/8i3aUMoABrQ?version=3&feature=player_detailpage">
				<param name="allowFullScreen" value="true">
				<param name="allowScriptAccess" value="always">
				<embed src="http://www.youtube.com/v/8i3aUMoABrQ?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360">
			</object>
			
			<object style="height: 390px; width: 640px">
				<param name="movie" value="http://www.youtube.com/v/SMALkJM8UgI?version=3&feature=player_detailpage">
				<param name="allowFullScreen" value="true">
				<param name="allowScriptAccess" value="always">
				<embed src="http://www.youtube.com/v/SMALkJM8UgI?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360">
			</object>
			
		</p>
		
		<p>
			<a href='/nebula/snippets.php#STW - SWT Transition Widget'>Snippets</a>
		</p>
		
		<p>
			JAVADOC : Javadoc is available <a href="doc/index.html">here</a>.
		</p>
		
		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>