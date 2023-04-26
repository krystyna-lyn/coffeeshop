<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
	<h1>Your order has been confirmed</h1>
	<p>
	Your order has been saved successfully, once you make the transfer
	bank to the account 7382947289239ADD with the cost of the order, it will be processed and sent.
	</p>
	<br/>
	<?php if (isset($pedido)): ?>
		<h3>Order data:</h3>

		Order number: <?= $pedido->id ?>   <br/>
		Total to pay: <?= $pedido->coste ?> $ <br/>
		Products:

		<table>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<?php while ($producto = $productos->fetch_object()): ?>
				<tr>
					<td>
						<?php if ($producto->imagen != null): ?>
							<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
						<?php else: ?>
							<img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
						<?php endif; ?>
					</td>
					<td>
						<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
					</td>
					<td>
						<?= $producto->precio ?>
					</td>
					<td>
						<?= $producto->unidades ?>
					</td>
				</tr>
			<?php endwhile; ?>
		</table>

	<?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Your order could NOT be processed</h1>
<?php endif; ?>
