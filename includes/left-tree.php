<ul class="list-group" id="left-tree">
	<?php foreach ($_GROUPS as $group) : ?>
		<li class="list-group-item">
			<?php if (isset($group['productId'])) : ?>
				<a href="/catalog.php?product=<?php echo (int)$group['productId']; ?>"><?php echo $group['label']; ?></a>
			<?php else: ?>
				<a href="/catalog.php?group=<?php echo (int)$group['id']; ?>"><?php echo $group['label']; ?></a>
			<?php endif; ?>
		</li>
		<?php if (isset($group['products']) && !empty($group['products'])) : ?>
			<?php foreach ($group['products'] as $product) : ?>
				<li class="list-group-item sub <?php echo (isset($product['active']) && $product['active'] === true) ? ' active ' : '' ?>">
					<a href="/catalog.php?product=<?php echo $product['productId']; ?>"><?php echo $product['label']; ?></a>
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>
<?php if (!isset($exclude) || $exclude !== true) : ?>
<p class="left-tree-desc">Представленные фотографии офисных перегородок, межкомнатных дверей, душевых кабин, зеркал и кухонных фартуков (скинали) являются примерами выполняемых компанией "АПИКА Строй" заказов на изготовление и установку подобных конструкций. Внешний вид и технические характеристики каждого заказа полностью зависят от пожеланий заказчика и могут существенно отличаться от представленного на изображениях.</p>
<?php endif; ?>