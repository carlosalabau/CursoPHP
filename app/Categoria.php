<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cursos;

class Categoria extends Model
{
    public function cursos(){
        return $this->hasMany(Cursos::class);
    }
}
