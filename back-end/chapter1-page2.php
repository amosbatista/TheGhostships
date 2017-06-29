<?php
	
	// PAGE 2 - CP 1

	// PAGE FILE
	$page_pt_2 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img1.jpg' );


	//MAPS
	// Portrait
	$page2_map_1 = new Map(1, -600, 125, 2.625, 2, 0, 0, 3);
	$page2_map_2 = new Map(2, -925, 125, 2.625, 3, 1, 0, 3);
	$page2_map_3 = new Map(3, -625, -300, 2.625, 4, 2, 1, 5);
	$page2_map_4 = new Map(4, -1000, -300, 2.625, 5, 3, 2, 6);
	$page2_map_5 = new Map(5, -575, -775, 2.625, 6, 4, 4, 0);
	$page2_map_6 = new Map(6, -1025, -775, 2.625, 0, 5, 4, 0);


	// Landscape
	$page2_landscape_map_1 = new Map(1, -400, 25, 2.875, 2, 0, 0, 3);
	$page2_landscape_map_2 = new Map(2, -850, 25, 2.875, 3, 1, 0, 3);
	$page2_landscape_map_3 = new Map(3, -425, -250, 2.125, 4, 2, 1, 4);
	$page2_landscape_map_4 = new Map(4, -375, -600, 2.125, 5, 3, 3, 0);
	$page2_landscape_map_5 = new Map(5, -900, -800, 2.75, 0, 4, 3, 0);



	// PAGE DEFINITION
	$pg_2 = new Page();
	array_push($pg_2 -> Paths, $page_pt_2);

	array_push($pg_2 -> Maps_Portrait, $page2_map_1);
	array_push($pg_2 -> Maps_Portrait, $page2_map_2);
	array_push($pg_2 -> Maps_Portrait, $page2_map_3);
	array_push($pg_2 -> Maps_Portrait, $page2_map_4);
	array_push($pg_2 -> Maps_Portrait, $page2_map_5);
	array_push($pg_2 -> Maps_Portrait, $page2_map_6);

	array_push($pg_2 -> Maps_Landscape, $page2_landscape_map_1);
	array_push($pg_2 -> Maps_Landscape, $page2_landscape_map_2);
	array_push($pg_2 -> Maps_Landscape, $page2_landscape_map_3);
	array_push($pg_2 -> Maps_Landscape, $page2_landscape_map_4);
	array_push($pg_2 -> Maps_Landscape, $page2_landscape_map_5);


	

?>