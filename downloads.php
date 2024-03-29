<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Jeremy Dowdall / Wim Jongman / Mickael Istria
	# Description:  Nebula Download page.

	#
	# Begin: page-specific settings.  Change these
	$pageTitle 		= "Nebula Downloads";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Downloads";
	$pageAuthor		= "Nebula Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "https://www.google.com/", "_blank", 3);


	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<br/>

		<h2>Next Release (3.1.1)</h2>
		<p style="font-weight: bold">
				<ul>
					<li><b>Next release will be released on February 1st 2024</b></li>
				</ul>
			</p>
		</h2>

		<h2>Latest Release (3.1.0)</h2>
		<p style="font-weight: bold">
			<ul>
				<li>Update site: <a href="https://download.eclipse.org/nebula/releases/latest">https://download.eclipse.org/nebula/releases/latest</a></li>
				<li>Update site repo zipped: <a href="https://www.eclipse.org/downloads/download.php?file=/nebula/releases/latest/repository-nebula-latest.zip">repository-nebula-latest.zip</a></li>
				<li>Javadoc:  <a href="releases/latest/javadoc/index.html">Link to Javadoc</a></li>
			</ul>
		</p>


		<h2>Releases</h2>
		<p style="font-weight: bold">
			<ul>
			    <li><b><a href='releases/3.0.0/index.php'>Release 3.0.0</a></b> <a href='releases/3.0.0/javadoc/index.html'>(javadoc)</a></li>
			    <li><a href='https://download.eclipse.org/nebula/releases'>Old Releases</a></li>
			    <li><a href='https://archive.eclipse.org/nebula/releases/'>Archived Releases</a></li>
			</ul>
		</p>

		<h3>Nebula Incubation Widgets Latest</h3>
		This repository only changes when the main Nebula widgets are released.
		<p style="font-weight: bold">
			<ul>
				<li>Update site: <a href="https://download.eclipse.org/nebula/incubation/latest">https://download.eclipse.org/nebula/incubation/latest</a></li>
				<li>Update site repo zipped: <a href="https://www.eclipse.org/downloads/download.php?file=/nebula/incubation/latest/repository-nebula-incubation-latest.zip">repository-nebula-incubation-latest.zip</a></li>
			</ul>
		</p>


		<h2>Latest Snapshots</h2>

		<h3>Nebula Stable Widgets <a href='https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'>
		<img src='https://marketplace.eclipse.org/misc/installbutton.png'/></a></h3>
		This repository changes on every push to master
		<p style="font-weight: bold">
			<ul>
				<li>Update site: <a href="https://download.eclipse.org/nebula/snapshot">https://download.eclipse.org/nebula/snapshot</a></li>
				<li>Update site repo zipped: <a href="https://www.eclipse.org/downloads/download.php?file=/nebula/snapshot/repository.zip">repository.zip</a></li>
				<li><a href='https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229894' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
			</ul>
		</p>

		<h3>Nebula Incubation Widgets Snapshots <a href='https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running to install these Widgets'>
		<img src='https://marketplace.eclipse.org/misc/installbutton.png'/></a></h3>
		This repository changes on every push to master
		<p style="font-weight: bold">
			<ul>
				<li>Update site: <a href="https://download.eclipse.org/nebula/incubation/snapshot">https://download.eclipse.org/nebula/incubation/snapshot</a></li>
				<li>Update site repo zipped: <a href="https://www.eclipse.org/downloads/download.php?file=/nebula/incubation/snapshot/repository.zip">repository.zip</a></li>
				<li><a href='https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=229909' title='Drag and drop into a running Eclipse to install these Widgets'>Drop this link into Eclipse to install</a></li>
			</ul>
		</p>

		<h3>Nebula NatTable</h3>
			<p style="font-weight: bold">
				<ul>
					<li>Snapshot repo: <a href="https://download.eclipse.org/nattable/snapshots/latest/repository">https://download.eclipse.org/nattable/snapshots/latest/repository</a></li>
					<li>Snapshot repo zipped: <a href="https://www.eclipse.org/downloads/download.php?file=/nattable/snapshots/latest/repository.zip">repository.zip</a></li>
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
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q22016/release/">https://archive.eclipse.org/nebula/Q22016/release/</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q22016/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q22016/incubation">https://archive.eclipse.org/nebula/Q22016/incubation</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q22016/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>


			<h3>Q4/2015. Retention period: 12 years.</h3>
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q42015/release/">https://archive.eclipse.org/nebula/Q42015/release/</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q42015/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q42015/incubation">https://archive.eclipse.org/nebula/Q42015/incubation</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q42015/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>


			<h3>Q1/2015. Retention period: 12 years.</h3>
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q12015/release/">https://archive.eclipse.org/nebula/Q12015/release/</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q12015/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q12015/incubation">https://archive.eclipse.org/nebula/Q12015/incubation</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q12015/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>
			<h3>Q3/2014. Retention period: 12 years.</h3>
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q32014/release/">https://archive.eclipse.org/nebula/Q32014/release/</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q32014/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q32014/incubation">https://archive.eclipse.org/nebula/Q32014/incubation</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q32014/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>
			<br/>
			<br/>
			<h3>Q1/2014. Retention period: 12 years.</h3>
			<h4>Nebula Stable Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q12014/release/">https://archive.eclipse.org/nebula/Q12014/release/</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q12014/release/repository.zip">repository.zip</a></li>
				</ul>
			</p>

			<h4>Nebula Incubation Widgets</h4>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="https://archive.eclipse.org/nebula/Q12014/incubation">https://archive.eclipse.org/nebula/Q12014/incubation</a></li>
					<li>Update site repo zipped: <a href="https://archive.eclipse.org/nebula/Q12014/incubation/repository.zip">repository.zip</a></li>
				</ul>
			</p>

		<hr class="clearer" />
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Comments</h6>
			<div align="center">
				<a href="https://github.com/eclipse/nebula/issues/new">
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
