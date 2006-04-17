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
	$Nav->addNavSeparator("Widgets", "");
	$Nav->addCustomNav("Widget 1", 			"404",	 		"_self", 2);
	$Nav->addNavSeparator("Community", "");
	$Nav->addCustomNav("Newsgroup", "news://news.eclipse.org/eclipse.technology.nebula","_self", 2);
	$Nav->addCustomNav("Development & Contributors Mailing List", "https://dev.eclipse.org/mailman/listinfo/nebula-dev","_self", 2);
	$Nav->addCustomNav("How To Contribute", "404","_self", 2);
	$Nav->addCustomNav("Bugs", 		"http://www.eclipse.org/bugs/", 	"_self", 2);

?>