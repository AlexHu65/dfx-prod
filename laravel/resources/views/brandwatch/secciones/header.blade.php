<!-- home -->
<section class="dfx_sec_brandwatch">
  <style media="screen">
  .dfx_sec_brandwatch {
    min-height: 600px;
    background: url('../images/dfx_back_brandwatch.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .crear{
    background: #efbe2c !important;
  }

</style>
<!-- logo -->
<div class="logo_content_top fadeIn">
  <div class="dfx_logo">
    <a href="{{url('/')}}">
      <img class="img_logo fadeIn" src="{{asset('images/dfx_logo.png')}}" alt="Logo">

    </a>
  </div>
</div>
<div class="container">
  <div class="nav-bar">
    <div class="wrapper">
      <div class="item-nav-bar subtitle custom-nav">
        <img src="{{asset('images/brandwatch.png')}}" alt="Brandwatch">
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
        <p>
          Soluciones estratégicas basadas en la voz y <br> sentimientos de los <span class="dfx_raleway_bold"> usuarios de Internet y <br>
          redes sociales. </span>
          <br>
      </p>
    </div>
    <p class="dfx_raleway text-uppercase s25 l27">
      <span class="typed"></span>
    </p>
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
