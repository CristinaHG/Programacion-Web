<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="tienda.css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript">
		//do for "f1" validation
		function validateForm1(){
			//check Name validity
			if (!(/^[\w ]*$/.test(document.f1.nombre.value)) || (document.f1.nombre.value=="")){
				alert( "Nombre inválido" );
				return false;
			//check surname validity
			}if (!(/^[\w ]*$/.test(document.f1.apellidos.value)) || (document.f1.apellidos.value=="")){
				alert( "Apellidos inválidos" );
				return false;
			//check username validity
			}if (!(/^[a-zA-Z]+_*[a-zA-Z]*[0-9]*$/.test(document.f1.usuario.value)) || (document.f1.usuario.value=="")){
				alert( "Nombre usuario inválido" );
				return false;
			//check password validity
			}if (!(/^[a-zA-Z]+[0-9]*$/.test(document.f1.password.value)) || (document.f1.password.value=="")){
				alert( "password inválidos" );
				return false;
			//check postal direction validity
			}if (!(/^([a-zA-Z]* *[a-zA-Z]*(nº|n)* *[0-9]*)*$/.test(document.f1.direccion.value))) {
				alert("direccion inválida");
				return false;
			//check City
			}if (!(/^[A-Z]?[a-z]*$/.test(document.f1.ciudad.value)) || (document.f1.ciudad.value=="")){
			    alert("ciudad inválida");
			    return false;
			//check postal code
			}if (!(/^[0-9]{5}$/.test(document.f1.cp.value)) || (document.f1.cp.value=="")){
				alert("codigo postal inválido");
				return false;
				//check province
			}if (document.f1.idmedios.value=="") {
				alert("selecciona una provincia");
				return false;
				//check email validity
			}if (!(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i.test(document.f1.correo.value)))
			{
				alert("email inválido");
				return false;
				//check DNi validity
			}if (!(/^[0-9]*[A-Z]? *$/.test(document.f1.DNi.value))){
				alert("DNI inválido");
				return false;
				//check VISA validity
			}if (!(/^[0-9]+$/.test(document.f1.VISA.value))) {
				alert("VISA inválida");
				return false;
				//check observaciones
			}if (!(/^([A-Z]*[a-z]*[.]*[,]*[!]*[0-9]* *)*$/.test(document.f1.observaciones.value)))
			{
				alert("observaciones inválida");
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

<section id=lateral>
<section class="acceso">
<form id="login" action="login.php" method="post" name="f2">
		<fieldset>
			Usuario:
			<input type="text" name="usuario" value="" placeholder="usuario" >
			Contraseña:
			<input type="text" name="passwd" value="" >
      <input type = "submit" id = "button1" name="acceso" value = "Acceder"/>
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


<section id="SuscripcionTitulo">
	<h1>Suscripción al servicio</h1>
</section>

<section id="SuscripcionSubTitulo">
	<h3>Suscripción al servicio</h3>
</section>


	<section id="formulario">
	<section>
	<form action="procesar.php"  name="f1"  onsubmit="return(validateForm1());" method="post">
		<fieldset>
			Nombre:
			<input type="text" name="nombre" value="" placeholder="escribe aquí tu nombre" required>
			Apellidos:
			<input type="text" name="apellidos" value="" placeholder="escribe aquí tus Apellidos" required>
			Nombre Usuario:
			<input type="text" name="usuario" value="" placeholder="escribe aquí tu username" required>
			Clave:
			<input type="text" name="password" value="" placeholder="**********" required>
			Dirección postal:
			<input type="text" name="direccion" value="" placeholder="escribe tu drección">
			Ciudad:
			<input type="text" name="ciudad" value="" placeholder="ciudad" required>
			Código postal:
			<input type="text" name="cp" value="" placeholder="código postal" required>

			<label for="lista1">Provincia:</label>
			<datalist id="provincia">
			<option value="Granada"></option>
			<option selected value="Almería"></option>
			<option value="Castilla"></option>
			<option value="La Rioja"></option>
			<option value="Asturias"></option>
			<option value="Alicante"></option>
			<option value="Toledo"></option>
			<option value="Madrid"></option>
			<option value="otros"></option>
			</datalist>
			<input type="text" name="idmedios" list="provincia" value="">			


			Correo:
			<input type="text" name="correo" value="" placeholder="escribe aquí tu e-mail" required>

			Dni:
			<input type="text" name="DNi" value="" placeholder="escribe aquí tu dni">
			VISA:
			<input type="text" name="VISA" value="" placeholder="" required>
			Observaciones:
			<input type="textarea" name="observaciones" value="">

			<legend>Envío:</legend>
			<label for="radiobutton1">Mensual</label>
			<input type="radio" id="radiobutton1" name="envio" value="Mensual" >
			<label for="radiobutton2">Semanal</label>
			<input type="radio" id="radiobutton2" name="envio" value="Semanal" >
			<label for="radiobutton2">Diario</label>
			<input type="radio" id="radiobutton3" name="envio" value="Diario" required>
				
		
		He leído y acepto las condiciones del servicio de suscripción:
		<input type="checkbox" id = "button2" value = "He leído y acepto las condiciones del servicio de suscripción" checked required/>
		<input type = "submit" id = "button1" value = "enviar Suscripción"/> 
		</fieldset>
	</form>

</section>

</section>







<footer>
<p>Autora: Mª Cristina Heredia Gómez</p>
<p>Contacto: lecoffredemaMusique@gmail.com</p>
<p>Rue de la joie s/n, bajo B</p>
<p>tlf:958958958</p>
<a href="./formulario.html"> Subscribete! </a>
</footer>
</div>



</body>
</html>
