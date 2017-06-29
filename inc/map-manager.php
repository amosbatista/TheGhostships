<?php
	/* 
		Server-side script that holds all maps of all chapters. The script receives 3 parameters:
		- CAPT: Id of chapter. If it's null, set the last chapter.
		- PG: Number of the page. If null, sets the first page of selected chapter
		- MAP: Id of a map. If null, set the first map of selected page.
		- IDM: Id of idiom of the page. If null, sets to Portuguese.
		
		The script will set the map in a JavaScript page
	*/
	

	// Defining which page needs to get
	$pageNumber = 0;
	$chapterNumber = 0;
	$idiom = '';
	
	$chapterNumber = getChapterNumber($chapterList);
	$pageNumber = getPageNumber($chapterList);
	$idiom = getPageIdiom();
	
	// Write the start of the JS
	echo "<script type='text/javascript'>";
	echo 'currentPage = ' . $pageNumber . ';' ;
	echo "$(document).ready(function(){";
	echo "currentChapter = ";
	

	// Set the page that informed by the user.
	echo json_encode( $chapterList[$chapterNumber] );

	// Getting the page path, according the idiom
	echo ";LoadPageToSVG('img\\\\the-ghostships\\\comic-page" . getTranslationContent($chapterList[$chapterNumber] -> Pages[$pageNumber] -> Paths, $idiom) . "')";

	
	// Write the end of the JS
	echo ";MoveToFirstMap();});</script>";
	
?>
