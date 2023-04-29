<!-- BARRA LATERAL -->
<aside id="lateral">

<div class="product-box login">
	<div class="product">
	<div id="carrito" class="block_aside">
		
		<h3>My products</h3>
		<ul>
			<?php $stats = Utils::statsCarrito(); ?>
			<li><a href="<?=base_url?>carrito/index">Products (<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?> $</a></li>
			<li><a href="<?=base_url?>carrito/index">Show products</a></li>
		</ul>
	</div>
	
	<div id="login" class="block_aside">
		
		<?php if(!isset($_SESSION['identity'])): ?>
			<h3>Login</h3>
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">E-Mail</label>
				<input type="email" name="email" />
				<label for="password">Password</label>
				<input type="password" name="password" />
				<input type="submit" value="Login" />
			</form>
		<?php else: ?>
			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>

		<ul>
			<?php if(isset($_SESSION['admin'])): ?>
				<li><a href="<?=base_url?>categoria/index">Edit categories</a></li>
				<li><a href="<?=base_url?>producto/gestion">Edit products</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Show orders</a></li>
			<?php endif; ?>
			
			<?php if(isset($_SESSION['identity'])): ?>
				<li><a href="<?=base_url?>pedido/mis_pedidos">My orders</a></li>
				<li><a href="<?=base_url?>usuario/logout">Logout</a></li>
			<?php else: ?> 
				<li><a href="<?=base_url?>usuario/registro">Sign Up</a></li>
			<?php endif; ?> 
		</ul>
	</div>
	</div>
	</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">