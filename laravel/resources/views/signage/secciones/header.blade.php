<!-- home -->
<section class="dfx_sec_digital_signage">
  <!-- logo -->

  <div class="logo_content_top fadeIn">
    <div class="dfx_logo">
      <a href="{{url('/')}}">
        <?php $logo = 'dfx_logo.png'; ?>
        @if(isset($inverse))
        <?php $logo = 'dfx_logo_inverse.png'; ?>
        @endif
        <img class="img_logo fadeIn" src="{{asset('images/') . '/' . $logo}}" alt="Logo">

      </a>
    </div>    

  </div>
  <div class="container">
    <div class="nav-bar">
      <div class="wrapper">
        <div class="item-nav-bar subtitle">
          <span class="font-weight-bold dark">Digital</span><span class="font-weight-bold text-light">Signage</span><span class="dark fw700">.</span>
        </div>
        <div class="item-nav-bar"><a href="#">Beneficios</a></div>
        <div class="item-nav-bar"><a href="#">Servicios</a></div>
        <div class="item-nav-bar"><a href="#">Plataformas/Softwares</a></div>
        <div class="item-nav-bar"><a href="#">Partners</a></div>
        <div class="item-nav-bar"><a href="#">Casos de éxito</a></div>
      </div>

    </div>
    <div class="main">
      <div class="text-center">
        <h1 class="dfx_hero">CREEMOS EN <span class="text-light crear">CREAR</span></h1>
        <div id="cadenas-texto">
          <p class="text-dark"> <strong class="dfx_raleway_bold dark">Creemos en generar</strong> <br>
            <span class="dfx_raleway_light dark">Experiencias digitales mediante nuestra <br>
              solución integral de </span> <strong class="dfx_raleway_bold dark">DIGITAL SIGNAGE</strong><br>
            </p>
          </div>
          <p class="dfx_raleway text-dark text-uppercase s25 l27">
            <span class="typed"></span>
          </p>
        </div>
        <!-- services -->
        <div class="container">
          <div class="d-sm-flex justify-content-center align-items-center">
            <div class="item-servicio custom m-3 p-3 text-center">
              <div class="logo-serv animated rollIn">
                <img src="{{asset('images/dfx_pantalla.png')}}" alt="Pantallas">
              </div>
              <div class="d-sm-flex align-items-center justify-content-center flex-column">
                <div class="text-center s20 mt-4 l20">
                  <div class="title-header-service bg-light dark mb-2 font-weight-bold">Pantallas</div>
                  <div class="title-header-service bg-light dark">LCD / LED</div>
                </div>
              </div>
            </div>
            <div class="item-servicio custom m-3 p-3 text-center">
              <div class="logo-serv animated rollIn delay-2s">
                <img src="{{asset('images/dfx_video_wall.png')}}" alt="Video Wall">
              </div>
              <div class="d-sm-flex align-items-center justify-content-center flex-column">
                <div class="text-center s20  mt-4 l20">
                  <div class="title-header-service bg-light dark mb-2 font-weight-bold">Video Wall</div>
                </div>
              </div>
            </div>
            <div class="item-servicio custom m-3 p-3 text-center">
              <div class="logo-serv animated rollIn delay-3s">
                <img src="{{asset('images/dfx_kioskos.png')}}" alt="Kioskos">
              </div>
              <div class="d-sm-flex align-items-center justify-content-center flex-column">
                <div class="text-center s20 mt-4 l20">
                  <div class="title-header-service bg-light dark mb-2 font-weight-bold">Kioskos</div>
                  <div class="title-header-service bg-light dark">Interactivos</div>
                </div>
              </div>
            </div>
            <div class="item-servicio custom m-3 p-3 text-center">
              <div class="logo-serv animated rollIn delay-4s">
                <img src="{{asset('images/dfx_totems.png')}}" alt="Totems">
              </div>
              <div class="d-sm-flex align-items-center justify-content-center flex-column">
                <div class="text-center s20 mt-4 l20">
                  <div class="title-header-service bg-light dark mb-2 font-weight-bold">Totems</div>
                  <div class="title-header-service bg-light dark">Digitales</div>
                </div>

              </div>
            </div>
            <div class="item-servicio custom m-3 p-3 text-center">
              <div class="logo-serv animated rollIn delay-5s">
                <img src="{{asset('images/dfx_media_player.png')}}" alt="Media Player">
              </div>
              <div class="d-sm-flex align-items-center justify-content-center flex-column">
                <div class="text-center s20 mt-4 l20">
                  <div class="title-header-service bg-light dark mb-2 font-weight-bold">Media Player</div>
                  <div class="title-header-service bg-light dark">CAYIN</div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    const typed = new Typed('.typed' , {
      stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
      smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
      typeSpeed: 50,
      startDelay:200,
      backSpeed: 75,
      showCursor: true,
      loop:false,
      backDelay: 1500,
      showCursor: true,
      cursorChar: '|', // Caracter para el cursor
      contentType: 'html', // 'html' o 'null' para texto sin formato
    });
    </script>
  </section>
