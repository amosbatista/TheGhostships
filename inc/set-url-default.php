<?php
	

	// Function that will insert the page number to some URL. This code existis to bring the comic page to each link the user visits in the page
	function generateMenuLink($chapterList, $linkAddres){
		$result = $linkAddres . '?PG=' . (getPageNumber($chapterList) + 1) . '&CAPT=' . (getChapterNumber($chapterList) + 1);
		

		// Set a parameter to, aways, show the menu
		$result = $result . "&SHOW_PAGE=TRUE";	

		return $result;
	}

	
	
?>