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
					<h2><a href="#" class="title internal-menu-toggle">Licença</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			
			<!-- LICENSE -->
			<div class="info-page-content">

				<p class="default-text">
					Esta página está dentro da licença <b>Creative Commons 4.0 Não-Comercial</b>. 
				</p>

				<p class="default-text">
					Isto significa que você está autorizado a utilizar qualquer conteúdo do site, seja texto, imagem, história ou personagem em qualquer trabalho que desejar realizar. Ao utilizar, você poderá modificar qualquer parte da minha obra para seu uso. Mas não será possível utilizar nenhum conteúdo da página para propósitos comerciais, isto é, se for gerar alguma espécie de lucro. E ao utilizar o conteúdo da página, você é obrigado, por lei, a indicar, junto com o seu trabalho, o nome e o link para esta página. 
				</p>

			</div>
			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>