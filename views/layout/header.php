<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Onlineshop</title>
		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	</head>
	<body>
		<div id="container">
			  <!-- Header Section -->
			  <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo">LOGO <span>.</span></a>
            <div class="links" id="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#blog">Blog</a>
                <a href="#service">Services</a>
                <a href="#team">Team</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
            <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
        </nav>
		</div>

		
<!-- MENU -->
<?php $categorias = Utils::showCategorias(); ?>
			<nav id="menu">
				<ul>
					<li>
						<a href="<?=base_url?>">All</a>
					</li>
					<?php while($cat = $categorias->fetch_object()): ?>
						<li>
							<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>
      

			<div id="content">