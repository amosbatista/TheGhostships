<!-- COMIC OBJECT -->
<svg class="comic-image-component" id="theSvgComponent" preserveAspectRatio="xMinYMin slice"
xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="1 1 700 500">

	<!--  GRADIENT DEFINITION-->
	<defs>
		<radialGradient id="pageGradient" cx="50%" cy="50%" r="75%" fx="50%" fy="50%">
			<stop offset="50%" style="stop-color:rgb(0,0,0);stop-opacity:0" />
			<stop offset="100%" style="stop-color:rgb(0,0,0);stop-opacity:0.55" />
		</radialGradient>				
	</defs>
	
	<!-- THE IMAGE -->
	<image id="theComicPage" class="comic-page" xlink:href="" x="0" y="0" height="100%" width="100%" />
	
	<!-- GRADIENT APPLYIED TO IMAGE -->
	<rect x="0" y="0" width="100%" height="100%" fill="url(#pageGradient)" />		
</svg>
	
	<!-- PAGE OPTIONS -->
<div class="comic-page-options" id="comicPageFrontCommand">
	
	<!-- MENU / CLOSE PAGE BUTTON -->
	<a href="#" class="button-menu screen-menu-button icon menu-toggle" id="btnMenuButton">
		<span>
		
			<i class='fa fa-sort' aria-hidden='true'></i>
			
		</span>
		
		<span class="tooltip tooltip-show-left bg-dark-purple" id="tooltipMenu">
			Mudar modo de visualização
		</span>
	</a>
	
	<!--
	<a href="#" class="screen-menu-button button-help icon">
		<span>
			<i class="fa fa-question" aria-hidden="true"></i>
		</span>
		
		<span class="tooltip tooltip-show-left bg-dark-purple">
			Ajuda para navegar?
		</span>
	</a>
	
	
	<a href="#" class="button-translation screen-menu-button icon">
		<span>
			<i class="fa fa-globe" aria-hidden="true"></i>
		</span>
		
		<span class="tooltip tooltip-show-right bg-dark-purple">
			Translate to English
		</span>
	</a>
	
	<a href="#"  class="icon screen-menu-button button-visualization">
		<span class="">
			<i class="fa fa-eye" aria-hidden="true"></i>
		</span>
		<span class="tooltip tooltip-show-left bg-dark-purple">
			Mudar modo de visualização
		</span>
	</a>
	-->
	
	<!-- PAGE NAV -->
	<a href="<?php echo getPrevLink($chapterList);?>" class="screen-menu-button button-prev-page icon" id="btnPrevButton" onClick="return true;">
		<span class="">
			<i class="fa fa-fast-backward" aria-hidden="true"></i>
		</span>
	</a>
	
	<a href="<?php echo getNextLink($chapterList);?>" class="screen-menu-button button-next-page icon" id="btnNextButton" onClick="return true;">
		<span class="">
			<i class="fa fa-fast-forward" aria-hidden="true"></i>							
		</span>
	</a>
	
	<!-- INFORMATION PAGE -->
	<a href="#" class="screen-menu-button button-info icon" id="btnPageInfo">
		<span class="">
			<i class="fa fa-info-circle" aria-hidden="true"></i>							
		</span>
	</a>
	
	<!-- HELP -->
	<a href="#" onClick="return false;" class="screen-menu-button button-help icon help-popup-open" >
		<span class="">
			<i class="fa fa-question" aria-hidden="true"></i>							
		</span>
	</a>
	
</div>