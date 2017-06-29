<?php
	
	// PAGE 7 - CHAPTER 1

	// PAGE FILE
	$page_pt_7 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img6.jpg' );


	//MAPS
	// Portrait
	$page7_portrait_map_1 = new Map(1, -525, 0, 3, 2, 0, 0, 4);
	$page7_portrait_map_2 = new Map(2, -875, 0, 3, 3, 1, 0, 5);
	$page7_portrait_map_3 = new Map(3, -1275, 0, 3, 4, 2, 0, 6);
	$page7_portrait_map_4 = new Map(4, -475, -400, 2.625, 5, 3, 1, 9);
	$page7_portrait_map_5 = new Map(5, -825, -175, 2.5, 6, 4, 2, 7);
	$page7_portrait_map_6 = new Map(6, -1000, -175, 2.5, 7, 5, 3, 8);
	$page7_portrait_map_7 = new Map(7, -875, -450, 2.625, 8, 6, 5, 10);
	$page7_portrait_map_8 = new Map(8, -1000, -400, 2.5, 9, 7, 6, 11);
	$page7_portrait_map_9 = new Map(9, -525, -800, 2.5, 10, 8, 4, 0);
	$page7_portrait_map_10 = new Map(10, -800, -800, 2.5, 11, 9, 7, 0);
	$page7_portrait_map_11 = new Map(11, -1125, -800, 2.625, 0, 10, 8, 0);

	// Landscape
	$page7_landscape_map_1 = new Map(1, -350, 50, 2, 2, 0, 0, 2);
	$page7_landscape_map_2 = new Map(2, -175, -350, 2.625, 3, 1, 1, 3);
	$page7_landscape_map_3 = new Map(3, -225, -550, 2.625, 4, 2, 2, 6);
	$page7_landscape_map_4 = new Map(4, -800, -425, 2.625, 5, 3, 1, 5);
	$page7_landscape_map_5 = new Map(5, -800, -525, 2.625, 6, 4, 4, 7);
	$page7_landscape_map_6 = new Map(6, -225, -950, 2.75, 7, 5, 3, 0);
	$page7_landscape_map_7 = new Map(7, -875, -950, 2.75, 0, 7, 5, 0);



	// PAGE DEFINITION
	$pg_7 = new Page();
	array_push($pg_7 -> Paths, $page_pt_7);

	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_1);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_2);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_3);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_4);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_5);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_6);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_7);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_8);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_9);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_10);
	array_push($pg_7 -> Maps_Portrait, $page7_portrait_map_11);
	
	
	

	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_1);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_2);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_3);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_4);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_5);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_6);
	array_push($pg_7 -> Maps_Landscape, $page7_landscape_map_7);
	
	

?>