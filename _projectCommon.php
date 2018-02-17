<?php

	# set default theme
	$_theme = "solstice";
	$theme = "solstice";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}
 
	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("About this Project", "http://www.eclipse.org/projects/project_summary.php?projectid=technology.nebula");
	$Nav->addNavSeparator("Contributing", "http://wiki.eclipse.org/Nebula/New_Contributions");
		$Nav->addCustomNav("Who is busy", "http://projects.eclipse.org/projects/technology.nebula/who");
		$Nav->addCustomNav("How to Contribute", "/nebula/contrib_process.php","_self", 2);
		$Nav->addCustomNav("Contribution Tiers", "/nebula/contrib_tiers.php","_self", 2);
		$Nav->addCustomNav("Widget Author Tips", "/nebula/author_tips.php","_self", 2);
	$Nav->addNavSeparator("Project Home", "/nebula/");
		$Nav->addCustomNav("Downloads","/nebula/downloads.php","_self", 2);	
		$Nav->addCustomNav("Snippets","/nebula/snippets.php","_self", 2);	
		$Nav->addCustomNav("Examples","/nebula/examples.php","_self", 2);	
		$Nav->addCustomNav("Source","/nebula/source.php","_self", 2);
	$Nav->addNavSeparator("Nebula Release", "");
		$Nav->addCustomNav("CDateTime",		"/nebula/widgets/cdatetime/cdatetime.php",	"_self", 2);
		$Nav->addCustomNav("Gallery",		"/nebula/widgets/gallery/gallery.php",	 	"_self", 2);
		$Nav->addCustomNav("GanttChart",		"/nebula/widgets/ganttchart/ganttchart.php",	 	"_self", 2);
		$Nav->addCustomNav("GeoMap",		"/nebula/widgets/geomap/geomap.php",	 	"_self", 2);
		$Nav->addCustomNav("Grid", 			"/nebula/widgets/grid/grid.php",	 		"_self", 2);
		$Nav->addCustomNav("Oscilloscope",    "/nebula/widgets/oscilloscope/oscilloscope.php", "_self", 2);
		$Nav->addCustomNav("PaperClips",    "/nebula/widgets/paperclips/paperclips.php", "_self", 2);
		$Nav->addCustomNav("PGroup",		"/nebula/widgets/pgroup/pgroup.php",	 	"_self", 2);
		$Nav->addCustomNav("PShelf",		"/nebula/widgets/pshelf/pshelf.php",	 	"_self", 2);
		$Nav->addCustomNav("RichText",		"/nebula/widgets/richtext/richtext.php",	 	"_self", 2);
		$Nav->addCustomNav("Transition", "/nebula/widgets/stw/stw.php", "_self", 2);
		$Nav->addCustomNav("TableCombo",    "/nebula/widgets/tablecombo/tablecombo.php", "_self", 2);
		$Nav->addCustomNav("Visualization",   "/nebula/widgets/visualization/visualization.php", "_self", 2);
		$Nav->addCustomNav("XViewer",    "/nebula/widgets/xviewer/xviewer.php", "_self", 2);
		
		$Nav->addCustomNav("Breadcrumb",    "https://wiki.eclipse.org/Nebula_Breadcrumb", "_self", 2);
		$Nav->addCustomNav("CheckboxGroup",    "https://wiki.eclipse.org/Nebula_CheckboxGroup", "_self", 2);
		$Nav->addCustomNav("ColumnBrowser",    "https://wiki.eclipse.org/Nebula_ColumnBrowser", "_self", 2);
		$Nav->addCustomNav("Dialog",    "https://wiki.eclipse.org/Nebula_Dialog", "_self", 2);
		$Nav->addCustomNav("DualList",    "https://wiki.eclipse.org/Nebula_Duallist", "_self", 2);
		$Nav->addCustomNav("Header",    "https://wiki.eclipse.org/Nebula_Header", "_self", 2);
		$Nav->addCustomNav("HeapManager",    "https://wiki.eclipse.org/Nebula_HeapManager", "_self", 2);
		$Nav->addCustomNav("LoginDialog",    "https://wiki.eclipse.org/Nebula_LoginDialog", "_self", 2);
		$Nav->addCustomNav("Multichoice",    "https://wiki.eclipse.org/Nebula_Multichoice", "_self", 2);
		$Nav->addCustomNav("Notifier",    "https://wiki.eclipse.org/Nebula_Notifier", "_self", 2);
		$Nav->addCustomNav("PreferenceWindow",    "https://wiki.eclipse.org/Nebula_PreferenceWindow", "_self", 2);
		$Nav->addCustomNav("PromptSupport",    "https://wiki.eclipse.org/Nebula_PromptSupport", "_self", 2);
		$Nav->addCustomNav("PropertyTable",    "https://wiki.eclipse.org/Nebula_PropertyTable", "_self", 2);
		$Nav->addCustomNav("RangeSlider",    "https://wiki.eclipse.org/Nebula_RangeSlider", "_self", 2);
		$Nav->addCustomNav("RoundedToolbar",    "https://wiki.eclipse.org/Nebula_RoundedToolbar", "_self", 2);
		$Nav->addCustomNav("StarRating",    "https://wiki.eclipse.org/Nebula_StarRating", "_self", 2);
		$Nav->addCustomNav("TextAssist",    "https://wiki.eclipse.org/Nebula_TextAssist", "_self", 2);
		$Nav->addCustomNav("Tip of the Day",    "https://wiki.eclipse.org/Nebula_TipOfTheDay", "_self", 2);
		$Nav->addCustomNav("TitledSeparator",    "https://wiki.eclipse.org/Nebula_TitledSeparator", "_self", 2);
			
		
	$Nav->addNavSeparator("Nebula NatTable", "");
		$Nav->addCustomNav("NatTable",		"/nattable/index.php",	 	"_self", 2);
$Nav->addNavSeparator("Nebula Incubation", "");
		$Nav->addCustomNav("CollapsibleButtons","/nebula/widgets/collapsiblebuttons/collapsiblebuttons.php",	 	"_self", 2);
		$Nav->addCustomNav("CompositeTable","/nebula/widgets/compositetable/compositetable.php", "_self", 2);
		$Nav->addCustomNav("DateChooser",		"/nebula/widgets/datechooser/datechooser.php",	 	"_self", 2);
		$Nav->addCustomNav("FormattedText",		"/nebula/widgets/formattedtext/formattedtext.php",	 	"_self", 2);
		$Nav->addCustomNav("Pagination",    "/nebula/widgets/pagination/pagination.php", "_self", 2);		
		$Nav->addCustomNav("Picture",    "/nebula/widgets/picture/picture.php", "_self", 2);
		$Nav->addCustomNav("RadioGroup",    "/nebula/widgets/radiogroup/radiogroup.php", "_self", 2);
		$Nav->addCustomNav("TreeMapper",    "/nebula/widgets/treemapper/treemapper.php", "_self", 2);
	$Nav->addNavSeparator("Community", "");
        $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/Nebula","_self", 2);
		$Nav->addCustomNav("Newsgroup", "http://www.eclipse.org/forums/index.php/f/64/","_self", 2);
		$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/nebula-dev","_self", 2);
		$Nav->addCustomNav("Bugs", 		"http://bugs.eclipse.org/bugs/query.cgi?product=Nebula", 	"_self", 2);

?>
