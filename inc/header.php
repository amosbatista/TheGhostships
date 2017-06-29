<!-- HEADER -->
<div class="header">

	<?php 

		$linkContent = '';

		// Set a link to HOME page, if user is away of it.
		if (basename($_SERVER['PHP_SELF']) != "index.php"){
			$linkContent = 'href=index.php?SHOW_PAGE=TRUE';
		}
		else{
			$linkContent = 'href="#" class="menu-toggle"';
		}

		echo '<a ' . $linkContent . '>';
		echo '<img id="comic-logo" class="main-menu-logo" src="img\the-ghostships\site-content\logotipo_nave1_transparante.png" />';
		echo '</a>';

		echo '<a ' . $linkContent . '>';
		echo '<h1 class="main-menu-title">';
		echo 'The Ghostships';
		echo '</h1>';
		echo '</a>';		

	?>

	
	<div class="social-media-bar-container">
	
		<ul class="social-media-bar">
			<li class="social-media-bar-list">
				<a class="social-media-bar-icon" href="https://www.facebook.com/Ghostships-1183663534992618/">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
				</a>
			</li>
			
			<li class="social-media-bar-list">
				<a class="social-media-bar-icon" href="https://twitter.com/amosbatista">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			</li>
			
			<li class="social-media-bar-list">
				<a class="social-media-bar-icon" href="http://amosbatista.com/">
					<i class="fa fa-tumblr" aria-hidden="true"></i>
				</a>
			</li>
			
		</ul>
	</div>
		
</div>