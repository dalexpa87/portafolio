<!DOCTYPE html>
<html lang="Es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Portafolio Cultural</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <link rel="stylesheet" href="plugins/vegas/vegas.min.css">
  
  <link rel="icon" type="image/png" href="img/favicon.png"/>
  

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
           
      
</head>
<body class="grey lighten-5">

<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png" style="width:160px; margin-left: 10px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">Inicio</a></li>
        <li><a href="#q" class="ancla">Quienes Somos?</a></li>        
        
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#ce" class="ancla">Campañas Educativas</a></li>
            <li class="divider"></li>
            <li><a href="#ta" class="ancla">Cursos Artísticos</a></li>
            <li class="divider"></li>
            <li><a href="#rc" class="ancla">Recorridos pedagógicos y Experiencias de Ciudad</a></li>
          </ul>
          <a class="modal-trigger" href="#modal1">Contactanos</a>
          <li><a href="#noti" class="ancla">Noticias</a></li>
          <li><a href="#event" class="ancla">Eventos</a></li>


         
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="#ce" class="ancla">Campañas Educativas</a></li>
            <li class="divider"></li>
            <li><a href="#ta" class="ancla">Cursos Artísticos</a></li>
             <li class="divider"></li>
            <li><a href="#rc" class="ancla">Recorridos pedagógicos y Experiencias de Ciudad</a></li>
          </ul>

          <li><a class="dropdown-button" href="" data-activates="dropdown1">Portafolio de Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="">Inicio</a></li>
        <li><a href="#Q">Quienes Somos?</a></li>
        <li><a class="modal-trigger" href="#modal1">Contáctanos</a> </li>

          <li><a href="#noti" class="ancla">Noticias</a></li>
          <li><a href="#event" class="ancla">Eventos</a></li>
        
        <li><a href="#" class="dropdown-button" href="#!" data-activates="dropdown2">Portafolio de servicios</a></li>
         
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>
  <span class="ir-arriba icon-arrow-up2"><i class="large material-icons" style="font-size: 2rem">navigation</i></span>
     <div class="section"> 
       <div class="row"> 
         <div class="col s12 "> 
           <div id="modal1" class="modal"> 
             <div class="modal-content">                                     
               <?php  
                 require_once("contactus.html"); 
                ?> 
             </div> 
           </div> 
         </div> 
       </div> 
   </div> 


 
<div class="container-fluid s12 m6">
  <div class="slider ">
    <ul class="slides">
      <li>
        <img src="img/bycicle.jpg" id="img_slide"> <!-- random image -->
        <div class="caption center-align aclarar">
          <h1 class="red-text" >Bienvenido</h1>
          <h5 class=" black-text ">Estamos seguros que hacemos la diferencia, Conócenos</h5>
        </div>
      </li>
      <li>
        <img src="img/banner.jpg" id="img_slide"> <!-- random image -->
        <div class="caption right-align aclarar ">
          <h1 class="red-text" >Estamos en Inscripciones</h1>
          <div class="container">
          <h6>Fotografia Digital</h6>
          <h6>Pintura</h6>
          <h6>Baile</h6>
          </div>
          <h5 class="black-text">Te esperamos</h5>
        </div>
      </li>
      <li>
        <img src="img/Talleres.jpg" id="img_slide"> <!-- random image -->
        <div class="caption left-align aclarar">
          <h2 class="red-text"> Cursos Artísticos</h2>
          <h5 class="black-text">Nuevas Experiencias</h5>
        </div>
      </li>
      <li>
        <img src="img/Caminata.jpg" id="img_slide" > <!-- random image -->
        <div class="caption right-align aclarar ">
          <h2 class="red-text" >Recorridos Pedagógicos</h2>
          <h5 class="black-text">Formando Ciudadanos</h5>
        </div>
      </li>
      <li>
        <img src="img/Arte.jpg" id="img_slide"> <!-- random image -->
        <div class="caption right-align aclarar ">
          <h2 class="red-text" >Campañas Educativas</h2>
          <h5 class="black-text">Construímos Sociedad</h5>
        </div>
      </li>
    </ul>
  </div>
  
  <!--RECORRIDOS PEDAGOGICOS-->
    <div class="section" id="q">
      <div class="row">
          <div class="col s12 m6">
            <h5 class="black-text left-align" >¿Quienes Somos? </h5>
            
            <p align="justify" id="p_section">Somos una empresa de gestión cultural y educativa integrada por un grupo multidisciplinario de personas altamente calificadas, entre ellos investigadores, gestores culturales y docentes en distintas áreas con quienes diseñamos diversas formas de promoción y difusión de la cultura en nuestro medio a través de la programacion de proyectos alternativos en el área educativa, artística y cultural.</p>
          </div>

        
            <div class="col s12 m6">
              <img src="img/1.jpg" id="imgsection">
            </div>

      </div>
       
      </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center aclarar">
          <h5 class="header col s12 red-text light">El Ser Humano eje de nuestras acciones</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/libro.jpg" alt="Unsplashed background libro"></div>
  </div>
  <!--Cursos ARTISTICOS-->
  <div class="section" id="ta">
      <div class="row"> 
        <div class="col s12 m6">
            <h5 class="black-text left-align">Cursos Artísticos</h5>
            <p align="justify" id="p_section">Bajo una metodologia activa y participativa desarrollamos los siguientes programas: Danza, Teatro, Ballet, Caricatura, Pintura, Música, Fotografía Digital, Expresión Oral, Dibujo y Pintura para adultos</p>
          </div>
          <div class="col s12 m6">
              <img src="img/ArtePx.jpg" id="imgsection">
            </div>
      </div>
  </div>

|

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center aclarar">
          <h6 class="col s12 m12 red-text light">No esperes mas para integrarte </h6>
          <h5 class="col s12 m12 red-text light"> y Vivir nuestra experiencia</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/Foto2.jpg " alt="Unsplashed background img 3"></div>
  </div>
  <!--CAMPAÑAS EDUCATIVAS-->
   <div class="section" id="ce">
      <div class="row">
          <div class="col s12 m6">
              <img src="img/ev3.jpg" id="imgsection">
          </div>
          <div class="col s12 m6">
            <h5 class="black-text right-align" id="ce">Campañas Educativas</h5>
            <p align="justify" id="p_section">A través de puestas en escena, sensibilizamos y reflexionamos sobre: Educación Ambiental, Programas de Convivencia, Literatura e Historia, Comunicación Asertiva, Identidad y Diversidad en el aula, Acoso escolar o Bullyng.</p>
          </div>
      </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center aclarar">
          
          <h4 class="col s12 m12 red-text light"> Arte, Educación y Cultura</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/imgpx.jpg " alt="Unsplashed background img 3"></div>
  </div>
 
   
     <!--RECORRIDOS PEDAGOGICOS-->
    <div class="section" id="rc">
      <div class="row">  
        <div class="col s12 m6">

            <h5 class="black-text right-align">Recorridos pedagógicos y experiencias de ciudad</h5>
            
            <p align="justify" id="p_section">Desde un encuentro sensible con la ciudad, tocamos los siguientes temas: Arte, y Arquitectura Pública, Mujer y Diversidad de Género, Migración y Transformación Urbana</p>
          </div>
        <div class="col s12 m6">
              <img src="img/Recorrido.jpg" id="imgsection">
            </div>
      </div>
  </div>
<div class="section" id="noti">
  <div class="container-fluid  red darken-1">
  <div class="row">
  <h5 class="center" >Entérate</h5>
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <a href="#noti"><img src="img/Noticia1.jpg">
          <span width="100%" class="card-title"></span></a>
        </div>
      </div>
      </div>
    <div class="col s12 m3">
    <div class="card">
        <div class="card-image">
          <a href="#noti"><img src="img/Noticia2.jpg">
          <span width="100%" class="card-title"></span></a>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
       <div class="card">
        <div class="card-image">
          <a href="#noti"><img src="img/Noticia3.jpg">
          <span width="100%" class="card-title"></span></a>
        </div>
      </div>
    </div>
    
    <div class="col s12 m3">
       <div class="card">
        <div class="card-image">
          <a href="#noti"><img src="img/Noticia4.jpg">
          <span width="100%" class="card-title"></span></a>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
  <div class="container-fluid" id="evento">
  <div class="row">
  <div class="col s12 m3">
      <div class="fb-page" data-href="https://www.facebook.com/www.portafoliocultural.org/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hardblackcomputadores/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.portafoliocultural.org/">Portafolio</a></blockquote></div>
      </div>

      <div class="col s12 m9 red lighten-5" id="event">
          <h5 class="center">Eventos</h5>
           <div class="carousel carousel-slider">
            <a class="carousel-item" href="#evento"><img src="img/ev1.jpg"></a>
            <a class="carousel-item" href="#evento"><img src="img/ev2.jpg"></a>
            <a class="carousel-item" href="#evento"><img src="img/CampanaEducativa.jpg"></a>
            <a class="carousel-item" href="#evento"><img src="img/ev4.jpg"></a>
          </div>
      </div>

        
      
  
    </div>
 </div>

  
     
    <div class="row">
     <div class="col s12 center">
          <h6>Síguenos</h6> 
           <div class="social-widg-cont">   
               <a href="https://www.facebook.com/pages/Grupo-Portafolio-Cultural/310016442452318?fref=ts" target="_blank" title="Facebook">
          <img src="http://portafoliocultural.org/wp-content/themes/weddings/images/fb.jpg" alt="">
         </a>
                <a href="https://twitter.com/portacultural" target="_blank" title="Twitter">
          <img src="http://portafoliocultural.org/wp-content/themes/weddings/images/tw.jpg" alt="">
         </a>
                <a href="#" target="_blank" title="Rss">
          <img src="http://portafoliocultural.org/wp-content/themes/weddings/images/rss.jpg" alt=""></a>       
           <a href="#" target="_blank" title="Google+">
          <img src="http://portafoliocultural.org/wp-content/themes/weddings/images/googleplus.jpg" alt=""></a>
         <a href="https://www.facebook.com/pages/Grupo-Portafolio-Cultural/310016442452318?fref=ts" target="_blank" title="Instagram" ><img src="http://portafoliocultural.org/wp-content/themes/weddings/images/instagram.jpg" alt=""></a>
         <a href="https://www.youtube.com/channel/UCQp6nEThNPDroPre4SFwmcw" target="_blank" title="Youtube"><img src="http://portafoliocultural.org/wp-content/themes/weddings/images/youtube.jpg" alt="">
         </a>       
      </div>                      
    </div>  
    
    </div> 
    <div class="row">
    <div class="col s12 center">
       
            <p>Teléfono: 411 16 76
            Dirección: Carrera 80 # 37-18
            Barrio Laureles, Medellín</p>
    </div>        
    </div>

       
        
    <div class="footer-copyright black" >
      <div class="container">
      Made by <a class="white-text" style="font-size: 12px">HardBlack 2016 hardblack@outlook.es</a>
      </div>
    </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="plugins/vegas/vegas.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function(){

         $('.carousel').carousel();
         $('.materialboxed').materialbox();

        $('.parallax').parallax();
        $('.slider').slider({
           height:  750,
           indicators: false,
            interval: 4000,
            transition: 700,
                              });

        $('.ir-arriba').click(function(){
        $('body, html').animate({
        scrollTop: '0px'
        }, 300);
        });
 
      
         $('.modal-trigger').leanModal();
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown();
        $('.carousel.carousel-slider').carousel({full_width: true});

        
      });
        $('.ancla').click(function(){
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
        return false;
});

      </script>
       <!--Google Analytics-->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-82641419-1', 'auto');
        ga('send', 'pageview');

      </script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_CO/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  </body>
</html>
