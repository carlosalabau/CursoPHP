<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Cursos extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
