
/**
 * Created by IntelliJ IDEA.
 * User: cris
 * Date: 29/05/16
 * Time: 13:33
 */

<?php   session_start();  ?>

<html>
<head>
  <meta charset="utf-8">
  <link href="./tienda.css" rel="stylesheet" media="screen" title="no title" charset="utf-8">

	<script type="text/javascript">

	//do for "f2" validation
	function validateForm2(){
	//check username validity
	if (!(/^[a-zA-Z]+_*[a-zA-Z]*[0-9]*$/.test(document.f2.usuario.value)) || (document.f2.usuario.value=="")) {
	alert("Nombre usuario inválido");
	return false;
	//check password validity
	}if (!(/^[a-zA-Z]+[0-9]*$/.test(document.f2.passwd.value)) || (document.f2.passwd.value=="")) {
	alert("password inválidos");
	return false;
	}
	return true;
	}

</script>




</head>
<body>

<div class="page">
 <div class="background">
  <div class="transbox">
    <h1>le coffre de ma musique</h1>
  </div>
</div>

    <?php
    if(isset($_SESSION['use'])) { // If session is not set that redirect to Login Page                            {
		// header("Location:index.php");

		echo " Login Success ";
		echo ' ';
		echo "hola, ".$_SESSION['use'];
        if($_SESSION['use']==='Admin') header("Location:insertDiskForm.php");
	//echo "<a href='logout.php'> Logout</a> ";
     ?>
	<form id="login" action="index.php" method="post" name="f2">
	  <input type = 'submit' id = 'outbutton1' name='logout' value = 'Salir' />
	</form>

	<?php

	if(isset($_POST['logout']))
		header("Location:logout.php");
	}else{ //show identification form 
		?>
	<section id=lateral>
		<section class="acceso">
			<form id="login" action="login.php" method="post" name="f2" onsubmit="return(validateForm2());">
				<fieldset>
					Usuario:
					<input type="text" name=usuario value="" placeholder="usuario" required>
					Contraseña:
					<input type="text" name=passwd value="" required>
					<input type = "submit" id = "button1" name="acceso" value = "Acceder"/>
				</fieldset>
			</form>
		</section>

		<?php
	}
    ?>

<nav id="publicity">
    Aquí <br>
va <br>
la publicidad
</nav>

</section>

<section id="discosnovedades">
	<section class="new">
  	<div>
  		<h4>último disco Novedades 1</h4>
   		<a href="https://www.youtube.com/results?search_query=maroon+5+animals">Link al top 1</a>
  		<a href="#" id="playbutton"><button>Play</button></a>
 	</div>
	</section>

	<section class="new">
  	<div>
  		<h4>último disco Novedades 2</h4>
   		<a href="https://www.youtube.com/watch?v=nSDgHBxUbVQ">Link al top 1</a>
  		<a href="#" id="playbutton"><button>Play</button></a>
 	</div>
	</section>

	<section class="new">
  	<div>
  		<h4>último disco Novedades 3</h4>
   		<a href="http://www.w3schools.com/html/">Link al top 1</a>
  		<a href="#" id="playbutton"><button>Play</button></a>
 	</div>
	</section>

</section>

<section id="novedadesGenero">
	<section id="novedades"><p>Novedades por género</p></section>
	<section id="genero">
	<p>ROCK</p>
	</section>

	<section id="disco">
		<img src="./imagenes/Alan_parsons_Eye_in_the_sky20160410.jpg" alt="Alan Parsons" width="110" height="110">
		<div id="names">
		 <p> Eye in the Sky</p>
		 <p> The Alan Parsons Project</p>
		</div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=NNiie_zmSr8">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>


	</section>
	<section id="disco">
		<img src="./imagenes/linkingPark_20160410.jpg" alt="Extremoduro" width="110" height="110">
		<div id="names"> <p> Castle of glass</p>
		<p> Linking Park</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=ScNNfyq3d_w">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
       </div>

	</section>
	<section id="disco">
		<img src="./imagenes/extremoduro_para_todos_los_20160410.jpg" alt="Extremoduro" width="110" height="110">
		<div id="names"> <p> Para todos los públicos</p>
		<p> Extremoduro</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=V-rAcjVfRes">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
	<section id="disco">
		<img src="./imagenes/whitesnake_whitesnake_20160410.jpg" alt="Extremoduro" width="110" height="110">
		<div id="names"> <p> Whitesnake</p>
		 <p> Whitesnake</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=GOJk0HW_hJw">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
	<section id="disco">
		<img src="./imagenes/white_stripes_seve_nation_20160410.jpg" alt="Seven nation army" width="110" height="110">
		<div id="names"> <p> Seven Nation Army</p>
		 <p> The White Stripes</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=0J2QdDbelmY">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
		<section id="disco">
		<img src="./imagenes/aerosmith_young_lust_2016_0410.jpg" alt="Seven nation army" width="110" height="110">
		<div id="names"><p> Young lust</p>
	        <p> Aerosmith</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=O_tismo09EE&index=32&list=PL8GzDEfn3S8BCxSZ33IYmyFJ8x81PZK6l">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>

</section>

<section id="Secciones">
<h4 id="psecciones">Secciones | Generos: </h4>
<a id="rock" href="#" color="green"> ROCK  </a>
<a id="pop" href="#"> POP </a>
<a id= "clasica" href="clasica.php"> CLASICA </a>
<a id= "metal" href="https://www.youtube.com/watch?v=O_tismo09EE&index=32&list=PL8GzDEfn3S8BCxSZ33IYmyFJ8x81PZK6l"> METAL </a>
<a href="#"> Más vendido </a>
<a href="#"> Más Comentado </a>
</section>

<div id="fila1">
<section class="masComentados">
	<p>Discos más comentados</p>
</section>


<section class="noticias">
	<section id="cabeceranoticias"> <p>Noticias Musicales</p></section>
	<p>noticia 1</p>
	<p>noticia 2</p>
	<p>noticia 3</p>
	<p>noticia 4</p>
	<p>noticia 5</p>
</section>
</div>

<div id="fila2">
<section class="masComentados">
	<p>Discos más comentados</p>
</section>


<section class="masComentados">
	<p>Disco destacado Cuerpo</p>
</section>
</div>


<section class="ultimosDiscos">
<section id="cabezeraultimos"><p>Últimos discos por género</p></section>
<div id="categorias">
<section id="categ"><p>ROCK</p></section>
<section id="categ"><p>METAL</p></section>
<section id="categ"><p>R&B</p></section>
<section id="categ"><p>CHILLOUT</p></section>
</div>

<div id="discosUlti">
	<section id="disco">
		<img src="./imagenes/acdc_hell_hits_20160410.jpg" alt="TNT" width="110" height="110">
		<div id="names"> <p> TNT</p>
		 <p>AC/DC</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=pR30knJs4Xk&nohtml5=False">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
	<section id="disco">
		<img src="./imagenes/motorhead_Spades_20160410.jpg" alt="Ace of Spades" width="110" height="110">
		<div id="names"> <p>Ace of Spades</p>
		 <p> Motorhead</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=aSsqavYIgNc&nohtml5=False">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
	<section id="disco">
		<img src="./imagenes/budabar_vol2016_201604010.jpg" alt="buddha bar" width="110" height="110">
		<div id="names"> <p>buddha bar</p>
		 <p> Ravin</p></div>
		<div id="verplay">
		<a href="https://www.youtube.com/watch?v=J41ObLG9Ra8">Ver</a>
		<a href="#" id="playbutton"><button>Play</button></a>
		</div>
	</section>
</div>
</section>



<footer>
<p>Autora: Mª Cristina Heredia Gómez</p>
<p>Contacto: lecoffredemaMusique@gmail.com</p>
<p>Rue de la joie s/n, bajo B</p>
<p>tlf:958958958</p>
<a href="./formulario.php"> Subscribete! </a>
<a href="./como_se_hizo.pdf"> Como se hizo </a>
</footer>

</body>
</div>
</html>