<?php
	
	// PAGE 6 - CHAPTER 1

	// PAGE FILE
	$page_pt_6 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img5.jpg' );


	//MAPS
	// Portrait
	$page6_portrait_map_1 = new Map(1, -400, 150, 1.875, 2, 0, 0, 3);
	$page6_portrait_map_2 = new Map(2, -850, 75, 2.25, 3, 1, 0, 4);
	$page6_portrait_map_3 = new Map(3, -500, -200, 2.625, 4, 2, 1, 5);
	$page6_portrait_map_4 = new Map(4, -600, 25, 1.75, 5, 3, 2, 6);
	$page6_portrait_map_5 = new Map(5, -450, -675, 2.625, 6, 4, 3, 0);
	$page6_portrait_map_6 = new Map(6, -975, -650, 2.625, 7, 5, 4, 7);
	$page6_portrait_map_7 = new Map(7, -600, -450, 1.75, 0, 6, 6, 0);

	// Landscape
	$page6_landscape_map_1 = new Map(1, -375, -50, 2.875, 2, 0, 0, 2);
	$page6_landscape_map_2 = new Map(2, 50, 100, 1.375, 3, 1, 1, 5);
	$page6_landscape_map_3 = new Map(3, -950, -50, 2.75, 4, 2, 0, 4);
	$page6_landscape_map_4 = new Map(4, -375, 50, 1.625, 5, 3, 3, 6);
	$page6_landscape_map_5 = new Map(5, -225, -400, 2.75, 6, 4, 2, 7);
	$page6_landscape_map_6 = new Map(6, -750, -400, 2.75, 7, 5, 4, 9);
	$page6_landscape_map_7 = new Map(7, -200, -675, 2.75, 8, 6, 5, 8);
	$page6_landscape_map_8 = new Map(8, 50, -425, 1.75, 9, 7, 7, 0);
	$page6_landscape_map_9 = new Map(9, -850, -775, 2.75, 10, 8, 6, 10);
	$page6_landscape_map_10 = new Map(10, -850, -950, 2.75, 11, 9, 9, 11);
	$page6_landscape_map_11 = new Map(11, -400, -400, 1.625, 0, 10, 9, 0);



	// PAGE DEFINITION
	$pg_6 = new Page();
	array_push($pg_6 -> Paths, $page_pt_6);

	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_1);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_2);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_3);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_4);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_5);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_6);
	array_push($pg_6 -> Maps_Portrait, $page6_portrait_map_7);
	
	
	

	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_1);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_2);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_3);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_4);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_5);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_6);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_7);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_8);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_9);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_10);
	array_push($pg_6 -> Maps_Landscape, $page6_landscape_map_11);
	

?>