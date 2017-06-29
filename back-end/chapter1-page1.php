<?php
	
	// PAGE 1 - CP 1

	// PAGE FILE
	$page_pt = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img0.jpg' );


	//MAPS
	// Portrait
	$page1_map_1 = new Map(1, -425, 125, 2.625, 2, 0, 0, 3);
	$page1_map_2 = new Map(2, -875, 175, 2.625, 3, 1, 0, 3);
	$page1_map_3 = new Map(3, -725, -275, 2.625, 4, 2, 1, 4);
	$page1_map_4 = new Map(4, -500, -200, 1.875, 5, 3, 3, 5);
	$page1_map_5 = new Map(5, -475, -975, 2.75, 6, 3, 4, 0);
	$page1_map_6 = new Map(6, -825, -975, 2.75, 7, 5, 4, 0);
	$page1_map_7 = new Map(7, -1025, -975, 2.75, 0, 6, 4, 0);

	//	Landscape
	$landscape_page1_map_1 = new Map(1, -350, 50, 2.875, 2, 0, 0, 3);
	$landscape_page1_map_2 = new Map(2, -825, 50, 2.875, 3, 1, 0, 3);
	$landscape_page1_map_3 = new Map(3, -575, -275, 2.625, 4, 2, 1, 4);
	$landscape_page1_map_4 = new Map(4, -200, -150, 1.5, 5, 3, 3, 5);
	$landscape_page1_map_5 = new Map(5, -375, -1000, 2.75, 6, 4, 4, 0);
	$landscape_page1_map_6 = new Map(6, -775, -1000, 2.75, 0, 5, 4, 0);




	// PAGE DEFINITION
	$pg_1 = new Page();
	array_push($pg_1->Paths, $page_pt);

	array_push($pg_1->Maps_Portrait, $page1_map_1);
	array_push($pg_1->Maps_Portrait, $page1_map_2);
	array_push($pg_1->Maps_Portrait, $page1_map_3);
	array_push($pg_1->Maps_Portrait, $page1_map_4);
	array_push($pg_1->Maps_Portrait, $page1_map_5);
	array_push($pg_1->Maps_Portrait, $page1_map_6);
	array_push($pg_1->Maps_Portrait, $page1_map_7);

	array_push($pg_1->Maps_Landscape, $landscape_page1_map_1);
	array_push($pg_1->Maps_Landscape, $landscape_page1_map_2);
	array_push($pg_1->Maps_Landscape, $landscape_page1_map_3);
	array_push($pg_1->Maps_Landscape, $landscape_page1_map_4);
	array_push($pg_1->Maps_Landscape, $landscape_page1_map_5);
	array_push($pg_1->Maps_Landscape, $landscape_page1_map_6);
	


?>