<?php
	
	// PAGE 9 - CHAPTER 1

	// PAGE FILE
	$page_pt_9 = new InternationalText(1, $idiom_pt, '\\\cap-1\\\pt\\\img8.jpg' );


	//MAPS
	// Portrait
	$page9_portrait_map_1 = new Map(1, -650, 0, 2.75, 2, 0, 0, 3);
	$page9_portrait_map_2 = new Map(2, -925, 0, 2.75, 3, 1, 0, 4);
	$page9_portrait_map_3 = new Map(3, -400, -450, 2.375, 4, 2, 1, 0);
	$page9_portrait_map_4 = new Map(4, -925, -425, 2.5, 5, 3, 2, 5);
	$page9_portrait_map_5 = new Map(5, -825, -600, 2.5, 6, 4, 4, 6);
	$page9_portrait_map_6 = new Map(6, -975, -800, 2.375, 0, 5, 5, 0);

	// Landscape
	$page9_landscape_map_1 = new Map(1, -525, 50, 2.5, 2, 0, 0, 2);
	$page9_landscape_map_2 = new Map(2, -175, -550, 2.5, 3, 1, 1, 5);
	$page9_landscape_map_3 = new Map(3, -650, -350, 2.5, 4, 2, 1, 5);
	$page9_landscape_map_4 = new Map(4, -650, -625, 2.5, 5, 3, 3, 5);
	$page9_landscape_map_5 = new Map(5, -600, -825, 2.375, 0, 4, 2, 0);



	// PAGE DEFINITION
	$pg_9 = new Page();
	array_push($pg_9 -> Paths, $page_pt_9);

	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_1);
	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_2);
	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_3);
	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_4);
	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_5);
	array_push($pg_9 -> Maps_Portrait, $page9_portrait_map_6);
	
	

	array_push($pg_9 -> Maps_Landscape, $page9_landscape_map_1);
	array_push($pg_9 -> Maps_Landscape, $page9_landscape_map_2);
	array_push($pg_9 -> Maps_Landscape, $page9_landscape_map_3);
	array_push($pg_9 -> Maps_Landscape, $page9_landscape_map_4);
	array_push($pg_9 -> Maps_Landscape, $page9_landscape_map_5);
	
	

?>