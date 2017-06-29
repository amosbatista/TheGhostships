<?php
	
	// PAGE 2 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_2_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\img2.jpg' );


	//MAPS
	// Portrait
	$cpt2_page2_portrait_map_1 = new Map(1, -600, -25, 2.625, 2, 0, 0, 2);
	$cpt2_page2_portrait_map_2 = new Map(2, -500, -425, 2.625, 3, 1, 1, 4);
	$cpt2_page2_portrait_map_3 = new Map(3, -750, -425, 2.625, 4, 2, 1, 5);
	$cpt2_page2_portrait_map_4 = new Map(4, -450, -875, 2.875, 5, 3, 2, 0);
	$cpt2_page2_portrait_map_5 = new Map(5, -875, -875, 2.875, 0, 4, 3, 0);
	

	// Landscape
	$cpt2_page2_landscape_map_1 = new Map(1, -375, -50, 2, 2, 0, 0, 2);
	$cpt2_page2_landscape_map_2 = new Map(2, -375, -350, 2, 3, 1, 1, 3);
	$cpt2_page2_landscape_map_3 = new Map(3, -250, -725, 2.25, 4, 2, 2, 0);
	$cpt2_page2_landscape_map_4 = new Map(4, -500, -700, 2.125, 0, 3, 2, 0);
	



	// PAGE DEFINITION
	$cpt2_pg_2 = new Page();
	array_push($cpt2_pg_2 -> Paths, $cpt2_page_2_pt);

	array_push($cpt2_pg_2 -> Maps_Portrait, $cpt2_page2_portrait_map_1);
	array_push($cpt2_pg_2 -> Maps_Portrait, $cpt2_page2_portrait_map_2);
	array_push($cpt2_pg_2 -> Maps_Portrait, $cpt2_page2_portrait_map_3);
	array_push($cpt2_pg_2 -> Maps_Portrait, $cpt2_page2_portrait_map_4);
	array_push($cpt2_pg_2 -> Maps_Portrait, $cpt2_page2_portrait_map_5);
	
	

	array_push($cpt2_pg_2 -> Maps_Landscape, $cpt2_page2_landscape_map_1);
	array_push($cpt2_pg_2 -> Maps_Landscape, $cpt2_page2_landscape_map_2);
	array_push($cpt2_pg_2 -> Maps_Landscape, $cpt2_page2_landscape_map_3);
	array_push($cpt2_pg_2 -> Maps_Landscape, $cpt2_page2_landscape_map_4);

	

?>