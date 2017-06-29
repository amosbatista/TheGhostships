<?php
	
	// PAGE 3 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_5_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\5.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt2_page5_portrait_map_1 = new Map(1, -475, 100, 2.625, 2, 0, 0, 4);
	$cpt2_page5_portrait_map_2 = new Map(2, -700, 100, 2.625, 3, 1, 0, 4);
	$cpt2_page5_portrait_map_3 = new Map(3, -900, 100, 2.625, 4, 2, 0, 4);
	$cpt2_page5_portrait_map_4 = new Map(4, -525, -275, 2.125, 5, 3, 2, 6);
	$cpt2_page5_portrait_map_5 = new Map(5, -650, -275, 2.125, 6, 4, 2, 6);
	$cpt2_page5_portrait_map_6 = new Map(6, -525, -850, 2.75, 7, 5, 4, 0);
	$cpt2_page5_portrait_map_7 = new Map(7, -850, -850, 2.75, 0, 6, 4, 0);

	

	// Landscape
	$cpt2_page5_landscape_map_1 = new Map(1, -450, -25, 2.625, 2, 0, 0, 3);
	$cpt2_page5_landscape_map_2 = new Map(2, -675, -50, 2.625, 3, 1, 0, 3);
	$cpt2_page5_landscape_map_3 = new Map(3, -525, -350, 2.625, 4, 2, 2, 4);
	$cpt2_page5_landscape_map_4 = new Map(4, -550, -475, 2.625, 5, 3, 3, 5);
	$cpt2_page5_landscape_map_5 = new Map(5, -475, -750, 2.5, 6, 4, 4, 0);
	$cpt2_page5_landscape_map_6 = new Map(6, -825, -775, 2.5, 0, 5, 4, 0);

	



	// PAGE DEFINITION
	$cpt2_pg_5 = new Page();
	array_push($cpt2_pg_5 -> Paths, $cpt2_page_5_pt);

	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_1);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_2);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_3);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_4);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_5);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_6);
	array_push($cpt2_pg_5 -> Maps_Portrait, $cpt2_page5_portrait_map_7);

	
	

	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_1);
	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_2);
	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_3);
	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_4);
	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_5);
	array_push($cpt2_pg_5 -> Maps_Landscape, $cpt2_page5_landscape_map_6);




	

?>