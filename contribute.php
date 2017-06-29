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
					<h2><a href="#" class="title internal-menu-toggle">Contribua</a></h2>
				</li>
				
			</ul>
			
			<!-- MENU -->
			<?php include 'inc/menu-outside-index.php';?>
			
			<!-- CONTRIBUTE -->
			<div class="info-page-content">
				<p class="default-text">Eu abro um espaço para que você possa contribuir com o site. Se você gostou do quadrinho, faça uma doação para nós! Cada ajuda de nossos leitores será um incentivo a mais para continuarmos esta história. Mas não se preocupe se você não puder contribuir, ou se não quiser doar! Não haverá nenhuma limitação para você acessar o site, ou alguma limitação de licenciamento. Fique à vontade. Muito obrigado.
				</p>
				
			</div>
			
			<div class="contribuition-content">
				<h2>
					<span>
						<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=UMWVP8ARREUWU&amp;lc=BR&amp;item_name=Amos-Batista&amp;currency_code=USD&amp;PP-DonationsBF:btn_donateCC_LG.gif:NonHosted" class="icon-news basic-button contribute-button">
							<i class="fa fa-paypal" aria-hidden="true"></i>
						</a>
					</span>
					<span class="sub-title"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=UMWVP8ARREUWU&amp;lc=BR&amp;item_name=Amos-Batista&amp;currency_code=USD&amp;PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">Donation in Dollar (US$)</a></span>
				</h2>	
			</div>
			
			<div class="contribuition-content">
				<h2>
					<span>
						<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=UMWVP8ARREUWU&amp;lc=BR&amp;item_name=Amos%20Batista&amp;currency_code=BRL&amp;bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted" class="icon-news basic-button contribute-button">
							<i class="fa fa-paypal" aria-hidden="true"></i>
						</a>
					</span>
					<span class="sub-title"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=UMWVP8ARREUWU&amp;lc=BR&amp;item_name=Amos-Batista&amp;currency_code=USD&amp;PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">Doações em Reais (R$)</a></span>
				</h2>	
			</div>
			
			
				
			
			<!-- FOOTER -->
			<?php include 'inc/footer.php';?>
			
		</div>
		
		<!-- SCRIPTS -->
		<?php include 'inc/scripts.php';?>
	</body>
	
</html>