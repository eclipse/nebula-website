<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Jeremy Dowdall / Wim Jongman / Mickael Istria
	# Description:  Nebula Download page.

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
		<br/>
		<h3>Latest</h3> 
		<h4>Nebula Release (12 Projects) <a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'> 
		<img src='http://marketplace.eclipse.org/misc/installbutton.png'/></a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/technology/nebula/snapshot">http://download.eclipse.org/technology/nebula/snapshot</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/technology/nebula/snapshot/repository.zip">repository.zip</a></li>
					<li><a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
				</ul>
			</p>

		<h4>Nebula Incubation (9 Projects) <a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running to install these Widgets'> 
		<img src='http://marketplace.eclipse.org/misc/installbutton.png'/></a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/technology/nebula/incubation/snapshot">http://download.eclipse.org/technology/nebula/incubation/snapshot</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/technology/nebula/incubation/snapshot/repository.zip">repository.zip</a></li>
					<li><a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
				</ul>
			</p>
			
<!-- ------------------ Older downloads  -->
			<br/>
			<br/>
			<h3>Q1/2014. Retention period: 2 years.</h3> 
			<h4>Nebula Release (12 Projects)</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/technology/nebula/snapshots/release/01/">http://download.eclipse.org/technology/nebula/snapshots/release/01/</a></li> 
					<li>Update site repo zipped: <a href="http://download.eclipse.org/technology/nebula/snapshots/release/01/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation (9 Projects)</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/technology/nebula/snapshots/incubation/01">http://download.eclipse.org/technology/nebula/snapshots/incubation/01</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/technology/nebula/snapshots/incubation/01/repository.zip">repository.zip</a></li>
				</ul>
			</p>

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
