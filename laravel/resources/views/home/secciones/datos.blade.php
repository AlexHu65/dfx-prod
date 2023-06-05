<section id="resultados" class="pt-5 pb-5">
<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <div class="container pb-3">
        <h1 class="bebas-bold text-light text-center">TRABAJO CON RESULTADOS</h1>
        <div class="row">
            @if($contadores->count() > 0)
            @foreach($contadores as $contador)
            <div data-aos="flip-left" class="col-sm-12 col-md-3 pt-4">
                <div class="text-center">
                    <span class="timer" data-count-from="0" data-count-to="{{$contador->valor}}" data-count-speed="200"></span>
                    {!! $contador->titulo !!}
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
