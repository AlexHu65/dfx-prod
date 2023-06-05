<section id="entradasBlog" class="pt-5 pb-5">
    <div class="container">
        <h2 class="text-center main-title s30">BLOG</h2>
        <div class="row d-flex justify-content-center">
                @if ($noticias->count() > 0)
                    @foreach($noticias as $noticia)
                    <div class="col-md-4">
                        <div class="card mt-3" data-aos="flip-left">
                            <a href="{{route('blog.interior' , $noticia->slug)}}">
                                <img class="card-img-top" src="{{Voyager::image($noticia->thumbnail('small' ,'img'))}}" alt="{{$noticia->titulo}}">
                            </a>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-uppercase bebas-book main-color">{{$noticia->titulo}}</h3>
                                <small class="card-title">{{$noticia->bullet}}</small>
                                <p class="card-text">{!! \Illuminate\Support\Str::limit($noticia->contenido , 155 , '...')!!}</p>
                                <small class="text-muted float-left">{{$noticia->created_at->format('d M Y')}}</small>
                                <a href="{{route('blog.interior' , $noticia->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
        </div>
    </div>
</section>
