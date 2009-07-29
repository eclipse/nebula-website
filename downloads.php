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
	
	<a name="Examples"></a>
	<h2>Nebula Examples</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/examples/downloads/drops/latest/nebula-examples-ALL-incubation.zip">nebula-examples-ALL-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/examples/update-N/   </li>
	    </ul>
	    
	    <a name="CalendarCombo"></a>
		<h2>CalendarCombo</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/calendarcombo/downloads/drops/latest/nebula-calendarcombo-ALL-incubation.zip">nebula-calendarcombo-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/calendarcombo/update-N/  </li>
	    </ul>
	    
	    <a name="CDateTime"></a>
		<h2>CDateTime</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/cdatetime/downloads/drops/latest/nebula-cdatetime-ALL-incubation.zip">nebula-cdatetime-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/cdatetime/update-N/  </li>
	    </ul>
	    
	    <a name="CollapsibleButtons"></a>
		<h2>CollapsibleButtons</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/collapsiblebuttons/downloads/drops/latest/nebula-collapsiblebuttons-ALL-incubation.zip">nebula-collapsiblebuttons-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/collapsiblebuttons/update-N/  </li>
	    </ul>
	    
	    <a name="CompositeTable"></a>
		<h2>CompositeTable</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/compositetable/downloads/drops/latest/nebula-compositetable-ALL-incubation.zip">nebula-compositetable-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/compositetable/update-N/  </li>
	    </ul>
	    
	     <a name="DateChooser"></a>
		<h2>DateChooser</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/datechooser/downloads/drops/latest/nebula-datechooser-ALL-incubation.zip">nebula-datechooser-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/datechooser/update-N/  </li>
	    </ul>
	    
	    <a name="FormattedText"></a>
		<h2>FormattedText</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/formattedtext/downloads/drops/latest/nebula-formattedtext-ALL-incubation.zip">nebula-formattedtext-ALL-incubation.zip</a> </li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/formattedtext/update-N/  </li>
	    </ul>
	    
	    <a name="Gallery"></a>
		<h2>Gallery</h2>
		<ul>
			<li>0.5.2 (stable) : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/gallery/downloads/drops/R_0_20090418/nebula-gallery-ALL-incubation-0.5.2_R_0_20090418.zip">nebula-gallery-ALL-incubation-0.5.2_R_0_20090418.zip</a> - <a href="http://www.eclipse.org/nebula/widgets/gallery/releasenotes/r_0_20090418/releasenotes.php">Notes</a></li>
			<li>Update site (stable) : http://download.eclipse.org/technology/nebula/gallery/update/   </li>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/gallery/downloads/drops/latest/nebula-gallery-ALL-incubation.zip">nebula-gallery-ALL-incubation.zip</a> - <a href="http://download.eclipse.org/technology/nebula/gallery/downloads/drops/latest/testresults/html/org.eclipse.nebula.widgets.gallery.tests_linux.gtk.html">Tests results</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/gallery/update-N/  </li>
	    </ul>
	    
	    <a name="Grid"></a>
	    <h2>Grid</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/grid/downloads/drops/latest/nebula-grid-SDK-incubation.zip">nebula-grid-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/grid/update-N/ </li>
	    </ul>
	    
	    <a name="PGroup"></a>
	     <h2>PGroup</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/pgroup/downloads/drops/latest/nebula-pgroup-SDK-incubation.zip">nebula-pgroup-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/pgroup/update-N/  </li>
	    </ul>
	   
	   <a name="PShelf"></a> 
	    <h2>PShelf</h2>
		<ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/pshelf/downloads/drops/latest/nebula-pshelf-SDK-incubation.zip">nebula-pshelf-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/pshelf/update-N/</li>
	    </ul>
	    
	    <a name="RadioGroup"></a>
	    <h2>RadioGroup</h2>
		<ul>
			<li>Latest nightly build : <font color='red'>Not yet available</font></li>
			<li>Update site (nightly builds) : <font color='red'>Not yet available</li>
			<!--
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/pshelf/downloads/drops/latest/nebula-radiogroup-SDK-incubation.zip">nebula-pshelf-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/radiogroup/update-N/</li>
			-->
	    </ul>
	    
	    <a name="CWT"></a>
	    <h2>CWT (unofficial)</h2>
	    <ul>
			<li>Latest nightly build : <a href="http://www.eclipse.org/downloads/download.php?file=/technology/nebula/cwt/downloads/drops/latest/nebula-cwt-SDK-incubation.zip">nebula-cwt-SDK-incubation.zip</a></li>
			<li>Update site (nightly builds) : http://download.eclipse.org/technology/nebula/cwt/update-N/  </li>
	    </ul>
	    
	    <h2>Other widgets</h2>	
		<p>There are no downloads available at this time.</p>
		
		<p>The source code can be found in <a href="/nebula/source.php">CVS</a>.</p>
		
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