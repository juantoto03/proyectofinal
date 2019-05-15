<?php
  session_start();
  $varsession = $_SESSION["usuario"];
  if($varsession == null || $varsession = "") {
    header("Location:../admin/login.php");
    exit();
  }
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
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/myjquery.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/mystyle.css" />
  <link type="text/css" rel="stylesheet" href="../css/style.css" />


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
						<a class="logo" href="../index.php">
							<img src="../img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->
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
				<li><a href="../index.php">Home</a></li>
				<li class="active pointer" id="add">Agregar Producto</li>
        <li class="active pointer" id="delete">Eliminar Producto</li>
        <li class="active pointer" id="update">Agregar Existencia de Producto</li>
        <li class="active"><a href="logout.php">Cerrar Sescion</a></li>
			</ul>
		</div>
    <div class="container">
      <?php
        if(isset($_GET["add"]) && $_GET["add"] == 'true') {
          echo "<div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Success!</strong> Producto agregado.
          </div>";
        }
      ?>
    </div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
        <div class="container ocultar" id="add-menu">
          <div class="">
            <h4>Agregar Producto</h4>
          </div>
          <form action="../insert/insert-product.php" method="post">
            <div class="form-group menu">
              <label for="email">Nombre:</label>
              <input type="text" class="form-control" name="nameadd" placeholder="Nombre del producto" required>
            </div>
            <div class="form-group menu">
              <label for="name">Modelo:</label>
              <input type="text" class="form-control" name="model-add" placeholder="Modelo del producto" required>
            </div>
            <div class="form-group menu">
              <label for="description">Descripcion:</label>
              <textarea type="text" class="form-control" name="description-add" placeholder="Descripción del producto" required></textarea>
            </div>
            <div class="form-group menu">
              <label for="price">Precio:</label>
              <input type="number" class="form-control" name="price-add" placeholder="$00.00" required>
            </div>
            <div class="form-group menu">
              <label for="existence">Existencia:</label>
              <input type="number" class="form-control" name="exitence-add" placeholder="000" required>
            </div>
            <div class="form-group menu">
              <label for="line">Linea:</label>
              <input type="text" class="form-control" name="line-add" placeholder="Linea del producto" required>
            </div>
            <div class="">
              <button type="submit" class="btn btn-success">Agregar</button>
            </div>
          </form>
          <!-- The Modal -->
          <div class="modal fade" id="add-Modal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Agregar Producto</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  Se ha agregado el producto exitosamente...
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container ocultar" id="delete-menu">
          <div class="">
            <h4>Eliminar Producto</h4>
            <h5>Ingrese nombre y modelo del producto que desea eliminar</h5>
          </div>
          <form action="delete.php" class="" method="get">
            <div class="form-group menu">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="name-delete">
            </div>
            <div class="form-group menu">
              <label for="modelo">Modelo:</label>
              <input type="text" class="form-control" name="model-delete">
            </div>
            <div class="">
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#delete-Modal">Eliminar</button>
            </div>
          </form>
          <div class="">
          </div>
        </div>
        <div class="container">
          <?php
            if(isset($_GET["errordelete"]) && $_GET["errordelete"] == 'true') {
              echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>ERROR!</strong> No se ha encontrado el producto.
              </div>";
            }if(isset($_GET["delete"]) && $_GET["delete"] == 'true') {
              echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>SUCCESS!</strong> Se ha eliminado el producto.
              </div>";
            }
          ?>
        </div>
        <div class="container ocultar" id="update-menu">
          <div class="">
            <h4>Modificar Producto</h4>
            <h5>Ingrese nombre y modelo del producto que desea modificar</h5>
          </div>
          <form action="search.php" method="get">
            <div class="form-group menu">
              <label for="email">Nombre:</label>
              <input type="text" class="form-control" name="name-update">
            </div>
            <div class="form-group menu">
              <label for="email">Modelo:</label>
              <input type="text" class="form-control" name="model-update">
            </div>
            <div class="">
              <button type="submit" class="btn btn-success">Buscar</button>
            </div>
          </form>
        </div>
        <div class="container">
          <?php
            if(isset($_GET["errorsearch"]) && $_GET["errorsearch"] == 'true') {
              echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>ERROR!</strong> No se encontro el producto.
              </div>";
            }if(isset($_GET["search"]) && $_GET["search"] == 'true') {
              echo "<div class='container' id='update-menu'>
                <h5>Agregar productos a existencia</h5>
                <div>
                  <form action='update.php' method='get'>
                    <div class='form-group menu'>
                      <label for='email'>Existencia:</label>
                      <input type='number' class='form-control' name='number-update'>
                    </div>
                    <button type='submit' class='btn btn-success'>Agregar</button>
                  </form>
                </div>
              </div>";
              //echo "<div class='alert alert-success alert-dismissible'>
                //<button type='button' class='close' data-dismiss='alert'>&times;</button>
                //<strong>SUCCESS!</strong> Se ha actualizado el producto.
              //</div>";
            }
          ?>
        </div>
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
							<a class="logo" href="../index.php">
		            <img src="../img/logo.png" alt="">
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
