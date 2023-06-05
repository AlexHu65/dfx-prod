<section id="servicios-digital" class="pt-5 pb-5">
  <style>
  .img-blog{
    min-height: 225px;
  }
</style>
<div class="container pt-5 pb-5">
  <div class="d-sm-flex justify-content-center align-items-center wrapper-title">
    <div class="item-title m-3">
      <div class="line-yellow"></div>
    </div>
    <div class="item-title m-3 dfx_hero s45">ÚLTIMAS NOTICIAS</div>
  </div>
  <div class="row d-sm-flex justify-content-around">
    @if($noticias->count() > 0)
    @foreach($noticias as $noticia)
    <div class="col-md-4 pt-4 pb-4">
      <div class="img-blog" style="background: url({{Voyager::image($noticia->img)}});background-position: center center;background-size:cover;"></div>
      <div class="title-content pt-3 pb-3">
        <div class="date-noticia text-uppercase text-center dfx_color float-left">
          {{$noticia->created_at->format('d M')}}
        </div>
        <div class="title-noticia pl-4">
          <h2 class="dfx_hero font-weight-bold">{{$noticia->titulo}}</h2>
        </div>
      </div>
      <div class="text-justify">
        {{ \Illuminate\Support\Str::limit($noticia->texto_prev , 300 , '...')}}
      </div>
      <div class="button-noticia mt-5">
        <a href="{{route('blog.interior' , $noticia->slug)}}">
          <img src="{{asset('images/btn_ver_mas.png')}}" alt="Ver más">
        </a>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
</section>
