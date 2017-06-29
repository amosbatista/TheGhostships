<?php 
	
	
	// IMPORTS
	require('chapter2-page1.php');
	require('chapter2-page2.php');
	require('chapter2-page3.php');
	require('chapter2-page4.php');
	require('chapter2-page5.php');
	require('chapter2-page6.php');
	require('chapter2-page7.php');
	require('chapter2-page8.php');


	
	// DESCRIPTIONS
	$title_PT = new InternationalText(1, $idiom_pt, 'Viagem para Saturno');
	$description_PT = new InternationalText(1, $idiom_pt, 'O trio parte na caça ao seu primeiro alvo, uma nave militar. No começo da viagem, eles sentem um pouco na pele o clima político atual reinante no Sistema Solar. ');


	// Create a new chapter
	$chapter2 = new Chapter();


	// Setting objects to the chapter
	array_push ($chapter2->Title, $title_PT);
	array_push ($chapter2->Description, $description_PT);

	array_push ($chapter2->Pages, $cpt2_pg_1);
	array_push ($chapter2->Pages, $cpt2_pg_2);
	array_push ($chapter2->Pages, $cpt2_pg_3);
	array_push ($chapter2->Pages, $cpt2_pg_4);
	array_push ($chapter2->Pages, $cpt2_pg_5);
	array_push ($chapter2->Pages, $cpt2_pg_6);
	array_push ($chapter2->Pages, $cpt2_pg_7);
	array_push ($chapter2->Pages, $cpt2_pg_8);
	



?>
