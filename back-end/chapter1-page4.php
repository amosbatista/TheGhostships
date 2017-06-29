<?php
	
	// PAGE 4 - CHAPTER 1

	// PAGE FILE
	$page_pt_4 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img3.jpg' );


	//MAPS
	// Portrait
	$page4_portrait_map_1 = new Map(1, -500, 301, 2.75, 2, 0, 0, 4);
	$page4_portrait_map_2 = new Map(2, -874, 301, 2.75, 3, 1, 0, 4);
	$page4_portrait_map_3 = new Map(3, -1124, 301, 2.75, 4, 2, 0, 4);
	$page4_portrait_map_4 = new Map(4, -550, 26, 2.5, 5, 6, 1, 5);
	$page4_portrait_map_5 = new Map(5, -849, 1, 2.5, 6, 4, 2, 7);
	$page4_portrait_map_6 = new Map(6, -199, 276, 1, 7, 5, 2, 7);
	$page4_portrait_map_7 = new Map(7, -550, -424, 2.75, 8, 6, 6, 10);
	$page4_portrait_map_8 = new Map(8, -850, -399, 2.625, 9, 7, 6, 10);
	$page4_portrait_map_9 = new Map(9, -974, -399, 2.625, 10, 8, 1, 1);
	$page4_portrait_map_10 = new Map(10, -424, -824, 2.625, 11, 9, 7, 0);
	$page4_portrait_map_11 = new Map(11, -724, -824, 2.625, 12, 10, 8, 0);
	$page4_portrait_map_12 = new Map(12, -1049, -824, 2.625, 0, 11, 9, 0);


	// Landscape
	$page4_landscape_map_1 = new Map(1, -424, 150, 2.5, 2, 0, 0, 3);
	$page4_landscape_map_2 = new Map(2, -649, 150, 2.5, 3, 1, 0, 3);
	$page4_landscape_map_3 = new Map(3, -474, -150, 2.5, 4, 2, 2, 5);
	$page4_landscape_map_4 = new Map(4, -299, -100, 1.875, 5, 3, 3, 6);
	$page4_landscape_map_5 = new Map(5, -349, -550, 2.625, 6, 4, 4, 7);
	$page4_landscape_map_6 = new Map(6, -674, -550, 2.625, 7, 5, 4, 8);
	$page4_landscape_map_7 = new Map(7, -324, -800, 2.25, 8, 6, 5, 0);
	$page4_landscape_map_8 = new Map(8, -549, -800, 2.25, 0, 7, 6, 0);



	// PAGE DEFINITION
	$pg_4 = new Page();
	array_push($pg_4 -> Paths, $page_pt_4);

	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_1);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_2);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_3);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_4);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_5);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_6);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_7);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_8);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_9);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_10);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_11);
	array_push($pg_4 -> Maps_Portrait, $page4_portrait_map_12);
	

	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_1);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_2);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_3);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_4);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_5);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_6);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_7);
	array_push($pg_4 -> Maps_Landscape, $page4_landscape_map_8);
	
	
	
	

?>