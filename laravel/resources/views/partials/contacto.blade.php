<section class="{{(isset($dn) ? 'dn' : '')}} dfx_sec_contacto">
  <style media="screen">
  .h25{
    height: 25px !important;
  }
  .line {
    height: 5px;
    width: 55px;
    background: #febe00;
  }
  a{
    text-decoration: none !important;
    color: inherit !important;
  }
</style>
<div class="container">
  <div data-aos="zoom-out-up" data-aos-duration="1000" class="text-center txt_content fadeIn">

    <h5 class="dfx_hero">¿TE GUSTA NUESTRO TRABAJO ?</h5>
    <div class="d-sm-flex justify-content-center align-items-center">
      <div class="items-form h25">
        <div class="line"></div>
      </div>
      <div class="items-form">
        <div class="title">

          <h2 class="dfx_hero">TRABAJEMOS JUNTOS</h2>
        </div>
      </div>
    </div>
    <div class="button_head btn_exito_head">
      <a href="{{url('contacto')}}">

        <span class="dfx_btn_head btn_exito">CONTÁCTANOS<img src="{{asset('images/dfx_arrow.png')}}" alt="Arrow rigth"></span>
      </a>
    </div>
  </div>
</div>
</section>
