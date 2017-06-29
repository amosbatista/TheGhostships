<!DOCTYPE html>
<html lang="pt-BR">
	
	<!-- HEAD -->
		<?php include 'inc/head.php';?>

	<body >
		
		<!-- HELP POP-UP -->
		<?php include 'inc/help.php';?>
		
		<!-- COMIC PAGE -->
		<?php include 'inc/comic-page.php';?>
		
		<div class="container gradient-normal-page <?php 

				// If the page URL comes with an indication of show the menu directly, insert the CSS class to the container
				if ($_GET["SHOW_PAGE"] == "TRUE"){
					echo "show-page";
				}
			?>
		">
			
			<!-- HEADER -->
			<?php include 'inc/header.php';?>
			
			<!-- BREADCRUMB -->
			<ul class="breadcrumb">
				
				<li>
					<a href="#" class="title internal-menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<li>
				<li class="title">
					<h2><a href="#" class="title internal-menu-toggle">Capítulos</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- HISTORY SO FAR -->
			<h3 class="title title-paragraph central-paragraph">A história até agora</h3>
				
			<div class="info-page-content">

				<p class="default-text">
					<?php echo GetChapterDescription($chapterList);?>
				</p>
				
				<p class="sub-title featured-paragraph">
					<a href="index.php?PG=1&CAPT=2">
						Leia esta capítulo, clicando aqui.
					</a>
				</p>
				
				<div class="chapter-list-icon">
					<a href="index.php?PG=1&CAPT=2" class="icon-chapter-operation basic-button">
						<i class="fa fa-book" aria-hidden="true"></i>
					</a>
				</div>
				
				
				<!--<p class="sub-title sub-title-paragraph">
					<a href="#">
						Faça download do capítulo, aqui.
					</a>
					<span class="chapter-icon">
						<a href="#" class="icon-chapter-operation basic-button">
							<i class="fa fa-download" aria-hidden="true"></i>
						</a>
					</span>
				</p>-->
			</div>
			
			<!-- CHAPTERS -->
			<div class="info-page-content">
				<h3 class="title sub-title-paragraph">#1 - O Primeiro Fantasma</h3>
				<a href="index.php?PG=1&CAPT=1"><img src="img\the-ghostships\site-content\chapters\banner-cp1.jpg" class="chapter-img" /></a>
			
				<p class="default-text post-image-fix tab-paragraph">
					Aqui começa a história da perseguição à naves fantasmas, gigantes fragatas de combate ou translado de pessoas ou cargas. Uma atividade que é tanto lucrativa quanto perigosa. Neste ramo cheio de riscos, Lumi tentará a sorte, desejosa de conseguir melhorar a sua vida. 
				</p>
			
				<div class="chapter-list-icon">

					<a href="index.php?PG=1&CAPT=1" class="icon-chapter-operation basic-button">
						<i class="fa fa-book" aria-hidden="true"></i>
					</a>

				</div>
			</div>
			
			<div class="info-page-content">
				<h3 class="title sub-title-paragraph">#2 - Viagem Para Saturno</h3>
				<a href="index.php?PG=1&CAPT=2"><img src="img\the-ghostships\site-content\chapters\banner-cp2.jpg" class="chapter-img" /></a>
			
				<p class="default-text post-image-fix tab-paragraph">
					Para conseguirem chegar até a nave Draketooth, Lumi, Tarsi e Aser deverão decolar para uma base espacial localizada próximo do planeta Saturno. Nesta viagem, perceberão que não é só a sua missão em si, mas o mundo ficou perigoso demais para eles.
				</p>
			
				<div class="chapter-list-icon">

					<a href="index.php?PG=1&CAPT=2" class="icon-chapter-operation basic-button">
						<i class="fa fa-book" aria-hidden="true"></i>
					</a>

				</div>
			</div>
			
			<div class="info-page-content">
				<h3 class="title sub-title-paragraph">#3 - Rumores de Guerra</h3>
				<a href="index.php?PG=1&CAPT=3"><img src="img\the-ghostships\site-content\chapters\banner-cp3.gif" class="chapter-img" /></a>
			
				<p class="default-text post-image-fix tab-paragraph">
					Um misterioso grupo de paramilitares, auto-proclamado Forças Revolucionárias de Zazzanova, invade a nave, e busca um perigoso rebelde. Quem é Zazzanova, afinal? Quem é este rebelde? E por que eles trazem uma lembrança muito amarga para Lumi?
				</p>
			
				<div class="chapter-list-icon">

					<a href="index.php?PG=1&CAPT=3" class="icon-chapter-operation basic-button">
						<i class="fa fa-book" aria-hidden="true"></i>
					</a>

				</div>
			</div>
			
			
			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>