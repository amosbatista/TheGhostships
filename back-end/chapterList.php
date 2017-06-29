<?php 

	// IMPORTS
	require('_classes.php');
	require('idioms.php');
	
	// The chapter list variable
	$chapterList = array();
	
	// Imports of chapters	
	require ('chapter-1.php');
	require ('chapter-2.php');
	require ('chapter-3.php');
	
	// Addiction of chapters to the main array
	array_push($chapterList, $chapter1);
	array_push($chapterList, $chapter2);
	array_push($chapterList, $chapter3);

	// Headers
	//header("Content-Type: application/json; charset=UTF-8");

	// Processing the request
	//echo json_encode($chapter1);

	
?>
