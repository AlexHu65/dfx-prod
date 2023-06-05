<!doctype html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQPKNN6');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="{{setting('site.google-site-verification')}}" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="{{(isset($description) ? $description : setting('site.description'))}}">
<meta name="keywords" content="{{(isset($keywords) ? $keywords : setting('site.keywords'))}}">
<meta name="author" content="Difraxion">
<meta name="robots" content="all">
<meta name="geo.placename" content="México">
<meta name="csrf-token" content="{{csrf_token()}}" />
<meta property="og:type" content="website">
<meta property="og:title" content="{{(isset($titulo) ? $titulo : setting('site.title'))}}">
<meta property="og:description" content="{{(isset($description) ? $description : setting('site.description'))}}">
<meta property="og:image" content="{{(isset($imagen) ? asset('storage/') . $imagen : asset('storage/' . setting('site.logo') ))}}">
<meta property="og:image:alt" content="{{(isset($titulo) ? $titulo : setting('site.title'))}}">
<meta property="og:site_name" content="{{setting('site.nombre')}}">
<meta property="og:url" content="{{setting('site.url')}}">
@include('partials.assets')
<link rel='shortcut icon' type='image/x-icon' href='{{asset('images/icon.png')}}'/>
<title> {{setting('site.title')}} |  @yield('title') {{(isset($keywords) ? $keywords : setting('site.keywords'))}}</title>
<!-- analytics de google -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', '{{setting('site.google_analytics_tracking_id')}}');
</script>
<!--
Este sitio ha sido desarrollado por Difraxion Group.
Tel. +52 01 (477) 198 09 65
E-mail: ventas@reed.com.mx
www.difraxion.com
León, Guanajuato
-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://maps.google.com/maps/api/js"></script>
<script src="{{asset('js/gmaps.js')}}"></script>
<script>var w=window;var p = w.location.protocol;if(p.indexOf("http") < 0){p = "http"+":";}var d = document;var f = d.getElementsByTagName('script')[0],s = d.createElement('script');s.type = 'text/javascript'; s.async = false; if (s.readyState){s.onreadystatechange = function(){if (s.readyState=="loaded"||s.readyState == "complete"){s.onreadystatechange = null;try{loadwaprops("27218d28c96aa859e2783d9a824b39132","27e13762499bb7e686a73058460b2a736","2fd56bb2c04d7121daf6c098dedb76fa75e7f6457ad916fb8","27fa68c708691151dccf59fe0f943bdc5","0.0");}catch(e){}}};}else {s.onload = function(){try{loadwaprops("27218d28c96aa859e2783d9a824b39132","27e13762499bb7e686a73058460b2a736","2fd56bb2c04d7121daf6c098dedb76fa75e7f6457ad916fb8","27fa68c708691151dccf59fe0f943bdc5","0.0");}catch(e){}};};s.src =p+"//marketinghub.zoho.com/hub/js/WebsiteAutomation.js";f.parentNode.insertBefore(s, f);</script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
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
  .dfx_logo_hidden{
    position: fixed;
    padding: 17px;
    left: -20%;
    transition: .5s ease all !important;
    z-index: 10 !important;
  }
  .dfx_logo{
    transition: .5s ease all !important;
    left: 0%;
  }
  .pointer{
    cursor: pointer;
  }
  .videos-content{
    z-index: 100000 !important;
  }
  .video-container{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .video-container video{
    max-height: 550px !important;
  }  
</style>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQPKNN6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="videos-content">

    <div class="text-center mt-3">
      <span class="fa-stack pointer btn-close-video">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fas fa-times fa-stack-1x fa-inverse"></i>
      </span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col p-3">
          <div class="video-container">
            <video id="videoDfx" src="{{asset('videos/dfx.mp4')}}">
            </video>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="app">
    <header id="header">
      <div class="dfx_logo_hidden">
        <a href="{{url('/')}}">
          <img style="width:50px;" src="{{asset('images/icon.png')}}" alt="Difraxion">
        </a>
      </div>
      @include('partials.menu')
    </header>
    <main>
      @yield('content')
    </main>

    @if(!isset($blog))
    @include('partials.contacto')
    @endif

    @include('partials.footer')
    @include('partials.scripts')
    <script type="text/javascript">
    var videos =  false;
    $(".btn-video").on('click', function(){
      $(".videos-content").slideDown("slow");
      $('#videoDfx').get(0).play();
      videos = true;
      if(videos){
        $(".btn-close-video").on('click', function(){
          $(".videos-content").slideUp("slow");
          $('#videoDfx').get(0).pause();
          videos = false;
        });
      }
    });

    $("#videoDfx").on('ended', function(){
      $(".videos-content").slideUp("slow");
      videos = false;
    });

    ajaxValidationCallback = function(status, form, json, options) {
      if (window.console) {
        console.log(status);
      }
      if (status === true) {

        $('#btnSubmit').hide(500);
        $(".loading").addClass('dn');
        $(".msg").removeClass('dn');
        $(".msg").html(json.msg);
      }else{
        $('#btnSubmit').show(500);
        $(".loading").addClass('dn');
        $(".msg").removeClass('dn');
        $(".msg").html(json.error);

      }
      return false;
    };

    var validateForm = function() {
      jQuery("#frm-comentario").validationEngine('attach',{
        ajaxFormValidation: true,
        ajaxFormValidationMethod: 'post',
        onAjaxFormComplete: ajaxValidationCallback,
        onFailure: function(status, form, json, options){
          console.log("status:" , status);
          console.log("form:" , form);
          console.log("json:" , json);
          console.log("option:" , options);
        }
      });
      return false;
    };

    validateForm();



    $(".pdf-cta").on('click', function(e){
      e.preventDefault();
      $('#modalForm').modal('show');
      var pdf = $(this).attr('href');
      $("#pdfHidden").val(pdf);
    });


    $('#frm-cita').validationEngine();
    $('#frm-cita').submit(function (e) {
      $('#btnSubmit2').hide(500);
      $('.loading').show(500);
      e.preventDefault();

      var dataString = $("#frm-cita").serialize();

      $.ajax({
        type: "POST",
        url: url + "/api/captcha",
        data: dataString,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (resp) {
          if (resp.error) {
            grecaptcha.reset();
            $('#btnSubmit2').show(500);
            $(".loading").addClass('dn');
            $(".msg").show();
            $(".msg").html(resp.error);
          }
          if (resp.mensaje) {
            $.ajax({
              type: "POST",
              url: url + "/contacto",
              data: dataString,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (data) {
                if (data.msg) {


                } else if (data.error) {
                  grecaptcha.reset();
                  $('#btnSubmit2').show(500);
                  $(".loading").addClass('dn');

                }
                if(data.tnk){
                 // window.location.href = $("#pdfHidden").val();
                  window.open($("#pdfHidden").val(), '_blank');
                  $(".loading").hide(500);
                }
              },error:function(error){
                console.log(error);
              }
            });
          }
        }
      });    });

      $(window).on("scroll", function(){
        var settings =  {
          widthBrowser:$(window).width(),
          height: $(window).height()
        }
        if(settings.widthBrowser >= 769){
          if($(this).scrollTop() > 205){
            $(".dfx_logo").css({'left' : '-40%'});
            $(".dfx_logo_hidden").css({'left' : '0%'});
          }else{
            $(".dfx_logo").css({'left' : '0%'});
            $(".dfx_logo_hidden").css({'left' : '-20%'});

          }
        }
      });

      </script>
    </div>
  </body>
  </html>
