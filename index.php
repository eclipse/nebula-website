<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula Project";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Chris Gross, Nicolas Richeton";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);


	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Supplemental Custom Widgets for SWT (and more)</h2>
		<p>The Nebula project is a source for custom SWT widgets and other UI components.  Nebula is also an incubator for 
		SWT.  Some Nebula widgets will graduate into SWT and therefore into the main Eclipse Platform.</p>
		
		<p>All Nebula components are available on the navigation tree on the left or from the table below.
		  Each page will describe the component and also link to the component download.</p>

		<a name="components"></a>
		<h3>Components :</h3>

		<table width="100%"
			style="margin-top: 20px;">
			<colgroup>
				<col width="320">
				<col width="320">
			</colgroup>
			<tr>
				<td align="center" valign="bottom">
					<table>
						<tr>
							<td align="center"><a
								href="/nebula/widgets/calendarcombo/calendarcombo.php"><img
								src="images/calendarcombo.png" border="0" alt="CalendarCombo is a calendar widget for selecting dates that leaves the combo box looking like the native combo box." title="CalendarCombo"></a></td>
						</tr>
						<tr>
							<td align="center"><b>CalendarCombo</b></td>
						</tr>
					</table>
				</td>

				<td align="center" valign="bottom">
					<table>
						<tr>
							<td align="center"><a
								href="/nebula/widgets/cdatetime/cdatetime.php"><img
								src="images/cdatetime.png" border="0"
								alt="The CDateTime is a graphical and textual Date selection widget." title="CDateTime"></a></td>
						</tr>
						<tr>
							<td align="center"><b>CDateTime</b></td>
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
							<td align="center"><a href="/nebula/widgets/collapsiblebuttons/collapsiblebuttons.php">
								<img src="images/collapsiblebuttons.png" border="0" alt="CollapsibleButtons is a widget similar to the Microsoft Outlook button navigation bar." title="CollapsibleButtons"></a>
							</td>
						</tr>
						<tr>
							<td align="center"><b>CollapsibleButtons</b></td> 
						</tr>
					</table>
				</td>
		
				<td align="center" valign="bottom">
					<table>
						<tr>
							<td align="center"><a
								href="/nebula/widgets/compositetable/compositetable.php"><img
								src="images/compositetable.png" border="0" alt="CompositeTable gives you total flexibility to present and edit row-oriented data however you want."
								title="CompositeTable"></a></td>
						</tr>
						<tr>
							<td align="center"><b>CompositeTable</b></td>
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
							href="/nebula/widgets/datechooser/datechooser.php"><img
							src="images/datechooser.png" border="0" alt="DateChooser is a graphical date selection widget, with a fully customizable look & feel which is consistent between the differents platforms."
							title="DateChooser"></a></td>
					</tr>
					<tr>
						<td align="center"><b>DateChooser</b></td>
					</tr>
				</table>
				</td>
				<td align="center" valign="bottom">
					<table>
						<tr>
							<td align="center"><a
								href="/nebula/widgets/datechooser/datechooser.php"><img
								src="images/datechoosercombo.png" border="0"
								alt="DateChooserCombo combines a FormattedText / DateFormatter with a drop down DateChooser popup." title="DateChooserCombo"></a></td>
						</tr>
						<tr>
							<td align="center"><b>DateChooserCombo</b></td>
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
								href="/nebula/widgets/formattedtext/formattedtext.php"><img
								src="images/formattedtext.png" border="0" alt="Decorator component adding input and display mask capabilities on a Text widget."
								title="FormattedText"></a></td>
						</tr>
						<tr>
							<td align="center"><b>FormattedText</b></td>
						</tr>
					</table>
				</td>
				<td align="center" valign="bottom">
					<table>
						<tr>
							<td align="center"><a
								href="/nebula/widgets/gallery/gallery.php"><img
								src="images/gallery.png" border="0" alt="Gallery lets you display any number of items organised in groups. Several group and item renderers are available with support for dynamic item size, drop shadows, auto margins, icon and list styles." title="Gallery"></a></td>
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
							<td align="center"><a
								href="/nebula/widgets/grid/grid.php"><img
								src="images/grid.png" border="0" alt="The Grid is a table component that offers spreadsheet like features." title="Grid"></a></td>
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
								href="/nebula/widgets/ganttchart/ganttchart.php"><img
								src="images/ganttchart.png" border="0" alt="GanttChart is a full featured and customizable GANTT charting component." title="GanttChart" width=300/></a></td>
						</tr>
						<tr>
							<td align="center"><b>GanttChart</b></td> 
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td align="center" valign="bottom">
				<table>
					<tr>
						<td align="center"><a
							href="/nebula/widgets/pgroup/pgroup.php"><img
							src="images/pgroup.png" border="0" alt="PGroup is a expandable/collapsible composite widget with attractive styling and an extensible design." title="PGroup"></a></td>
					</tr>
					<tr>
						<td align="center"><b>PGroup</b></td>
					</tr>
				</table>
				</td>
		
				<td align="center" valign="bottom">
				<table>
					<tr>
						<td align="center"><a
							href="/nebula/widgets/pshelf/pshelf.php"><img
							src="images/pshelf.png" border="0" alt="PShelf is a composite widget similar to a tab folder but uses an accordion-like metaphor." title="PShelf"></a></td>
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
				</td>
		
				<td align="center" valign="bottom">
				</td>
		
			</tr>
			
			<tr>
				<td height="25px"></td>
			</tr>
			
		</table>

		<hr class="clearer" />
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

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
