<?php
		
	// Function to generate the NEXT link
	function getNextLink($chapterList){
		
		// Get the actual chapter and page.
		$pageNumber = 0;
		$chapterNumber = 0;
		
		$chapterNumber = getChapterNumber($chapterList);
		$pageNumber = getPageNumber($chapterList);
		
		// If there's a next page, return the link
		if ( $pageNumber < count($chapterList[$chapterNumber] -> Pages) - 1){
			return htmlspecialchars($_SERVER["PHP_SELF"]) . "?PG=" . ($pageNumber + 2) . "&CAPT=" . ($chapterNumber + 1);
		}
		
		else{
			// If there's a next chapter, return the link to the FIRST page of next chapter
			if ( $chapterNumber <= count($chapterList[$chapterNumber]) ){
				return htmlspecialchars($_SERVER["PHP_SELF"]) . "?PG=1&CAPT=" . ($chapterNumber + 2);
			}
			
			// If there's not, just return empty
			else{
				return '#';
			}
		}
	}
	
	// Function to generate the PREV link
	function getPrevLink($chapterList){
	
		// Get the actual chapter and page.
		$pageNumber = 0;
		$chapterNumber = 0;
		
		$chapterNumber = getChapterNumber($chapterList);
		$pageNumber = getPageNumber($chapterList);
		
		// If there's a previous page, return the link
		if ( $pageNumber > 0){
			return htmlspecialchars($_SERVER["PHP_SELF"]) . "?PG=" . ($pageNumber) . "&CAPT=" . ($chapterNumber + 1);
		}
		
		else{
			// If there's a previous chapter, return the LAST page of previous chapter
			if ( $chapterNumber > 0 ){
				return htmlspecialchars($_SERVER["PHP_SELF"]) . "?PG=" . count($chapterList[$chapterNumber - 1] -> Pages) . "&CAPT=" . ($chapterNumber);
			}
			
			// If there's not, just return empty
			else{
				return '#';
			}
		}
	}

?>