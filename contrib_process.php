<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# contrib_process.php
	#
	# Author: 		Chris Gross
	# Date:			2006-05-07
	#
	# Description: Describes the process for submitting contributions.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Contributing to the Nebula Project";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Chris Gross";
	
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
		<p>Do you have a really cool widget that you'd like to contribute to Nebula and potentially to SWT?
		<p>Contributing a widget to Nebula requires that you become a full committer.  The Nebula project does not
		have full time resources to manage and support your contribution.  Instead you will become a committer with
		full rights to update your contribution.  But first, you must get approval for your contribution.  Please 
		review the follow steps on how contributions can be made to Nebula.
		<p>
		<b>Before starting the process, please ensure that you will be able to pass legal approval.  New committers that do 
		not work for Eclipse Member companies will require approval of their employeer.  Contributed code must be able to be
		licensed under the EPL.</b> 
	
		<ol>
		<li><b>Get Approval</b> -  As with most open source contributions, you must first get approval.  Approval is granted
		on the Nebula <a href='https://dev.eclipse.org/mailman/listinfo/nebula-dev'>mailing list</a>.  Post a message describing your widget as well as a link to your source code.  The Nebula 
		committers will review your code and your widget to determine if its a fit for Nebula.  A vote will subsequently be taken
		on the mailing list.</li>
		<li><b>Become a Committer</b> - If your contribution is approved, the next step is to become a formal Nebula committer.  
		First you must read the <a href='http://www.eclipse.org/legal/committerguidelines.php'>committer guidelines</a>.  
		Then complete the <a href='http://www.eclipse.org/legal/newcommitter.php'>new committer process</a>.</li>
		<li><b>Contribution IP Approval</b> - Once you are a committer, you will need to have your code pass the <a href='http://www.eclipse.org/legal/EclipseLegalProcessPoster-v1.2.4.pdf'>Eclipse legal process</a>.  
		The first step is to complete the <a href='http://www.eclipse.org/legal/ContributionQuestionnairePart1-v1.0.php'>contribution questionnaire</a>.
		You will receive an email from an Eclipse representative when/if your contribution is approved.  Then you're ready to upload your code into the CVS repository.</li>
		</ol>

		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
