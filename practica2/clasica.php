<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./tienda.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div class="page">

 <div class="background">
  <div class="transbox">
    <h1>le coffre de ma musique</h1>
  </div>
</div>

<section id=lateral>
<section class="acceso">
<form id="login" action="procesar.php" method="post" name="f1">
		<fieldset>
			Usuario:
			<input type="text" name=usuario value="" placeholder="usuario">
			Contraseña:
			<input type="text" name=passwd value="" >
      <input type = "submit" id = "button1" value = "Acceder"/>
      </fieldset>
</form>
</section>


<nav id="publicity">
Aquí <br>
va <br>
la publicidad
</nav>

</section>



<section id="SeccionesClasica">
<h4 id="psecciones">Secciones | Generos: </h4>
<a id="rock" href="#" color="green"> ROCK  </a>
<a id="pop" href="#"> POP </a>
<a id= "clasica" href="#"> CLASICA </a>
<a id= "metal" href="#"> METAL </a>
<a href="#"> Más vendido </a>
<a href="#"> Más Comentado </a>
<a href="#"> Suscripción </a>
</section>

<section id="SeccionClasica">
	<img src="./imagenes/clasica.jpg" alt="musica clasica" width="70" height="70">
	<h1>Sección de música Clásica</h1>
</section>

	<?php
	require_once('clases/Disco.php');
	$Objetodisco=new Disco();
	$discos=$Objetodisco->obtenerTodosDeSeccion("Clasica/Instrumental");
	//echo $discos[0]['Nombre_Disco'];
	//echo $discos[1]['Nombre_Disco'];
	//echo count($discos);
	//$ndiscos=count($discos);
	//$nelementos=14;
	?>

<section id="novedadesGenero">
	<section id="novedades"><p>Más vendidos</p></section>

	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[0]['Imagen'];?>" alt="requiem" width="110" height="110">
		<div id="names">
		 <p><?php echo $discos[0]['Nombre_Disco'];?></p>
		 <p><?php echo $discos[0]['Autor'];?></p>
		</div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[0]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
					
	</section>
	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[1]['Imagen'];?>" alt="nightbook" width="110" height="110">
		<div id="names">
			<p><?php echo $discos[1]['Nombre_Disco'];?></p>
		<p><?php echo $discos[1]['Autor'];?></p>
		</div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[1]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
       </div>
				
	</section>
	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[2]['Imagen'];?>" alt="yiruma" width="110" height="110">
		<div id="names"> <p><?php echo $discos[2]['Nombre_Disco'];?></p>
		<p><?php echo $discos[2]['Autor'];?></p></div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[2]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>			
	</section>
	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[3]['Imagen'];?>" alt="Colección estudios Gibli" width="110" height="110">
		<div id="names"> <p><?php echo $discos[3]['Nombre_Disco'];?></p>
		 <p><?php echo $discos[3]['Autor'];?></p></div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[3]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>			
	</section>
	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[4]['Imagen'];?>" alt="infinity" width="110" height="110">
		<div id="names"> <p><?php echo $discos[4]['Nombre_Disco'];?></p>
		 <p><?php echo $discos[4]['Autor'];?></p></div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[4]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>			
	</section>
		<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[5]['Imagen'];?>" alt="Joe Hisaishi" width="110" height="110">
		<div id="names"><p><?php echo $discos[5]['Nombre_Disco'];?></p>
	        <p><?php echo $discos[5]['Autor'];?></p></div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[5]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>	
		</div>	
	</section>	
	<section id="disco">
		<img src="<?php echo "./imagenes/".$discos[6]['Imagen'];?>" alt="A comme amour" width="110" height="110">
		<div id="names"><p><?php echo $discos[6]['Nombre_Disco'];?></p>
	        <p><?php echo $discos[6]['Autor'];?></p></div>
		<div id="verplay">
		<a href="./disco.php?verDisco=<?php echo $discos[6]['Nombre_Disco'];?>">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>	
		</div>	
	</section>
</section>

<section id="vendidoMasDestacado">
	<img src="<?php echo "./imagenes/".$discos[7]['Imagen'];?>" alt="Freedom" width="150" height="150">
	<div id="textoMasVendido">
		<p>Disco vendido más destacado:</p>
		<p><?php echo  $discos[7]['Autor']." - ".$discos[7]['Nombre_Disco']?></p>
	</div>
	<a href="disco.php?verDisco=<?php echo $discos[7]['Nombre_Disco'];?>">Ver</a>
	<section id=comentarios>
		<p>15 comentarios</p>
	</section>	
</section>

<div id="filabox1">
<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[8]['Imagen'];?>" alt="Rue des cascades" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[8]['Autor'];?></p>
		<p><?php echo $discos[8]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[8]['Nombre_Disco'];?>">Ver</a>
	</div>
	
</section>

<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[9]['Imagen'];?>" alt="Pour Aelie" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[9]['Autor'];?></p>
		<p><?php echo $discos[9]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[9]['Nombre_Disco'];?>">Ver</a>
	</div>
	
</section>
</div>

<div id="filabox2">
<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[10]['Imagen'];?>" alt="Le Onde" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[10]['Autor'];?></p>
		<p><?php echo $discos[10]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[10]['Nombre_Disco'];?>"">Ver</a>
	</div>
	
</section>

<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[11]['Imagen'];?>" alt="Divenire" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[11]['Autor'];?></p>
		<p><?php echo $discos[11]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[11]['Nombre_Disco'];?>"">Ver</a>
	</div>
	
</section>
</div>


<div id="filabox3">
<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[12]['Imagen'];?>" alt="Le Onde" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[12]['Autor'];?></p>
		<p><?php echo $discos[12]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[12]['Nombre_Disco'];?>">Ver</a>
	</div>
	
</section>

<section class="DiscosmasComentados">
	<div id="columna1">
		<img src="<?php echo "./imagenes/".$discos[13]['Imagen'];?>" alt="Divenire" width="90" height="90">
		<section id=comentarios><p>15 comentarios</p></section>
	</div>
	<div id="textoMasVendido">
		<p><?php echo $discos[13]['Autor'];?></p>
		<p><?php echo $discos[13]['Nombre_Disco'];?></p>
		<a href="./disco.php?verDisco=<?php echo $discos[13]['Nombre_Disco'];?>">Ver</a>
	</div>
	
</section>
</div>




<footer>
<p>Autora: Mª Cristina Heredia Gómez</p>
<p>Contacto: lecoffredemaMusique@gmail.com</p>
<p>Rue de la joie s/n, bajo B</p>
<p>tlf:958958958</p>
<a href="./formulario.html"> Subscribete! </a>
<a href="./como_se_hizo.pdf"> Como se hizo </a>
</footer>
</div>
</body>
</html>
