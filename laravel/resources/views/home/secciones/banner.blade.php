<!-- menu iconos de redes etc.-->
<style media="screen">
.menu_items_content ul li {
  font-size: 25px;
  text-align: right;
}
</style>
<nav>
  <div class="dfx_menu_bars dfx_hero fadeIn">
    <div class="menu-wraper">
      <div class="btn-bg">
        <div class="menu-btn style-3">
          <span class="menu-row top"></span>
          <span class="menu-row mid"></span>
          <span class="menu-row bot"></span>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- redes sociales -->
<style media="screen">
.dfx_social{
  top: 55%;
}
.fa-stack{
  width: 1.5em !important;
  color: #efbe2c !important;
}
.fa-stack-1x{
  color: #2e3131 !important;
}
.dfx_social ul li img{
  padding: 15px !important;
}
</style>
<div class="dfx_social fadeIn">
  <ul>
    <li><span><img src="{{asset('images/dfx_separator.png')}}" alt="separador"></span></li>
    <li>
      <a href="{{setting('site.twitter')}}">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>
    <li>
      <a href="{{setting('site.facebook')}}">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>
    <li>
      <a href="{{setting('site.instagram')}}">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </li>

  </ul>
</div>
<!-- menu collapse -->
<div class="menu_content">
  <!-- menul collapsado -->
  <div class="menu dfx_hero">
    <!-- logo -->
    <div class="logo_content_top fadeIn">
      <div class="dfx_logo_inverse">
        <a href="{{url('home')}}">
          <img class="logo-img" src="{{asset('images/dfx_logo_inverse.png')}}" alt="Logo Difraxion">
        </a>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- dfx info -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="info fadeIn">
            <p >
              <img src="{{asset('images/dfx_logo_yellow.png')}}" alt="DFX">
            </p>
            <p class="direccion">
              Prolongación Campestre 2737
              Col. Cañada del Refugio C.P. 37358
              León Gto. México
            </p>
            <p class="contacto">
              comercializacion@difraxion.com <br>
              Tel. 01 (477) 198-09-65 <br>
              01 800 801 0001
            </p>
          </div>
          <div class="menu_social_content text-center fadeIn">
            <img src="{{asset('images/dfx_line_services_y.png')}}" alt="separador">
            <ul>
              <li><a href="{{setting('site.twitter')}}"><i class="fab fa-twitter"></i></a></li>
              <li><a href="{{setting('site.facebook')}}"><i class="fab fa-facebook"></i></a></li>
              <li><a href="{{setting('site.instagram')}}"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- menu -->
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="menu_items_content fadeIn">
            <ul>
              <!-- <li class="item-menu"><a href="#">Laboratorio Creativo</a> </li> -->
              <li class="item-menu {{(isset($menu1) ? 'dfx_color' : '')}}"><a href="{{url('digital-signage')}}">Digital Signage</a></li>
              <li class="item-menu {{(isset($menu2) ? 'dfx_color' : '')}}"><a href="{{url('marketing-digital')}}">Marketing Digital</a></li>
              <li class="item-menu {{(isset($menu3) ? 'dfx_color' : '')}}"><a href="{{route('laboratorio')}}">Laboratorio Creativo</a></li>
              <li class="item-menu {{(isset($menu4) ? 'dfx_color' : '')}}"><a href="{{route('brandwatch')}}">Brandwatch</a></li>
              <!-- <li class="item-menu"><a href="#">adn-dfx</a></li> -->
              <li class="item-menu {{(isset($menu5) ? 'dfx_color' : '')}}"><a href="{{route('blog')}}">Blog</a></li>
              <li class="item-menu {{(isset($menu6) ? 'dfx_color' : '')}}"><a href="{{url('contacto')}}">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- barra de progreso -->
<div class="progressBarContainer">
  <div id="myProgress" class="progressFill"></div>
</div>
