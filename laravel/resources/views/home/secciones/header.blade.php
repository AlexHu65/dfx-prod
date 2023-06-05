<!-- home -->
<section class="dfx_sec_home">
  <!-- logo -->
  <div class="logo_content_top fadeIn">
    <div class="dfx_logo">
      <a href="{{url('/')}}">

        <img class="img_logo fadeIn" src="{{asset('images/dfx_logo.png')}}" alt="Logo">

      </a>
    </div>
  </div>
  <div class="logo-hidden">
  </div>
  <div class="container">
    <!-- row home 1  -->
    <div class="row">
      <div class="col-sm-12">
        <div class="dfx_home_text1 text-center">
          <div class="titulo" id="cadenas-texto">
            <p>
              Somos una agencia que ofrece soluciones completas que involucran <strong>tecnología, comunicación y creatividad</strong> , que emocionan y dan resultados.

            </p>
          </div>
          <h1 class="dfx_hero">CREEMOS EN <span class="floater dfx_color dfx_crear"><div class="animated bounceInLeft delay-2s">CREAR</div></span></h1>
          <p class="dfx_raleway text-muted">
            <span class="typed"></span>
          </p>
          <div class="button_head">
            <span class="dfx_btn_head">ADN/DFX <img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></span>
          </div>
          <div class="dfx_forms_head text-center floater">
            <span class="dfx_form_mouse"><img src="{{asset('images/dfx_line.png')}}" alt="Mouse"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

  const typed = new Typed('.typed' , {
    stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
    smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
    typeSpeed: 60,
    startDelay:300,
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
