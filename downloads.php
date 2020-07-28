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

		<h2>Latest Release (2.4.2)</h2>
		<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/releases/latest">http://download.eclipse.org/nebula/releases/latest</a></li>
					<li>Update site repo zipped: <a href="http://www.eclipse.org/downloads/download.php?file=/nebula/releases/latest/repository-nebula-latest.zip">repository-nebula-latest.zip</a></li>
					<li>Javadoc:  <a href="releases/latest/javadoc/index.html">Link to Javadoc</a></li>
				</ul>
			</p>
		</h2>

		
		<h2>Releases</h2>
			<ul>
			    <li><b><a href='releases/2.4.2/index.php'>Release 2.4.2</a></b> <a href='releases/2.4.2/javadoc/index.html'>(javadoc)</a></li>
			    <li><a href='releases/2.4.1/index.php'>Release 2.4.1</a></li>
			    <li><a href='releases/2.4.0/index.php'>Release 2.4.0</a></li>
			    <li><a href='releases/2.3.0/index.php'>Release 2.3.0</a></li>
			    <li><a href='releases/2.2.0/index.php'>Release 2.2.0</a></li>
			    <li><a href='releases/2.0.1/index.php'>Release 2.0.1</a></li>
			    <li><a href='releases/2.0.0/index.php'>Release 2.0.0</a></li>
			    <li><a href='releases/1.4.0/index.php'>Release 1.4.0</a></li>
			    <li><a href='releases/1.3.0/index.php'>Release 1.3.0</a></li>
				<li><a href='releases/1.2.0/index.php'>Release 1.2.0</a></li>
				<li><a href='releases/1.1.0/index.php'>Release 1.1.0</a></li>
				<li><a href='releases/1.0.0/index.php'>Release 1.0.0</a></li>
			</ul>
		</h2>
		</p>
		
		<h2>Latest Snapshots</h2>

		<h4>Nebula Stable Widgets <a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'> 
		<img src='https://marketplace.eclipse.org/misc/installbutton.png'/></a></h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/snapshot">http://download.eclipse.org/nebula/snapshot</a></li>
					<li>Update site repo zipped: <a href="http://www.eclipse.org/downloads/download.php?file=/nebula/snapshot/repository.zip">repository.zip</a></li>
					<li><a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
				</ul>
			</p>

		<h4>Nebula Incubation Widgets <a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running to install these Widgets'> 
		<img src='https://marketplace.eclipse.org/misc/installbutton.png'/></a></h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/incubation/snapshot">http://download.eclipse.org/nebula/incubation/snapshot</a></li>
					<li>Update site repo zipped: <a href="http://www.eclipse.org/downloads/download.php?file=/nebula/incubation/snapshot/repository.zip">repository.zip</a></li>
					<li><a href='http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
				</ul>
			</p>

		<h4>Nebula NatTable</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Snapshot repo: <a href="http://download.eclipse.org/nattable/snapshots/latest/repository">http://download.eclipse.org/nattable/snapshots/latest/repository</a></li>
					<li>Snapshot repo zipped: <a href="http://www.eclipse.org/downloads/download.php?file=/nattable/snapshots/latest/repository.zip">repository.zip</a></li>
					<li>Downloads: <a href="https://eclipse.org/nattable/download.php">https://eclipse.org/nattable/download.php</a></li>
				</ul>
			</p>
			
<!-- ------------------ Older downloads  -->
			<br/>
			<br/>
			<h2>Archives</h2>
			This section contains archived repositories so that release engineers do not have to
			change their builds so often. Please note that you don't have to depend on a 
			specific build qualifier in your target definition or feature. If you still want to do that
			and don't want to update your build scripts every day then make a local copy of 
			a repo or choose on of these below.
			<br/>
			<h3>Q2/2016. Retention period: 12 years.</h3> 
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q22016/release/">http://archive.eclipse.org/nebula/Q22016/release/</a></li> 
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q22016/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q22016/incubation">http://archive.eclipse.org/nebula/Q22016/incubation</a></li>
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q22016/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>


			<h3>Q4/2015. Retention period: 12 years.</h3> 
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q42015/release/">http://archive.eclipse.org/nebula/Q42015/release/</a></li> 
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q42015/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q42015/incubation">http://archive.eclipse.org/nebula/Q42015/incubation</a></li>
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q42015/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>


			<h3>Q1/2015. Retention period: 12 years.</h3> 
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q12015/release/">http://archive.eclipse.org/nebula/Q12015/release/</a></li> 
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q12015/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q12015/incubation">http://archive.eclipse.org/nebula/Q12015/incubation</a></li>
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q12015/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>
			<h3>Q3/2014. Retention period: 12 years.</h3> 
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q32014/release/">http://archive.eclipse.org/nebula/Q32014/release/</a></li> 
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q32014/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q32014/incubation">http://archive.eclipse.org/nebula/Q32014/incubation</a></li>
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q32014/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>			
			<br/>
			<br/>
			<h3>Q1/2014. Retention period: 12 years.</h3> 
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q12014/release/">http://archive.eclipse.org/nebula/Q12014/release/</a></li> 
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q12014/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://archive.eclipse.org/nebula/Q12014/incubation">http://archive.eclipse.org/nebula/Q12014/incubation</a></li>
					<li>Update site repo zipped: <a href="http://archive.eclipse.org/nebula/Q12014/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>

		<hr class="clearer" />
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Comments</h6>
			<div align="center">
				<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=373009">
					<img align="center"
					src="https://wiki.eclipse.org/images/7/7d/Bug.png" border="0"
					alt="Report Problems with this site here" />Report page problems here.
				</a>
			</div>
		</div>
	</div>
		
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
