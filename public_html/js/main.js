
(function() {

  var common = (function () {

    var settings =  {
      widthBrowser:$(window).width(),
      height: $(window).height()
    }

    var contactoMenu  = {
      visible: false,
      start: function(){
        $(".dfx_envolpe").click(function(e){
          e.preventDefault();
          if(!contactoMenu.visible){
            contactoMenu.show();
          }else{
            contactoMenu.hide();
          }
        });
      },
      show: function(){

        if(menuHome.colapsado){
          menuHome.hide();
        }
        contactoMenu.visible = true;
        $(".contacto_content").show("slide", { direction: "right" }, 500);
        if(settings.widthBrowser >= 769){
          $(".dfx_menu_bars span").addClass("white");
          menuHome.menuWhite = true;
        }

        if(menuHome.menuWhite && settings.widthBrowser <= 769){
          $(".dfx_menu_bars span").removeClass("white");
          menuHome.menuWhite = false;
        }
      },
      hide:function(){
        contactoMenu.visible = false;
        $(".contacto_content").hide("slide", { direction: "right" }, 500);

        if(!menuHome.menuWhite){
          $(".dfx_menu_bars span").removeClass("white");
          menuHome.menuWhite =  false;
        }

        if(menuHome.menuWhite && settings.widthBrowser <= 769){
          $(".dfx_menu_bars span").addClass("white");
          menuHome.menuWhite = true;
        }

        if(!menuHome.menuWhite && $(window).scrollTop() >= 35){
          $(".dfx_menu_bars span").addClass("white");
          menuHome.menuWhite = true;
        }

        if(menuHome.menuWhite){
          $(".dfx_menu_bars span").removeClass("white");
          menuHome.menuWhite = false;
        }


      }
    }

    // solo si el menu ya paso a blanco

    var menuHome = {
      menuWhite: false,
      colapsado:false,
      start: function(){
        $(".dfx_menu_bars").click(function(){
          if(!menuHome.colapsado){
            menuHome.show();
          }else{
            menuHome.hide();
          }
        });
      },show:function(){
        if(contactoMenu.visible){
          contactoMenu.hide();
        }
        $(".menu").slideDown("slow", function(){
          if(!menuHome.colapsado){
            $(".dfx_menu_bars span").addClass("white");
            menuHome.menuWhite = true;
          }
          menuHome.colapsado = true;
        });
      },hide: function(){

        $(".menu").slideUp("slow", function(){
          if(menuHome.menuWhite && !contactoMenu.visible){
            $(".dfx_menu_bars span").removeClass("white");
            menuHome.menuWhite = false;
          }
          menuHome.colapsado =  false;
        });
      }
    }

    // objeto para el scroll

    var scrollActions = {
      tarjetas: function(position){
        // tarjetas de sevicios
        if(position >= 200){
          $(".dfx_card").slideDown();
        }else{
          $(".dfx_card").slideUp();
        }
      },
      progressBar: function(){

        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myProgress").style.height = scrolled + "%";

      },
      mobile: function(widthBrowser, position){
        if(position >=35){

          if(!menuHome.menuWhite && (!contactoMenu.visible)){
            $(".dfx_menu_bars span").addClass("white");
            menuHome.menuWhite = true;
          }

          $(".logo_content_top").addClass("dfx_menu");
          $(".dfx_logo").html('<img class="img_logo" src="http://difraxion.com/sitios/difraxion-2019//assets/img/dfx_logo_inverse.png" alt="Logo blanco">');
          menuHome.menuWhite = true;
        }else{

          if(!menuHome.colapsado && (!contactoMenu.visible)){
            $(".dfx_menu_bars span").removeClass("white");
          }
          $(".logo_content_top").removeClass("dfx_menu");
          $(".dfx_logo").html('<img class="img_logo" src="http://difraxion.com/sitios/difraxion-2019//assets/img/dfx_logo.png" alt="Logo">');
          menuHome.menuWhite = false;
        }
      },
      desktop:function(widthBrowser, position){

        var scrollBlack = $(".dfx_sec_exito").offset().top;
        var sectionH =  $(".dfx_sec_exito").height();
        var end  = (scrollBlack + sectionH);

        if(position >= (scrollBlack - 50) && position <= end){
          $(".dfx_logo").html('<img class="img_logo" src="http://difraxion.com/sitios/difraxion-2019//assets/img/dfx_logo_inverse.png" alt="Logo">');
          $(".dfx_menu_bars").addClass("white");
          menuHome.menuWhite = true;
        }else{
          $(".dfx_logo").html('<img class="img_logo" src="http://difraxion.com/sitios/difraxion-2019/assets/img/dfx_logo.png" alt="Logo">');
          if(!menuHome.colapsado && (!contactoMenu.visible)){
            $(".dfx_menu_bars").removeClass("white");
          }
          menuHome.menuWhite = false;
        }

      },
      start: function(){

        $(window).on("scroll", function(){

          scrollActions.tarjetas($(this).scrollTop());
          scrollActions.progressBar();

          if(settings.widthBrowser <= 769){
            // accion del menu para moviles
            scrollActions.mobile(settings.widthBrowser, $(this).scrollTop());

          }else{
            // accion del menu para escritorio
            scrollActions.desktop(settings.widthBrowser, $(this).scrollTop());

          }
        });
      }
    }

    var menu_responsivo = function() {
      $('.fa-bars').on('click', function(){
        $('nav').slideToggle();
        $('nav ul li ul').slideUp();
      });
    };

    var submenu_responsivo = function() {
      $('nav ul li').on('click', function(){
        //$('nav ul li ul').slideUp();
        var submenu = $(this).find('ul');
        submenu.slideToggle();
      });
    };

    var smooth = function(){
      $('a.smooth').on('click', function(e) {
        var $link = $(this);
        var anchor  = $link.attr('href');
        var top = $(anchor).offset().top;
        $('html, body').stop().animate({
          scrollTop: top
        }, 1000);
        return false;
      });
    };

    var carrusel = function(){
      $(window).load(function() {
        var elementos = $(".slides");
        var num = (elementos.length/2);
        for (var i = 1; i <= num; i++) {
          $('#carousel'+i).flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'+i
          });

          $('#slider'+i).flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"+i
          });
        };
      });
    };

    var switch_planta = function(){
      $('.switch-planta').on('click', function(e) {
        $.each($(".planta"), function(i, obj) {
          if($(this).hasClass('activo')){
            $(this).removeClass('activo');
          }else{
            $(this).addClass('activo');
          }
        });
      });
    };

    var initialize = function () {
      smooth();

      if($( window ).width() <= 479 ){
        menu_responsivo();
        submenu_responsivo();
      }
      switch_planta();

      AOS.init();
      contactoMenu.start();
      menuHome.start();
      scrollActions.start();

    };

    return {
      init: initialize
    };
  })();

  common.init();
}).call(this);
