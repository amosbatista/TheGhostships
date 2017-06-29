<?php
	
	// PAGE 5 - CHAPTER 1

	// PAGE FILE
	$page_pt_5 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img4.jpg' );


	//MAPS
	// Portrait
	$page5_portrait_map_1 = new Map(1, -275, 50, 1.875, 2, 0, 0, 5);
	$page5_portrait_map_2 = new Map(2, -850, -75, 2.75, 3, 1, 0, 7);
	$page5_portrait_map_3 = new Map(3, -1075, -50, 2.75, 4, 2, 2, 4);
	$page5_portrait_map_4 = new Map(4, -575, 50, 1.75, 5, 3, 3, 7);
	$page5_portrait_map_5 = new Map(5, -425, -625, 2.75, 6, 3, 1, 8);
	$page5_portrait_map_6 = new Map(6, -750, -625, 2.75, 7, 5, 2, 9);
	$page5_portrait_map_7 = new Map(7, -1025, -600, 2.75, 8, 6, 4, 10);
	$page5_portrait_map_8 = new Map(8, -450, -900, 2.75, 9, 7, 5, 0);
	$page5_portrait_map_9 = new Map(9, -725, -900, 2.75, 10, 8, 6, 0);
	$page5_portrait_map_10 = new Map(10, -1100, -900, 2.75, 0, 9, 7, 0);

	// Landscape
	$page5_landscape_map_1 = new Map(1, 75, -100, 2, 2, 0, 0, 4);
	$page5_landscape_map_2 = new Map(2, -550, -50, 2.5, 3, 1, 0, 4);
	$page5_landscape_map_3 = new Map(3, -250, 0, 1.25, 4, 2, 0, 5);
	$page5_landscape_map_4 = new Map(4, -300, -500, 2.125, 5, 3, 1, 6);
	$page5_landscape_map_5 = new Map(5, -475, -500, 2.125, 6, 4, 3, 7);
	$page5_landscape_map_6 = new Map(6, -175, -800, 2.125, 7, 5, 4, 0);
	$page5_landscape_map_7 = new Map(7, -475, -800, 2.125, 0, 6, 5, 0);



	// PAGE DEFINITION
	$pg_5 = new Page();
	array_push($pg_5 -> Paths, $page_pt_5);

	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_1);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_2);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_3);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_4);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_5);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_6);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_7);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_8);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_9);
	array_push($pg_5 -> Maps_Portrait, $page5_portrait_map_10);
	
	

	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_1);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_2);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_3);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_4);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_5);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_6);
	array_push($pg_5 -> Maps_Landscape, $page5_landscape_map_7);
	
	
	
	
	

?>