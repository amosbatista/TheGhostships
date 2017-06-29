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
					<h2><a href="#" class="title internal-menu-toggle">A página</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- HISTORY -->
			<h3 class="title title-paragraph central-paragraph">A motivação</h3>
				
			<div class="info-page-content">
				<p class="default-text">Ao contrário da grande maioria das histórias em quadrinhos publicadas na Internet, a idéia por trás de "The Ghostships" começou pelo site. Após conferir várias e várias HQs publicadas na rede, tive a grande idéia de criar uma história própria. </p>
			</div>
			
			<h3 class="title title-paragraph central-paragraph">O problema</h3>
			<div class="info-page-content">
				<p class="default-text">Inicialmente, as páginas da Comic foram feitas pensando no meio físico. Ou seja, o tamanho e layout das páginas ficaria mais adequado para ler em revista. A idéia de criar a página só veio depois, quando já tinha um capítulo pronto. </p>
				<p class="default-text">O principal problema neste caso é a questão da visualização das páginas. Para poder ver toda a página, o leitor teria que se valor de muita rolagem no mouse, muito zoom-in e zoom-out, várias vezes para cada página.</p>
				<p class="default-text">Talvez não pareça ser um problema muito ruim, mas, na mesma forma que é irritante ver um site mal feito, ou ler um livro mal escrito, ter toda esta irritação para ler uma história em quadrinhos é um sinal grave que ninguém se interessará por você.</p>
			</div>
			
			<h3 class="title title-paragraph central-paragraph">A solução</h3>
			<div class="info-page-content">
				<p class="default-text">Mas, ao invés de refazer as páginas que criei, o autor pensou de uma outra forma: Qual a melhor solução para visualização de páginas grandes? Então, ele pensou em dividi as páginas em "mapas".</p>
				<p class="default-text">O conceito é simples: São programados os enquadramentos para cada página. Assim, ao visualizar cada parte desta página, basta o usuário apontar qual o quadro que ele quer ler. O próprio site moverá a página inteira para isto. </p>
				<p class="default-text">O autor acredita que é um conteito distinto das outras WebComics (ele não viu nada parecido em lugar nenhum) e por isto, decidiu ver se esta idéia aperfeiçoará a experiência de leitura de vocês.</p>
				<p class="default-text">Por isto, como ele não tem muita noção de que fez alguma coisa muito genial, ou acabou destruindo uma idéia muito pretencisa que acabou de ocorrer, ele pede a vocês, leitores, que comentem o que acharam de bom e de ruim na página.</p>
			</div>
			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>