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
		<p>Nebula is a place where different Eclipse-Projects and Independent developers collaborate on building Custom SWT widgets and reuseable
           UI-Components useable in UI-Applications built using SWT and JFace.</p>
		
		<p>All Nebula components are available on the navigation tree on the left or from the table below.
		  Each image links to a page that will further describe the component and its function.</p>

		<div style="background-color: #fdf; border: red dotted 2px; padding:10px">
			<p style="font-weight: bold">
				Binary downloads and update sites are now available for some widgets. See <a href="/nebula/downloads.php">downloads</a> page.
			</p>
			<p>
			    We are progressively setting up the automated build process, all widgets should be available in a binary form soon.<br/>
				In the mean time, the source code can be found in 
				<a href="/nebula/source.php">CVS</a>.
			</p>
			<p>
				We appreciate your patience as we go through these changes because, though inconvenient, 
				they will help the project move forward and set it up to better serve the Eclipse community at large.
			</p>
		</div>
				
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
				<td height="25px"></td>
			</tr>

			<tr>
				<td align="center" valign="bottom">
				<table>
					<tr>
						<td align="center"><a
							href="/nebula/widgets/paperclips/paperclips.php"><img
							src="images/paperclips.jpg" width="320" height="240" border="0" alt="PaperClips is a simple, light weight, extensible Java printing library for SWT" title="PaperClips"></a></td>
					</tr>
					<tr>
						<td align="center"><b>PaperClips</b></td>
					</tr>
				</table>
				</td>

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
							src="images/pshelf.png" border="0" alt="PShelf is a composite widget similar to a tab folder but uses an accordion-like metaphor." title="PShelf"></a></td>
					</tr>
					<tr>
						<td align="center"><b>PShelf</b></td>
					</tr>
				</table>
				</td>
		
				<td align="center" valign="bottom">
				<table>
					<tr>
						<td align="center"><a
							href="/nebula/widgets/radiogroup/radiogroup.php"><img
							src="images/radiogroup.png" border="0" alt="RadioGroup presents a group of radio buttons" title="RadioGroup"></a></td>
					</tr>
					<tr>
						<td align="center"><b>RadioGroup</b></td>
					</tr>
				</table>
				</td>
		
				<td align="center" valign="bottom">
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
                            src="images/tablecombo.png" border="0" alt="TableCombo is a composite widget similar to a CCombo but uses a table instead of a list control." title="TableCombo"></a></td>
                    </tr>
                    <tr>
                        <td align="center"><b>TableCombo</b></td>
                    </tr>
                </table>
                </td>
        
                <td align="center" valign="bottom">
                </td>
        
                <td align="center" valign="bottom">
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
                            href="/nebula/widgets/xviewer/xviewer.php"><img
                            src="images/xviewer.png" border="0" alt="The purpose of the XViewer is to give the application developer a more advanced and dynamic TreeViewer that has the filtering and sorting the capabilities of a spreadsheet while providing the users the ability to customize their table to suit their current needs and save/restore these customizations for future use by individual or group." title="XViewer"></a></td>
                    </tr>
                    <tr>
                        <td align="center"><b>XViewer</b></td>
                    </tr>
                </table>
                </td>
        
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
