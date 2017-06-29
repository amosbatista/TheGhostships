<?php
	
	// Function that return the description of current chapter (choose by URL)
	function GetChapterDescription($chapterList){
		
		return getTranslationContent($chapterList[getChapterNumber($chapterList)] -> Description, getPageIdiom());
		
	}
?>