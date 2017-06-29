<?php 
	// Function to verify if the option SHOW-PAGE is set in the URL

	function isShowPageShow(){
		
		// If the page URL comes with an indication of show the menu directly, insert the CSS class to the container
			if ( count($_GET) > 0 ){
				return false;
			}

			else{
				if (!array_key_exists("SHOW_PAGE", $_GET)){
					return false;
				}
				else{
					
					if ($_GET["SHOW_PAGE"] != "TRUE"){
						return false;
					}
					else{
						return true;
					}
					
				}
			}
	}
?>