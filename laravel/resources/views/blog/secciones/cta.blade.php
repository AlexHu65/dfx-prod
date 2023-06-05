<section class="inverse-mkt" id="cta-mkt">

  <div class="container">
    <div class="d-sm-flex justify-content-center align-items-center wrapper-cta">
      <div class="item-cta m-3">
        <div class="line-white"></div>
      </div>
      <div class="item-cta m-4 dfx_raleway_bold dfx_color s45">{{(isset($blog) && isset($noticia) ? $noticia->nombre_link : 'TRABAJEMOS JUNTOS')}}</div>
      <div class="item-cta m-4"><img src="{{(isset($blog) ?  Voyager::image($noticia->icono) : asset('images/dfx_work_inverse.png'))}}" alt="{{(isset($blog) ? $noticia->nombre_link : 'Trabajemos juntos')}}"></div>
      <div class="item-cta m-4">
        <div>
          <a target="{{isset($blog) && $noticia->nueva_ventana ? '_blank':''}}" href="{{(isset($blog) ? $noticia->link : url('contacto'))}}">
            <span role="button" class="dfx_btn_cta btn_exito">{{(isset($blog) ? $noticia->boton_texto: 'AGENDA UNA CITA')}}<img src="{{asset('images/dfx_arrow_inverse.png')}}" alt="Arrow rigth"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</>
