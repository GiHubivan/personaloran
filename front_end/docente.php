<?php session_start();
if(!isset($_SESSION["correo"])) header("location:../index.html");
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/personaloran/front_end/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
    <link rel=" preconnect " href=" https://fonts.googleapis.com ">
    <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
    <link href=" https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap " rel=" stylesheet ">
    <link rel=" preconnect " href=" https://fonts.googleapis.com ">
    <link rel=" preconnect " href=" https://fonts.gstatic.com " crossorigin>
    <link href=" https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap " rel=" stylesheet ">
    <link rel=" preload " href=" css/estilos.css " as=" style ">
    <link rel=" stylesheet " href=" /personaloran/front_end/css/estilos.css ">
    <link rel=" stylesheet " href=" /personaloran/front_end/css/popup.css ">

    <title>Sede Regional Orán</title>
    <style>
        :root {
    --blanco: #ffffee;
    --oscuro: #212121;
    --primario: #99aa11;
    --secundario: #11aa;
    --gris: #757575;

      }
        header{display:grid;
        grid-template-columns:4fr 1fr;background:var(--primario);}
        .perfil{ border:solid 2px;display:grid;grid-template-columns:0.5fr 2fr 0.5fr 2fr 0.5fr;}
        .perfil img{margin-top:5px;margin-left:10px;}
        .perfil input{background:var(--secundario);color:white;width:90%;height:50%;}
        .perfil input:hover{background:var(--gris);color:var(--primario);}
       
        </style>
        <script>
            function confirma(){
                if (confirm("desea salir realmente")){
                    <?php session_destroy();?>
                    location.href="../index.html";
                }
            }
        </script>
</head>
<body>
    <div id="cuerpo">
        <header>
            <h1 class=" titulo ">Docente Universitario</h1>
            <div class="perfil">
            <img src="<?php echo $_SESSION["foto"];?>">
            <p style="float:left;"><?php echo $_SESSION["correo"];?></p>
            <input type="button" value="Salir" onclick="confirma()" >
            </div>
        </header>

        <div class=" nav-bg ">
            <nav class=" navegacion-principal contenedor ">
                <a href=" # ">Inicio</a>
                
                <a href="/personaloran/back_end/designaciones/index.php">Designaciones</a>
                <a href=" # ">Concursos Inscriptos</a>
                <a href="/personaloran/back_end/persona/index.php">Información Personal</a>
            </nav>
        </div>

        <section class=" banner">
            <div class=" contenido-banner ">



                <h2>Seminario de sistemas</h2>
                <!--  https://tablericons.com/  -->
                <p><svg xmlns=" http://www.w3.org/2000/svg " class=" icon icon-tabler icon-tabler-map-pin " width=" 72 " height=" 72 " viewBox=" 0 0 24 24 " stroke-width=" 1.5 " stroke=" #ff9300 " fill=" none " stroke-linecap=" round " stroke-linejoin="
        round ">
                    <path stroke=" none " d=" M0 0h24v24H0z " fill=" none " />
                    <circle cx=" 12 " cy=" 11 " r=" 3 " />
                    <path d=" M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z " />
                </svg><span class=" en-carta ">UNSa - Sede Regional Orán</span></p>
            </div>
        </section>

        <footer class=" footer ">
            <p>Seminario de Sistemas - Todos los derechos Reservados &copy;</p>
        </footer>
    </div>
</body>

</html>