<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Author: 		Wim Jongman
	# Description:  Nebula Releases page.

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Release 1.1.0";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, Release";
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
		
		<p>
		This is the Nebula 1.2.0 releases. <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=component%2Cpriority%2Cbug_severity&product=Nebula&query_based_on=&query_format=advanced&target_milestone=1.2.0" target=blank>We resolved 23 issues in this release.</a>  
		</p>

		<h3>Downloads</a></h3>
			<p style="font-weight: bold">
				<ul>
					<li>Update site: <a href="http://download.eclipse.org/nebula/releases/1.2.0">http://download.eclipse.org/nebula/releases/1.1.0</a></li>
					<li>Update site repo zipped: <a href="http://download.eclipse.org/nebula/releases/1.2.0/repository-nebula-1.2.0.zip">repository.zip</a></li>
				</ul>
			</p>	

			<table width="100%" style="margin-top: 20px;">
				<colgroup>
					<col width="320">
					<col width="320">
				</colgroup>
				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/cdatetime/cdatetime.php"><img
										src="images/cdatetime.png" border="0"
										alt="The CDateTime is a graphical and textual Date selection widget."
										title="CDateTime"></a></td>
							</tr>
							<tr>
								<td align="center"><b>CDateTime</b></td>
							</tr>
						</table>
					</td>
					
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/pshelf/pshelf.php"><img
										src="images/pshelf.png" border="0"
										alt="PShelf is a composite widget similar to a tab folder but uses an accordion-like metaphor."
										title="PShelf"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PShelf</b></td>
							</tr>
						</table>
					</td>


				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>
				
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/ganttchart/ganttchart.php"><img
										src="images/ganttchart.png" border="0"
										alt="GanttChart is a full featured and customizable GANTT charting component."
										title="GanttChart" width="300"></a></td>
							</tr>
							<tr>
								<td align="center"><b>GanttChart</b></td>
							</tr>
						</table>
					</td>				
				
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/gallery/gallery.php"><img
										src="images/gallery.png" border="0"
										alt="Gallery lets you display any number of items organised in groups. Several group and item renderers are available with support for dynamic item size, drop shadows, auto margins, icon and list styles."
										title="Gallery"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Gallery</b></td>
							</tr>
						</table>
					</td>


				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="/nebula/widgets/grid/grid.php"><img
										src="images/grid.png" border="0"
										alt="The Grid is a table component that offers spreadsheet like features."
										title="Grid"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Grid</b></td>
							</tr>
						</table>
					</td>				
				
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/paperclips/paperclips.php"><img
										src="images/paperclips.jpg" width="320" height="240"
										border="0"
										alt="PaperClips is a simple, light weight, extensible Java printing library for SWT"
										title="PaperClips"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PaperClips</b></td>
							</tr>
						</table>
					</td>
					
				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>
				
				
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/oscilloscope/oscilloscope.php"><img
										src="images/scope.gif" border="0"
										alt="Oscilloscope is a fun and versatile widget for monitoring critical processes."
										title="Oscilloscope"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Oscilloscope</b></td>
							</tr>
						</table>
					</td>

					
				<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/pgroup/pgroup.php"><img
										src="images/pgroup.png" border="0"
										alt="PGroup is a expandable/collapsible composite widget with attractive styling and an extensible design."
										title="PGroup"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PGroup</b></td>
							</tr>
						</table>
					</td>

				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/pshelf/pshelf.php"><img
										src="images/pshelf.png" border="0"
										alt="PShelf is a composite widget similar to a tab folder but uses an accordion-like metaphor."
										title="PShelf"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PShelf</b></td>
							</tr>
						</table>
					</td>

					
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="/nebula/widgets/richtext/richtext.php"><img
										src="images/richtext.png" border="0"
										alt="RichText - Embeddable rich text controls for editing and rendering HTML formatted text."
										title="RichText"></a></td>
							</tr>
							<tr>
								<td align="center"><b>RichText</b></td>
							</tr>
						</table>
					</td>

				</tr>

				<tr>
					<td height="25px"></td>
				</tr>
				<tr>
								
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/tablecombo/tablecombo.php"><img
										src="images/tablecombo.png" width="320px" border="0"
										alt="TableCombo is a composite widget similar to a CCombo but uses a table instead of a list control."
										title="TableCombo"></a></td>
							</tr>
							<tr>
								<td align="center"><b>TableCombo</b></td>
							</tr>
						</table>
					</td>
										
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/xviewer/xviewer.php"><img
										src="images/xviewer.png" border="0"
										alt="The purpose of the XViewer is to give the application developer a more advanced and dynamic TreeViewer that has the filtering and sorting the capabilities of a spreadsheet while providing the users the ability to customize their table to suit their current needs and save/restore these customizations for future use by individual or group."
										title="XViewer"></a></td>
							</tr>
							<tr>
								<td align="center"><b>XViewer</b></td>
							</tr>
						</table>
					</td>		
				</tr>

				<tr>
					<td height="25px"></td>
				</tr>
				<tr>
								
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/stw/stw.php.php"><img
										src="images/stw.gif" width="320px" border="0"
										alt="State Transition Widget."
										title="STE - State Transition Widget"></a></td>
							</tr>
							<tr>
								<td align="center"><b>State Transition Widget</b></td>
							</tr>
						</table>
					</td>
										
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/geomap/geomap.php"><img
										src="images/geomap.png" border="0"
										alt="The GeoMap is a control that allows you to display data from an openstreetmap server"
										title="GeoMap"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Geomap</b></td>
							</tr>
						</table>
					</td>		
				</tr>
				
				<tr>
					<td align="center" valign="bottom"></td>
				</tr>
</table>
			
<a name="Visualization"></a>
			
			
			<h3>Visualization :</h3>
			<table width="100%" style="margin-top: 20px;">
				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="widgets/visualization/visualization.php">
										<img src="images/visualization.png" width="600 height="600" border="0"
										alt="Visualization XY Graph."
										title="Visualization">
								</a></td>
							</tr>							
						</table>
			</table>
	
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
