<!DOCTYPE html>
<html lang="pt-BR">
	
	<!-- HEAD -->
	<?php 
		include 'inc/head.php';
	?>

	<body>
				
		<!-- DEVELOPER MODE (PAGE CONFIGURATOR) -->
		<?php //include 'inc/page-setter.php';?>
		
		<!-- HELP POP-UP -->
		<?php include 'inc/help.php';?>
		
		<!-- PAGE INFO -->
		<?php include 'inc/page-info.php';?>
		
		<!-- COMIC PAGE -->
		<?php include 'inc/comic-page.php';?>
		
		<!-- CONTENT -->
		<div class="container gradient-menu-open

			<?php 

				// If the page URL comes with an indication of show the menu directly, insert the CSS class to the container
				if ( isShowPageShow()) {
					echo "show-page";
				}
			?>
		">
			
			<!-- HEADER -->
			<?php include 'inc/header.php';?>
			
			<!-- BREADCRUMB -->
			<ul class="breadcrumb">
				
				<li class="title">
					<h2 class="title">Menu</h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<div class="menu">
				<?php include 'inc/menu.php';?>
			</div>

			<!--	
			<hr class="horizontal-bar purple-bar"/>
			
			<!-- NEWS TOP 3 - ->			
			<h2 class="title title-paragraph">
				Notícias
			</h2>
			
			<h3 class="sub-title title-paragraph">A ameaça real - Lançamento Mundial - 12/01/2016</h3>
			<p class="default-text news-paragraph">Sempre que eles veem a este lugar, tenho uma sansação desagradável de desanimo, apesar de empatia...</p>
			
			<h3 class="sub-title title-paragraph">Nova página lançada - 12/01/2016</h3>
			<p class="default-text news-paragraph">Sempre que eles veem a este lugar, tenho uma sansação desagradável de desanimo, apesar de empatia...</p>
			
			<h3 class="sub-title title-paragraph">A ameaça real - Lançamento Mundial</h3>
			<p class="default-text news-paragraph">Sempre que eles veem a este lugar, tenho uma sansação desagradável de desanimo, apesar de empatia...</p>
			-->

			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>	
</html>