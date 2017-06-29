<?php
	
	// PAGE 8 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_8_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\8.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt2_page8_portrait_map_1 = new Map(1, -460, 50, 2.325, 2, 0, 0, 2);
	$cpt2_page8_portrait_map_2 = new Map(2, -635, -250, 3.2, 3, 1, 1, 3);
	$cpt2_page8_portrait_map_3 = new Map(3, -835, -425, 3.2, 4, 2, 2, 4);
	$cpt2_page8_portrait_map_4 = new Map(4, -885, -525, 2.825, 5, 3, 3, 5);
	$cpt2_page8_portrait_map_5 = new Map(5, -160, -50, 1.075, 0, 4, 4, 0);
	

	// Landscape
	$cpt2_page8_landscape_map_1 = new Map(1, -400, -85, 2.235, 2, 0, 0, 2);
	$cpt2_page8_landscape_map_2 = new Map(2, -400, -235, 2.235, 3, 1, 1, 3);
	$cpt2_page8_landscape_map_3 = new Map(3, -400, -435, 2.235, 4, 2, 2, 4);
	$cpt2_page8_landscape_map_4 = new Map(4, 125, -10, 0.61, 0, 3, 3, 0);
	


	// PAGE DEFINITION
	$cpt2_pg_8 = new Page();
	array_push($cpt2_pg_8 -> Paths, $cpt2_page_8_pt);

	array_push($cpt2_pg_8 -> Maps_Portrait, $cpt2_page8_portrait_map_1);
	array_push($cpt2_pg_8 -> Maps_Portrait, $cpt2_page8_portrait_map_2);
	array_push($cpt2_pg_8 -> Maps_Portrait, $cpt2_page8_portrait_map_3);
	array_push($cpt2_pg_8 -> Maps_Portrait, $cpt2_page8_portrait_map_4);
	array_push($cpt2_pg_8 -> Maps_Portrait, $cpt2_page8_portrait_map_5);
	
	
	
	

	array_push($cpt2_pg_8 -> Maps_Landscape, $cpt2_page8_landscape_map_1);
	array_push($cpt2_pg_8 -> Maps_Landscape, $cpt2_page8_landscape_map_2);
	array_push($cpt2_pg_8 -> Maps_Landscape, $cpt2_page8_landscape_map_3);
	array_push($cpt2_pg_8 -> Maps_Landscape, $cpt2_page8_landscape_map_4);
	
	
	
	

?>