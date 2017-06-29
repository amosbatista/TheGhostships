<!DOCTYPE html>
<html lang="pt-BR">
	
	<!-- HEAD -->
	<?php include 'inc/head.php';?>

	<body>
		
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
					<h2><a href="#" class="title internal-menu-toggle">Mídia social</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- SOCIAL MEDIA DESCRIPTION -->
			<div class="info-page-content">
				<p class="default-text">Todas as novidades de The Ghostships e de seu autor estarão disponibilizadas nas redes sociais. </p>
				<p class="default-text">Não se preocupe, quase não haverá notícias repetidas nas redes. Para cada uma delas, haverá um tipo de informação definido.</p>
			</div>
			

			<!-- TWITTER -->
			<div class="social-media-element">

				<h3 class="title title-paragraph central-paragraph">
					<a href="https://twitter.com/amosbatista?ref_src=twsrc%5Etfw" class="social-media-bar-icon bg-purple basic-button contribute-button">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</h3>
				
				<div class="info-page-content">
					<p class="default-text">Notícias breves, comentários diversos do autor, interação da própria página com 'memes', 'trends', ou qualquer bobeira que dê para perder um pouquinho de tempo. Ninguém é de ferro. :)</p>
					<p class="default-text">O Twitter é uma ferramenta poderosa de mini-blogs, onde podemos ter acesso a movimentos sociais ocorrendo em tempo real.</p>
				</div>

				<a class="twitter-timeline" data-width="220" data-height="500" data-theme="dark" data-link-color="#9266CC" href="https://twitter.com/amosbatista">Tweets by amosbatista</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>


			
			<!-- FACEBOOK -->
			<div class="social-media-element">

				<h3 class="title title-paragraph central-paragraph">
					<a href="https://www.facebook.com/Ghostships-1183663534992618/" class="social-media-bar-icon bg-purple basic-button contribute-button">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
				</h3>
				
				<div class="info-page-content">
					<p class="default-text">A página oficial no Facebook receberá as notícias mais importantes, e, às vezes, conteúdo exclusivo.</p>
					<p class="default-text">O autor não poderia ficar de fora da rede social mais poderosa da atualidade. Com o recurso de páginas cada vez mais poderoso, é possível interagir mais com você, leitor. Aproveite e nos siga nesta rede.</p>
				</div>

				<div class="fb-page" data-href="https://www.facebook.com/Ghostships-1183663534992618/" data-tabs="timeline" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Ghostships-1183663534992618/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Ghostships-1183663534992618/">Ghostships</a></blockquote></div>
			</div>

			
			<!-- TUMBLR -->
			<div class="social-media-element">

				<h3 class="title title-paragraph central-paragraph">
					<a href="http://amosbatista.com/" class="social-media-bar-icon bg-purple basic-button contribute-button">
						<i class="fa fa-tumblr" aria-hidden="true"></i>
					</a>
				</h3>
				
				<div class="info-page-content">
					<p class="default-text">Aqui, será disponibilizada várias artes do autor, relacionadas ou não à "The Ghostships".</p>
					<p class="default-text">O autor mantém o seu blog pessoal dentro desta ferramenta, gratuita e de fácil uso. Siga-o na página e acompanhe o seu próprio conteúdo social.</p>
				</div>
			</div>


			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>