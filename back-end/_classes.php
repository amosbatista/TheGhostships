<?php
	
	/*
		Idiom object, that will hold the idiom and its ID.
	*/
	class Idiom{
		public $initials; // Will act like an ID
		public $description;

		public function __construct( $_initials = 0, $_description = 0 ){
			$this -> initials = $_initials;
			$this -> description = $_description;
		}
	}

	/*
		Internationalization path.
		Object that represents a comic page file. For each page, a respective translation.
	
	class InternationalPath{
		public $id;
		public $idiom;
		public $path;

		public function __construct($_id, $_idiom, $_path){
			$this -> id = $_id;
			$this -> idiom = $_idiom;
			$this -> path = $_path;
		}
	}
	*/
	/*
		Internationalization text.
		Object that represents any text. That will be show in the any place, as a internal page, or in a description
	*/
	class InternationalText{
		public $id;
		public $idiom;
		public $text;

		public function __construct($_id, $_idiom, $_text){
			$this -> id = $_id;
			$this -> idiom = $_idiom;
			$this -> text = $_text;
		}
	}


	/*Class that represents a map. 
	A map is a coordnate of each part of a page that will be shown in the web comic.
	These coordinates will be set in the SVG component of the webcomic, each time the user interact with the page.
	Also, it will hold its ID, and the IDs of the maps next it. It will help to user navegate between the maps, of each page.*/
	class Map {

		public $X;
		public $Y;
		public $Scale;

		public $id;
		public $MapNext;
		public $MapPrev;
		public $MapAbove;
		public $MapBelow;

		public function __construct($_id, $_x, $_y, $_scale, $_MapNext, $_MapPrev, $_MapAbove, $_MapBelow){
			$this -> X = $_x;
			$this -> Y = $_y;
			$this -> Scale = $_scale;

			$this -> id = $_id;
			$this -> MapNext = $_MapNext;
			$this -> MapPrev = $_MapPrev;
			$this -> MapAbove = $_MapAbove;
			$this -> MapBelow = $_MapBelow;
		}
	}




	/*Class that represents a page.
	Each page holds an ID, a list of maps, a International Page, that contains a page of each translation.
	*/
	class Page{
		public $Maps_Landscape = array();
		public $Maps_Portrait = array();
		public $Paths = array();
	}


	/* Class that represents a Chapter.
	A chapter will keep a Title, a description and its set of pages*/
	class Chapter{
		public $Title = array();
		public $Description = array();
		public $Pages = array();
	}

?>
