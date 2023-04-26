<?php if (isset($categoria)): ?>
	<h1><?=$categoria->nombre?></h1>
	<?php if ($productos->num_rows == 0): ?>
		<p>There are no products to display.</p>
	<?php else: ?>

		<div class="products">

			<?php while ($product = $productos->fetch_object()): ?>

				<div class="product-box">
					<div class="product">
								<a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
									<?php if ($product->imagen != null): ?>
										<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" />
									<?php else: ?>
										<img src="<?=base_url?>assets/img/camiseta.png" />
									<?php endif;?>
								</a>
							<div class="product-content">
									<h2><?=$product->nombre?></h2>
								<div class="price">
									<p>€<?=$product->precio?></p>
								</div>
							</div>
								<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Buy now</a>
					
							
					</div>
				</div>
			<?php endwhile;?>
		</div>
	<?php endif;?>
<?php else: ?>
	<h1>The category does not exist</h1>
<?php endif;?>
