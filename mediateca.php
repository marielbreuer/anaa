<?php
    include("conexion-msql.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleanaa.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Roboto+Condensed:400,400i,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favico.ico">
    <link rel="shorcut icon"  href="favico.png">
    <title>Mediateca</title>
</head>
<body>
        <header>
                <div class="user">
                        <form class="form" action="">
                            <input type="text" name="query" placeholder="Buscar en el sitio..."/>
                            <button class="button">Buscar</button>
                            <button class="button">Iniciar sesión</button>
                        </form>	
                </div>
                <nav class="logomenu">
                    <div class="logo">
                        <!--<img src="ANAA.svg" alt="Logo" width="400px"/>-->
                        <a href="index.html"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 511 129" style="enable-background:new 0 0 511 129;" xml:space="preserve">
<g>
	<path d="M60.13,92.7v-7.71h-7.71v-7.71h-7.71v-7.71h-7.71v-7.71h7.71v-7.71h7.71v-7.71h7.71v-7.71h15.42v7.71h-7.71v7.71h-7.71
		v7.71h-7.71v7.71h7.71v7.71h7.71v7.71h7.71v7.71H60.13z"/>
	<path d="M90.97,84.99h7.71v7.71h-7.71V84.99z M98.68,77.28h7.71v7.71h-7.71V77.28z M106.39,69.57h7.71v7.71h-7.71V69.57z
		 M114.1,61.86h7.71v7.71h-7.71V61.86z M121.8,54.15h7.71v7.71h-7.71V54.15z M129.51,46.44h7.71v7.71h-7.71V46.44z M144.93,38.74
		v7.71h-7.71v-7.71H144.93z"/>
	<path d="M152.64,92.7V54.15h7.71v-7.71h7.71v-7.71h23.13v7.71h7.71v7.71h7.71V92.7h-15.42V77.28h-23.13V92.7H152.64z M168.06,69.57
		h23.13V54.15h-7.71v-7.71h-7.71v7.71h-7.71V69.57z"/>
	<path d="M214.31,92.7V38.74h15.42v7.71h7.71v7.71h7.71v7.71h7.71V38.74h15.42V92.7h-15.42V77.28h-7.71v-7.71h-7.71v-7.71h-7.71
		V92.7H214.31z"/>
	<path d="M275.98,92.7V54.15h7.71v-7.71h7.71v-7.71h23.13v7.71h7.71v7.71h7.71V92.7h-15.42V77.28H291.4V92.7H275.98z M291.4,69.57
		h23.13V54.15h-7.71v-7.71h-7.71v7.71h-7.71V69.57z"/>
	<path d="M337.66,92.7V54.15h7.71v-7.71h7.71v-7.71h23.13v7.71h7.71v7.71h7.71V92.7H376.2V77.28h-23.13V92.7H337.66z M353.07,69.57
		h23.13V54.15h-7.71v-7.71h-7.71v7.71h-7.71V69.57z"/>
	<path d="M407.04,92.7v-7.71h7.71v-7.71h7.71v-7.71h7.71v-7.71h-7.71v-7.71h-7.71v-7.71h-7.71v-7.71h15.42v7.71h7.71v7.71h7.71v7.71
		h7.71v7.71h-7.71v7.71h-7.71v7.71h-7.71v7.71H407.04z"/>
</g>
</svg></a>
                    </div>
                    <div class="nav">
                        <ul class="menu">
                            <li class="nav-li">
                                <a href="archivo.php" class="menu-item">ARCHIVO</a>
                            </li>						
                            <li class="nav-li">
                                <a href="mediateca.php" class="menu-item">MEDIATECA</a>
                            </li>
                            <li class="nav-li">
                            <a href="about.html" class="menu-item">ANAA ¿QUÉ Y CÓMO?</a>
                            </li>
                        </ul>
                    </div>
                </nav>        
            </header>
            <main class="cuerpo">
             <h1 class="h1">Mediateca</h1>
             <h3>Artículos de interés. Mediateca colaborativa.</h3>
             <div class="biblioteca">
             <?php
                $card="SELECT * FROM articulos";
                $card_ej= mysqli_query($conexion,$card);
                while ($mediateca=mysqli_fetch_array($card_ej)) {

                    ?>
                            
                    <div class="articulo">
                        <img src="<?php echo $mediateca['imagen_1'];?>" alt="Artista">
                        <h4><a href="entradamedia.php" class="titulo">
                            <?php
                                echo $mediateca['titulo'];
                            ?>
                            </a>
                        </h4>
                        <h5>
                            <?php
                                echo $mediateca['autor'];
                            ?>
                        </h5>
                    </div>
                    <?PHP
                }
                
            ?>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista" >
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
                    <div class="articulo">
                        <img src="artistas.png" alt="Artista">
                        <h4><a href="entrada_media.html" class="titulo">Título</a></h4>
                        <h5>Autor</h5>
                    </div>
            </div>
            <footer>
                <div class="footer">
                    <p>
                        Archivo de Net Art Argentino // Buenos Aires - Argentina // 2019
                    </p>
                </div>
            </footer>
            </main>
            
    
</body>
</html>