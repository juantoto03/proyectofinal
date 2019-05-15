<?php
  include('global/config.php');
  include('carrito.php');
	include('template/cabecera.php');
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
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	<?php
		echo ($mensaje);
	 ?>
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<?php if(!empty($_SESSION['CARRITO'])) { ?>
				<table class="table table-light table-bordered">
					<tbody>
						<tr>
							<th width="30%">Nombre</th>
							<th width="20%" class="text-center">Modelo</th>
							<th width="20%" class="text-center">Cantidad</th>
							<th width="15%" class="text-center">Precio</th>
							<th width="10%" class="text-center">Total</th>
							<th width="5%">--</th>
						</tr>
						<?php $total=0; ?>
						<?php foreach ($_SESSION['CARRITO'] as $indice=>$producto) { ?>
						<tr>
							<td width="30%"><?php echo $producto['NOMBRE']; ?></td>
							<td width="20%" class="text-center"><?php echo $producto['MODELO']; ?></td>
							<td width="20%" class="text-center"><?php echo $producto['CANTIDAD']; ?></td>
							<td width="15%" class="text-center"><?php echo $producto['PRECIO']; ?></td>
							<td width="10%" class="text-center"><?php echo number_format($producto['CANTIDAD']*$producto['PRECIO'],2); ?></td>
							<td width="5%">
							<form class="" action="" method="post">
								<input type="hidden" name="modelo" id="modelo" value="<?php echo openssl_encrypt($producto['MODELO'],COD,KEY); ?>">
								<button class="btn btn-danger" name="btnAccion" type="submit" value="Eliminar">Eliminar</button></td>
							</form>
						</tr>
						<?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']); ?>
					<?php } ?>
						<tr>
							<td colspan="4" aling="right"><h4>Total</h4></td>
							<td aling="right"><h4>$<?php echo number_format($total,2);?></h4></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			<?php }else {
				//<div class="alert alert-success">
					//No hay productos en el carrito...
				//</div>
			} ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<?php
	  include('template/pie.php');
	?>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
