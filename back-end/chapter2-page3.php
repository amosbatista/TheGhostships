<?php
	
	// PAGE 3 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_3_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\3.jpg' );


	//MAPS
	// Portrait
	$cpt2_page3_portrait_map_1 = new Map(1, -500, -25, 2.625, 2, 0, 3, 4);
	$cpt2_page3_portrait_map_2 = new Map(2, -775, 75, 2.625, 3, 1, 0, 4);
	$cpt2_page3_portrait_map_3 = new Map(3, -1025, 75, 2.625, 4, 2, 0, 4);
	$cpt2_page3_portrait_map_4 = new Map(4, -325, -50, 1.50, 5, 3, 1, 5);
	$cpt2_page3_portrait_map_5 = new Map(5, -475, -775, 2.625, 6, 4, 4, 0);
	$cpt2_page3_portrait_map_6 = new Map(6, -675, -775, 2.625, 7, 5, 4, 0);
	$cpt2_page3_portrait_map_7 = new Map(7, -1000, -775, 2.625, 0, 6, 4, 0);
	

	// Landscape
	$cpt2_page3_landscape_map_1 = new Map(1, -450, -25, 2.625, 2, 0, 0, 3);
	$cpt2_page3_landscape_map_2 = new Map(2, -775, -25, 2.625, 3, 1, 0, 3);
	$cpt2_page3_landscape_map_3 = new Map(3, -400, -250, 2.125, 4, 2, 1, 4);
	$cpt2_page3_landscape_map_4 = new Map(4, -175, -800, 2.625, 5, 3, 3, 0);
	$cpt2_page3_landscape_map_5 = new Map(5, -650, -750, 2.5, 0, 4, 3, 0);
	



	// PAGE DEFINITION
	$cpt2_pg_3 = new Page();
	array_push($cpt2_pg_3 -> Paths, $cpt2_page_3_pt);

	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_1);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_2);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_3);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_4);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_5);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_6);
	array_push($cpt2_pg_3 -> Maps_Portrait, $cpt2_page3_portrait_map_7);
	
	

	array_push($cpt2_pg_3 -> Maps_Landscape, $cpt2_page3_landscape_map_1);
	array_push($cpt2_pg_3 -> Maps_Landscape, $cpt2_page3_landscape_map_2);
	array_push($cpt2_pg_3 -> Maps_Landscape, $cpt2_page3_landscape_map_3);
	array_push($cpt2_pg_3 -> Maps_Landscape, $cpt2_page3_landscape_map_4);
	array_push($cpt2_pg_3 -> Maps_Landscape, $cpt2_page3_landscape_map_5);


	

?>