<?php
	include('conexion.php');
	$v1=$_POST["id_cliente"];
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOTHES SHOP</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
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
				<img src="imagenes/logo.png" id="logo_im" />
				<div id="nombre">
				
			</div>
			</div>
			<div id="opciones">
				<ul>
					<a href=""><li>
						INICIO
					</li></a>
					<a href=""><li>
						PRODUCTO NUEVO
					</li></a>
					<a href=""><li>
						CONTACTO
					</li></a>
					<a href=""><li>
						SOPORTE
					</li></a>
				</ul> 	
			</div>
	  </header>
	  <div id="imagen_inicio">
			  <img src="imagenes/portada.png">
		  </div>

    <br>
	<div class="container">
        <div class="card" style="width: 56rem;">
        <?php 
						$query="SELECT p.imagen, p.nombre_producto, p.precio, p.talla, p.stock, p.color from productos as p where id_categoria='CA-3' and id_tipo='TI-4'";
						$resultado = mysqli_query($conn,$query);
						while($row = mysqli_fetch_array($resultado)) { ?>
							<img src="data:image/png;base64,<?php echo base64_encode($row["imagen"]);?>"/>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombre_producto']; ?></h5>
                            <p class="card-text">Precio: $<?php echo $row['precio']; ?></p>
							<p class="card-text">Talla: <?php echo $row['talla']; ?></p>
                            <p class="card-text">Color: <?php echo $row['color']; ?></p>
                            <p class="card-text">Disponibles: <?php echo $row['stock']; ?></p>  
                            <a href="#" class="btn btn-primary">Añadir a carrito</a>
                            <br>
						<?php } ?>
        
        </div>
    </div>
    
	</body>
</html>	
