<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="tienda.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript">
        //do for "f1" validation
        function validateForm3(){
            //check Disk Name validity
            if (!(/^[\w ]*$/.test(document.f3.nombreDisco.value)) || (document.f3.nombreDisco.value=="")){
                alert( "Nombre Disco no válido" );
                return false;
                //check author name validity
            }if (!(/^[\w ]*$/.test(document.f3.autor.value)) || (document.f3.autor.value=="")){
                alert( "Nombre autor no válido" );
                return false;
                //check genre validity
            }if (!(/^[\w ]*[/]*[\w ]+$/.test(document.f3.genero.value)) || (document.f3.genero.value=="")){
                alert( "genero inválido" );
                return false;
                //check price validity
            }if (!(/^[0-9][0-9]?[0-9]?$/.test(document.f3.precio.value)) || (document.f3.precio.value=="")){
                alert("precio inválido");
                return false;
                //check producer producido
            }if (!(/^[a-zA-Z]+ *[a-zA-Z]*[0-9]*$/.test(document.f3.producido.value)) || (document.f3.producido.value=="")){
                alert( "Productor inválido" );
                return false;
                //check valoracion
            }if (!(/^[1]?[0-9]$/.test(document.f3.valoracion.value)) || (document.f3.valoracion.value=="")) {
                alert("valoracion invalida");
                return false;
            }
                //check image
//            }if (!(/^([A-Z]*[a-z]*[.]*[_]*[0-9]* *)*$/.test(document.f3.imagenDisco.value)))
//            {
//                alert("imagen inválida");
//                return false;
//            }
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
        <h1>Insertar disco</h1>
    </section>

    <section id="SuscripcionSubTitulo">
        <h3>accesible por el administrador</h3>
    </section>


    <section id="formulario">
        <section>
            <form action="procesarInsercionDisco.php"  name="f3"  method="post" onsubmit="return(validateForm3());">
                <fieldset>
                    Nombre del disco:
                    <input type="text" name="nombreDisco" value="" placeholder="" required>
                    Autor:
                    <input type="text" name="autor" value="" placeholder="" required>
                    Genero/seccion:
                    <input type="text" name="genero" value="" placeholder="" required>
                    Precio:
                    <input type="text" name="precio" value="" placeholder="" required>
                    Productor:
                    <input type="text" name="producido" value="" placeholder="" required>
                    Valoracion:
                    <input type="text" name="valoracion" value="" placeholder="" required>
                    ImagenDisco:
                    <input type="text" name="imagenDisco" value="" placeholder="" required>


                    <input type = "submit" id = "button1" value = "Insertar Disco"/>
                </fieldset>
            </form>
            <form id="login" action="index.php" method="post" name="f2">
                <input type = 'submit' id = 'outbutton1' name='logout' value = 'Salir' />
            </form>

            <?php

            if(isset($_POST['logout']))
                header("Location:logout.php");
             //show identification form
            ?>

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
