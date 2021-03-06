<?php

session_start();

if (!isset($_SESSION['usuario'])) {
	echo '
	<script>
	alert("Debes iniciar sesion");
	window.location="inicio/loginregistro/index.php";
	</script>
	';
	session_destroy();
	die();
}
//session_destroy();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Deer shop </title>
    <link rel="shortcut icon" href="images/deer_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">

</head>

<body>
            

    <header>

        <div class="container logo-nav-container">
            <a href="#" class="logo"><img class="logo-deer" src="images/deer_icon.jpg" alt=""></a>
            <nav class="navigation">
                <ul class="menudesplegable">
                    <li><a href="#">Hombre</a>
                        <ul class="submenu">
                            <li><a href="Productos/chamarras.php?id_cliente=<?php echo $_GET["id_cliente"]?>">Chamarras</a></li>
                            <li><a href="#">Zapatos</a></li>
                            <li><a href="#">Pantalones</a></li>
                            <li><a href="#">Playeras</a></li>
                        </ul>
    
                    </li>
                        
                    <li><a href="#">Mujer</a>
                        <ul class="submenu">
                            <li><a href="#">Chamarras</a></li>
                            <li><a href="#">Zapatos</a></li>
                            <li><a href="#">Pantalones</a></li>
                            <li><a href="#">Playeras</a></li>
                        </ul>
    
                    </li>

                    <li><a href="#">Niño/a</a>
                        <ul class="submenu">
                            <li><a href="#">Chamarras</a></li>
                            <li><a href="#">Zapatos</a></li>
                            <li><a href="#">Pantalones</a></li>
                            <li><a href="#">Playeras</a></li>
                        </ul>
    
                    </li>

                </ul>
            </nav>
            <a href="carrito_compras/carrito.php?id_cliente=<?php echo $_GET["id_cliente"]?>" class="logo"><img class="logo-bolsa" src="images/bolsa.png" alt=""></a>
        </div>

        
    </header>
<main>
    <section class="imagen-inicio">
        <div class="wave" style="height: 150px; overflow: hidden;" >
            
            <div style="height: 150px; overflow: hidden;" >
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                  <path d="M-5.92,111.02 C130.07,-67.59 192.71,223.52 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;">
                  </path></svg></div>

        </div>

    </section>


    <section class="contenedor sobre-nosotros">
        <h2 class="titulo">Nuestros producto</h2>
        <div class="galeria-port">

            <div class="imagen-port">
               
                <img src="images/niño1.jpg" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>
                    <p> Todo con Deer</p>
                </div>
            </div>
           

            <div class="imagen-port">
                <img src="images/vestido1_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                    <p> Todo con Deer</p>
                </div>
            </div>

            <div class="imagen-port">
                <img src="images/sudadera1.jpg" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a> 
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/niño3_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/pijama1_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a> 
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/vestido2_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>
                    <p> Todo con Deer</p>
                </div>
        
            </div>
        </div>


    </section>
    <section class="tendencias">
        <div class="contenedor">
            <h2 class="titulo">Tendencias</h2>
            <div class="galeria-port">
                <div class="imagen-port">
                    <a href="#"><img src="images/tenis_correcto.jpg" alt="" href="youtube.com" ></a>
                    <div class="hover-galeria">
                        <a href="#"><img src="images/deer_icon.jpg" alt="" href="youtube.com"> </a>  
                        <p> Todo con Deer</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="images/short1_correct.png" alt="" >
                    <div class="hover-galeria">
                        <img src="images/deer_icon.jpg" alt="">   
                        <p> Todo con Deer</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="images/sudadera5_correct.jpg.png" alt="" >
                    <div class="hover-galeria">
                        <a href="#"><img src="images/deer_icon.jpg" alt=""> </a> 
                        <p> Todo con Deer</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="images/hola.png" alt="" >
                    <div class="hover-galeria">
                        <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                        <p> Todo con Deer</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="images/playera2.png" alt="" >
                    <div class="hover-galeria">
                        <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                        <p> Todo con Deer</p>
                    </div>
                </div>
                <div class="imagen-port">
                    <img src="images/short2_correct.png" alt="" >
                    <div class="hover-galeria">
                       <a href="#"> <img src="images/deer_icon.jpg" alt=""></a>   
                        <p> Todo con Deer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ofertas">
        <h2 class="titulo">OFERTAS</h2>
        
        <div class="galeria-port">
            <div class="imagen-port">
                <img src="images/niño2.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""> </a>  
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/sudadera3_correct1.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/pantalon2.jpg.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/pantalon3_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""> </a>  
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/sudadera6_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt=""></a>   
                    <p> Todo con Deer</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="images/niño4_correct.png" alt="" >
                <div class="hover-galeria">
                    <a href="#"><img src="images/deer_icon.jpg" alt="">  </a> 
                    <p> Todo con Deer</p>
                </div>
            </div>
        </div>


    </section>
   
</main>
<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>contacto</h4>
            <p>Deer.Inc</p>
        </div>
        <div class="content-foo">
            <h4>email</h4>
            <p>Deer@deer.com</p>
        </div>
        <div class="content-foo">
            <h4>Localizacion</h4>
            <p>Jocotitlán,Mexico</p>
        </div>
    </div>
    <h2 class="Titulo Final">&copy; Deer shop</h2>
</footer>
</body>
</html>
