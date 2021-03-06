<?php
    $mensaje_alerta = "";
    session_start();
    if(!empty($_SESSION['activo'])) {
        header('location: administracion.php');
    }
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
                                   initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!------------------->
    <!-- Bootstrap CSS -->
    <!------------------->
    <?php
		include "incluye/scripts.php";
	?>

    <!-- Estos son CSS propios -->
    <!---------------- FUENTE ACORDEON ----------------->
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/socialbar.css">
    <link rel="stylesheet" href="css/banco.css">
</head>

<body id="fondo1">
    <!----------------------------------------------------------------------------------------->
    <!---------------------------------- RED SOCIAL LATERAL ----------------------------------->
    <!----------------------------------------------------------------------------------------->
    <div class="barra-social-lateral">
        <a href="https://www.facebook.com//UTN-Buenos-Aires-462590450499322" class="icon icon-facebook"
            target="_blank"></a>
        <a href="https://twitter.com/frbautn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
            class="icon icon-twitter" target="_blank"></a>
        <a href="https://www.youtube.com/channel/UCe6LJx3_-9gRA1LWlkXfCXQ" class="icon icon-youtube"
            target="_blank"></a>
        <a href="https://www.instagram.com/sceuutnba/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
    </div>
    <header class="container-fluid header1 p-12">
        <!----------------------------------------------------------------------------------------->
        <!------------------------------------- NAVBAR -------------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <div class="container">
            <div class="row caja01 around-xs">
                <div class="columna-nav col-12">
                    <nav class="navbar navbar-dark navbar-expand-md navbar-template">
                        <!--bg-primary-->
                        <!-- el bg-light  dentro del nav pone el color -->
                        <!-- el fixed-top dentro del nav, expande a toda la pagina -->
                        <!-- Logo del banco de sangre -->
                        <a class="navbar-brand" href="#"><img src="img/manosygota50.png" alt="" class="imgHeader"></a>
                        <div class="d-flex flex-row order-2 order-sm-3">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse order-3 order-md-2" id="navbarNavDropdown">
                            <!-- Menu -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="#identidad">La fundacion</a></li>
                                <li class="nav-item active"> <a class="nav-link" href="#actividad">Actividades</a></li>
                                <li class="nav-item active"> <a class="nav-link" href="#titulodonacion">Donación</a></li>
                                <li class="nav-item active"> <a class="nav-link" href="#acordeon12tarjetas">Preguntas frecuentes</a></li>
                                <li class="nav-item active"> <a class="nav-link" href="#contacto">Contacto</a></li>
                                <li class="nav-item active"> <a class="nav-link" href="quienentra.php">Acceso</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!----------------------------------- FIN NABBAR ------------------------------------------>
        <!----------------------------------------------------------------------------------------->
        <!------------------------------------- IMAGEN -------------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <div class="container">
            <div class="row caja02 around-xs">
                <div class="columna-img col-12">
                    <img src="img/estetoscopio1.png" class="img-fluid" alt="">
                    <div class="texto-encima1">Bienvenidos a la</div>
                    <div class="texto-encima2">Fundación Banco Central de Sangre</div>
                </div>
            </div>
        </div>
        <!----------------------------------- FIN IMAGEN ------------------------------------------>

        <!----------------------------------------------------------------------------------------->
        <!------------------------------------- DONACION ------------------------------------------>
        <!----------------------------------------------------------------------------------------->
        <!---------------------------->
        <!-- TRES TARJETAS ANIMADAS -->
        <!---------------------------->
        <div class="container" id="titulodonacion">
            <article class="titulo">
                <h2>Los 5 pasos de la donación</h2>
            </article>
        </div>
        <div class="container">
            <div class="container efecto3d">
                <div class="contenedor">
                    <div class="efectocolumna3">
                        <article class="frente">
                            <img class="imagenfrente" src="img/1encuesta.jpg" width="300" height="340">
                        </article>
                        <article class="actividadatras">
                            <h2>Una breve encuesta</h2>
                            <div class="textoreverso">
                                <br>
                                <p>Luego de acreditar tu identidad mediante D.N.I, cédula o pasaporte,
                                    deberás completar un cuestionario médico con absoluta sinceridad,
                                    para que el mismo determine si estás apto para realizar la donación.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="efectocolumna3">
                        <article class="frente">
                            <img class="imagenfrente" src="img/2entrevista.jpg" width="300" height="340">
                        </article>
                        <article class="actividadatras">
                            <h2>Un Dr nos entrevista</h2>
                            <div class="textoreverso">
                                <br>
                                <p>La secretaria de la fundación introducirá tus datos en el sistema
                                    informático y te dará un número con el que serás llamado a una
                                    entrevista médica, siendo la misma de carácter confidencial.
                                    El objetivo de dicho encuentro es el de cuidarte como donante y
                                    cuidar al futuro receptor de la sangre también.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="efectocolumna3">
                        <article class="frente">
                            <img class="imagenfrente" src="img/3chequeo.jpg" width="300" height="340">
                        </article>
                        <article class="actividadatras">
                            <h2>Un breve chequeo</h2>
                            <div class="textoreverso">
                                <br>
                                <p>Se realizará además un análisis del cuestionario médico completado
                                    con anterioridad y se llevará a cabo un breve chequeo para verificar
                                    las buenas condiciones de salud y así poder concretar la donación.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------->
        <!-- DOS TARJETAS ANIMADAS -->
        <!---------------------------->
        <div class="container">
            <div class="container efecto2d">
                <div class="contenedor">
                    <div class="efectocolumna2">
                        <article class="frente">
                            <img class="imagenfrente" src="img/4donacion.jpg" width="400" height="340">
                        </article>
                        <article class="actividadatras">
                            <h2>Rápida extracción</h2>
                            <div class="textoreverso">
                                <br>
                                <p>La extracción dura aproximadamente 10 minutos, el volumen de sangre que se
                                    extrae es de 450 mililitros. Luego se te hará entrega de un cuestionario post
                                    donación, llamado de Autoexclusión, donde el donante hace un último acto de
                                    conciencia y declara de manera anónima (sólo lleva una etiqueta con su número
                                    de donación) si su sangre puede ser utilizada o no.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="efectocolumna2">
                        <article class="frente">
                            <img class="imagenfrente" src="img/5desayuno.jpg" width="400" height="340">
                        </article>
                        <article class="actividadatras">
                            <h2>Sabroso refrigerio</h2>
                            <div class="textoreverso">
                                <br>
                                <p>El proceso culmina con un refrigerio en nuestro bar, luego del cual el donante puede
                                    retirarse.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------- FIN DONACION ----------------------------------------->

        <!----------------------------------------------------------------------------------------->
        <!----------------------------------- ACTIVIDADES ----------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <div class="container" id="actividad">
            <article class="titulofundacion">
                <h2>Nuestras actividades</h2>
                <h3>La Fundación</h3>
                <div class="row">
                    <div class="col-6">
                        <h3>Extraccion voluntaria</h3>
                    </div>
                    <div class="col-6">
                        <h3>Campañas de Colecta</h3>
                    </div>
                </div>
            </article>
            <div class="container">
                <div class="container efecto2d">
                    <div class="contenedor">
                        <div class="efectocolumna2">
                            <article class="frente">
                                <img class="imagenfrente" src="img/extraccion.jpg" width="400" height="340">
                            </article>
                            <article class="actividadatras">
                                <h2>Extracción solidaria</h2>
                                <div class="textoreverso">
                                    <br></br>
                                    <h5><b>Doná sangre !.</b></h5>
                                    <p>Alguien la puede estar necesitando</p>
                                    <p>Hacete donante voluntario y habitual</p>
                                    <p>La sangre es necesaria para:</p>
                                    <h5>■ Trasplantes</h5>
                                    <h5>■ Operaciones</h5>
                                    <h5>■ Tratamientos oncológicos</h5>
                                    <h5>■ Accidentes</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="contenedor">
                        <div class="efectocolumna2">
                            <article class="frente">
                                <img class="imagenfrente" src="img/colecta.jpg" width="400" height="340">
                            </article>
                            <article class="actividadatras">
                                <h2>Colectas programadas</h2>
                                <div class="textoreverso">
                                    <br></br>
                                    <h5><b>Doná sangre !.</b></h5>
                                    <p>Requiere de la concurrencia de donantes</p>
                                    <!--<p>La extracción necesita de:</p>-->
                                    <!--<p>La sangre es necesaria para:</p>-->
                                    <h5>■ Un espacio adaptable</h5>
                                    <h5>■ Personal especializado</h5>
                                    <h5>■ Equipamiento técnico</h5>
                                    <h5>■ Difución de la actividad</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <article class="titulobanco">
                <h3>El banco de sangre</h3>
                <div class="row">
                    <div class="col-6">
                        <h3>Biologia molecular</h3>
                    </div>
                    <div class="col-6">
                        <h3>Estudios serologicos</h3>
                    </div>
                </div>
            </article>
            <div class="container">
                <div class="container efecto2d">
                    <div class="contenedor">
                        <div class="efectocolumna2">
                            <article class="frente">
                                <img class="imagenfrente" src="img/biologiamolecular.jpg" width="400" height="340">
                            </article>
                            <article class="actividadatras">
                                <h2>Biologia molecular</h2>
                                <div class="textoreverso">
                                    <br></br>
                                    <h5><b>Doná sangre !.</b></h5>
                                    <br></br>
                                    <p>El control de calidad de este metodo analítico ofrece garantias adicionales alos
                                        resultados obtenidos</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="contenedor">
                        <div class="efectocolumna2">
                            <article class="frente">
                                <img class="imagenfrente" src="img/serologia.jpg" width="400" height="340">
                            </article>
                            <article class="actividadatras">
                                <h2>Estudios serologicos</h2>
                                <div class="textoreverso">
                                    <br></br>
                                    <h5><b>Doná sangre !.</b></h5>
                                    <p>Los estudios serológicos se emplean fundamentalmente para:

                                    <h5>1.- Estudios de diagnóstico</h5>
                                    <h5>2.- Estudios epidemiológicos</h5>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------- FIN ACTIVIDADES --------------------------------------->

        <!----------------------------------------------------------------------------------------->
        <!------------------------------------ IDENTIDAD ------------------------------------------>
        <!----------------------------------------------------------------------------------------->
        <div class="container" id="identidad">
            <div class="row">
                <div class="col-sm-12">
                    <article class="titulo4">
                        <br>
                        <h2>Quienes somos</h2>
                    </article>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/controldecalidad.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="heading animated flipInX delay-1s ">QUIENES SOMOS</p>
                                    <p class="sub-heading animated rollIn delay-2s">Poner a disposición de la población
                                        de la Provincia de Córdoba, componentes sanguíneos y servicios relacionados, con
                                        la máxima seguridad y calidad posible, en forma igualitaria, suficiente y
                                        oportuna.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/centralizacion.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="heading animated flipInX delay-1s ">NUESTRA MISION</p>
                                    <p class="sub-heading animated rollIn delay-2s">Queremos Motorizar y Liderar el
                                        cambio hacia el paradigma de Centralización de Bancos de Sangre y Tejidos en la
                                        Provincia de Córdoba.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/concientizar.jpg" alt="thorth slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="heading animated flipInX delay-1s ">NUESTRA VISION</p>
                                    <p class="sub-heading animated rollIn delay-2s">Concientizar a la población que
                                        donar sangre es un acto solidario y responsable con el que se puede salvar
                                        vidas, con minutos de tiempo y sin riesgos.
                                        Educar para que los dadores de sangre sean habituales.

                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------- FIN IDENTIDAD ---------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <!------------------------------ PREGUNTAS FRECUENTES ------------------------------------->
        <!----------------------------------------------------------------------------------------->
        <section id="acordeon" class="divider">
            <div class="container" id="acordeon12tarjetas">
                <article class="titulo4">
                    <h2>Preguntas frecuentes</h2>
                </article>
                <div class="row">
                    <div class="col-md-5 text-center" id="imagenpreguntas">
                        <img src="img/frecuentes.png">
                    </div>
                    <div class="col-md-7">
                        <div id="accordion">
                            <!-- 1 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseuno" aria-expanded="false" aria-controls="collapseuno">
                                            ¿Requisitos Para Donar Sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseuno" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Puede hacerlo toda aquella persona que: Goce de buena salud Tenga más de 18 años
                                        y menos de 65, Pese más de 50 kilos Ante cualquier duda consultar con el equipo
                                        médico. Recordar que al menos deben transcurrir dos meses entre cada donación.
                                        No olvidar llevar DNI, pasaporte o cédula NO ESTAR EN AYUNAS. El único ayuno que
                                        se debe hacer, es de lácteos y grasas. Es recomendable tomar una infusión con
                                        algún sólido. Algunos ejemplos: -Té o mate cocido, con 2 o 3 tostadas y mermelada
                                        (mientras mas livianas las tostadas mejor). -Té o mate cocido con cereales ( los
                                        cereales sin leche, comerlos solos). -Té o mate cocido con alguna fruta ( ciruela
                                        por ejemplo). INFORMACION QUE TIENE QUE PROPORCIONAR EL DONANTE Documento de
                                        identidad: n° de D.N.I., cedula, pasaporte Datos personales: domicilio, teléfono,
                                        etc Estado de salud: entrevista personal, individual y totalmente confidencial con
                                        personal del equipo de salud. Confirmar que comprende la información que se le
                                        proporciona sobre la donación. La información que aporta el donante debe ser
                                        honesta y de buena fe.
                                    </div>
                                </div>
                            </div>
                            <!-- 2 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsedos" aria-expanded="false" aria-controls="collapsedos">
                                            ¿Con qué frecuencia se puede donar sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsedos" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        La ley permite donar sangre cada 8 semanas. Actualmente se puede donar solamente
                                        uno de los componentes de la sangre. Si se dona plasma o plaquetas se puede
                                        hacer tan frecuente como 2 veces a la semana (máximo 6 veces al mes)
                                    </div>
                                </div>
                            </div>
                            <!-- 3 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsetres" aria-expanded="false" aria-controls="collapsetres">
                                            ¿Qué es sangre segura?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsetres" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        La sangre segura es la que no contiene virus, parásitos, drogas, alcohol y
                                        sustancias químicas que puedan causar daño o enfermedades al paciente receptor
                                        de la sangre.
                                        Por “sangre segura” no debe entenderse solamente la que ha sido sometida a
                                        pruebas para detectar enfermedades. La “sangre segura” tiene que ver también
                                        con la responsabilidad individual y colectiva en todos los niveles: la de los
                                        donantes, los proveedores de los servicios de sangre y también la de los g
                                        obiernos.
                                        La sangre que se dona en forma desinteresada por amor al prójimo es la SANGRE
                                        SEGURA.
                                    </div>
                                </div>
                            </div>
                            <!-- 4 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsecuatro" aria-expanded="false"
                                            aria-controls="collapsecuatro">
                                            ¿Qué motiva a la gente a donar sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsecuatro" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        De acuerdo a las motivaciones que llevan a una persona a donar sangre, los
                                        donantes pueden clasificarse en:
                                        <p></p>
                                        · Donantes Voluntarios (altruistas).
                                        <p></p>
                                        · Donantes de Reposición (donan para un familiar o conocido).
                                        <p></p>
                                        · Donantes Autólogos (donan para sí mismos, antes de ser intervenidos, si el
                                        médico lo autoriza).
                                        <p></p>
                                        · Donantes Remunerados (prohibidos por ley)
                                    </div>
                                </div>
                            </div>
                            <!-- 5 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsecinco" aria-expanded="false"
                                            aria-controls="collapsecinco">
                                            ¿Qué es un donante altruista de sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsecinco" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Un “donante altruista” es una persona de elevada condición humana, capaz de
                                        ofrecer bienestar, salud y esperanza, a cambio de la única satisfacción de
                                        saberse generoso por dar vida a quién la necesita.
                                    </div>
                                </div>
                            </div>
                            <!-- 6 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseseis" aria-expanded="false" aria-controls="collapseseis">
                                            ¿Me puedo contagiar SIDA por donar sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseseis" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        NO. No se puede contagiar NINGUNA ENFERMEDAD por hacer una donación de sangre,
                                        ya que el material que se emplea en la donación es nuevo, de un solo uso y
                                        totalmente estéril.
                                    </div>
                                </div>
                            </div>
                            <!-- 7 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsesiete" aria-expanded="false"
                                            aria-controls="collapsesiete">
                                            ¿Me quedaré débil? ¿Me darán mareos?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsesiete" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        La cantidad de sangre que se extrae (habitualmente 400-450ml) es igual para
                                        hombres y mujeres y no afecta a tu salud o fortaleza.
                                        <p></p>
                                        De hecho, la determinación de la hemoglobina que se hace en el consultorio
                                        médico antes de donar, nos indicará que tienes suficiente cantidad de glóbulos
                                        rojos.
                                        Los mareos son muy raros y se dan en algunas personas que siendo muy emotivas
                                        quizás no se han concientizado previamente.
                                    </div>
                                </div>
                            </div>
                            <!-- 8 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseocho" aria-expanded="false" aria-controls="collapseocho">
                                            ¿Donar sangre engorda?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseocho" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Este es el mito más común. Donar sangre no engorda, ni adelgaza. No es
                                        ni bueno ni malo para la salud”, es bueno como acto solidario.
                                    </div>
                                </div>
                            </div>
                            <!-- 9 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsenueve" aria-expanded="false"
                                            aria-controls="collapsenueve">
                                            ¿La sangre tiene vencimiento?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsenueve" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Tiene distintos vencimientos dependiendo de sus componentes. Los glóbulos rojos
                                        duran hasta 45 días, el plasma y los crioprecipitados 1 año y las plaquetas 5
                                        días.
                                    </div>
                                </div>
                            </div>
                            <!-- 10 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsedies" aria-expanded="false" aria-controls="collapsedies">
                                            ¿Quiénes tengan tatuajes pueden donar sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsedies" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Las personas que se han realizado tatuajes deben esperar un año para ser donantes.
                                    </div>
                                </div>
                            </div>
                            <!-- 11 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseonce" aria-expanded="false" aria-controls="collapseonce">
                                            Las personas que tuvieron hepatitis, ¿pueden ser donantes de sangre?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseonce" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Quienes tuvieron hepatitis antes de los 10 años de edad pueden ser donantes de
                                        sangre sin problema alguno.
                                    </div>
                                </div>
                            </div>
                            <!-- 12 tarjeta -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapsedoce" aria-expanded="false" aria-controls="collapsedoce">
                                            ¿Dónde puedo donar?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapsedoce" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <b>Córdoba Capital.</b>
                                        · FUNDACIÓN BANCO CENTRAL DE SANGRE:
                                        Caseros 1580. Tel.: 0351-4807373/4882121/4870022. Córdoba. Arg.
                                        Celular de Guardia: 0351-156007070
                                        <p></p>
                                        <b>Rio Tercero.</b>
                                        · SERVICIO DE HEMOTERAPIA Y BANCO DE SANGRE DR. CUCUI.
                                        Fray Justo Santa María de Oro 54. Tel.: (03571) 42-0422.
                                        <p></p>
                                        <b>Villa María:</b>
                                        · SERVICIO DE HEMOTERAPIA Y BANCO DE SANGRE DR. CUCUI.
                                        Mariano Moreno 86. Tel.: (0353) 452-8394.
                                        <p></p>
                                        · CENTRO DE HEMATOLOGÍA Y BANCO DE SANGRE PRIVADO DR.GÓMEZ.
                                        San Juan 1276. Tel.: (0353) 453-8101.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------- FIN PREGUNTAS FRECUENTES ----------------------------------->
        <!----------------------------------------------------------------------------------------->
        <!----------------------------- FORMULARIO DE CONTACTO ------------------------------------>
        <!----------------------------------------------------------------------------------------->
        <section id="contacto">
            <?php
                session_start();
                session_destroy();
            ?>
            <div class="container">
                <hr/>
                <div class="row izquierda">
                    <!-- Columna de la izquierda -->
                    <!------------------------------->
                    <!-- MAPA DE NUESTRA UBICACION -->
                    <!------------------------------->
                    <div class="col-md-5 topmargin-sm">
                        <p>Donde estamos</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6809.95468286409!2d-64.20974083437763!3d-31.410938231774793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb4df26a3fd69f45!2sFundaci%C3%B3n%20Banco%20Central%20de%20Sangre!5e0!3m2!1ses-419!2sar!4v1604632251459!5m2!1ses-419!2sar" width="550" height="530" frameborder="1" style="border:2;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div> 
                    <div class="col-md-1 topmargin-sm"></div>
                    <!-- Fin columna de la izquierda -->
                    <!-- Columna de la derecha -->
                    <!------------------------------->
                    <!---- FORMULARIO DE CONTACTO --->
                    <!------------------------------->
                    <div class="col-md-6 topmargin-sm">
                        <form action="agregarcontacto.php" method="post" class="needs-validation" novalidate> 
                            <p>Formulario de contacto</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> 
                                        <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre" minlength="4" maxlength="30" required>
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="apellido" class="form-control" id="" placeholder="Apellido" minlength="4" maxlength="30" required>
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-12">    <!--  id="Columnadoce" -->
                                    <div class="form-group">
                                        <input type="mail" name="correo" class="form-control" id="" placeholder="Correo electronico" minlength="10" maxlength="100" required>
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" name="institucion" class="form-control" id="" placeholder="Institucion" minlength="4" maxlength="60" required>
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="telefono" class="form-control" id="" placeholder="Numero de telefono (Solo numeros)" minlength="8" maxlength="16" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required> 
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="mensaje" name="mensaje" class="form-control" maxlength="500" placeholder="Ingrese su mensaje maximo 500 caracteres" required></textarea>
                                        <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                    </div>
                                </div>
                                <div class="col-md-12" >
                                    <!-- <a href="#" class="btn btn-dark full-width">Enviar contacto</a> -->
                                    <input type="submit" value="Enviar consulta"></>
                                    <div class="valid-feedback">¡Ok es valido!</div>
                                        <div class="invalid-feedback">Complete el dato</div>
                                </div>
                                <br></br>
                            </div>
                        </form>
                    </div>
                    <!-- Fin columna de la derecha -->
                </div>
                <br></br>                
            </div>
        </section>
        <footer class='container-fluid bg-primary p-2' id="pie">
            <p class="text-center">&copy; 2020 - derechos reservados</p>
        </footer>
        </div>
        <!---------------------------------- FIN CONTACTO ----------------------------------------->
    </header>
    <!------------------>
    <!-- Bootstrap JS -->
    <!------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>