<!DOCTYPE HTML>
<html lang="de">

<head>
	<meta charset="utf-8" />
	<title>Onlineshop</title>
	<link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
	<div id="container">
		<!-- Header Section -->
		<div class="header" id="home">
			<nav id="navbar">
				<a href="" class="logo"><img src="<?= base_url ?>assets/img/logo.png" alt=""></a>
				<div class="links" id="nav">
					<a href="#home">Home</a>
					<a href="#products">Products</a>
					<a href="#blog">Blog</a>
					<a href="#service">Services</a>
					<a href="#contact">Contact</a>



					<div id="user">
						<a href="#lateral"><i class="fa-solid fa-user"></a>
						<aside id="lateral">

							<div class="product-box login">
								<div class="product">
									<div id="carrito" class="block_aside">

										<h3>My products</h3>
										<ul>
											<?php $stats = Utils::statsCarrito(); ?>
											<li><a href="<?= base_url ?>carrito/index">Products (<?= $stats['count'] ?>)</a></li>
											<li><a href="<?= base_url ?>carrito/index">Total: <?= $stats['total'] ?> $</a></li>
											<li><a href="<?= base_url ?>carrito/index">Show products</a></li>
										</ul>
									</div>

									<div id="login" class="block_aside">

										<?php if (!isset($_SESSION['identity'])) : ?>
											<h3>Login</h3>
											<form action="<?= base_url ?>usuario/login" method="post">
												<label for="email">E-Mail</label>
												<input type="email" name="email" />
												<label for="password">Password</label>
												<input type="password" name="password" />
												<input type="submit" value="Login" />
											</form>
										<?php else : ?>
											<h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
										<?php endif; ?>

										<ul>
											<?php if (isset($_SESSION['admin'])) : ?>
												<li><a href="<?= base_url ?>categoria/index">Edit categories</a></li>
												<li><a href="<?= base_url ?>producto/gestion">Edit products</a></li>
												<li><a href="<?= base_url ?>pedido/gestion">Show orders</a></li>
											<?php endif; ?>

											<?php if (isset($_SESSION['identity'])) : ?>
												<li><a href="<?= base_url ?>pedido/mis_pedidos">My orders</a></li>
												<li><a href="<?= base_url ?>usuario/logout">Logout</a></li>
											<?php else : ?>
												<li><a href="<?= base_url ?>usuario/registro">Sign Up</a></li>
											<?php endif; ?>
										</ul>
									</div>
								</div>
							</div>

						</aside>

					</div>



				</div>
				<div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
				<div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
			</nav>
		</div>

		<div class="bg">
			<h3>Where every cup is a special occasion</h3>
			<h1>Life's better with <br>coffee</h1>
			<button class="btn">Buy Now</button>
		</div>

		<!-- MENU -->
		<?php $categorias = Utils::showCategorias(); ?>
		<nav id="menu">
			<ul>
				<li>
					<a href="<?= base_url ?>">All</a>
				</li>
				<?php while ($cat = $categorias->fetch_object()) : ?>
					<li>
						<a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
					</li>
				<?php endwhile; ?>
			</ul>
		</nav>


		<div id="content">