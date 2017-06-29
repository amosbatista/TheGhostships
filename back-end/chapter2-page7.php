<?php
	
	// PAGE 7 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_7_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\7.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt2_page7_portrait_map_1 = new Map(1, -475, 0, 2.725, 2, 0, 0, 3);
	$cpt2_page7_portrait_map_2 = new Map(2, -650, 50, 2.1, 3, 1, 1, 4);
	$cpt2_page7_portrait_map_3 = new Map(3, -475, -325, 2.725, 4, 2, 1, 6);
	$cpt2_page7_portrait_map_4 = new Map(4, -800, -325, 2.725, 5, 3, 2, 7);
	$cpt2_page7_portrait_map_5 = new Map(5, -1000, -325, 2.725, 6, 4, 2, 8);
	$cpt2_page7_portrait_map_6 = new Map(6, -550, -900, 3.1, 7, 5, 3, 0);
	$cpt2_page7_portrait_map_7 = new Map(7, -825, -900, 3.1, 8, 6, 4, 8);
	$cpt2_page7_portrait_map_8 = new Map(8, -1100, -900, 3.1, 0, 7, 5, 0);
	

	// Landscape
	$cpt2_page7_landscape_map_1 = new Map(1, -450, -75, 2.475, 2, 0, 0, 0);
	$cpt2_page7_landscape_map_2 = new Map(2, -675, -75, 2.475, 3, 1, 0, 0);
	$cpt2_page7_landscape_map_3 = new Map(3, -425, -450, 2.475, 4, 2, 0, 0);
	$cpt2_page7_landscape_map_4 = new Map(4, -650, -450, 2.475, 5, 3, 0, 0);
	$cpt2_page7_landscape_map_5 = new Map(5, -400, -750, 2.475, 6, 4, 0, 0);
	$cpt2_page7_landscape_map_6 = new Map(6, -600, -750, 2.475, 0, 5, 0, 0);
	


	



	// PAGE DEFINITION
	$cpt2_pg_7 = new Page();
	array_push($cpt2_pg_7 -> Paths, $cpt2_page_7_pt);

	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_1);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_2);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_3);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_4);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_5);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_6);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_7);
	array_push($cpt2_pg_7 -> Maps_Portrait, $cpt2_page7_portrait_map_8);
	
	
	

	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_1);
	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_2);
	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_3);
	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_4);
	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_5);
	array_push($cpt2_pg_7 -> Maps_Landscape, $cpt2_page7_landscape_map_6);
	
	
	

?>