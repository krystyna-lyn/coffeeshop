<h1>Our products</h1>

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
					<h2><?=$product->descripcion?></h2>
					<div class="price">
						<p>€<?=$product->precio?></p>
					</div>
				</div>
				<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Buy</a>

				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
			</div>
		</div>
	<?php endwhile;?>

</div>

