<?php
	include ('function_getIdiom.php');
	
	// Function that return the title of current chapter (choose by URL). 
	function GetChapterTitle($chapterList){
		return getTranslationContent($chapterList[getChapterNumber($chapterList)] -> Title, getPageIdiom());
		
	}
	
	// Function that formats the chapter title. 
	function GetFormattedChapterTitle($chapterList){
		
		$longDescription = '';
		
		// The description content, to be set with the title.
		if (getPageIdiom() == 'pt'){
			$longDescription = 'As Naves Fantasmas - Uma nova e diferente história em quadrinhos.';
		}
		elseif (getPageIdiom() == 'en'){
			$longDescription = 'The Ghostships - A new and diferent webcomic.';
		}
		
		
		
		
		return GetChapterTitle($chapterList) . ' - ' . $longDescription;
	}
	
?>