<?php
	session_start();
	$mensaje="";

	if(isset($_POST['btnAccion'])) {
		switch ($_POST['btnAccion']) {
			case 'Agregar':
				if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
					$NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
					$mensaje="OK Nombre Correcto".$NOMBRE;
				}else {
					$mensaje="Error! Nombre Incorrecto".$NOMBRE;
				}

				if(is_string(openssl_decrypt($_POST['modelo'],COD,KEY))) {
					$MODELO=openssl_decrypt($_POST['modelo'],COD,KEY);
					$mensaje="OK Nombre Correcto".$MODELO;
				}else {$mensaje="Error! modelo Incorrecto".$MODELO; break;}

				if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
					$PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
					$mensaje="OK Nombre Correcto".$PRECIO;
				}else {$mensaje="Error! precio Incorrecto".$PRECIO; break;}

				if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
					$CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
					$mensaje="OK Nombre Correcto".$CANTIDAD;
				}else {$mensaje="Error! cantidad Incorrecto".$CANTIDAD; break;}

				if(!isset($_SESSION['CARRITO'])) {
					$producto=array(
						'NOMBRE'=>$NOMBRE,
						'MODELO'=>$MODELO,
						'PRECIO'=>$PRECIO,
						'CANTIDAD'=>$CANTIDAD,
					);
					$_SESSION['CARRITO'][0]=$producto;
				}else {
					$NumeroProductos=count($_SESSION['CARRITO']);
					$producto=array(
						'NOMBRE'=>$NOMBRE,
						'MODELO'=>$MODELO,
						'PRECIO'=>$PRECIO,
						'CANTIDAD'=>$CANTIDAD,
					);
					$_SESSION['CARRITO'][$NumeroProductos]=$producto;
				}

			break;

			case 'Eliminar':

				if(is_string(openssl_decrypt($_POST['modelo'],COD,KEY))) {
					//$mensaje= print_r( $_POST['modelo']);
						$MODELO=openssl_decrypt($_POST['modelo'],COD,KEY);
					foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
						if ($producto['MODELO']==$MODELO) {
							unset($_SESSION['CARRITO'][$indice]);
							echo "<script>alert('Elemento Borrado');</script>";
						}
					}
				}else {
					$mensaje.="Error! Modelo Incorrecto".$MODELO;
				}
			break;
		}
	}
?>
