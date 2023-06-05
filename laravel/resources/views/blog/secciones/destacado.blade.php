<section class="destacadoBlog pt-5 pb-5 mt-3">
  <div class="container">
    @if($destacado->count() > 0)
    <div class="row">
      <div class="col-sm-6 pt-4 pb-4">
        <span class="text-muted dfx_hero">{{$destacado->bullet}}</span>
        <h2 class="dfx_hero title-destacado">
          {!! $destacado->titulo !!}
        </h2>
        <strong>Por: {{$destacado->autor}}</strong><br>
        <small>{{$destacado->created_at->format('d M Y')}}</small><br>

        <small class="dfx_color">{{$destacado->categoria->nombre}}</small>
<div class="text-justify">
        {{ \Illuminate\Support\Str::limit($destacado->texto_prev , 600 , '...')}}

</div>
        <div class="button-see mt-5">
          <a href="{{route('blog.interior' , $destacado->slug)}}">
            <img src="{{asset('images/btn_ver_mas.png')}}" alt="Ver más">
          </a>
        </div>
      </div>
      <div class="col-sm-6 pt-4 pb-4">
        <div class="img-blog">
          <img src="{{Voyager::image($destacado->img)}}" alt="{{$destacado->titulo}}">
        </div>
      </div>
    </div>
    @endif
  </div>
</section>
