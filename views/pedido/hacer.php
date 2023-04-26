<?php if (isset($_SESSION['identity'])): ?>
	<h1>Order now</h1>
	<p>
		<a href="<?= base_url ?>carrito/index">Show the products and the price of the order</a>
	</p>
	<br/>
	
	<h3>Shipping address:</h3>
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="provincia">Province</label>
		<input type="text" name="provincia" required />
		
		<label for="ciudad">City</label>
		<input type="text" name="localidad" required />
		
		<label for="direccion">Address</label>
		<input type="text" name="direccion" required />
		
		<input type="submit" value="Confirm order" />
	</form>
		
<?php else: ?>
	<h1>You need to be identified</h1>
	<p>You need to be logged into the web to be able to place your order</p>
<?php endif; ?>


