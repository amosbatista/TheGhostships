<?php 
	include "back-end/chapterList.php";
	include 'inc/function-ifPageIsShow.php';
	include 'function-getPageNumber.php';
	include ('title-definition.php');
	include 'set-url-default.php';
	include 'chapter-description.php';
	
	include 'link-generator.php';
 ?>

<head>
	<!-- to help IE recognise the new HTML tags -->
	<!--[if lte IE 8]>
		<script src="/js/old-browsers/html5shiv.js" type="text/javascript"></script>
		<script src="/js/old-browsers/css3-mediaqueries.js" type="text/javascript"></script>
		<script src="/js/old-browsers/modernizr.js" type="text/javascript"></script> 
	<![endif]-->
	
	<?php include ("head-openGraphdata.php");?>
	<meta charset="utf-8" />
	<title><?php echo GetFormattedChapterTitle($chapterList); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content=""/>
	<meta content='<?php echo GetChapterDescription($chapterList); ?>' name="description">
	<meta content="palavras Chave" name="keywords">
	<meta content="PT-BR" name="language">
	<meta content="7 days" name="revisit-after">
	<meta content="global" name="distribution">
	<meta content="all" name="audience">
	<meta content="index, follow" name="robots">
	<meta content="http://theghostships.com/" name="url">
	<meta content="" name="classification">
	<meta content="general" name="rating">
	<meta content="Nome da agência" name="Amós Batista">
	<meta content="Copyright Amós Batista" name="copyright">
	<meta content="no" http-equiv="imagetoolbar">
	<meta content="true" name="MSSmartTagsPreventParsing">
	<meta name="robots" content="All"/>
		
	<link href="humans.txt" rel="author" />
	<link rel="shortcut icon" type="image/png" href=""/>
	
	
</head>