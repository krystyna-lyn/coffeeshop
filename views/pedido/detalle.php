<h1>Order detail</h1>

<?php if (isset($pedido)): ?>
		<?php if(isset($_SESSION['admin'])): ?>
			<h3>Change order status</h3>
			<form action="<?=base_url?>pedido/estado" method="POST">
				<input type="hidden" value="<?=$pedido->id?>" name="pedido_id"/>
				<select name="estado">
					<option value="confirm" <?=$pedido->estado == "confirm" ? 'selected' : '';?>>Pendiente</option>
					<option value="preparation" <?=$pedido->estado == "preparation" ? 'selected' : '';?>>En preparación</option>
					<option value="ready" <?=$pedido->estado == "ready" ? 'selected' : '';?>>Preparado para enviar</option>
					<option value="sended" <?=$pedido->estado == "sended" ? 'selected' : '';?>>Enviado</option>
				</select>
				<input type="submit" value="Cambiar estado" />
			</form>
			<br/>
		<?php endif; ?>

		<h3>Shipping Address</h3>
		Province: <?= $pedido->provincia ?>   <br/>
		City: <?= $pedido->localidad ?> <br/>
		Address: <?= $pedido->direccion ?>   <br/><br/>

		<h3>Order data:</h3>
		Status: <?=Utils::showStatus($pedido->estado)?> <br/>
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