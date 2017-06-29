<?php
	
	// Function that will inform the link to the next page.
	// If it not informed, always set the page number 2
	include("link-list.php");
	
	if ($_GET["PG"] == ""){
		echo $link_list_next["12"];
	}
	
	// Else, get the next link relative to the paramether PG (Page)
	else{
		echo $link_list_next[$_GET["PG"]];
	}
	
	
?>