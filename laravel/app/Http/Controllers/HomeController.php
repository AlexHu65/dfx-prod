<?php

namespace App\Http\Controllers;

// request
use App\Http\Requests\MensajeRequest;
use App\Http\Requests\CitaRequest;

// Modelos
use App\Models\Mensaje;
use App\Models\Cita;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Seccion;

use Illuminate\Http\Request;

// email
use Illuminate\Support\Facades\Mail;
use App\Mail\CitasMail;


class HomeController extends Controller
{

  public function index(){

    return view('home.index');
  }

  public function digital(){
    $parametros = [
      'menu2' => true,
      'titulo' => 'Marketing digital | Difraxion Group',
      'description' => 'Nuestras estrategias de marketing digital llevan el anuncio indicado de tu marca a la audiencia correcta. Contáctanos.',
      'keywords' => 'Marketing digital, Agencia de Marketing digital, estrategias de marketing digital, Estrategias de Social Media, Inbound Marketing, SEO, SEM, e-mailing, diseño web, e-Commerce, RP digital, Social Listening
      Marketing digital en León GTO, Agencia de Marketing digital León GTO, estrategias de marketing digital León GTO, Estrategias de Social Media León GTO, Inbound Marketing León GTO, diseño web León GTO, e-Commerce León GTO, RP digital León GTO
      '
    ];
    return view('digital.index' , $parametros);
  }

  public function brandwatch(){

    $parametros = [
      'menu4' => true,
      'titulo' => 'Brandwatch | Difraxion Group',
      'description' => 'Nuestro servicio de social listening facilita la generación de estrategias y la prevención de crisis de marca. Contáctanos.',
      'keywords' => 'brandwatch, social listening, escucha social, listening social media, marketing con influencers, gestión de crisis'
    ];

    return view('brandwatch.index' , $parametros);

  }

  public function laboratorio(){
    $parametros = [
      'menu3' => true,
      'titulo' => 'Laboratorio creativo | Difraxion Group',
      'keywords' => 'Producción audiovisual, agencia análisis de mercado, agencia diagnóstico de marca, diseño de imagen corporativa, diseñadores de empaques, agencia diseño editorial, diseño editorial Leon GTO, agencia diseño publicitario, diseño publicitario Leon GTO, diseñadores de empaques, empresa de diseño grafico, diseño grafico en Leon GTO, productora audiovisual Leon GTO, productora de video Leon GTO, produccion de videos corporativos, agencia de diseño grafico Leon GTO, diseño de identidad corporativa',
      'description' => 'Somos una agencia creativa y audiovisual que propone lo inusual siempre que sea funcional. Contáctanos.',
      'inverse' => true
    ];
    return view('laboratorio.index', $parametros);
  }

  public function blog(){
    $destacado = Noticia::where(['activo' => '1'])->orderBy('created_at' , 'desc')->first();
    $noticias = Noticia::where(['activo' => '1' , ['id', '!=' , $destacado->id]])->orderBy('created_at' , 'desc')->get();

    $parametros = [
      'menu5' => true,
      'destacado' => $destacado,
      'noticias' => $noticias
    ];
    return view('blog.index', $parametros);
  }

  public function blogCategoria(Request $request){

    $categoria = Categoria::where(['activo' => '1' , 'slug' => $request->categoria])->first();
    $noticias = Noticia::where(['activo' => '1' , 'id_categoria' => $categoria->id])->get();

    if(!$noticias || !$categoria){
      return redirect('blog');
    }

    $parametros = [
      'noticias' => $noticias,
      'titulo' => $categoria->nombre,
    ];
    return view('blog.categorias', $parametros);
  }

  public function blogTags(Request $request){

    $noticias = Noticia::where(['activo' => '1' , ['bullet' , 'like' , $request->tags]])->get();

    if(!$noticias){
      return redirect('blog');
    }
    $parametros = [
      'noticias' => $noticias,
    ];
    return view('blog.categorias', $parametros);
  }

  public function blogInterior(Request $request){

    $noticia = Noticia::where(['activo' => '1' , 'slug' => $request->slug])->first();
    if(!$noticia){
      return redirect('blog');
    }
    // get next user id
    $next = Noticia::where('id', '>', $noticia->id)->first();
    if(!$next){
      $next = Noticia::where('id', '<', $noticia->id)->first();
    }
    $parametros = [
      'noticia' => $noticia,
      'titulo' => $noticia->titulo,
      'description' => $noticia->description,
      'siguiente' => $next,
      'imagen' => $noticia->img,
      'blog' => true
    ];
    return view('blog.interior', $parametros);
  }

  public function recursos(Request $request){

    $recurso = Seccion::where(['activo' => '1' , 'slug' => $request->slug])->first();

    if(!$recurso){
      return redirect('home');
    }
    // get next user id
    
    $parametros = [
      'recurso' => $recurso,
      'titulo' => $recurso->titulo,
      'description' => $recurso->descripcion,
      'imagen' => $recurso->img,
      'blog' => true
    ];
    return view('recursos.index', $parametros);

  }

  public function digitalSignage(){
    $parametros = [
      'menu1' => true,
      'titulo' => 'Digital Signage| Difraxion Group',
      'description' => 'Conecta con tu audiencia mediante nuestra solución integral de digital signage. Lleva tu comunicación al siguiente nivel.Agenda una cita.',
      'keywords' => 'digital signage, señalización digital, Cayin, Pantallas digitales publicitarias, kioscos interactivos, totem interactivo, contenido interactivo, Gestor de contenidos
      digital signage Leon GTO, señalización digital Leon GTO, Cayin Mexico, Pantallas digitales publicitarias GTO, kioscos interactivos GTO, totem interactivo GTO',
      'inverse' => true
    ];
    return view('signage.index', $parametros);
  }

  public function contacto(){
    return view('contacto.index', ['menu6' => true,'dn' => true]);
  }
  public function eventos(){
    return view('eventos.index', ['menu6' => true,'dn' => true]);
  }
  public function thankyou(){
    return view('tnk.index',['dn' => true,'msg' => 'Gracias por ponerte en contacto con nosotros. Uno de nuestros ejecutivos se comunicará contigo']);
  }


  // request solo para mensajes del formulario digital
  public function sendCita(CitaRequest $request){
    $cita = new Cita;
    $cita->nombre = $request->input('txtNombre');
    $cita->apellidos = $request->input('txtApellido');
    $cita->email = $request->input('txtEmail');
    $cita->telefono = $request->input('txtTelefono');
    $cita->web = $request->input('txtWeb');
    $cita->empresa = $request->input('txtEmpresa');
    $cita->servicio = $request->input('txtServicio');
    $cita->nosotros = (!empty($request->input('txtOtro')) ? $request->input('txtOtro') : $request->input('txtNosotros'));
    $cita->mensaje = $request->input('txtAyuda');

    if($cita->save()){
      // enviamos notificacion de email
      Mail::to(setting('site.correo'))->send(new CitasMail($cita));
      // enviamos respuesta al cliente
      return response(['msg'=>'Tu Comentario ha sido enviado.' , 'tnk' => 'Gracias']);
    }
    return response(['error'=>'Error al enviar tu mensaje']);
  }
}
