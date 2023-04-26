<h1>Edit products</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
	Create product
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<strong class="alert_green">The product has been created successfully</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>	
	<strong class="alert_red">The product has NOT been created correctly</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>
	
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">The product has been deleted successfully</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">The product has NOT been deleted correctly</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
	
<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>PRICE</th>
		<th>STOCK</th>
		<th>ACTION</th>
	</tr>
	<?php while($pro = $productos->fetch_object()): ?>
		<tr>
			<td><?=$pro->id;?></td>
			<td><?=$pro->nombre;?></td>
			<td><?=$pro->precio;?></td>
			<td><?=$pro->stock;?></td>
			<td>
				<a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-gestion">Edit</a>
				<a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>
