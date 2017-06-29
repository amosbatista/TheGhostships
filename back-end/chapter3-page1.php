<?php
	
	// PAGE 1 - CHAPTER 2

	// PAGE FILE
	$cpt3_page_1_pt = new InternationalText(1, $idiom_pt, '\\\cap-3\\\pt\\\pg0.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt3_page1_portrait_map_1 = new Map(1, -410, 50, 2.225, 2, 0, 5, 3);
	$cpt3_page1_portrait_map_2 = new Map(2, -885, -50, 2.475, 3, 1, 0, 4);
	$cpt3_page1_portrait_map_3 = new Map(3, -435, -725, 2.475, 4, 2, 1, 5);
	$cpt3_page1_portrait_map_4 = new Map(4, -885, -725, 2.475, 5, 3, 2, 5);
	$cpt3_page1_portrait_map_5 = new Map(5, -185, -25, 1.1, 0, 4, 1, 4);
	
	

	// Landscape
	$cpt3_page1_landscape_map_1 = new Map(1, -300, -40, 1.85, 2, 0, 4, 2);
	$cpt3_page1_landscape_map_2 = new Map(2, -300, -365, 1.85, 3, 1, 1, 3);
	$cpt3_page1_landscape_map_3 = new Map(3, -250, -515, 1.725, 4, 2, 2, 4);
	$cpt3_page1_landscape_map_4 = new Map(4, 0, 10, 0.725, 0, 3, 1, 3);
	
	



	// PAGE DEFINITION
	$cpt3_pg_1 = new Page();
	array_push($cpt3_pg_1 -> Paths, $cpt3_page_1_pt);

	array_push($cpt3_pg_1 -> Maps_Portrait, $cpt3_page1_portrait_map_1);
	array_push($cpt3_pg_1 -> Maps_Portrait, $cpt3_page1_portrait_map_2);
	array_push($cpt3_pg_1 -> Maps_Portrait, $cpt3_page1_portrait_map_3);
	array_push($cpt3_pg_1 -> Maps_Portrait, $cpt3_page1_portrait_map_4);
	array_push($cpt3_pg_1 -> Maps_Portrait, $cpt3_page1_portrait_map_5);
	


	array_push($cpt3_pg_1 -> Maps_Landscape, $cpt3_page1_landscape_map_1);
	array_push($cpt3_pg_1 -> Maps_Landscape, $cpt3_page1_landscape_map_2);
	array_push($cpt3_pg_1 -> Maps_Landscape, $cpt3_page1_landscape_map_3);
	array_push($cpt3_pg_1 -> Maps_Landscape, $cpt3_page1_landscape_map_4);

	
	
	
	

?>