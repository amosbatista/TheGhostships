<?php
	
	include("link-list.php");
	
	// Function that will inform the link to the previous page.
	// If it not informed, always set the page number 2
	if ($_GET["PG"] == ""){
		echo $link_list_prev["12"];
	}
	
	// Else, get the previous link relative to the paramether PG (Page)
	else{
		echo $link_list_prev[ $_GET["PG"] ];
	}
?>