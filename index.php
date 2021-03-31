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
	$pageAuthor		= "Chris Gross, Nicolas Richeton, Wim Jongman";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "https://www.google.com/", "_blank", 3);


	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML


    <a href="https://github.com/eclipse/nebula"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>

	<div id="maincontent">
		<div id="midcolumn">

		<img class="img-responsive"  style="float:left" src="images/nebula_logo_main_300.png" border="0"
			  alt="$pageTitle" align="left">
			 <br><br><br><br><br>

			<!-- h1>$pageTitle</h1 -->

			  <p/>

			<h2>Supplemental Custom Widgets</h2>
			<p>Nebula is a place where different Eclipse-Projects and
				Independent developers collaborate on building Custom SWT widgets
				and reuseable UI-Components useable in UI-Applications built using
				SWT and JFace.</p>

			<p>All Nebula components are available on the navigation tree on
				the left or from the table below. Each image links to a page that
				will further describe the component and its function.</p>

			<a name="mainComponents"></a>

			<h3>Nebula Released Widgets:</h3>

			<table width="100%" style="margin-top: 20px;">
				<colgroup>
					<col>
					<col>
				</colgroup>
				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/cdatetime/cdatetime.php"><img class="img-responsive"
										src="images/cdatetime.png" border="0"
										alt="The CDateTime is a graphical and textual Date selection widget."
										onload="startTime()"
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
									href="/nebula/widgets/pshelf/pshelf.php"><img class="img-responsive"
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
									href="/nebula/widgets/ganttchart/ganttchart.php"><img class="img-responsive"
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
									href="/nebula/widgets/gallery/gallery.php"><img class="img-responsive"
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
								<td align="center"><a href="/nebula/widgets/grid/grid.php"><img class="img-responsive"
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
									href="/nebula/widgets/paperclips/paperclips.php"><img class="img-responsive"
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
									href="/nebula/widgets/oscilloscope/oscilloscope.php"><img class="img-responsive"
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
									href="/nebula/widgets/pgroup/pgroup.php"><img class="img-responsive"
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
								<td align="center"><a href="/nebula/widgets/richtext/richtext.php"><img class="img-responsive"
										src="images/richtext.png" border="0"
										alt="RichText - Embeddable rich text controls for editing and rendering HTML formatted text."
										title="RichText"></a></td>
							</tr>
							<tr>
								<td align="center"><b>RichText</b></td>
							</tr>
						</table>
					</td>
					<td align="center" valign="bottom">&nbsp;</td>
				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/geomap/geomap.php"><img class="img-responsive"
										src="images/example_geomap.png" border="0"
										alt="The GeoMap is a control that allows you to display data from an openstreetmap server."
										title="Geomap"></a></td>
							</tr>
							<tr>
								<td align="center"><b>GeoMap</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/tablecombo/tablecombo.php"><img class="img-responsive"
										src="images/tablecombo.png" width="320px" border="0"
										alt="TableCombo is a composite widget similar to a CCombo but uses a table instead of a list control."
										title="TableCombo"></a></td>
							</tr>
							<tr>
								<td align="center"><b>TableCombo</b></td>
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
									href="/nebula/widgets/xviewer/xviewer.php"><img class="img-responsive"
										src="images/xviewer.png" border="0"
										alt="The purpose of the XViewer is to give the application developer a more advanced and dynamic TreeViewer that has the filtering and sorting the capabilities of a spreadsheet while providing the users the ability to customize their table to suit their current needs and save/restore these customizations for future use by individual or group."
										title="XViewer"></a></td>
							</tr>
							<tr>
								<td align="center"><b>XViewer</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="/nebula/widgets/stw/stw.php"><img class="img-responsive"
										src="images/stw1.gif" border="0"
										alt="STW - SWT Transition Widget is a widget for adding fancy transition effects."
										title="STW - SWT Transition Widget"></a></td>
							</tr>
							<tr>
								<td align="center"><b>STW - SWT Transition Widget</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
					</td>

				</tr>

				<!-- Opal Widgets -->

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Breadcrumb"><img class="img-responsive"
										src="images/opal/breadcrumb.png" border="0"
										alt="The purpose of the Breadcrumb widget is to give the application developer a bread crumb like the ones present on web sites."
										title="Breadcrumb"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Breadcrumb</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_CheckboxGroup"><img class="img-responsive"
										src="images/opal/checkboxgroup.png" border="0"
										alt="Checkbox group proposes a group in which elements can be easily enabled/disabled"
										title="CheckboxGroup"></a></td>
							</tr>
							<tr>
								<td align="center"><b>CheckboxGroup</b></td>
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
									href="https://wiki.eclipse.org/Nebula_ColumnBrowser"><img class="img-responsive"
										src="images/opal/columnbrowser.png" border="0"
										alt="The purpose of the ColumnBrowser widget is to present data in 'miller column' way."
										title="ColumnBrowser"></a></td>
							</tr>
							<tr>
								<td align="center"><b>ColumnBrowser</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_Dialog"><img class="img-responsive"
										src="images/opal/dialog.png" border="0"
										alt="This widget proposes new modern Dialog Boxes"
										title="Dialog"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Dialog</b></td>
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
									href="https://wiki.eclipse.org/Nebula_Duallist"><img class="img-responsive"
										src="images/opal/duallist.jpg" border="0"
										alt="This widget allows the user to select and order some data in a a list"
										title="DualList"></a></td>
							</tr>
							<tr>
								<td align="center"><b>DualList</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_Header"><img class="img-responsive"
										src="images/opal/header.png" border="0"
										alt="This widget makes easier the construction of headers in your application"
										title="Header"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Header</b></td>
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
									href="https://wiki.eclipse.org/Nebula_HeapManager"><img class="img-responsive"
										src="images/opal/heapmanager.png" border="0"
										alt="This widget displays the state of the heap memory, and propose a button to perform a GC."
										title="HeapManager"></a></td>
							</tr>
							<tr>
								<td align="center"><b>HeapManager</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_LoginDialog"><img class="img-responsive"
										src="images/opal/login.png" border="0"
										alt="This widget proposes a simple login/password dialog box"
										title="Login"></a></td>
							</tr>
							<tr>
								<td align="center"><b>LoginDialog</b></td>
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
									href="https://wiki.eclipse.org/Nebula_Multichoice"><img class="img-responsive"
										src="images/opal/multichoice.png" border="0"
										alt="This widget proposes a way to select multiple items in a list"
										title="Multichoice"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Multichoice</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_Notifier"><img class="img-responsive"
										src="images/opal/notifier.png" border="0"
										alt="This widget allows developers to show notifications in a 'toaster'"
										title="Notifier"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Notifier</b></td>
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
									href="https://wiki.eclipse.org/Nebula_PreferenceWindow"><img class="img-responsive"
										src="images/opal/preferencewindow.png" border="0"
										alt="This widget proposes a simple way to build a preference window."
										title="PreferenceWindow"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PreferenceWindow</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_PromptSupport"><img class="img-responsive"
										src="images/opal/promptsupport.png" border="0"
										alt="This widget allows developers to add prompt texts on widgets"
										title="PromptSupport"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PromptSupport</b></td>
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
									href="https://wiki.eclipse.org/Nebula_PropertyTable"><img class="img-responsive"
										src="images/opal/propertytable.png" border="0"
										alt="This widget proposes a simple way to build a table that presents a list of editable properties."
										title="PropertyTable"></a></td>
							</tr>
							<tr>
								<td align="center"><b>PreferenceWindow</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_RangeSlider"><img class="img-responsive"
										src="images/opal/rangeslider.png" border="0"
										alt="This widget is an enhanced slider that handle a range of values"
										title="RangeSlider"></a></td>
							</tr>
							<tr>
								<td align="center"><b>RangeSlider</b></td>
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
									href="https://wiki.eclipse.org/Nebula_RoundedToolbar"><img class="img-responsive"
										src="images/opal/roundedtoolbar.png" border="0"
										alt="This widget proposes another look for toolbar (close to the Mac OSX look)."
										title="RoundedToolbar"></a></td>
							</tr>
							<tr>
								<td align="center"><b>RoundedToolbar</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_StarRating"><img class="img-responsive"
										src="images/opal/starrating.png" border="0"
										alt="This widget proposes a simple way to rate any data"
										title="StarRating"></a></td>
							</tr>
							<tr>
								<td align="center"><b>StarRating</b></td>
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
									href="https://wiki.eclipse.org/Nebula_TextAssist"><img class="img-responsive"
										src="images/opal/textassist.png" border="0"
										alt="This widget proposes a text widget with content proposal."
										title="TextAssist"></a></td>
							</tr>
							<tr>
								<td align="center"><b>TextAssist</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a href="https://wiki.eclipse.org/Nebula_TipOfTheDay"><img class="img-responsive"
										src="images/opal/totd.png" border="0"
										alt="This widget propose a 'Tip Of the Day' dialog box"
										title="Tip of the day"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Tip of the day</b></td>
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
									href="https://wiki.eclipse.org/Nebula_TitledSeparator"><img class="img-responsive"
										src="images/opal/titledseparator.png" border="0"
										alt="This widget proposes an enhanced separator."
										title="TitledSeparator"></a></td>
							</tr>
							<tr>
								<td align="center"><b>TitledSeparator</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Calculator"><img class="img-responsive"
										src="images/opal/calculator.png" border="0"
										alt="This widget proposes a calculator, that can be used in a combo."
										title="Calculator"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Calculator</b></td>
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
									href="https://wiki.eclipse.org/Nebula_HorizontalSpinner"><img class="img-responsive"
										src="images/opal/horizontalSpinner.png" border="0"
										alt="This widget proposes an alternative to the spinner widget."
										title="Horizontal Spinner"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Horizontal Spinner</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Launcher"><img class="img-responsive"
										src="images/opal/launcher.png" border="0"
										alt="This widget displays buttons. When ones click on a button, a fancy animation is shown"
										title="Launcher"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Launcher</b></td>
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
									href="https://wiki.eclipse.org/Nebula_Panels"><img class="img-responsive"
										src="images/opal/darkPanel.png" border="0"
										alt="This widget proposes an effect for dialog boxes."
										title="Panels"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Panels</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_SwitchButton"><img class="img-responsive"
										src="images/opal/switchbutton.jpg" border="0"
										alt="This widget proposes a switch button."
										title="Switch Button"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Switch Button</b></td>
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
									href="https://wiki.eclipse.org/Nebula_ProgressCircle"><img class="img-responsive"
										src="images/progresscircle.png" border="0"
										alt="This widget proposes a simple and light representation of a percentage value."
										title="Panels"></a></td>
							</tr>
							<tr>
								<td align="center"><b>ProgressCircle</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_NebulaSlider"><img class="img-responsive"
										src="images/nebulaslider.png" border="0"
										alt="This widget proposes another look for the Slider Widget."
										title="NebulaSlider"></a></td>
							</tr>
							<tr>
								<td align="center"><b>NebulaSlider</b></td>
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
									href="https://wiki.eclipse.org/Nebula_NebulaSplitButton"><img class="img-responsive"
										src="images/splitbutton.png" border="0"
										alt="This widget proposes a button with a contextual menu."
										title="SplitButton"></a></td>
							</tr>
							<tr>
								<td align="center"><b>SplitButton</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_NebulaRoundedCheckBox"><img class="img-responsive"
										src="images/roundedcheckbox.png" border="0"
										alt="This widget proposes another look for the checkbox Widget."
										title="NebulaRoundedCheckbox"></a></td>
							</tr>
							<tr>
								<td align="center"><b>NebulaRoundedCheckbox</b></td>
							</tr>
						</table>
					</td>

				</tr>
				
				<tr>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_SegmentedBar"><img class="img-responsive"
										src="images/segmentedbar.png" border="0"
										alt="This widget proposes a bar with different segments"
										title="Segmented bar"></a></td>
							</tr>
							<tr>
								<td align="center"><b>SegmentedBar</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<!--<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_NebulaRoundedCheckBox"><img class="img-responsive"
										src="images/roundedcheckbox.png" border="0"
										alt="This widget proposes another look for the checkbox Widget."
										title="NebulaRoundedCheckbox"></a></td>
							</tr>
							<tr>
								<td align="center"><b>NebulaRoundedCheckbox</b></td>
							</tr>
						</table>-->
						&nbsp;
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
									href="https://wiki.eclipse.org/Nebula/FloatingText"><img class="img-responsive"
										src="images/floatingtext.gif" border="0"
										alt="Instances of this class allow the user to enter and modify text with a label floating above the input area."
										title="FloatingText"></a></td>
							</tr>
							<tr>
								<td align="center"><b>FloatingText</b></td>
							</tr>
						</table>
					</td>

 					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_PasswordRevealer"><img class="img-responsive"
										src="images/passwordrevealer.png" border="0"
										alt="This widget proposes a password field with and additional button to reveal the password."
										title="Password Revealer"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Password Revealer</b></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_CTreeCombo"><img class="img-responsive"
										src="images/ctreecombo.png" border="0"
										alt="Instances of this class allows user to select one value like a combo, but data are displayed in a tree."
										title="CTreeCombo"></a></td>
							</tr>
							<tr>
								<td align="center"><b>CTreeCombo</b></td>
							</tr>
						</table>
					</td>

 					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Badged_Label"><img class="img-responsive"
										src="images/badgedlabel.png" border="0"
										alt="This widget proposes a label that can be decorated with a badge."
										title="Badged Label"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Badged Label</b></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_LED"><img class="img-responsive"
										src="images/ledwidget.png" border="0"
										alt="Instances of this class allows user to display a character like on a LED display."
										title="LED Display"></a></td>
							</tr>
							<tr>
								<td align="center"><b>LED Display</b></td>
							</tr>
						</table>
					</td>

 					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Stepbar"><img class="img-responsive"
										src="images/stepbar.png" border="0"
										alt="This widget proposes a progress with different steps."
										title="Stepbar"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Step bar</b></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Chips"><img class="img-responsive"
										src="images/chips.png" border="0"
										alt="Instances of this class allows user to display a rounded-shaped button."
										title="Chips"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Chips</b></td>
							</tr>
						</table>
					</td>

 					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_Carousel"><img class="img-responsive"
										src="images/carousel.png" border="0"
										alt="This widget shows a list of images."
										title="Carousel"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Carousel</b></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_FontAwesome"><img class="img-responsive"
										src="images/fontawesome.png" border="0"
										alt="Utility class to use FontAwesome in SWT Widgets."
										title="Font Awesome"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Nebula Font Awesome</b></td>
							</tr>
						</table>
					</td>

 					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://wiki.eclipse.org/Nebula_RoundedSwitch"><img class="img-responsive"
										src="images/roundedswitch.png" border="0"
										alt="This widget is a switch checkbox."
										title="Rounded Switch"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Rounded Switch</b></td>
							</tr>
						</table>
					</td>
				</tr>

			</table>

			<a name="NatTable"></a>


			<h3>NatTable :</h3>
			<table width="100%" style="margin-top: 20px;">
				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="https://www.eclipse.org/nattable/">
										<img class="img-responsive" src="https://www.eclipse.org/nattable/images/FeatureScreenShot.png" width="600 height="600" border="0"
										alt="NatTable is a powerful and flexible SWT table/grid widget."
										title="NatTable">
								</a></td>
							</tr>
						</table>
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
										<img class="img-responsive" src="images/visualization.png" border="0"
										alt="Visualization XY Graph."
										title="Visualization">
								</a></td>
							</tr>
						</table>
			</table>

			<a name="incubationComponents"></a>


			<h3>Nebula Incubation Widgets :</h3>
			<table width="100%" style="margin-top: 20px;">
				<colgroup>
					<col>
					<col>
				</colgroup>

				<tr>
					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/collapsiblebuttons/collapsiblebuttons.php">
										<img class="img-responsive" src="images/collapsiblebuttons.png" border="0"
										alt="CollapsibleButtons is a widget similar to the Microsoft Outlook button navigation bar."
										title="CollapsibleButtons">
								</a></td>
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
									href="/nebula/widgets/compositetable/compositetable.php"><img class="img-responsive"
										src="images/compositetable.png" border="0"
										alt="CompositeTable gives you total flexibility to present and edit row-oriented data however you want."
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
									href="/nebula/widgets/datechooser/datechooser.php"><img class="img-responsive"
										src="images/datechooser.png" border="0"
										alt="DateChooser is a graphical date selection widget, with a fully customizable look & feel which is consistent between the differents platforms."
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
									href="/nebula/widgets/datechooser/datechooser.php"><img class="img-responsive"
										src="images/datechoosercombo.png" border="0"
										alt="DateChooserCombo combines a FormattedText / DateFormatter with a drop down DateChooser popup."
										title="DateChooserCombo"></a></td>
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
									href="/nebula/widgets/formattedtext/formattedtext.php"><img class="img-responsive"
										src="images/formattedtext.png" border="0"
										alt="Decorator component adding input and display mask capabilities on a Text widget."
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
									href="/nebula/widgets/treemapper/treemapper.php"><img class="img-responsive"
										src="images/treemapper.png" width="320px"
										alt="The TreeMapper widget is a widget that allows you to define mapping by simply drag and drop elements between 2 JFace TreeViewers"></a></td>
							</tr>
							<tr>
								<td align="center"><b>TreeMapper</b></td>
							</tr>
						</table>
					</td>
				</tr>

				</tr>

				<tr>
					<td height="25px"></td>
				</tr>

				<tr>


					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/radiogroup/radiogroup.php"><img class="img-responsive"
										src="images/radiogroup.png" border="0"
										alt="RadioGroup presents a group of radio buttons"
										title="RadioGroup"></a></td>
							</tr>
							<tr>
								<td align="center"><b>RadioGroup</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/picture/picture.php"><img class="img-responsive"
										src="images/picture.png" border="0"
										alt="The Picture control is a control that allows you to display an image, remove and modify it."
										title="Picture"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Picture</b></td>
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
									href="/nebula/widgets/pagination/pagination.php"><img class="img-responsive"
										src="images/pagination.png" border="0"
										alt="The Pagination control is a control that allows you to display data in a table with navigation page."
										title="Pagination"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Pagination</b></td>
							</tr>
						</table>
					</td>

					<td align="center" valign="bottom">
						<table>
							<tr>
								<td align="center"><a
									href="/nebula/widgets/timeline/timeline.php"><img class="img-responsive"
										src="/nebula/widgets/timeline/timeline.png" border="0" width="250"
										alt="The Timeline Picture control allows to display events on a time axis."
										title="Timeline"></a></td>
							</tr>
							<tr>
								<td align="center"><b>Timeline</b></td>
							</tr>
						</table>
					</td>

				</tr>

				<tr>
					<td height="25px"></td>
				</tr>
			</table>


			<hr class="clearer" />
		</div>

		<div class="col-md-24">

			<div class="sideitem">
				<h6>Comments</h6>
				<div align="center">
					<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=373009">
						<img class="img-responsive" align="center"
						src="https://wiki.eclipse.org/images/7/7d/Bug.png" border="0"
						alt="Report Problems with this site here" />Report page problems here.
					</a>
				</div>
			</div>

			<!--#include virtual="includes/sideItemsInclude.html" -->

		</div>

	</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
