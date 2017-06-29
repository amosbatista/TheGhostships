<?php
	
	// PAGE 10 - CHAPTER 1

	// PAGE FILE
	$page_pt_10 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img9.jpg' );


	//MAPS
	// Portrait
	$page10_portrait_map_1 = new Map(1, -200, 175, 1.5, 2, 0, 0, 2);
	$page10_portrait_map_2 = new Map(2, -900, -475, 2.5, 3, 1, 1, 3);
	$page10_portrait_map_3 = new Map(3, -125, 25, 0.875, 0, 2, 2, 0);

	// Landscape
	$page10_landscape_map_1 = new Map(1, -200, 0, 1.5, 2, 0, 0, 2);
	$page10_landscape_map_2 = new Map(2, -425, -475, 2.2, 3, 1, 1, 3);
	$page10_landscape_map_3 = new Map(3, 25, -50, 1, 0, 2, 2, 0);



	// PAGE DEFINITION
	$pg_10 = new Page();
	array_push($pg_10 -> Paths, $page_pt_10);

	array_push($pg_10 -> Maps_Portrait, $page10_portrait_map_1);
	array_push($pg_10 -> Maps_Portrait, $page10_portrait_map_2);
	array_push($pg_10 -> Maps_Portrait, $page10_portrait_map_3);
	
	

	array_push($pg_10 -> Maps_Landscape, $page10_landscape_map_1);
	array_push($pg_10 -> Maps_Landscape, $page10_landscape_map_2);
	array_push($pg_10 -> Maps_Landscape, $page10_landscape_map_3);

	

?>