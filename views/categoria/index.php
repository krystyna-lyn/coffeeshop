<h1>Edit categories</h1>

<a href="<?=base_url?>categoria/crear" class="button btn-create">
	Create category
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table>
