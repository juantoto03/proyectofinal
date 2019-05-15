<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/mystyle.css" />
  <link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Bienvenido a Electro-SHOP!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
            <li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
                <option value="0">Todas las Categorias</option>
                <option value="1">Focos</option>
                <option value="1">Tubos de LED</option>
                <option value="1">Luminaria de LED</option>
                <option value="1">Iluminacion Decorativa</option>
                <option value="1">Toras de LED</option>
                <option value="1">Linea Solar</option>
                <option value="1">Alumbrado Publico</option>
                <option value="1">Accesorios</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
                <strong class="text-uppercase">Mi Cuenta <i class="fa fa-caret-down"></i></strong>
							</div>
              <a class="text-uppercase pointer" data-toggle="modal" data-target="#myModal">Login</a> / <a href="session/logout.php" class="text-uppercase">Join</a>
              <!-- The Modal -->
							<div class="modal fade" id="myModal">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Iniciar Secion</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<!-- Modal body -->
										<div class="modal-body">
											<div class="">
												<form class="" action="session/loginsession.php" method="post">
													<div class="form-group">
														<label for="email">Usuario:</label>
	    											<input type="text" class="form-control" name="user">
													</div>
													<div class="form-group">
	    											<label for="pwd">Password:</label>
	    											<input type="password" class="form-control" name="pwd">
	  											</div>
													<div class="text-center">
														<button type="submit" class="btn btn-secondary">Login</button>
													</div>
	          						</form>
											</div><br>
											<div class="text-left">
												<h6><a href="#">Recuperar Contraseña</h6>
											</div>
        						</div>
        						<!-- Modal footer -->
        						<div class="modal-footer">
          						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        						</div>
      						</div>
    						</div>
  						</div>
              <!-- /The Modal -->
              <ul class="custom-menu">
                <li><a href="#"><i class="fa fa-user-o"></i> Mi Cuenta</a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i> Mi lista de deseos</a></li>
                <li><a href="#"><i class="fa fa-exchange"></i> Comparar</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Revisar</a></li>
                <li><a href="register.php"><i class="fa fa-user-plus"></i> Crear una Cuenta</a></li>
              </ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">Mi Carrito:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categorias <i class="fa fa-list pointer"></i></span>
					<ul class="category-list">
            <li class="dropdown side-dropdown ">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Focos <i class="fa fa-angle-right pointer"></i></a>
							<div class="custom-menu menu">
								<div class="row">
									<div class="col-md-8">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categorias</h3></li>
											<li><a href="#">Iluminacion</a></li>
											<li><a href="#">12 V cc</a></li>
											<li><a href="#">Decorativas</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown side-dropdown ">
							<a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Tubos de LED <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categorias</h3></li>
											<li><a href="#">Tubos</a></li>
											<li><a href="#">Regletas</a></li>
											<li><a href="#">Decorativo</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown side-dropdown ">
							<a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Luminario de LED <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu menu">
								<div class="row">
									<div class="col-md-8">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categorias</h3></li>
											<li><a href="#">Interior</a></li>
											<li><a href="#">Exterior</a></li>
											<li><a href="#">Uso industrial</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Iluminacion Decorativa</a></li>
						<li><a href="#">Tiras de LED</a></li>
						<li><a href="#">Linea Solar</a></li>
						<li><a href="#">Alumbrado Publico</a></li>
						<li><a href="#">Accesorios</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
        <div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="#">Lo Nuevo</a></li>
						<li><a href="#">Ofertas</a></li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle pointer" data-toggle="dropdown" aria-expanded="true">Paginas <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.php">Inicio</a></li>
								<li><a href="products.html">Productos</a></li>
								<li><a href="product-page.html">Detalle de Productos</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Blank</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
