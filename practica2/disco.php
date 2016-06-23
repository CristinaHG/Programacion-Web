<?php
session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./tienda.css" media="screen" title="no title" charset="utf-8">

	<script type="text/javascript">

		//do for "f2" validation
		function validateForm2() {
			//check username validity
			if (!(/^[a-zA-Z]+_*[a-zA-Z]*[0-9]*$/.test(document.f2.usuario.value)) || (document.f2.usuario.value == "")) {
				alert("Nombre usuario inválido");
				return false;
				//check comment validity
//			}if ((!(/^([A-Z]*[a-z]*[.]*[,]*[!]*[0-9]* *)*$/.test(document.f2.comentario.value))) || (document.f2.comentario.value="")) {
//				alert("comentario inválido");
//				return false;
//			}
				return true;
			}
		}
	</script>

	<?php
    function getTracks($nomdisco){

            require_once('configuracion.php');
            try {
                $conexion = new PDO( DB_DSN, DB_USUARIO, DB_CONTRASENIA );
			// set the PDO error mode to exception
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql_query = $conexion->prepare("SELECT * FROM Canciones WHERE Nombre_Disco='$nomdisco'");
                $sql_query->bindParam(':Nombre_Disco', $nomdisco);
                $sql_query->execute();

                $resultado=$sql_query->fetch(PDO::FETCH_ASSOC);
                if (count($resultado)>1){
                    $i = 0;
                    foreach ($resultado as $track) {
                        if (!($i == 0)) {
                            echo "$i . $track " . "<br/>";
                        }
                        $i++;
                    }
                }else echo "no hay canciones para este disco";
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
    }
	?>

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
	//get all disk again to take the 7's first to show
	require_once('clases/Disco.php');
	$Objetodisco=new Disco();
	$discos=$Objetodisco->obtenerTodosDeSeccion("Clasica/Instrumental");
	?>

	<section id="novedadesGenero">
	<section id="novedades"><p>Otros Discos</p></section>

		<section id="disco">
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[0]['Imagen'];?>" alt="requiem" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[0]['Nombre_Disco']);?> </span>
			</div>
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
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[1]['Imagen'];?>" alt="nightbook" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[1]['Nombre_Disco']);?> </span>
			</div>
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
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[2]['Imagen'];?>" alt="yiruma" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[2]['Nombre_Disco']);?> </span>
			</div>
			<div id="names"> <p><?php echo $discos[2]['Nombre_Disco'];?></p>
				<p><?php echo $discos[2]['Autor'];?></p></div>
			<div id="verplay">
				<a href="./disco.php?verDisco=<?php echo $discos[2]['Nombre_Disco'];?>">Ver</a>
				<a href="#" id="playbutton"><button>Play</button></a>
			</div>
		</section>
		<section id="disco">
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[3]['Imagen'];?>" alt="Colección estudios Gibli" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[3]['Nombre_Disco']);?> </span>
			</div>
			<div id="names"> <p><?php echo $discos[3]['Nombre_Disco'];?></p>
				<p><?php echo $discos[3]['Autor'];?></p></div>
			<div id="verplay">
				<a href="./disco.php?verDisco=<?php echo $discos[3]['Nombre_Disco'];?>">Ver</a>
				<a href="#" id="playbutton"><button>Play</button></a>
			</div>
		</section>
		<section id="disco">
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[4]['Imagen'];?>" alt="infinity" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[4]['Nombre_Disco']);?> </span>
			</div>
			<div id="names"> <p><?php echo $discos[4]['Nombre_Disco'];?></p>
				<p><?php echo $discos[4]['Autor'];?></p></div>
			<div id="verplay">
				<a href="./disco.php?verDisco=<?php echo $discos[4]['Nombre_Disco'];?>">Ver</a>
				<a href="#" id="playbutton"><button>Play</button></a>
			</div>
		</section>
		<section id="disco">
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[5]['Imagen'];?>" alt="Joe Hisaishi" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[5]['Nombre_Disco']);?> </span>
			</div>
			<div id="names"><p><?php echo $discos[5]['Nombre_Disco'];?></p>
				<p><?php echo $discos[5]['Autor'];?></p></div>
			<div id="verplay">
				<a href="./disco.php?verDisco=<?php echo $discos[5]['Nombre_Disco'];?>">Ver</a>
				<a href="#" id="playbutton"><button>Play</button></a>
			</div>
		</section>
		<section id="disco">
			<div class="tooltip">
			<img src="<?php echo "./imagenes/".$discos[6]['Imagen'];?>" alt="A comme amour" width="110" height="110">
				<span class="tooltiptext"> <?php getTracks($discos[6]['Nombre_Disco']);?> </span>
			</div>
			<div id="names"><p><?php echo $discos[6]['Nombre_Disco'];?></p>
				<p><?php echo $discos[6]['Autor'];?></p></div>
			<div id="verplay">
				<a href="./disco.php?verDisco=<?php echo $discos[6]['Nombre_Disco'];?>">Ver</a>
				<a href="#" id="playbutton"><button>Play</button></a>
			</div>
		</section>
	</section>


	<?php
	//check and get the disk name which was passed in the URL
	if (isset($_GET['verDisco'])) {
	$nombreDisco = $_GET['verDisco'];
	}

?>


<section id="SeccionDisco">
	<h1><?php echo $nombreDisco ?></h1>
</section>

<?php //get disk information to show
$discoActual=$Objetodisco->obtenerDisco($nombreDisco);
?>

<section class="SeccionDiscoDescripcion">
	<section id="parte1">
		<h1><?php echo $discoActual['Autor']?></h1>
		<!--<img onmouseover="muestraTracks()" src="<?php echo"./imagenes/".$discoActual['Imagen'];?>" alt="Freedom" width="150" height="150">
		-->
		<div class="tooltip">
		<img src="<?php echo"./imagenes/".$discoActual['Imagen'];?>" alt="Freedom" width="150" height="150">
		<span class="tooltiptext"> <?php getTracks($nombreDisco);?> </span>
		</div>
		<p>Genero: <?php echo $discoActual['Genero'];?></p>
		<p>Precio: <?php echo $discoActual['Precio'];?> €</p>
		<p>Producido: <?php echo $discoActual['Producido'];?></p>
	
		<p>Valoración: <?php echo $discoActual['Valoracion'];?></p>
		<div id="circulos">
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
		</div>		
	</section>


	<section id="parte2">
			<section id="track">
				<section class="circle"></section>
				<p> Fragile dream</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>

			<section id="track">
				<section class="circle"></section>
				<p> Legend</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> Howl's moving castle</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> Summer</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> Oriental Wind</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> Birthday</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> The rain</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> The wind of life</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			<section id="track">
				<section class="circle"></section>
				<p> Hana-Bi</p>
				<section id="duration"><p>3m.43s</p></section>
				<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
				</div>
			</section>
			

		<section id="CommentsBuyPlay">
			<section id=comentarios>
				<p>15 comentarios</p>
			</section>
			<input type = "submit" id = "button1" value = "Comprar"/>
<!--			<div id="playList">
				<a href="#" id="playbutton"><button>Play</button></a>	
			</div>	-->
		</section>


		<?php
		//get disk comments to show them
		$comentariosDisco=$Objetodisco->obtenerComentariosDisco($nombreDisco);
		if(count($comentariosDisco)>0){
		?>
			<text>Comentarios : </text>
		<section id="comments">
			<?php
				foreach ($comentariosDisco as $row){
			?>
			<section id="commentInd">
				<p id="cabezeraCom"><?php echo $row['Nombre_Usuario'] ." , ". $row['fecha']. ": "; ?></p>

			<section id="commentBox">
				<p><em><?php echo $row['Comentario']; ?></em></p>
			</section>
			</section>
		</section>

		<?php
		}}
		?>


		<form id="formComments"  action="./procesarComentario.php?id=<?php echo $nombreDisco?>"
			  method="post"
			  name="f2" onsubmit="return(validateForm2());">
		<?php	if(isset($_SESSION['use'])){
		?>
			<fieldset id="campoComentaForm">
				<text>¡pon tu comentario!</text>
				Usuario:
				<input type="text" name="usuario" value="<?php if (isset($_SESSION['use']))
				{echo $_SESSION['use']; }?>" required >
				Comentario:
				<textarea rows="3" name="comentario" value=""  placeholder="Comentario"
						  required></textarea>
				<input type = "submit" id = "button1" value = "Comentar"/>
			</fieldset>
			<?php
			}else  echo "identificate para comentar!";
			?>
		</form>
</section>
</section>

<!--	<script type="text/javascript">-->
<!--	function muestraTracks(){-->
<!---->
<!--	alert("hello");-->
<!--	}-->
<!--	</script>-->




<footer>
<p>Autora: Mª Cristina Heredia Gómez</p>
<p>Contacto: lecoffredemaMusique@gmail.com</p>
<p>Rue de la joie s/n, bajo B</p>
<p>tlf:958958958</p>
<a href="./formulario.html"> Subscribete! </a>
<a href="./como_se_hizo.pdf">Como se hizo</a>
</footer>
</div>
</body>
</html>
