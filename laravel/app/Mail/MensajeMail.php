<?php

namespace App\Mail;

use App\Models\Mensaje;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajeMail extends Mailable
{
  use Queueable, SerializesModels;

  public $mensaje;

  public function __construct(Comentario $mensaje){
    $this->mensaje = $mensaje;
  }


  public function build(){
    $bcc = ['andrea.gonzalez@difraxion.com','alejandro@difraxion.com' , 'elba@difraxion.com' , 'e.enriquez@difraxion.com' ,'david.enriquez@difraxion.com'];
    return $this->from($this->mensaje->email)
    ->view('emails.comentario')
    ->bcc($bcc)
    ->subject('Mensaje Enviado desde la web de ' . setting('site.title'))
    ;
  }
}
