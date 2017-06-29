<?php 
	
	
	// IMPORTS
	require('chapter1-page1.php');
	require('chapter1-page2.php');
	require('chapter1-page3.php');
	require('chapter1-page4.php');
	require('chapter1-page5.php');
	require('chapter1-page6.php');
	require('chapter1-page7.php');
	require('chapter1-page8.php');
	require('chapter1-page9.php');
	require('chapter1-page10.php');

	
	// DESCRIPTIONS
	$title_PT = new InternationalText(1, $idiom_pt, 'O primeiro fantasma');
	$description_PT = new InternationalText(1, $idiom_pt, 'Precisando de dinheiro, Lumi aceita trabalhar para Tarsi num trabalho sujo: ir atrás de uma nave de guerra abandonada, e provavelmente destruída.');


	// Create a new chapter
	$chapter1 = new Chapter();


	// Setting objects to the chapter
	array_push ($chapter1->Title, $title_PT);
	array_push ($chapter1->Description, $description_PT);

	array_push ($chapter1->Pages, $pg_1);
	array_push ($chapter1->Pages, $pg_2);
	array_push ($chapter1->Pages, $pg_3);
	array_push ($chapter1->Pages, $pg_4);
	array_push ($chapter1->Pages, $pg_5);
	array_push ($chapter1->Pages, $pg_6);
	array_push ($chapter1->Pages, $pg_7);
	array_push ($chapter1->Pages, $pg_8);
	array_push ($chapter1->Pages, $pg_9);
	array_push ($chapter1->Pages, $pg_10);



?>
