<?php

	//Function to return the page number to return
	function getPageNumber($chapterList){
		
		// If there is not paramter, aways return the Last page number of Last chapter
		if (count ($_GET) <= 0) {
			
			return count($chapterList[getChapterNumber($chapterList)] -> Pages) - 1;
		}
		else{
			
			// If the page paramther is not informed (maybe ony the chapter has been informed), aways inform the FIRST page of the chapter
			if (! array_key_exists('PG', $_GET)){
				return 0;	
			}
			else{
				return $_GET["PG"] - 1;
			}
		}
	}
	
	// Function to return the chapter number to return
	function getChapterNumber($chapterList){
		
		// If there's not chapter informed, aways return the last chapter
		if (count ($_GET) <= 0) {
			return (count($chapterList) - 1);
		}
		else{
			if (! array_key_exists('CAPT', $_GET)){
				return count($chapterList) - 1;		
			}
			else{
				return $_GET["CAPT"] - 1;
			}
		}
	}

?>