<?php
	
	// PAGE 3 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_4_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\4.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt2_page4_portrait_map_1 = new Map(1, -500, -50, 2.625, 2, 0, 0, 3);
	$cpt2_page4_portrait_map_2 = new Map(2, -925, -50, 2.625, 3, 1, 0, 5);
	$cpt2_page4_portrait_map_3 = new Map(3, -450, -525, 2.625, 4, 2, 1, 4);
	$cpt2_page4_portrait_map_4 = new Map(4, -450, -800, 2.625, 5, 3, 3, 0);
	$cpt2_page4_portrait_map_5 = new Map(5, -750, -425, 2.625, 6, 4, 2, 7);
	$cpt2_page4_portrait_map_6 = new Map(6, -950, -425, 2.625, 7, 5, 2, 7);
	$cpt2_page4_portrait_map_7 = new Map(7, -900, -675, 2.625, 0, 6, 5, 0);

	

	// Landscape
	$cpt2_page4_landscape_map_1 = new Map(1, -500, -25, 2.625, 2, 0, 0, 3);
	$cpt2_page4_landscape_map_2 = new Map(2, -850, -50, 2.625, 3, 1, 0, 5);
	$cpt2_page4_landscape_map_3 = new Map(3, -175, -450, 2.625, 4, 2, 1, 4);
	$cpt2_page4_landscape_map_4 = new Map(4, -175, -800, 2.625, 5, 3, 3, 0);
	$cpt2_page4_landscape_map_5 = new Map(5, -725, -425, 2.625, 6, 4, 2, 6);
	$cpt2_page4_landscape_map_6 = new Map(6, -725, -800, 2.5, 0, 5, 5, 0);

	



	// PAGE DEFINITION
	$cpt2_pg_4 = new Page();
	array_push($cpt2_pg_4 -> Paths, $cpt2_page_4_pt);

	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_1);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_2);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_3);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_4);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_5);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_6);
	array_push($cpt2_pg_4 -> Maps_Portrait, $cpt2_page4_portrait_map_7);
	
	

	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_1);
	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_2);
	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_3);
	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_4);
	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_5);
	array_push($cpt2_pg_4 -> Maps_Landscape, $cpt2_page4_landscape_map_6);



	

?>