<section id="accion-constante" class="pt-5 pb-5 mb-3">
    <div class="container">
        <h2 class="text-center main-title s30">ACCIÓN CONSTANTE</h2>
        <div class="row d-flex justify-content-center">
            @if($acciones->count() > 0)
            <?php $number = 1; ?>

            @foreach($acciones as $accion)
            <div class="col-sm-12 col-md-4">
                <div class="transition">
                    <div class="img-accion transition mt-5">
                        <a href="{{route('accion.interior' , $accion->slug)}}">
                        <img src="{{Voyager::image($accion->thumbnail('medium' ,'img'))}}" alt="{{$accion->titulo}}">
                        </a>
                    </div>
                    <div class="title-accion pt-2 ml-4 relative">
                    <h2 class="gray-secondary pt75 absolute bebas-bold number-accion">0{{$number}}</h2>

                        <h3 class="bebas-bold deep-blue relative">{{$accion->titulo}}</h3>

                        <div class="line-blue"></div>
                        <p class="gray-main">
                    {!! \Illuminate\Support\Str::limit($accion->contenido , 155 , '...')!!}

                        </p>
                    </div>
                </div>
            </div>
            <?php $number++; ?>
            @endforeach
            @endif

        </div>
    </div>
</section>
