<!DOCTYPE html>

<!--
#######################################
- THE HEAD PART -
######################################
-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>PANTALLA INFORMATIVA</title>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script>setTimeout('document.location.reload()',300*1000); </script> 

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

</head>

<body>

    <article class="boxedcontainer">

        <?php
//meto en este arreglo los formatos de imagen que usare
        $imagenes = array("jpeg", "jpg", "png", "gif");
//aqui los formatos de video
        $videos = array("mp4", "mov", "mpeg", "avi");
        //aqui los formatos de texto para las url
        $url = array("txt");
//busco todos los archivos dentro de la carpeto img
//y se guarda en $files como arreglo
        $files = scandir('contenido/');
        ?>
        <div class="tp-banner-container">
            <div align="center" class="tp-banner" >
                <ul>
                    <?php
//este for es diferente 
//por cada elemento dentro de $files
//vas a ejecutar este codigo
//y el elemento encontrado
//lo guardas en $file
                    foreach ($files as $file) {
                        //aqui me guarda en $ext el formato del archivo
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        //si $ext coincide con uno de los elementos dentro de $imagenes
                        if (in_array($ext, $imagenes)) {
                            //entonces imprimo con echo la etiqueta img con la ruta de la imagen        
                            echo '<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption customin customout fullscreenvideo"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeOut"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true"
                             style="z-index: 1">
                            <img src="contenido/' . $file . '" alt="imagen1" width="1366" height="768">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>


                    </li>';
                            //si $ext coincide con uno de los elementos dentro de $videos
                        } elseif (in_array($ext, $videos)) {
                            //entonces imprimo el codigo del video        
                            echo '<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption customin customout fullscreenvideo"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeOut"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true"
                             style="z-index: 1">
                            <video width="1366" height="768">
                                <source src="contenido/' . $file . '" type="video/mp4">
                            </video>
                        </div>


                    </li>';
                        } elseif (in_array($ext, $url)) {
                            //en caso de que sea un url
                            $fichero = fopen("contenido/$file", "r");
                            echo '<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption customin customout fullscreenvideo"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="600"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeOut"
                             data-autoplay="false"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="false"
                             style="z-index: 1">
                            <iframe width="1366" height="768" src="'. fgets($fichero) .'">
                            </iframe>
                        </div>


                    </li>';
                        }
                    }
                    ?>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>

        <!-- THE SCRIPT INITIALISATION -->
        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function () {

                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 9000,
                            startwidth: 1170,
                            startheight: 500,
                            hideThumbs: 10,
                            videoJsPath: "rs-plugin/videojs/"

                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->


    </article><!-- Content End -->

</body>
