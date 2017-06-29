<?php
	
	
	// Function that return the idiom of the page
	function getPageIdiom(){
	
		if (count ($_GET) <= 0) {
			return 'pt';
		}
		else{
			
			if (! array_key_exists('IDM', $_GET)){
				return 'pt';
			}
			else{
				return $_GET["IDM"];
			}
		}
	}
	
	// Function that return the translation of a array of idioms
	function getTranslationContent($_list, $_idiomCode){
		
		foreach ($_list as $item) {
			
			if ($item -> idiom -> initials ==  $_idiomCode){
				return $item -> text;
			}	
		}
		return '';
	}
	
?>