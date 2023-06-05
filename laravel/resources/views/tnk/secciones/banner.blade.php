<!-- menu iconos de redes etc.-->
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
<!-- contacto icono -->
<div class="dfx_envolpe fadeIn">
  <ul>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
  </ul>
</div>

<div class="contacto_content">
  <div class="contacto2">
    <div class="info_contacto">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="content">
              <div class="title_contacto">
                <h1>
                  <img src="{{asset('images/dfx_line_services_y.png')}}" alt="separador">
                  CONTÁCTANOS <span class="dfx_color">:</span>
                </h1>
              </div>
              <h3 class="dfx_color">CONTACTO</h3>
              <p>
                Prolongación Campestre 2737 <br>
                Col. Cañada del Refugio C.P. 37358 <br>
                León Gto. México <br>
              </p>
              <p>
                comercializacion@difraxion.com <br>
                Tel. 01 (477) 198-09-65 <br>
                01 800 801 0001 <br>
              </p>
              <p>
                &copy; 2019 Difraxion Group
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form_contacto">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="content">

              <div class="form_wrapper">
                <form id="frm-comentario" name="dfx_contact_form" action="{{url('/')}}/thanks" method="post">
                  @csrf
                  <div class="form-group">
                    <input class="validate[required, minSize[10] ,custom[onlyLetterNumber]]" type="text" name="txtNombre" placeholder="Nombre" autocomplete="none">
                    <div><span class="help-block"></span></div>
                  </div>

                  <div class="form-group">
                    <input class="validate[required, custom[email]]" type="text" name="txtEmail" placeholder="Correo Electrónico" autocomplete="none">
                    <div><span class="help-block"></span></div>
                  </div>

                  <div class="form-group">
                    <input class="validate[required, custom[phone]]" type="text" name="txtTelefono" placeholder="Teléfono" autocomplete="none">
                    <div><span class="help-block"></span></div>
                  </div>
                  <div class="form-group">
                    <input class="validate[required, minSize[10] ,custom[onlyLetterNumber]]" type="text" name="txtComentario" placeholder="Comentarios" autocomplete="none">
                    <div><span class="help-block"></span></div>
                  </div>

                  <button id="btnSubmit" type="submit">Enviar <img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></button>
                  <span class="co loading dn"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
                  <div class="msg"></div>
                </form>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
              <li class="item-menu"><a href="{{url('digital-signage')}}">Digital Signage</a></li>
              <li class="item-menu"><a href="{{url('marketing-digital')}}">Marketing Digital</a></li>
              <li class="item-menu"><a href="{{route('laboratorio')}}">Laboratorio Creativo</a></li>
              <!-- <li class="item-menu"><a href="#">adn-dfx</a></li> -->
              <li class="item-menu"><a href="{{route('blog')}}">Blog</a></li>
              <li class="item-menu"><a href="{{url('contacto')}}">Contacto</a></li>
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
