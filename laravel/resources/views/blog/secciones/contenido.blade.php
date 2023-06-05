<section id="contenidoBlog" class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <!--blog-->
      <div class="col-sm-8">
        <div class="image-articulo p-5">
          <img src="{{Voyager::image($noticia->img)}}" alt="{{$noticia->titulo}}">
        </div>

        <div class="bullet p-5">
          <div class="line-yellow"></div>
          <h4 class="dfx_hero text-muted"><a href="{{route('blog.tags' , $noticia->bullet)}}">{{$noticia->bullet}}</a></h4>

          <h1 class="dfx_hero title-destacado">{{$noticia->titulo}}</h1>
          <br>
          <strong>Por: {{$noticia->autor}}</strong><br>
          <small>{{$noticia->created_at->format('d M Y')}}</small><br>
          <small class="dfx_color"><a href="{{route('blog.categoria' , $noticia->categoria->slug)}}">{{$noticia->categoria->nombre}}</a></small>

          <div class="pt-3">
            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
              <a target="_blank" href="https://www.facebook.com/share.php?u={{route('blog.interior' , $noticia->slug)}}" class="a2a_button_facebook"></a>
              <a target="_blank" href="https://twitter.com/intent/tweet?url={{route('blog.interior' , $noticia->slug)}}" class="a2a_button_twitter"></a>
              <a target="_blank" href="https://api.whatsapp.com/send?text={{route('blog.interior' , $noticia->slug)}}" class="a2a_button_whatsapp"></a>
              <a target="_blank" href="fb-messenger://share?link={{route('blog.interior' , $noticia->slug)}}" class="a2a_button_facebook_messenger"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
          </div>

          {!! $noticia->contenido !!}
        </div>
      </div>
      <!-- siguiente -->
      @if($siguiente)
      <div class="col-md-4 pt-5">
        <div class="img-blog">
          <a href="{{route('blog.interior' , $siguiente->slug)}}">
            <img src="{{Voyager::image($siguiente->img)}}" alt="{{$siguiente->titulo}}">
          </a>
          <a href="{{route('blog.interior' , $siguiente->slug)}}">
            <img class="next-blog" src="{{asset('images/dfx_next_btn.png')}}" alt="{{$siguiente->titulo}}">
          </a>
        </div>
        <div class="title-content pt-3 pb-3">
          <div class="date-noticia text-uppercase text-center dfx_color float-left">
            {{$siguiente->created_at->format('d M')}}
          </div>
          <div class="title-noticia pl-4">
            <a href="{{route('blog.interior' , $siguiente->slug)}}">
              <h2 class="dfx_hero font-weight-bold">{{$siguiente->titulo}}</h2>
            </a>
          </div>
        </div>

      </div>
      @endif
    </div>
  </div>
</section>
