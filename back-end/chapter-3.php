<?php 
	
	
	// IMPORTS
	require('chapter3-page1.php');
	require('chapter3-page2.php');
	


	
	// DESCRIPTIONS
	$title_PT = new InternationalText(1, $idiom_pt, 'Rumores de Guerra');
	$description_PT = new InternationalText(1, $idiom_pt, 'Durante a viagem, um grupo armado interrompe a viagem deles. Percebem o quão perigoso está o mundo que vivem, apesar de tão perto de seu destino.');


	// Create a new chapter
	$chapter3 = new Chapter();


	// Setting objects to the chapter
	array_push ($chapter3->Title, $title_PT);
	array_push ($chapter3->Description, $description_PT);

	array_push ($chapter3->Pages, $cpt3_pg_1);
	array_push ($chapter3->Pages, $cpt3_pg_2);

	



?>
