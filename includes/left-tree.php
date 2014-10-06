<ul class="list-group" id="left-tree">
	<?php foreach ($groups as $group) : ?>
		<li class="list-group-item"><?php echo $group['label']; ?></li>
		<?php foreach ($_MENU as $menuItem) : ?>
			<?php if ($menuItem['group'] == $group['id'] && !empty($menuItem['label'])) : ?>
				<li class="list-group-item sub <?php echo (isset($menuItem['active']) && $menuItem['active'] === true) ? ' active ' : '' ?>">
					<a href="/catalog.php?product=<?php echo $menuItem['productId']; ?>">
						<?php echo $menuItem['label']; ?>
					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>
</ul>
<?php if (!isset($isIndexPage) || $isIndexPage !== true) : ?>
<p class="left-tree-desc">Представленные фотографии офисных перегородок, межкомнатных дверей, душевых кабин, зеркал и кухонных фартуков (скинали) являются примерами выполняемых компанией "АПИКА Строй" заказов на изготовление и установку подобных конструкций. Внешний вид и технические характеристики каждого заказа полностью зависят от пожеланий заказчика и могут существенно отличаться от представленного на изображениях.</p>
<?php endif; ?>