<section id="cita" class="pt-5 pb-5">
  <script type="text/javascript">
  if(window.location.href == "https://difraxion.mx/contacto"){

    window.location.replace("https://difraxion.com/contacto");
  }
</script>
<!-- <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}"> -->
<!-- <script src="{{asset('js/materialize.min.js')}}" type="text/javascript"></script> -->
<style media="screen">
label{
  font-family: 'Montserrat';
}
.msg{
  display: none;
  text-transform : uppercase;
  color:#efbe2c;
  background: #2e3131;
  padding : 15px;
  font-weight :600;
  float: left;
}
</style>
<div class="container">
  <div class="d-sm-flex justify-content-center align-items-center wrapper-title">
    <div class="item-title m-3">
      <div class="line-yellow"></div>
    </div>
    <div class="item-title m-3 dfx_raleway_bold s45">CONTÁCTANOS</div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-6 form-wrapper">
      <h3 class="dfx_color dfx_hero">Ubicación</h3>

      <p class="p-3 dfx_hero s20 smooke">
        Prolongación Campestre 2737 <br>
        Col. Cañada del Refugio C.P. 37358 <br>
        León Gto. México <br>

      </p>
      <p class="p-3 dfx_hero s20 smooke">
       <a href="mailto:comercializacion@difraxion.com">comercializacion@difraxion.com</a> <br>
        Tel. 01 (477) 198-09-65 <br>
        01 800 801 0001 <br>
      </p>
 <div class="mapouter p-3"><div class="gmap_canvas">
   <iframe width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q=difraxion%20group&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

 </div>

</div>
    </div>
    <div class="col-sm-12 col-md-6 form-wrapper">
      <form id="frm-cita" class="dfx_hero" method="post">
        @csrf
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
        <div class="form-row">
          <div class="form-group col-md-6">
            <small id="emailHelp" class="form-text text-muted mb-2">¿En qué servicio estás interesado?</small>
            <!-- <label for="txtServicio">¿En qué servicio estás interesado?</label> -->
            <select class="form-control select2 validate[required]" id="txtServicio" name="txtServicio">
              <option value="Marketing digital">Marketing digital</option>
              <option value="Digital Signage">Digital Signage</option>
              <option value="Networks">Networks</option>
              <option value="Laboratorio creativo">Laboratorio creativo</option>
              <option value="Servicio integral">Servicio integral</option>

            </select>
          </div>
          <div class="form-group col-md-6">
            <small id="emailHelp" class="form-text text-muted mb-2">¿Cómo te enteraste de nosotros?</small>
            <!-- <label for="txtNosotros">¿Cómo te enteraste de nosotros?</label> -->
            <select class="form-control select-option validate[required]" id="txtNosotros" name="txtNosotros">
              <option value="Los encontré en Internet">Los encontré en Internet</option>
              <option value="Por recomendación">Por recomendación</option>
              <option value="Los vi en un anuncio de Internet">Los vi en un anuncio de Internet</option>
              <option value="Otro">Otro</option>
            </select>

          </div>
        </div>
        <div class="form-group">
          <input type="text" class="dn form-control" id="txtOtro" name="txtOtro" placeholder="Por favor, escribe donde nos conociste.">
        </div>
        <div class="form-group">
          <textarea name="txtAyuda" class="form-control" rows="8" cols="80" placeholder="¿En qué podemos ayudarte?"></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <div class="g-recaptcha" data-sitekey="{{setting('site.recaptcha')}}"></div>
          </div>
          <div class="form-group col-md-6">
                  <button id="btnSubmit2" class="float-right" type="submit">Enviar <img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></button>

            <!-- <button id="btnSubmit2" type="submit" class="btn btn-dark"><span class="dfx_color">Enviar</span></button> -->
          </div>
        </div>
        <span class="co loading dn"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
        <div class="msg"></div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery.validationEngine.js')}}"></script>
<script src="{{asset('js/jquery.validationEngine-es.js')}}"></script>
<script type="text/javascript">


$('.select2').select2();

$('.select-option').select2({
  templateSelection: optionSelected

});

function optionSelected (option) {
  if (option.selected) {
    if(option.id === 'Otro'){
      $("#txtOtro").show(500);
      $("#txtOtro").addClass('validate[required]');
    }else{
      $("#txtOtro").hide(500);
      $("#txtOtro").removeClass('validate[required]');

    }
    return option.text;
  }
};

$('#frm-cita').validationEngine();

$('#frm-cita').submit(function (e) {
  // $('#btnSubmit2').hide(500);
  e.preventDefault();

  var dataString = $("#frm-cita").serialize();

  $.ajax({
    type: "POST",
    url: url + "/api/captcha",
    data: dataString,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    success: function (resp) {
      if (resp.error) {
        grecaptcha.reset();
        $('#btnSubmit2').show(500);
        $(".loading").addClass('dn');
        $(".msg").show();
        $(".msg").html(resp.error);
      }
      if (resp.mensaje) {
        $.ajax({
          type: "POST",
          url: url + "/contacto",
          data: dataString,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (data) {
            if (data.msg) {
              $('#frm-cita').trigger("reset");
              grecaptcha.reset();
              $('#btnSubmit2').hide(500);
              $(".loading").addClass('dn');
              // $(".msg").show(500);
              // $(".msg").html(data.msg);


            } else if (data.error) {
              grecaptcha.reset();
              $('#btnSubmit2').show(500);
              $(".loading").addClass('dn');
              // $(".msg").hide(500);
              // $(".msg").html(data.msg);

            }
            if(data.tnk){
              window.location.href = url + '/contacto/thankyou/';
            }
          },error:function(error){
            console.log(error);
          }
        });
      }
    }
  });
});

</script>
</section>
