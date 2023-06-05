<section id="servicios-digital" class="mt-5 mb-5 pb-3">
  <style media="screen">
  .shadow-2{
    background: #e5e5e5;
    min-height: 240px;
    padding: 20px 5px !important;
  }
.item-servicio{
  min-height: 275px;
}
</style>
<div class="container">

  <div class="d-sm-flex justify-content-center align-items-center wrapper-title">
    <div class="item-title m-3">
      <div data-aos="zoom-out-up" class="line-yellow"></div>
    </div>
    <div data-aos="zoom-out-up" class="item-title m-3 dfx_raleway_bold s45">USOS</div>
  </div>
  <div class="d-sm-flex justify-content-center align-items-center">
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/gmarca.png')}}" alt="Gestión de marca.">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-4 l20">
          Gestión de marca.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/consumidor.png')}}" alt="Experiencia del consumidor">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-4 l20">
          Experiencia del consumidor.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/competencia.png')}}" alt="Análisis de la competencia">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-2">
          Análisis de la competencia.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
  </div>
  <!-- line 2 -->
  <div class="d-sm-flex justify-content-center align-items-center">
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/crisis.png')}}" alt="Crisis y análisis de riesgos">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-4 l20">
          Crisis y análisis de riesgos.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/personajes.png')}}" alt="Marketing y medición de influences y personajes">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-4 l20">
          Marketing y medición de influences y personajes.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
    <div data-aos="flip-left" data-aos-duration="1000" class="item-servicio shadow-2 m-3 p-3 text-center">
      <img src="{{asset('images/monitoreo.png')}}" alt="Monitoreo de conversación, análisis y alcance de contenido">
      <div class="d-sm-flex align-items-center justify-content-center flex-column">
        <div class="text-center s20 dfx_raleway_bold mt-4 l20">
          Monitoreo de conversación, análisis y alcance de contenido.
        </div>
        <div class="line-black mt-3"></div>
      </div>
    </div>
  </div>
</div>
</section>
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalForm" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-cita" class="dfx_hero" method="post">
          @csrf
          <input type="hidden" id="pdfHidden">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtNombre" id="txtNombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtApellido" id="txtApellido" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="email" class="form-control validate[required, custom[email]]" name="txtEmail" id="txtEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control validate[required, custom[phone]]" name="txtTelefono" id="txtTelefono" placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control validate[custom[url]]" name="txtWeb" id="txtWeb" placeholder="Sitio web">
          </div>
          <div class="form-group">
            <input type="text" class="form-control validate[required , minSize[5] ,custom[onlyLetterNumber]]" name="txtEmpresa" id="txtEmpresa" placeholder="Nombre de la empresa">
          </div>
          <div class="form-group">
            <input type="text" class="dn form-control" id="txtOtro" name="txtOtro" placeholder="Por favor, escribe donde nos conociste.">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="g-recaptcha" data-sitekey="{{setting('site.recaptcha')}}"></div>
            </div>
            <div class="form-group col-md-6">
              <button id="btnSubmit2" class="float-right" type="submit">Enviar <img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></button>
            </div>
            <span class="co loading dn"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO Y REDIRECCIONANDO...</span>
            <div class="msg"></div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
