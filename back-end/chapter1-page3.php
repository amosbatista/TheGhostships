<?php
	
	// PAGE 3 - CHAPTER 1

	// PAGE FILE
	$page_pt_3 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img2.jpg' );


	//MAPS
	// Portrait
	$page3_portrait_map_1 = new Map(1, -450, 275, 2.625, 2, 0, 0, 3);
	$page3_portrait_map_2 = new Map(2, -1025, 275, 2.625, 3, 1, 0, 3);
	$page3_portrait_map_3 = new Map(3, -725, -150, 2.625, 4, 2, 1, 4);
	$page3_portrait_map_4 = new Map(4, -1025, -150, 2.625, 5, 3, 3, 5);
	$page3_portrait_map_5 = new Map(5, -350, 150, 1.375, 6, 4, 4, 6);
	$page3_portrait_map_6 = new Map(6, -600, -425, 2.625, 7, 5, 5, 8);
	$page3_portrait_map_7 = new Map(7, -1025, -425, 2.625, 8, 6, 5, 10);
	$page3_portrait_map_8 = new Map(8, -550, -925, 2.875, 9, 7, 6, 0);
	$page3_portrait_map_9 = new Map(9, -825, -925, 2.875, 10, 8, 6, 0);
	$page3_portrait_map_10 = new Map(10, -1125, -925, 2.875, 0, 9, 7, 0);


	// Landscape
	$page3_landscape_map_1 = new Map(1, -450, 125, 2.875, 2, 0, 0, 3);
	$page3_landscape_map_2 = new Map(2, -850, 125, 2.875, 3, 1, 0, 3);
	$page3_landscape_map_3 = new Map(3, -900, -150, 3.25, 4, 2, 1, 4);
	$page3_landscape_map_4 = new Map(4, -850, -425, 3.125, 5, 3, 3, 6);
	$page3_landscape_map_5 = new Map(5, -350, -125, 2, 6, 4, 4, 6);
	$page3_landscape_map_6 = new Map(6, -400, -650, 2.875, 7, 5, 5, 8);
	$page3_landscape_map_7 = new Map(7, -800, -700, 2.875, 8, 6, 5, 9);
	$page3_landscape_map_8 = new Map(8, -450, -1075, 2.875, 9, 7, 6, 0);
	$page3_landscape_map_9 = new Map(9, -825, -1050, 2.875, 0, 8, 7, 0);



	// PAGE DEFINITION
	$pg_3 = new Page();
	array_push($pg_3 -> Paths, $page_pt_3);

	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_1);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_2);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_3);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_4);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_5);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_6);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_7);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_8);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_9);
	array_push($pg_3 -> Maps_Portrait, $page3_portrait_map_10);
	

	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_1);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_2);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_3);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_4);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_5);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_6);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_7);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_8);
	array_push($pg_3 -> Maps_Landscape, $page3_landscape_map_9);
	
	
	

?>