<?php
require_once ($_SERVER ['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER ['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER ['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App ();
$Nav = new Nav ();
$Menu = new Menu ();
include ($App->getProjectCommon ()); # All on the same line to unclutter the user's desktop'


#*****************************************************************************
#
# contrib_tiers.php
#
# Author: 		Wim Jongman
# Date:			2010-08-25
#
# Description: Describes the tiers in Nebula.
#
#****************************************************************************


#
# Begin: page-specific settings.  Change these. 
$pageTitle = "Nebula Oscilloscope Widget";
$pageKeywords = "Nebula, SWT, Widgets, Controls";
$pageAuthor = "Wim Jongman";

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
		<h2>Oscilloscope</h2>
		<p>This animated SWT widget can be used to monitor processes. The widget is easy to implement with the provided abstract dispatcher. It is fun, versatile and very configurable. .</p>
				<img src='images/scope.gif'>	
		
		<h3>Features</h3>
		<ul>
		   <li>Fast : One cycle takes a few milliseconds to calculate. </li>
		   <li>Customizable : Background images, colours, line size, tail size and fading are just a few of the options.</li>
		   <li>Animated : From fast and fluid pixelscrolling animation to greased lightning real time monitoring.</li>
		   <li>Graphics : Background monitor-raster graphics included, ready for you to use. </li>
		   <li>Examples : Various snippets are available that show how the widget must be used. The Nebula Examples view contains a customizable option panel to show all aspects of the widget</li>
		   <li>Sounds : Beep, Heartbeat and Flatline sounds to make the monitoring effect even more realistic.</li>
		   <li>Fun : Build the perfect dashboard for your control room.</li>
		   <li>Graph calculations : Examples on how to create a sine wave, a square wave and a pulse monitor. Earthquake monitors also possible.</li>
		</ul>
		
		<img src='images/gallery.jpg'>	
	    
		
		<p>TRY IT : The best way to play with all Oscilloscope features is to install the <a href='/nebula/examples.php'>Nebula Examples</a>.</p>
		
		<p>
			DOWNLOAD : jar and update site available soon.
		</p>
		
		<p>
			QUICK START : Look at the <a href='/nebula/snippets.php#Oscilloscope'>Snippets</a>. Other snippets are available on <a href="/nebula/source.php">CVS</a>.
		</p>
		
		<p>
			JAVADOC : Javadoc is available : <a href="doc_20100825/index.html">Javadoc - 1.0.0_20100825</a>.
		</p>
		<p>
			<a href='https://bugs.eclipse.org/bugs/buglist.cgi?classification=Technology&product=Nebula&component=Oscilloscope&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED='>Bugs</a>
		</p>

		<hr class="clearer"/>
	</div>


EOHTML;

# Generate the web page
$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>