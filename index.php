  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Empeños JSK</title>
    <meta content="initial-scale=1, width=device-width" name="viewport">
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    <link crossorigin="anonymous" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" rel="stylesheet"/>
    <link href="assets/css/layouts/home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/css/splide.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/js/splide.min.js"></script>
    <script src="assets/js/index.js"></script>
</head>
<body style="font-family: 'Helvetica';">
<div id="loading_content">
    <div class="loading_spinner"></div>
</div>
<header>
    <div class="header_logo animate__animated animate__bounceInLeft">
        <img alt="logo" src="assets/img/logo.png">
    </div>
    <div class="social-link animate__animated animate__pulse">
        <a class="social_icon" href="#section-contact" style="color:inherit"><i class="fas fa-envelope"></i></a>
        <a class="social_icon" href="https://www.facebook.com/jskoficial" style="color:inherit"><i class="fab fa-facebook"></i></a>
    </div>
</header>
<main>
    <div class="btn_sucursal animate__animated animate__bounceInRight">
        <div class="btn_icon"><i class="fas fa-map-marker-alt"></i></div>
        <div class="btn_text"><a href="sucursales.html" style="color:white">Encuentra tu sucursal</a></div>
    </div>
    <section class="section-main">
        <div class="main-body animate__animated animate__fadeIn">
            <div class="main-wraper">
                <h1>Empeños JSK</h1>
                <h3>Más de 20 años generando</h3>
                <h2>CONFIANZA</h2>
                <div class="container-button">
                    <a class="button_default" href="#section-contact">Conócenos</a>
                </div>
            </div>
            <div class="main-video">
                <video autoplay="autoplay" id="vid" loop="true" muted>
                    <source src="assets/video/JSK%20video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <section class="section section-history">
        <div class="section-header">
            <div class="section_icon"><i class="far fa-square"></i></div>
            <div class="section-title">CONOCE NUESTRA HISTORIA</div>
        </div>
        <div class="section-body">
            <div class="history-text">
                <p>La historia de JSK se remonta desde los inicios de los años 90. Surge de la necesidad
                    de la población yucateca de adquirir efectivi y liquidez de manera inmediata. 
                    Somos la casa de empeño con más sucursales en toda la ciudad. Actualmente contamos con 28 
                    surcursales distribuidas por la ciudad, donde a nuestro cliente se le brinda atención eficaz e inmediata. 
                </p>
            </div>
            <div class="history-image">
                <div class="history-image_content">
                    <img alt="book" src="assets/img/section_histor_booky.png">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-service">
        <div class="section-header">
            <div class="section_icon"><i class="far fa-square"></i></div>
            <div class="section-title">NUESTROS SERVICIOS</div>
        </div>
        <div class="section-introduction">
            <p> Conoce nuestros servicios con la calidad que nos distingue. </p>
        </div>
        <div class="section-body">
        <a href="CATÁLOGO 2020 marzo 1.pdf" target="_blank" style="color:inherit">
            <div class="service_item service-promotion">
           
                <div class="item_img">
                    <div class="item_img_container">
                        <img alt="promociones" src="assets/img/promoicon.png">
                    </div>
                </div>
                 
                <div class="service_description">
                <p>Promociones</p>  
                </div>
                
            </div>
            </a>
            <div class="service_item service-location">
                <div class="item_img">
                    <div class="item_img_container">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                </div>
                <div class="service_description">
                <a href="sucursales.html"style="color:white"><p>Localiza tu sucursal</p></a>
                </div>
            </div>
        </div>
        <div class="section_background">
        
            <img alt="handicon" src="assets/img/handicon.png">
        </div>
    </section>
    <section class="section section-promotion">
        <div class="section-header">
            <div class="section_icon"><i class="far fa-square"></i></div>
            <div class="section-title">PROMOCIONES</div>
        </div>
        <div class="section-introduction">
            <p>
                Conoce nuestras últimas promociones, las cuales también puedes encontrar en nuestra página de Facebook.
            </p>
        </div>
        <div class="section-body">
            <div id="slider-promotion">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <div class="splide__progress">
                    <div class="splide__progress__bar"></div>
                </div> <!-- /.splide__progress -->
                <div class="splide__track" id="splide-track_promotion">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class=slider-item">
                                <img alt="plchldr.co Green" src="assets/img/promoimage1.png">
                            </div>
                        </li>
                        <li class="splide__slide ">
                            <div class="slider-item">
                                <img alt="plchldr.co Orange" src="assets/img/promoimage2.png">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-item">
                                <img alt="plchldr.co Black" src="assets/img/promoimage3.png">
                            </div>
                        </li>
                    </ul> <!-- /.splide__list -->
                </div> <!-- /.splide__track -->
            </div> <!-- /.splide -->
        </div>
    </section>
    <section class="section_motto">
        <div class="section-body">
            <div class="motto_content">
                <div class="motto_icon"><i class="fas fa-quote-left"></i></div>
                <div class="motto_text">Un financiero también es una casa de empeño con imaginación.
                </div>
            </div>
            <div class="motto_author">-Arthur Wing Pinero</div>
        </div>
    </section>
    <section class="section section-testimony">
        <div class="section-header">
            <div class="section_icon"><i class="far fa-square"></i></div>
            <div class="section-title">TESTIMONIO</div>
        </div>
        <div class="section-introduction">
            <p>
               Estos son los testimonios de nuestros clientes que garantizan que somos tu casa de empeño de confianza
            </p>
        </div>
        <div class="section-body">
            <div id="slider-testimony">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div><!-- /.splide__arrows -->
                <div class="splide__progress">
                    <div class="splide__progress__bar"></div>
                </div> <!-- /.splide__progress -->
                <div class="splide__track" id="splide-track_testimony">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class=slider-item">
                                <div class="testimony-container">
                                    <div class="testimony-img">
                                        <img alt="plchldr.co Green" src="assets/img/donaamary.png">
                                    </div>
                                    <div class="testimony-content">
                                        <div class="testimony_icon"><i class="fas fa-quote-left"></i></div>
                                        <div class="testimony_text">Empeños JSK es una casa de empeño que me respalda desde hace 5 años.
                                            Cada vez que necesito dinero, voy con ellos y les doy cosas que ya no utilizo. Por eso son mi
                                            casa de empeño de confianza. 
                                        </div>
                                        <div class="testimony_client">Doña Mary, cliente distinguida</div>
                                        <div class="testimony_ago">Desde Tixkokob, Yucatán.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="splide__slide ">
                            <div class="slider-item">
                                <div class="testimony-container">
                                    <div class="testimony-img">
                                        <img alt="plchldr.co Green" src="assets/img/doñamary.png">
                                    </div>
                                    <div class="testimony-content">
                                        <div class="testimony_icon"><i class="fas fa-quote-left"></i></div>
                                        <div class="testimony_text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </div>
                                        <div class="testimony_client">Lorem ipsum dolor sit amet,</div>
                                        <div class="testimony_ago">Lorem ipsum dolor sit amet,</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-item">
                                <div class="testimony-container">
                                    <div class="testimony-img">
                                        <img alt="plchldr.co Green" src="assets/img/doñamary.png">
                                    </div>
                                    <div class="testimony-content">
                                        <div class="testimony_icon"><i class="fas fa-quote-left"></i></div>
                                        <div class="testimony_text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </div>
                                        <div class="testimony_client">Lorem ipsum dolor sit amet,</div>
                                        <div class="testimony_ago">Lorem ipsum dolor sit amet,</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="slider-item">
                                <div class="testimony-container">
                                    <div class="testimony-img">
                                        <img alt="plchldr.co Green" src="assets/img/doñamary.png">
                                    </div>
                                    <div class="testimony-content">
                                        <div class="testimony_icon"><i class="fas fa-quote-left"></i></div>
                                        <div class="testimony_text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </div>
                                        <div class="testimony_client">Lorem ipsum dolor sit amet,</div>
                                        <div class="testimony_ago">Lorem ipsum dolor sit amet,</div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul> <!-- /.splide__list -->
                </div> <!-- /.splide__track -->
            </div>
        </div>
        <div class="section-footer">
            ¿Quieres compartir tu testimonio? Favor de enviarnos un mensaje con asunto TESTIMONIO.
        </div>
    </section>
    <section class="section section-contact" id="section-contact">
        <div class="section-header">
            <div class="section_icon"><i class="far fa-square"></i></div>
            <div class="section-title">CONTACTO</div>
        </div>
        <div class="section-introduction">
            <p>
                Queremos saber más de ti. LLena los campos, y comunicanos el asunto del mensaje para que nosotros
                podamos brindarte la atención que deseas. Tus mensajes son muy importantes para nosotros.
            </p>
        </div>
        <div class="section-body" >
            <form>
                <div class="form-item">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text" placeholder="Nombre">
                </div>
                <div class="form-item">
                    <label for="email">Email</label>
                    <input id="email" name="email" placeholder="Correo electrónico" type="email">
                </div>
                <div class="form-item">
                    <label for="asunto">Asunto</label>
                    <input id="asunto" name="asunto" placeholder="asunto" type="text">
                </div>
                <div class="form-item">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" placeholder="Escribe tu mensaje" name="mensaje"></textarea>
                </div>
                <div class="container-button">
                    <button class="button_default" type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
        

    </section>
    <?php 
    if($_POST){
      $destinatario = "luzarpaz93@gmail.com"; 
      $asunto = 'asunto';
      $name = $_POST['nombre'];
      $message = $_POST['mensaje'];
      $email = $_POST['email'];
      mail($destinatario.",".$email,$asunto,"Enviado por: ". $name. ", Mensaje:".$message); 
    }
  ?>
   </class >
</main>
<footer>
    <section class="footer_copyrigth">
        <h3>Empeños JSK</h3>
        <div>Todos los derechos reservados</div>
    </section>
    <section class="social-link animate__animated animate__pulse">
        <a class="social_icon" href="#section-contact" style="color:inherit"><i class="fas fa-envelope"></i></a>
        <a class="social_icon" href="https://www.facebook.com/jskoficial" style="color:inherit"><i class="fab fa-facebook"></i></a>
    </section>
</footer>
</body>
</html>