
<ul class="menu-list">
	
	<li>
		<a href="#" class="sub-title" id="aboutLinkSubMenu">Sobre...</a>
	</li>
	
	<li>
		<a href="#" class="sub-title help-popup-open">Ajuda</a>
	</li>
	
	<li>
		<a href=<?php echo generateMenuLink($chapterList, 'chapters.php'); ?> class="sub-title">Capítulos</a>
	</li>
	
	<li>
		<a href=<?php echo generateMenuLink($chapterList, 'social-media.php'); ?> class="sub-title">Mídia Social</a>
	</li>
	
	<li>
		<a href=<?php echo generateMenuLink($chapterList, 'license.php'); ?> class="sub-title">Licença</a>
	</li>
	
	<li>
		<a href=<?php echo generateMenuLink($chapterList, 'contribute.php'); ?> class="sub-title">Contribua</a>
	</li>
	
	<!--<li>
		<a href=<?php //echo generateMenuLink($chapterList, 'set-url-default.php'); ?> class="sub-title">Contato</a>
	</li>-->
	
	<li>
		<a href="#" class="sub-title menu-toggle">Voltar a ler</a>
	</li>
	
	<div class="sub-menu bg-dark-purple" id="sub-menu-about">
	
	<ul class="menu-list">
		<!--<li>
			<a href=<?php //echo generateMenuLink($chapterList, 'about-chars.php'); ?> class="sub-title">Os personagens</a>
		</li>
		<li>
			<a href=<?php //echo generateMenuLink($chapterList, 'about-history.php'); ?> class="sub-title">A história</a>
		</li>-->
		<li>
			<a href=<?php echo generateMenuLink($chapterList, 'about-page.php'); ?> class="sub-title">A página</a>
		</li>
		<li>
			<a href=<?php echo generateMenuLink($chapterList, 'about-author.php'); ?> class="sub-title">O autor</a>
		</li>
		
	</ul>
	
</ul>
