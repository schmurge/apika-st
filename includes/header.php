<div class="row" id="header-row">
	<div class="col-md-4 logo-box">
		<a href="/index.php"><img src="/images/logo2.png"></a>
		<div>АЛЮМИНИЕВЫЕ ПЕРЕГОРОДКИ - ИНДИВИДУАЛЬНОСТЬ, КАЧЕСТВО, АССОРТИМЕНТ</div>
	</div>
	<div class="col-md-8" id="header-contacts">
		<div>ПРОИЗВОДСТВО, ДОСТАВКА, МОНТАЖ</div>
		<div>+7 (926) 324-2966</div>
		<div>+7 (925) 090-6361</div>
		<div id="header-email">zakaz@apikastroy.ru</div>
	</div>
</div>
<div class="row gradient header-horizontal-menu">
	<span class="slogan">ИНТЕРЬЕРНЫЕ ТЕХНОЛОГИИ ДЛЯ ДОМА И ОФИСА</span>
	<ul class="">
		<li class=""><a href="/index.php">ГЛАВНАЯ</a></li>
		<li class=""><a href="/catalog.php">КАТАЛОГ</a></li>
		<li class=""><a href="/services.php">УСЛУГИ</a></li>
		<li class=""><a href="/prices.php">ЦЕНЫ</a></li>
		<li class=""><a href="/contacts.php">ЗАЯВКА И ЗАМЕРЩИК</a></li>
	</ul>
</div>
<?php if (file_exists(CAROUSEL_IMAGES_PATH)) : ?>
	<?php $carouselImagesFolder = new DirectoryIterator(CAROUSEL_IMAGES_PATH); ?>	
	<?php $files = array(); ?>
	<?php foreach ($carouselImagesFolder as $fileInfo) : ?>
		<?php if($fileInfo->isDot()) continue; ?>
		<?php array_push($files, $fileInfo->getFilename()); ?>
	<?php endforeach; ?>
	<?php if (!empty($files)) : ?>
		<div class="row">
 			<div class="owl-carousel">
				<?php foreach ($files as $file) : ?>
					<div class="item"><img src="<?php echo CAROUSEL_IMAGES_URL.$file; ?>" /></div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php  ?>
	<?php endif; ?>
	<?php  ?>
<?php endif; ?>
<div class="row gradient horizontal-bar"><?php echo isset($_HEADER) ? $_HEADER : ''; ?></div>