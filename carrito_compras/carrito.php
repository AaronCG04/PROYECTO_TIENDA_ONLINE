<?php

session_start();

if (!isset($_SESSION['usuario'])) {
	echo '
	<script>
	alert("Debes iniciar sesion");
	window.location="../inicio/loginregistro/index.php";
	</script>
	';
	session_destroy();
	die();
}
//session_destroy();

?>
<?php
	require "conexion.php";
	if(isset($_GET["producto"])){
		/*echo '<script>
		alert("si llego");
		</script>';*/
		$verificar_ca='select id_carrito from carrito where id_cliente="'.$_GET["id_cliente"].'";';
		$conss=mysqli_query($conexion,$verificar_ca);
		$num=mysqli_num_rows($conss);
		/*echo '<script>
		alert("'.$num.'");
		</script>';*/
		if($num==1){
			/*echo '<script>
			alert("entre en creado");
			</script>';*/
			$filas=mysqli_fetch_array($conss);
			$con_pro='select precio from productos where id_producto="'.$_GET["producto"].'";';
			$conss=mysqli_query($conexion,$con_pro);
			$f_pro=mysqli_fetch_array($conss);
			/*echo '<script>
			alert("'.$f_pro["precio"].'->precio");
			</script>';*/
			$insertar_pro_car='insert into carrito_producto values("'.$filas["id_carrito"].'","'.$_GET["producto"].'",1,'.$f_pro["precio"].');';
			/*echo '<script>alert("'.$_GET["producto"].'->consul");</script>';*/
			$conss=mysqli_query($conexion,$insertar_pro_car);
			/*echo '<script>
			alert("'.$conss.'->insertado");
			</script>';*/
		}else{
			/*echo '<script>
			alert("'.$_GET["id_cliente"].'--->'.$_GET["id_cliente"].'");
			</script>';*/
			$crear_carrito='insert into carrito values("CA'.$_GET["id_cliente"].'","'.$_GET["id_cliente"].'");';
			$conss=mysqli_query($conexion,$crear_carrito);
			/*echo '<script>
			alert("'.$conss.'--->crear");
			</script>';*/
			$verificar_ca='select id_carrito from carrito where id_cliente="'.$_GET["id_cliente"].'";';
			$conss=mysqli_query($conexion,$verificar_ca);
			$filas=mysqli_fetch_array($conss);
			$con_pro='select precio from productos where id_producto="'.$_GET["producto"].'";';
			$conss=mysqli_query($conexion,$con_pro);
			$f_pro=mysqli_fetch_array($conss);
			$insertar_pro_car='insert into carrito_producto values("'.$filas["id_carrito"].'","'.$_GET["producto"].'",1,'.$f_pro["precio"].');';
			$conss=mysqli_query($conexion,$insertar_pro_car);
			/*echo '<script>
			alert("'.$num.'");
			</script>';*/
		}
	}else{
		/*echo '<script>
		alert("no se envio");
		</script>';*/
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>MI CARRITO</title>
  <link rel="stylesheet" type="text/css" href="estilog.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"><!--Precio y nombre producto    font-family: 'Bebas Neue', cursive;-->
  <link rel="shortcut icon" href="imagenes/icono.ico">
</head>
<body>
	<div id="principal">
	  <header>
			<div id="logo">
				<img src="imagenes/deer_icon.jpg" id="logo_im" />
				<div id="nombre">
				
			</div>
			</div>
			
			<div id="opciones">
				<ul>
					<a href="../iniciocliente.php?id_cliente=<?php echo $_GET["id_cliente"]?>"><li>
						INICIO
					</li></a>
					<a href="../iniciocliente.php?id_cliente=<?php echo $_GET["id_cliente"]?>"><li>
						PRODUCTO NUEVO
					</li></a>
					<a href="#"><li>
						CONTACTO
					</li></a>
					<a href="#"><li>
						SOPORTE
					</li></a>
				</ul> 	
			</div>
	  </header>
	  <!--<div id="imagen_inicio">
			  <img src="imagenes/portada.png">
		  </div>-->
	<div id="contenido">
		<div id="titulo">CARRITO DE COMPRAS <img style="width: 32px;height: 20px;"src="imagenes/c.png"></div>
		<?php
			$cliente=$_GET["id_cliente"];
			$consulta='select p.imagen,p.id_producto,cl.id_cliente,p.imagen,p.nombre_producto,p.precio,cp.cantidad_pro,cp.total from cliente cl join carrito ca on 
			ca.id_cliente=cl.id_cliente join carrito_producto cp on cp.id_carrito=ca.id_carrito join 
			productos p on p.id_producto=cp.id_producto where cl.id_cliente="'.$cliente.'";';
			$cons=mysqli_query($conexion,$consulta);
			while ($fila=mysqli_fetch_array($cons)) {
				echo '
				<div id="producto">
					<div class="identificador"><p class="ide">'.$fila["id_producto"].'</p></div>
					<div id="img_producto">
						<img style=" width: 68px;height: 88px;" src="data:image/png;base64,'.base64_encode($fila["imagen"]).'"/>
					</div>
					<div id="datos_producto">
						<p style="text-align: left;margin:2% 0;">'.$fila["nombre_producto"].'</p>
						<p id="precios">$'.$fila["precio"].'</p>
					</div>
					<div id="cantidad">
						<p style="margin:-1% 0;">CANTIDAD</p>
						<p style="margin:2% 0;">'.$fila["cantidad_pro"].'</p>
					</div>
					<div id="total">
						<p style="margin:-1% 0;">TOTAL</p>
						<p style="margin:2% 0;">$'.$fila["total"].'</p>
					</div>
					<div id="boton_pagar">
						<form action="sdf" method="post"enctype="multipart/form-data">
							<input type="hidden" name="id_pro_carrito" value="'.$fila["id_producto"].'">
							<input type="submit" class="subir"value="PAGAR">
						</form>
					</div>
				</div>';
			}
		?>
	</div>
</body>
</html>
<?php
	
?>