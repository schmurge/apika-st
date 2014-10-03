<ul class="list-group" id="left-tree">
	<?php foreach ($groups as $gk=>$group) : ?>
		<li class="list-group-item"><?php echo $group; ?></li>
		<?php foreach ($products as $product) : ?>
			<?php if ($product['menu']['group'] == $gk && !empty($product['menu']['label'])) : ?>
				<li class="list-group-item sub">
					<a href="/catalog.php?product=<?php echo $product['id']; ?>">
						<?php echo $product['menu']['label']; ?>
					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endforeach; ?>
</ul>
<?php if (!isset($isIndexPage) || $isIndexPage !== true) : ?>
<p class="left-tree-desc">Представленные фотографии офисных перегородок, межкомнатных дверей, душевых кабин, зеркал и кухонных фартуков (скинали) являются примерами выполняемых компанией "АПИКА Строй" заказов на изготовление и установку подобных конструкций. Внешний вид и технические характеристики каждого заказа полностью зависят от пожеланий заказчика и могут существенно отличаться от представленного на изображениях.</p>
<?php endif; ?>