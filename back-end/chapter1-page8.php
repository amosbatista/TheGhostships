<?php
	
	// PAGE 8 - CHAPTER 1

	// PAGE FILE
	$page_pt_8 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img7.jpg' );


	//MAPS
	// Portrait
	$page8_portrait_map_1 = new Map(1, -410, 15, 2.5, 2, 0, 0, 4);
	$page8_portrait_map_2 = new Map(2, -975, 75, 3.375, 3, 1, 0, 4);
	$page8_portrait_map_3 = new Map(3, -1425, 75, 3.375, 4, 2, 0, 5);
	$page8_portrait_map_4 = new Map(4, -975, -425, 3.375, 5, 3, 2, 6);
	$page8_portrait_map_5 = new Map(5, -1350, -325, 3.375, 6, 4, 3, 7);
	$page8_portrait_map_6 = new Map(6, -475, -700, 2.625, 7, 5, 4, 0);
	$page8_portrait_map_7 = new Map(7, -950, -700, 2.625, 0, 6, 5, 0);

	// Landscape
	$page8_landscape_map_1 = new Map(1, -200, 50, 2.75, 2, 0, 0, 4);
	$page8_landscape_map_2 = new Map(2, -500, 50, 2.75, 3, 1, 0, 4);
	$page8_landscape_map_3 = new Map(3, -800, 50, 2.75, 4, 2, 0, 5);
	$page8_landscape_map_4 = new Map(4, -525, -350, 2.75, 5, 3, 2, 6);
	$page8_landscape_map_5 = new Map(5, -800, -175, 2.375, 6, 4, 3, 7);
	$page8_landscape_map_6 = new Map(6, -325, -700, 2.5, 7, 5, 4, 0);
	$page8_landscape_map_7 = new Map(7, -775, -650, 2.5, 0, 6, 5, 0);



	// PAGE DEFINITION
	$pg_8 = new Page();
	array_push($pg_8 -> Paths, $page_pt_8);

	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_1);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_2);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_3);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_4);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_5);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_6);
	array_push($pg_8 -> Maps_Portrait, $page8_portrait_map_7);
	
	

	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_1);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_2);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_3);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_4);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_5);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_6);
	array_push($pg_8 -> Maps_Landscape, $page8_landscape_map_7);
	
	
	

?>