<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
  protected $table = "noticias";

  public function categoria(){
    return $this->BelongsTo('App\Models\Categoria' , 'id_categoria');
  }

}
