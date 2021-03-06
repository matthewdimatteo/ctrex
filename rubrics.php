<?php
/*
rubrics.php
By Matthew DiMatteo, Children's Technology Review

This is the file for the rubrics page of the site
Each page is output through the 'php/autoload.php' file - the variables $pageTitle, $pageType, and $searchType provides parameters for how the page should function
The content for each page is placed in a file conforming to the naming convention of 'php/content/content-'pagename.php (e.g 'content-rubrics.php')
*/
$pageTitle 	= 'CTREX Rubrics';		// placed inside html <title> tag
$pageType 	= 'content';
$searchType	= 'reviews';			// determines which form the main searchbar targets
$containsRubric = true;				// tells 'php/autoload.php' to include loadRubric() function in body onload
require_once 'php/autoload.php';	// includes all necessary files for outputting the page
?>