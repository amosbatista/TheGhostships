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
					<h2><a href="#" class="title internal-menu-toggle">Notícias</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- NEWS -->
			<div class="info-page-content">
				<h2>
					<span>
						<a href="#" class="icon-news basic-button">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</span>
					<span class="title">12/01/1988</span>
				</h2>	
			</div>
			
			<div class="info-page-content">
				<p class="default-text">A história até agora: Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam t
				</p>
			</div>
			
			<div class="info-page-content">
				<h2>
					<span>
						<a href="#" class="icon-news basic-button">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</span>
					<span class="title">12/01/1988</span>
				</h2>	
			</div>
			
			<div class="info-page-content">
				<p class="default-text">A história até agora: Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam t
				</p>
			</div>
				
			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>