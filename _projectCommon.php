<?php

	# set default theme
	$_theme = "";
	$theme = "";
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
	$Nav->addCustomNav("Nebula Home", "/nebula/","_self", 2);
	$Nav->addCustomNav("Examples Gallery","/nebula/examples.php","_self", 2);	
	$Nav->addNavSeparator("Components", "");
	$Nav->addCustomNav("Grid", 			"/nebula/widgets/grid/grid.php",	 		"_self", 2);
	$Nav->addCustomNav("CDateTime",		"/nebula/widgets/cdatetime/cdatetime.php",	"_self", 2);
	$Nav->addCustomNav("CTableTree",	"/nebula/widgets/ctabletree/ctabletree.php","_self", 2);
	$Nav->addCustomNav("CompositeTable","/nebula/widgets/compositetable/compositetable.php", "_self", 2);
	$Nav->addCustomNav("PGroup",		"/nebula/widgets/pgroup/pgroup.php",	 	"_self", 2);
	$Nav->addCustomNav("PShelf",		"/nebula/widgets/pshelf/pshelf.php",	 	"_self", 2);
	$Nav->addCustomNav("Gallery",		"/nebula/widgets/gallery/gallery.php",	 	"_self", 2);
	$Nav->addCustomNav("FormattedText",		"/nebula/widgets/formattedtext/formattedtext.php",	 	"_self", 2);
	$Nav->addCustomNav("DateChooser",		"/nebula/widgets/datechooser/datechooser.php",	 	"_self", 2);
	$Nav->addCustomNav("CollapsibleButtons","/nebula/widgets/collapsiblebuttons/collapsiblebuttons.php",	 	"_self", 2);
	$Nav->addCustomNav("CalendarCombo",		"/nebula/widgets/calendarcombo/calendarcombo.php",	 	"_self", 2);
	$Nav->addCustomNav("GanttChart",		"/nebula/widgets/ganttchart/ganttchart.php",	 	"_self", 2);
	$Nav->addNavSeparator("Community", "");
	$Nav->addCustomNav("Newsgroup", "news://news.eclipse.org/eclipse.technology.nebula","_self", 2);
	$Nav->addCustomNav("Development & Contributors Mailing List", "https://dev.eclipse.org/mailman/listinfo/nebula-dev","_self", 2);
	$Nav->addCustomNav("Bugs", 		"http://bugs.eclipse.org/bugs/", 	"_self", 2);
	$Nav->addNavSeparator("Contributing", "");
	$Nav->addCustomNav("How to Contribute", "/nebula/contrib_process.php","_self", 2);
	$Nav->addCustomNav("Contribution Tiers", "/nebula/contrib_tiers.php","_self", 2);
	$Nav->addCustomNav("Widget Author Tips", "/nebula/author_tips.php","_self", 2);

?>
