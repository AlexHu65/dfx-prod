<section id="contacto" class="pt-5 pb-5">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="text-center animated bounce infinite">
          <img class="desk" style="transform: translateY(-145px);" src="{{asset('images/arrow-down.png')}}" alt="Conóceme">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">

        <div class="social-content">
            <h2 class="main-color m-0 bebas-book text-center">SÍGUEME EN:</h2>

            <div class="d-sm-flex justify-content-center align-items-center custom">


            <div class="icons-social d-sm-flex justify-content-center">
              <div class="item-flex  p-2">
                <a href="{{setting('site.facebook')}}">
                  <img src="{{asset('images/FB.png')}}" alt="Facebook">
                </a>
              </div>
              <div class="item-flex  p-2">
                <a href="{{setting('site.instagram')}}">
                  <img src="{{asset('images/IG.png')}}" alt="Instagram">
                </a>
              </div>
              <div class="item-flex p-2">
                <a href="{{setting('site.twitter')}}">
                  <img src="{{asset('images/TW.png')}}" alt="Twitter">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
      </div>

    </div>
  </div>

  <div class="container">
    <h2 class="text-center main-title s30">CONTÁCTAME</h2>
    <h3 class="text-center main-title">Selecciona el motivo de tu consulta</h3>

    <div class="buttons-subject d-flex justify-content-center">
      <button data-subject="Gestión" class="subject-btn uk-button uk-button-primary m-2">Gestión</button>
      <button data-subject="Queja/Felicitación" class="subject-btn uk-button uk-button-default m-2">Queja/Felicitación</button>
      <button data-subject="Cita" class="subject-btn uk-button uk-button-default m-2">Cita</button>
      <button data-subject="Sugerencia" class="subject-btn uk-button uk-button-default m-2">Sugerencia</button>
    </div>
    <p class="text-center text-muted">Agenda una cita o invita a Christian Cruz a participar y hablar en tu evento.</p>
      <div class="row">
          <div class="col-sm-12 col-md-6 pt-5">
            <h3 class="font-weight-bold deep-blue s18"><i class="fas fa-map-marker-alt mr-3"></i>DIRECCIÓN</h3>
            <p class="text-muted">{{setting('site.principal')}}</p>
            <h3 class="font-weight-bold deep-blue s18"><i class="fas fa-mobile-alt mr-3"></i>TELÉFONO</h3>
            <p class="text-muted"><a href="tel:{{setting('site.telefono')}}">{{setting('site.telefono')}}</a></p>
            <h3 class="font-weight-bold deep-blue s18"><i class="far fa-envelope mr-3"></i>EMAIL</h3>
            <p class="text-muted"><a href="mailto:{{setting('site.correo')}}">{{setting('site.correo')}}</a></p>

        </div>
          <div class="col-sm-12 col-md-6 pt-5">
            <form id="frm-contacto" method="post" action="{{route('send.contacto')}}">
                @csrf
                <div class="form-group">
                  <label for="txtAsunto"><strong>Asunto:</strong></label>
                  <input disabled type="text" id="showAsunto" class="form-control validate[required] disabled" value="Gestión">
                  <input type="hidden" id="txtAsunto" name="txtAsunto" value="Gestión">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control validate[required, custom[onlyLetterNumber]]" id="txtNombre" name="txtNombre" placeholder="Nombre*">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtNombreOrganizacion" name="txtNombreOrganizacion" placeholder="Nombre de tu organizacion">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtDescOrganizacion" name="txtDescOrganizacion" placeholder="¿A que se dedica tu organización?">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtEvento" name="txtEvento" placeholder="Nombre del evento">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="Fecha">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control validate[custom[onlyLetterNumber]]" id="txtMunicipio" name="txtMunicipio" placeholder="Municipio">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="email" class="form-control validate[required, custom[email]]" id="txtEmail" name="txtEmail" placeholder="Email*">
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="txtComentario" class="form-control validate[custom[onlyLetterNumber]]" rows="8" cols="80" placeholder="Comentario"></textarea>
                </div>
                  <button id="btnSubmit2" type="submit" class="btn">ENVIAR MENSAJE</button>
                  <span class="co loading2 dn deep-blue"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
                <div class="msg2 bebas-book font-weight-bold main-color"></div>
            </form>
          </div>
      </div>


        </div>
</section>
