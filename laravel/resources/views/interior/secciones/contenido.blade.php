<section class="pt-5 pb-5" id="contentBlog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-blog">
                    <div class="image-blog">
                        <img class="card-img-top" src="{{Voyager::image($noticia->img)}}" alt="{{$noticia->titulo}}">
                    </div>
                    <div class="bullet pb-3">
                        <h2 class="bebas-book font-weight-bold pt-3 m-0">
                            {{$noticia->bullet}}
                        </h2>
                        <div class="text-muted">{{$noticia->created_at->format('d M Y')}}</div>
                    </div>
                    <div class="contenido pt-3 pb-3">
                        {!! $noticia->contenido !!}
                    </div>
                </div>
            </div>
        </div>
        @if(!isset($accion))
        <div class="row">
            <div class="col-md-6">
                <div class="interactions d-flex justify-content-start align-items-center mt-3 mb-3">
                    <div class="comments p-2"><small class="text-muted"><i class="fas fa-arrow-circle-down"></i> Comentarios:</small>  <span class="badge badge-pill badge-info">{{$noticia->comentarios->where('activo' , '1')->count()}}</span></div>
                    <div class="share p-2"><small class="text-muted">Compartir:</small>
                        <span class="badge badge-pill badge-info"><i class="fas fa-share-alt"></i></span>
                        <a target="_blank" href="https://www.facebook.com/share.php?u={{route('blog.interior' , $noticia->slug)}}&t={{$noticia->titulo}}, {{$noticia->contenido}}"><span class="text-muted"><i class="fab fa-facebook-f ml-3"></i></span></a>
                        <a target="_blank" href="https://twitter.com/intent/tweet?url={{route('blog.interior' , $noticia->slug)}}&text={{$noticia->titulo}}, {{$noticia->contenido}}"><span class="text-muted"><i class="fab fa-twitter ml-3"></i></span></a>
                        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{route('blog.interior' , $noticia->slug)}}&title={{$noticia->titulo}}&source={{url('/')}}"><span class="text-muted"><i class="fab fa-linkedin-in ml-3"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="comentarios mt-3 mb-3">
                    <h4 class="bebas-book font-weight-bold active-blue">Comentarios</h4>
                    <div class="listado-comentarios">
                      @foreach($noticia->comentarios->where('activo' , '1') as $comentario)
                      <div class="item ">
                        <p class="nombre-fecha font-weight-bold">{{$comentario->nombre}} </p><small class="text-muted float-right font-weight-bold">{{date('M d Y', strtotime($comentario->created_at))}}</small>
                        <p>{{$comentario->comentario}}</p>
                        <p class="denunciar pointer"><small class="btn-denunciar text-uppercase" data-com="{{$comentario->id}}">Denunciar</small></p>
                      </div>
                      @endforeach
                    </div>
                  </div>
                <div class="formulario">
                    <h4 class="bebas-book font-weight-bold active-blue">Deja un comentario</h4>
                    <small>Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con*</small>
                <form id="frm-comentario" class="bv-form" method="post" action="{{route('send.comentario')}}">
                      @csrf
                      <div class="form-group">
                        <textarea class="form-control validate[required, minSize[10] ,custom[onlyLetterNumber]]" name="txtComentario" id="txtComentario" placeholder="Tu comentario(*)" data-bv-field="comentario"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control validate[required , custom[onlyLetterNumber]]" name="txtNombre" id="txtNombre" placeholder="Nombre(*)" data-bv-field="nombre">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control validate[required, custom[email]]" name="txtEmail" id="txtEmail" placeholder="Correo Electronico(*)" data-bv-field="email">
                      </div>
                      <div class="clear"></div>
                      <div class="acciones">
                        <button type="submit" id="btnSubmit" class="send">Publicar Comentario</button>
                        <span class="co loading dn"><i class="fas fa-spinner fa-spin"></i>&nbsp;Enviando...</span>
                        <div class="msg dn main-color font-weight-bold bebas-book" role="alert"></div>
                      </div>
                      <input type="hidden" name="id" value="{{$noticia->id}}">
                    </form>
                  </div>
            </div>
        </div>
        @endif
    </div>
</section>
