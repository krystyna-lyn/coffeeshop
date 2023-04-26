<?php if (isset($gestion)): ?>
	<h1>Edit orders</h1>
<?php else: ?>
	<h1>My products</h1>
<?php endif; ?>
<table>
	<tr>
		<th>Nº Order</th>
		<th>Price</th>
		<th>Date</th>
		<th>Status</th>
	</tr>
	<?php
	while ($ped = $pedidos->fetch_object()):
		?>

		<tr>
			<td>
				<a href="<?= base_url ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
			</td>
			<td>
				<?= $ped->coste ?> $
			</td>
			<td>
				<?= $ped->fecha ?>
			</td>
			<td>
				<?=Utils::showStatus($ped->estado)?>
			</td>
		</tr>

	<?php endwhile; ?>
</table>