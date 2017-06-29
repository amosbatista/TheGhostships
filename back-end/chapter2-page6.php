<?php
	
	// PAGE 6 - CHAPTER 2

	// PAGE FILE
	$cpt2_page_6_pt = new InternationalText(1, $idiom_pt, '\\\cap-2\\\pt\\\6.jpg' );

	
	//MAPS - next - prev - above - below
	// Portrait
	$cpt2_page6_portrait_map_1 = new Map(1, -450, 25, 2.625, 2, 0, 0, 4);
	$cpt2_page6_portrait_map_2 = new Map(2, -675, 25, 2.625, 3, 1, 0, 5);
	$cpt2_page6_portrait_map_3 = new Map(3, -950, 25, 2.625, 4, 2, 0, 5);
	$cpt2_page6_portrait_map_4 = new Map(4, -450, -350, 2.625, 5, 3, 1, 0);
	$cpt2_page6_portrait_map_5 = new Map(5, -800, -400, 2.625, 0, 4, 2, 0);

	

	// Landscape
	$cpt2_page6_landscape_map_1 = new Map(1, -450, -25, 2.625, 2, 0, 0, 3);
	$cpt2_page6_landscape_map_2 = new Map(2, -850, -25, 2.625, 3, 1, 0, 4);
	$cpt2_page6_landscape_map_3 = new Map(3, -375, -425, 2.625, 4, 2, 1, 0);
	$cpt2_page6_landscape_map_4 = new Map(4, -750, -375, 2.625, 5, 3, 2, 5);
	$cpt2_page6_landscape_map_5 = new Map(5, -725, -625, 2.625, 0, 4, 4, 0);


	



	// PAGE DEFINITION
	$cpt2_pg_6 = new Page();
	array_push($cpt2_pg_6 -> Paths, $cpt2_page_6_pt);

	array_push($cpt2_pg_6 -> Maps_Portrait, $cpt2_page6_portrait_map_1);
	array_push($cpt2_pg_6 -> Maps_Portrait, $cpt2_page6_portrait_map_2);
	array_push($cpt2_pg_6 -> Maps_Portrait, $cpt2_page6_portrait_map_3);
	array_push($cpt2_pg_6 -> Maps_Portrait, $cpt2_page6_portrait_map_4);
	array_push($cpt2_pg_6 -> Maps_Portrait, $cpt2_page6_portrait_map_5);
	
	

	array_push($cpt2_pg_6 -> Maps_Landscape, $cpt2_page6_landscape_map_1);
	array_push($cpt2_pg_6 -> Maps_Landscape, $cpt2_page6_landscape_map_2);
	array_push($cpt2_pg_6 -> Maps_Landscape, $cpt2_page6_landscape_map_3);
	array_push($cpt2_pg_6 -> Maps_Landscape, $cpt2_page6_landscape_map_4);
	array_push($cpt2_pg_6 -> Maps_Landscape, $cpt2_page6_landscape_map_5);




	

?>