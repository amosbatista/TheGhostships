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
					<h2><a href="#" class="title internal-menu-toggle">Os Personagens</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- CHAR IMAGE -->
			<div class="char-image bg-gold">
				<img class="char-image-img" src="img\the-ghostships\site-content\about-chars\exemplo-layout.png">
			</div>
			
			<!-- CHAR TITLE -->
			<h3 class="title title-paragraph central-paragraph">lumi</h3>
			
			<!-- CHAR MAIN INFO -->
			<div class="char-main-info">
				<p class="sub-title">Nome real: Lumina Loren Ipson</p>
				<p class="sub-title">Idade: 30 anos</p>
				<p class="sub-title">Origem: Desconhecida</p>
				<p class="sub-title">Parentesco: Loren Ipson</p>
			</div>
			
			<!-- CHAR COMPLETE INFO -->
			<div class="info-page-content">
				<p class="default-text">	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
				<img src="img\the-ghostships\site-content\about-chars\cap1.jpg" class="char-info-right-floating" />
				<p class="default-text">	Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
				
				<p class="default-text">	Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			</div>
			
			
			<hr class="horizontal-bar purple-bar"/>
			
			<!-- RELATED CONTENT -->
			<h3 class="title title-paragraph">Conteúdo relacionado</h3>
			
			<div class="char-related-content">
			
				<!--<p class="sub-title">
					<a href="#">
						<span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>
						Scketchs
					</a>
				</p>
				
				<p class="sub-title">
					<a href="#">
						<span>
							<i class="fa fa-paint-brush" aria-hidden="true"></i>
						</span>
						Arte final
					</a>
				</p>
				
				<p class="sub-title">
					<a href="#">
						<span>
							<i class="fa fa-paragraph" aria-hidden="true"></i>
						</span>
						Textos
					</a>
				</p>-->
				
			</div>
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>