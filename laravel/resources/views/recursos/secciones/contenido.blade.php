<section id="contenidoBlog" class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <!--blog-->
      <div class="col-sm-8">
        <div class="image-articulo p-5">
          <img src="{{Voyager::image($recurso->img)}}" alt="{{$recurso->titulo}}">
        </div>

        <div class="bullet p-5">
          <div class="line-yellow"></div>
          <h4 class="dfx_hero text-muted"><a href="{{route('blog.tags' , $recurso->bullet)}}">{{$recurso->bullet}}</a></h4>

          <h1 class="dfx_hero title-destacado">{{$recurso->titulo}}</h1> 
          <hr>
          {!! $recurso->contenido !!}
        </div>
      </div>   
      <div class="col-md-4">

      <h1 class="dfx_hero title-destacado">Descargar Guía</h1>
        <form id="frm-cita" class="dfx_hero" method="post">
          @csrf
          <?php  
          
          $json = $recurso->archivo;
          $file = json_decode($json);
          
          ?>
          <input type="hidden" id="pdfHidden" value="{{ Storage::disk(config('voyager.storage.disk'))->url($file[0]->download_link) ?: '' }}">
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtNombre" id="txtNombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtApellido" id="txtApellido" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="email" class="form-control validate[required, custom[email]]" name="txtEmail" id="txtEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-12">
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
            <input type="text" class="dn" value="{{$recurso->titulo}}" name="txtServicio" id="txtServicio" >
          </div>
          <div class="form-group">
            <input type="text" class="dn form-control" id="txtOtro" name="txtOtro" placeholder="Por favor, escribe donde nos conociste.">
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="g-recaptcha" data-sitekey="{{setting('site.recaptcha')}}"></div>
            </div>            
          </div>
          <div class="form-row">
          <div class="form-group col-md-12">
              <button id="btnSubmit2" class="float-right" type="submit">Enviar <img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></button>
            </div>
            <span class="co loading dn"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO Y REDIRECCIONANDO...</span>
            <div class="msg"></div>          
          </div>
        </form>  
        </div>   
    </div>
  </div>
</section>
