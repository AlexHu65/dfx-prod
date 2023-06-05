<?php

namespace App\Mail;

use App\Models\Cita;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CitasMail extends Mailable
{
  use Queueable, SerializesModels;

  public $mensaje;

  public function __construct(Cita $mensaje){
    $this->mensaje = $mensaje;
  }


  public function build(){
    $bcc = ['andrea.gonzalez@difraxion.com','alejandro@difraxion.com' , 'elba@difraxion.com' , 'e.enriquez@difraxion.com' , 'david.enriquez@difraxion.com'];
    return $this->from($this->mensaje->email)
    ->view('emails.citas')
    ->bcc($bcc)
    ->subject('Mensaje Enviado desde la web de ' . setting('site.title'))
    ;
  }
}
