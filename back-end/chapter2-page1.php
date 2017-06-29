<?php
	
	// PAGE 1 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_1_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\img1.jpg' );


	//MAPS
	// Portrait
	$cpt2_page1_portrait_map_1 = new Map(1, -250, -250, 1.5, 2, 0, 0, 2);
	$cpt2_page1_portrait_map_2 = new Map(2, -400, -250, 1.5, 3, 1, 1, 3);
	$cpt2_page1_portrait_map_3 = new Map(3, -175, 0, 1, 0, 2, 2, 0);
	

	// Landscape
	$cpt2_page1_landscape_map_1 = new Map(1, -300, -325, 1.875, 2, 0, 0, 2);
	$cpt2_page1_landscape_map_2 = new Map(2, 25, 0, 0.625, 0, 1, 1, 0);
	



	// PAGE DEFINITION
	$cpt2_pg_1 = new Page();
	array_push($cpt2_pg_1 -> Paths, $cpt2_page_1_pt);

	array_push($cpt2_pg_1 -> Maps_Portrait, $cpt2_page1_portrait_map_1);
	array_push($cpt2_pg_1 -> Maps_Portrait, $cpt2_page1_portrait_map_2);
	array_push($cpt2_pg_1 -> Maps_Portrait, $cpt2_page1_portrait_map_3);
	
	

	array_push($cpt2_pg_1 -> Maps_Landscape, $cpt2_page1_landscape_map_1);
	array_push($cpt2_pg_1 -> Maps_Landscape, $cpt2_page1_landscape_map_2);

	

?>