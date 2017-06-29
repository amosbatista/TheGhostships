<?php
	
	// PAGE 1 - CHAPTER 2

	// PAGE FILE
	$cpt3_page_2_pt = new InternationalText(1, $idiom_pt, '\\\cap-3\\\pt\\\pg1.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt3_page2_portrait_map_1 = new Map(1, -460, 0, 2.475, 2, 0, 0, 3);
	$cpt3_page2_portrait_map_2 = new Map(2, -785, 0, 2.225, 3, 1, 0, 5);
	$cpt3_page2_portrait_map_3 = new Map(3, -410, -275, 2.35, 4, 2, 1, 6);
	$cpt3_page2_portrait_map_4 = new Map(4, -660, -275, 2.35, 5, 3, 2, 7);
	$cpt3_page2_portrait_map_5 = new Map(5, -885, -275, 2.35, 6, 4, 2, 8);
	$cpt3_page2_portrait_map_6 = new Map(6, -385, -775, 2.475, 7, 5, 3, 0);
	$cpt3_page2_portrait_map_7 = new Map(7, -610, -775, 2.475, 8, 6, 4, 0);
	$cpt3_page2_portrait_map_8 = new Map(8, -860, -750, 2.35, 0, 7, 5, 0);
	
	
	

	// Landscape
	$cpt3_page2_landscape_map_1 = new Map(1, -325, 10, 1.85, 2, 0, 0, 2);
	$cpt3_page2_landscape_map_2 = new Map(2, -300, -315, 1.85, 3, 1, 1, 3);
	$cpt3_page2_landscape_map_3 = new Map(3, -300, -615, 1.85, 0, 2, 2, 0);
	
	
	



	// PAGE DEFINITION
	$cpt3_pg_2 = new Page();
	array_push($cpt3_pg_2 -> Paths, $cpt3_page_2_pt);

	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_1);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_2);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_3);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_4);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_5);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_6);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_7);
	array_push($cpt3_pg_2 -> Maps_Portrait, $cpt3_page2_portrait_map_8);
	
	


	array_push($cpt3_pg_2 -> Maps_Landscape, $cpt3_page2_landscape_map_1);
	array_push($cpt3_pg_2 -> Maps_Landscape, $cpt3_page2_landscape_map_2);
	array_push($cpt3_pg_2 -> Maps_Landscape, $cpt3_page2_landscape_map_3);
	
	
	
	
	

?>