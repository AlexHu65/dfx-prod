<div class="p-4 text-center mov">
    <img src="{{asset('storage') . '/' . setting('site.logo')}}" alt="Christian Cruz">
</div>
<div class="owl-banner owl-carousel owl-theme d-none d-md-block z-0">
  @foreach($banners as $banner)
  <div class="item d-flex justify-content-center align-items-center">
      <img src="{{asset('storage/') .'/'. $banner->img}}" alt="Christian Cruz">
        <div class="text-center w100 absolute text-light animated bounceInLeft delay-2s">
          <h1>
              <span class="bebas-bold s70 text-light">{{(isset($titulo) ? $titulo: 'CONÓCEME')}}</span>
          </h1>
          @if(!isset($titulo))
          <div class="desk">
              <span class="bebas-bold bg-header s30">QUIÉN ES CHRISTIAN CRUZ</span>
          </div>
          @endif
        </div>
    </div>
  @endforeach
</div>
<div class="owl-carousel owl-theme d-xs-block d-lg-none">
  @foreach($banners as $banner)
  <div class="item"><img src="{{asset('storage/') .'/'. $banner->img_mobile}}" alt=""></div>
  @endforeach
</div>
